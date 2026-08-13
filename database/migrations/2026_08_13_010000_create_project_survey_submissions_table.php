<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_survey_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('project_slug')->index();
            $table->string('project_name');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 60)->nullable();
            $table->string('organization')->nullable();
            $table->string('role')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('participant_type')->nullable();
            $table->string('sector')->nullable();
            $table->text('current_challenges')->nullable();
            $table->text('expected_features')->nullable();
            $table->text('deployment_context')->nullable();
            $table->string('contact_preference')->nullable();
            $table->boolean('consent')->default(false);
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_survey_submissions');
    }
};
