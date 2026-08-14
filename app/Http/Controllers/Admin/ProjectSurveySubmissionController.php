<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectSurveySubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectSurveySubmissionController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search', ''));
        $project = trim((string) $request->query('project', ''));

        $submissions = ProjectSurveySubmission::query()
            ->when($project !== '', fn ($query) => $query->where('project_slug', $project))
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($inner) use ($search) {
                    $inner
                        ->where('full_name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('organization', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('country', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $projects = ProjectSurveySubmission::query()
            ->select('project_slug', 'project_name')
            ->distinct()
            ->orderBy('project_name')
            ->get();

        $stats = [
            'total' => ProjectSurveySubmission::count(),
            'flexicare' => ProjectSurveySubmission::where('project_slug', 'flexicare')->count(),
            'countries' => ProjectSurveySubmission::whereNotNull('country')->distinct('country')->count('country'),
            'latest' => optional(ProjectSurveySubmission::latest()->first())->created_at,
        ];

        return view('admin.surveys.index', compact('submissions', 'projects', 'stats', 'search', 'project'));
    }

    public function show(ProjectSurveySubmission $submission): View
    {
        return view('admin.surveys.show', compact('submission'));
    }

    public function destroy(ProjectSurveySubmission $submission): RedirectResponse
    {
        $submission->delete();

        return redirect()
            ->route('surveys.admin.index')
            ->with('status', 'Survey submission removed successfully.');
    }
}
