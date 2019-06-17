<!DOCTYPE html>
<html>
<head>
    <title>Ticket Business</title>
</head>
<body>
    <div class="">
        <div class="row">
            <div class="col-md-3">
                <img src="http://localhost:10085/img/ticket.png" alt="" width="20%">
            </div>
            <div class="col-md-3">
                <h1 style="font-family:cursive">Business Ticket</h1>
            </div>
        </div>
        <h2 style="font-family:cursive">Today Ticket Count: {{$data['count']}} ,Total Cost: ${{$data['price']}} </h2>
        @forelse($data['tickets'] as $ticket)
            <div>
                <h3 style="font-family:cursive">{{ $ticket->name }}</h3>
                <div class="">
                    <span style="font-family:cursive">Ticket Price: ${{ $ticket->price }}</span>,
                    <span style="font-family:cursive">Sales Date: {{ $ticket->sale_date }}</span>,
                    <span style="font-family:cursive">Resales Date: {{ $ticket->resale_date }}</span>
                    <p style="font-family:monospace">{{ $ticket->description}}</p>
                </div>
            </div>
        @empty
 
        @endforelse
    </div>
</body>
</html>