<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genreEducation;

class EducationController extends Controller
{
    //
    public function viewPage_education()
    {
        $educationBook = genreEducation::all();
        return view('education.showEducation', compact(['educationBook']));
    }
}
