<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scaale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <svg width="300" height="300">
        <path d="M 10 200
           L 110 215
           A 30 50 0 0 1 162.55 162.45
           L 172.55 152.45
           A 30 50 -45 0 1 215.1 109.9
           L 200 10" stroke="black" fill="purple" stroke-width="2" fill-opacity="0.5" />
    </svg>
    <div class="my_cats_breeds wrap">
        <div class=" my_cats_breed1 block">{{ $catone }}<br>
            {{ $discriptionone }}
        </div>
        <div class="my_cats_breed2 block">{{ $cattwo}}<br>
            {{ $discriptiontwo }}
        </div>
        <div class="my_cats_breed3 block">{{ $catthree}}<br>
            {{ $discriptionthree }}
        </div>
    </div>
</body>

</html>