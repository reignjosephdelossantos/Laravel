<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('objective');
            $table->json('skills_design'); // Using JSON for skill sets
            $table->json('skills_problem_solving');
            $table->json('skills_management');
            $table->json('certifications');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->json('additional_skills');
            $table->json('education');
            $table->json('work_history');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
