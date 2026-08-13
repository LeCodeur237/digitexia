<?php

namespace App\Http\Controllers;

use App\Models\ProjectSurveySubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProjectSurveyController extends Controller
{
    private array $projects = [
        'flexicare' => [
            'name' => 'Flexicare',
            'title' => 'Flexicare Registration',
            'eyebrow' => 'Flexicare',
            'headline' => 'A smart services platform connecting clients with qualified independent providers.',
            'intro' => 'Flexicare connects businesses, individuals and qualified service providers. It supports mission management, service tracking, secure payments, performance evaluation and the professionalization of independent workers.',
        ],
    ];

    public function create(string $project = 'flexicare'): View
    {
        $surveyProject = $this->resolveProject($project);

        return view('pages.project-survey', [
            'project' => $surveyProject,
        ]);
    }

    public function store(Request $request, string $project = 'flexicare'): RedirectResponse
    {
        $surveyProject = $this->resolveProject($project);

        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:140'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:60'],
            'organization' => ['nullable', 'string', 'max:160'],
            'role' => ['nullable', 'string', 'max:120'],
            'city' => ['nullable', 'string', 'max:120'],
            'country' => ['nullable', 'string', 'max:120'],
            'participant_type' => ['required', 'string', 'max:120'],
            'sector' => ['nullable', 'string', 'max:120'],
            'current_challenges' => ['nullable', 'string', 'max:5000'],
            'expected_features' => ['nullable', 'string', 'max:5000'],
            'deployment_context' => ['nullable', 'string', 'max:5000'],
            'contact_preference' => ['nullable', 'string', 'max:80'],
            'consent' => ['accepted'],
        ]);

        ProjectSurveySubmission::create([
            ...$data,
            'project_slug' => $surveyProject['slug'],
            'project_name' => $surveyProject['name'],
            'consent' => $request->boolean('consent'),
            'ip_address' => $request->ip(),
            'user_agent' => Str::limit((string) $request->userAgent(), 1000, ''),
        ]);

        return back()->with('survey_success', __('Thank you. Your registration has been saved successfully.'));
    }

    private function resolveProject(string $project): array
    {
        $slug = Str::slug($project);
        $data = $this->projects[$slug] ?? [
            'name' => Str::headline($slug),
            'title' => Str::headline($slug) . ' Registration',
            'eyebrow' => Str::headline($slug),
            'headline' => 'A DigiTexia project designed around real field needs.',
            'intro' => 'Share your experience and expectations so the project can be shaped around real operational conditions.',
        ];

        return ['slug' => $slug, ...$data];
    }
}
