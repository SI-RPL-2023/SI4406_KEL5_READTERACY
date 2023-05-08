<?php

namespace App\Http\Controllers;
use App\Models\genreEducation;
use App\Models\genreHistorical;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function catalogue_page()
    {
        $historicalBook = genreHistorical::all();
        // $educationBook = genreEducation::all();
        return view('book.catalogue', compact(['historicalBook']));
    }
}
