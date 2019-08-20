<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventbrite;

class EventbriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eventbrite::first()->paginate(12);
 
        
        $total_count = Eventbrite::get()->count();
        $last_ticket =  Eventbrite::where('sold_out', 'LIKE', '%s%' )->limit(1)->get();
     
        return view('ticket.eventbrite', compact('data', 'total_count','last_ticket'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function search(Request $request){
        $item = $request->item;
        $total_count = Eventbrite::get()->count();
        $last_ticket = Eventbrite::where('name', 'LIKE', "%{$item}%")->orwhere('sold_out', 'LIKE', "%{$item}%" )->orWhere('address', 'LIKE', "%{$item}%")->paginate(1);
        
        
        $data = Eventbrite::where('name', 'LIKE', "%{$item}%")->orwhere('sold_out', 'LIKE', "%{$item}%" )->orWhere('address', 'LIKE', "%{$item}%")->limit(100) ->get();
        return view('ticket.eventsearch', compact('data', 'total_count','last_ticket'));
         
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
        $data = Eventbrite::findOrFail($id);
        return view('ticket.vieweventbrite', compact('data'));
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
