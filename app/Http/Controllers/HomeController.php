<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ticket;
use Carbon\Carbon;
use App\Selectaseat;
use App\Ticketweb;
use App\Upcome;
use App\Etix;
use App\Eventbrite;
use App\Flyticket;
 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Selectaseat::first()->paginate(6);
        $custom_ticket = Ticket::get()->count();
        $selectaseat = Selectaseat::get()->count();
        $ticketweb = Ticketweb::get()->count();
        $etix = Etix::get()->count();
        $eventbrite = Eventbrite::get()->count();
        $upcome = Upcome::get()->count();
        $flyticket = Flyticket::where('sold_out', 'NOT LIKE', '%ree%')->count();

        $sold_out =  Eventbrite::where('sold_out', 'LIKE', '%s%' )->limit(10)->get();

        $total_count = $custom_ticket + $flyticket + $selectaseat + $ticketweb + $etix + $eventbrite + $upcome;

        // $total_cost = Ticket::get()->sum('price');
        $total = Eventbrite::get('price');
        $total_cost = Eventbrite::where('sold_out', 'LIKE', '%s%' )->get()->count();
         
        

        $today_count = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->count();
        $today_cost = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->sum('price');
 
        
        return view('home',compact('data', 'total_count', 'sold_out', 'total_cost', 'custom_ticket', 'upcome', 'today_count','today_cost'));
 
    }
}
