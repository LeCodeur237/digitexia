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
            'headline' => 'A trusted digital platform connecting households with care and domestic professionals.',
            'intro' => 'FlexiCare is designed to make it easier and safer for households to find qualified professionals for childcare, domestic support, housekeeping, elderly care and everyday household services.',
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
            'phone_country_code' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:60'],
            'organization' => ['required', 'string', 'max:160'],
            'role' => ['required', 'string', 'max:120'],
            'country' => ['required', 'string', 'max:120'],
            'city' => ['required', 'string', 'max:120'],
            'participant_type' => ['required', 'string', 'max:120'],
            'sector' => ['required', 'string', 'max:120'],
            'current_challenges' => ['required', 'string', 'max:5000'],
            'expected_features' => ['required', 'string', 'max:5000'],
            'deployment_context' => ['required', 'string', 'max:5000'],
            'contact_preference' => ['required', 'string', 'max:80'],
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
