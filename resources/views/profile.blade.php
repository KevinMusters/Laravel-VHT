<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        html{
            font-family: "Segoe UI", sans-serif;
        }
        body{
            margin: 0;
            background: rgb(255, 0, 0);
        }
        body.is-adult{
            background: green;
        }
        h2{
            border-bottom: 3px solid black;
            font-size: 2.5em;
            margin-top: 0;
            padding: 20px 0 0 0;
            width: auto;
        }
        h4{
            font-size: 1em;
            white-space: pre-line;
        }
        .container{
            height: 90vh;
            width: 50%;
            margin: 50px auto 0 auto;
            text-align: center;
            border: 3px solid black;
            background: rgba(100, 100, 100, 0.3);
            border-radius: 100px 25px;
        }
    </style>
</head>
@if($age >= 18)
<body class="is-adult">
@else
<body>
@endif
    <div class="container">
        <h2>{{$name}}</h2>
        @if($age >= 18)
            <h4>Je bent volwassen</h4>
        @else
            <h4>Je bent NIET volwassen</h4>
        @endif
        <p>{{$description}}</p>
        <h4>Email:
            {{$email}}</h4>
        <ul>
            @foreach($interests as $interest)
                <li>{{$interest}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>