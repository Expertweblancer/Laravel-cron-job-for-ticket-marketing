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
use Carbon\Carbon;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Selectaseat::first()->paginate(3);
        $custom_ticket = Ticket::get()->count();
        $selectaseat = Selectaseat::get()->count();
        $ticketweb = Ticketweb::get()->count();
        $etix = Etix::get()->count();
        $eventbrite = Eventbrite::get()->count();
        $upcome = Upcome::get()->count();

        $upcome_data = Upcome::first();
        $upcome_datas = Upcome::first()->paginate(4);
        $etix_data = Etix::latest()->paginate(1);
        $etix_datas = Etix::first()->paginate(6);
        $eventbrite_data = Eventbrite::first();
        $ticketweb_data = Ticketweb::first();
        $selectaseat_data = Selectaseat::first();
        $custom_data = Ticket::first();
        
        $eventbrite_datas = Eventbrite::first()->paginate(4);

        $total_count = $custom_ticket + $selectaseat + $ticketweb + $etix + $eventbrite + $upcome;

        $total_cost = Ticket::get()->sum('price');

        $today_count = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->count();
        $today_cost = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->sum('price');
 
        
        return view('statistics',compact('upcome_data', 'etix_datas', 'upcome_datas', 'eventbrite_datas', 'custom_data','etix_data','eventbrite', 'ticketweb', 'etix', 'eventbrite_data','ticketweb_data', 'selectaseat_data', 'data', 'total_count','total_cost', 'custom_ticket', 'upcome', 'today_count','today_cost'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
