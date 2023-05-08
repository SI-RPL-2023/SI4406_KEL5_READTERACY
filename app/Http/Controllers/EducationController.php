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

    public function addBookEducation_page()
    {
        return view('education.addEducationBook');
    }

    public function addBookEducation_store( Request $request )
    {
        $educationBook = genreEducation::create($request->except('_token', 'addBookEducation'));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("img/buku/", $request->file("image")->getClientOriginalName());
            $educationBook -> image = $request -> file("image")->getClientOriginalName();
            $educationBook -> save();
        }

        return redirect('/Readteracy/genre/Education');
    }
}
