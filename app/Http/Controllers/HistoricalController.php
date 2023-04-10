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

    public function addBookHistorical_page()
    {
        return view('historical.addHistoricalBook');
    }
    public function addBookHistorical_store( Request $request )
    {
        $historicalBook = genreHistorical::create($request->except('_token', 'addBookHistorical'));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("img/buku/", $request->file("image")->getClientOriginalName());
            $historicalBook -> image = $request -> file("image")->getClientOriginalName();
            $historicalBook -> save();
        }

        return redirect('/Readteracy/genre/Historical');
    }

    public function destroy_book($id)
    {
        $historicalBook = genreHistorical::find($id);
        $historicalBook->delete();
        return redirect('/Readteracy/genre/Historical');
    }
}
