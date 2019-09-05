<!DOCTYPE html>
<html>
<head>
    <title>Ticket Business</title>
</head>
<body>
    <div class="">
        <div class="row">
            <div class="col-md-3">
                <img src="https://www.joeygrattonchampionship.com/wp-content/uploads/2016/03/raffle-ticket.jpg" alt="" width="20%">
            </div>
            <div class="col-md-3">
                <h1 style="font-family:cursive">Business Ticket</h1>
            </div>
        </div>
        <h2 style="font-family:cursive">Sold Out Tickets : {{$data['count']}} </h2>
        @forelse($data['tickets'] as $ticket)
            <div>
                <h3 style="font-family:cursive">{{ str_replace("'","", $ticket->name) }}</h3>
                <div class="">
                    <a href="{{ str_replace("'","", $ticket->link)}}">
                        <span style="font-family:cursive">Ticket Price: ${{ str_replace("'","", $ticket->price) }}</span>,
                        <span style="font-family:cursive">Sales Date: {{ str_replace("'","", $ticket->address) }}</span>,
                        <p style="font-family:cursive;color:red;font-size:25px">Ticket status: {{ str_replace("'","", $ticket->sold_out) }}</p>
                        <p style="font-family:monospace">{{ str_replace("'","", $ticket->date) }}</p>
                        <img src="{{ str_replace("'", "", $ticket->small_img) }}" class="img-thumbnail" width="75" />
                    </a>
                </div>
            </div>
        @empty
 
        @endforelse
    </div>
</body>
</html>