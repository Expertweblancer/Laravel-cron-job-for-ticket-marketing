<?php

namespace App\Http\Controllers;
use App\Flyticket;
use Illuminate\Http\Request;

class FlyticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Flyticket::first()->where('sold_out', 'NOT LIKE', '%ree%')->paginate(12);
 
        
        $total_count = Flyticket::where('sold_out', 'NOT LIKE', '%ree%')->count();
        $last_ticket =  Flyticket::where('sold_out', 'LIKE', '%sold%' )->limit(1)->get();
     
        return view('ticket.flyticket', compact('data', 'total_count','last_ticket'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
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

    public function search(Request $request){
        $item = $request->item;
        $total_count = Flyticket::where('name', 'LIKE', "%{$item}%")->orwhere('sold_out', 'LIKE', "%{$item}%" )->orWhere('address', 'LIKE', "%{$item}%")->count();
        $last_ticket = Flyticket::where('name', 'LIKE', "%{$item}%")->orwhere('sold_out', 'LIKE', "%{$item}%" )->orWhere('address', 'LIKE', "%{$item}%")->paginate(1);
        
        
        $data = Flyticket::where('name', 'LIKE', "%{$item}%")->orwhere('sold_out', 'LIKE', "%{$item}%" )->orWhere('address', 'LIKE', "%{$item}%")->limit(100) ->get();
        return view('ticket.flyticketsearch', compact('data', 'total_count','last_ticket'));
         
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
