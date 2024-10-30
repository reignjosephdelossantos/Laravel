<?php

namespace App\Http\Controllers;

use App\Models\Resume; // Ensure you have the correct model imported
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function show($id)
    {
        $resume = Resume::findOrFail($id); // Use findOrFail to throw a 404 if not found
        return view('resume.index', compact('resume'));
    }
}
