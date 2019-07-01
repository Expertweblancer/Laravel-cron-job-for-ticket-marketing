<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selectaseat;
use App\Ticketweb;
use App\Upcome;
use App\Etix;
use App\Eventbrite;
use App\Ticket;
use App\users;

 

class SearchController extends Controller
{
    public function index()
    {
        $data = Eventbrite::first()->paginate(10);
        return view('pages.search', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function search(Request $request){
        $item = $request->item;
     
        $data = Eventbrite::where('name', 'LIKE', "%{$item}%")->orWhere('address', 'LIKE', "%{$item}%")->paginate(10);
        return view('pages.search', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }
}
