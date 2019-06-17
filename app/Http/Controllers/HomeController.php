<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ticket;
use Carbon\Carbon;

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
        $total_count = Ticket::get()->count();
        $total_cost = Ticket::get()->sum('price');
        $today_count = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->count();
        $today_cost = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->sum('price');
         $data = [
            'total_count' => $total_count,
            'total_cost' => $total_cost,
            'today_count' => $today_count,
            'today_cost' => $today_cost,
         ];
        
        return view('home',compact('total_count','total_cost','today_count','today_cost'));
 
    }
}
