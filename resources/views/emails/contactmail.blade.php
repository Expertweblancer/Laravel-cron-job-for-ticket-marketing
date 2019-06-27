<!DOCTYPE html>
<html>
<head>
    <title>Ticket Business</title>
</head>
<body>
    <div class="">
        <div sytle="margin:auto">
            <img src="http://localhost:10085/img/black_logo.png" alt="">

        </div>

        <h2 style="font-family:cursive">I am {{$email['name']}}  </h2>
        <h3 style="font-family:cursive">{{$email['subject']}} </h3>
        <p style="font-family:cursive">{{$email['message']}} </p>
     
            
        <h4 style="font-family:cursive">Regards from {{$email['email']}} </h4>
        
    </div>
</body>
</html>