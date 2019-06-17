<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\users;


class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $tickets = Ticket::all();
         
       
        return view('ticket')->with('tickets',$tickets);
    }
    public function add(){
        $ticket = new Ticket;

        $ticket-> $request->all();

        $ticket->save();
    }
    public function edit($id){
        $id = $request->get('id');
        $user = Ticket::whereId($id)->first();
    }
    public function store(Request $request){
        $ticket = new Ticket;

        $ticket->name = $request->all();

        $ticket->save();
    }
    public function delete(Request $request, $id){
        Ticket::where('id', $id)->delete();
        return redirect()->back()
        ->with('message', 'User has been deleted!');
    }
}
