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

        $total_count = $custom_ticket + $selectaseat + $ticketweb + $etix + $eventbrite + $upcome;

        $total_cost = Ticket::get()->sum('price');

        $today_count = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->count();
        $today_cost = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->sum('price');
 
        
        return view('home',compact('data', 'total_count','total_cost', 'custom_ticket', 'upcome', 'today_count','today_cost'));
 
    }
}
