<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectSurveySubmission extends Model
{
    protected $fillable = [
        'project_slug',
        'project_name',
        'full_name',
        'email',
        'phone',
        'organization',
        'role',
        'city',
        'country',
        'participant_type',
        'sector',
        'current_challenges',
        'expected_features',
        'deployment_context',
        'contact_preference',
        'consent',
        'ip_address',
        'user_agent',
    ];

    protected function casts(): array
    {
        return [
            'consent' => 'boolean',
        ];
    }
}
