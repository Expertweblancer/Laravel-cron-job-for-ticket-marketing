<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Mail\Mailer;
use App\Ticket;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTicket;
use Carbon\Carbon;
use App\Etix;
// use App\Mail;

class RegisteredEtix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:etix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email of registered tickets';
     

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $count = Etix::where('sold_out', 'LIKE', '%s%' )->get()->count();
        $tickets = Etix::where('sold_out', 'LIKE', '%s%' )->limit(10)->get();
    //     BookingDates::where('email', Input::get('email'))
    // ->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
        // $tickets = Ticket::latest()->paginate(12);
        // $price = Ticket::get()->where('sale_date' , Carbon::now()->toDateString())->sum('price');
        $data = [
            'count' => $count,
            'tickets' => $tickets
            
        ];
        // $tickets =  Ticket::orderBy('id', 'desc')->take(5)->get();
         Mail::to('ticketdropper23@gmail.com')->send(new SendTicket($data));
    }
}
