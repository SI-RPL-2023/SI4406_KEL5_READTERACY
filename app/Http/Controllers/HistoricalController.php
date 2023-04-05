<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genreHistorical;

class HistoricalController extends Controller
{
    public function viewPage_historical()
    {
        $historicalBook = genreHistorical::all();
        return view('historical.showHistorical', compact('historicalBook'));
    }
}
