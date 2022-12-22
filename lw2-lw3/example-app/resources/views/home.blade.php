<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name='viewport' content="width=device-width, initial-scaale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Laravel Додин</title>
</head>

<body>
  <svg width="100" height="100">
    <path stroke="lightseagreen" stroke-width="30" fill="turquoise" d="M 60,10
       h 20 v 90 h -10 v -60 h -50 z
       " />
  </svg>
  <div class="BlockSait wrap">
    <div class=" BlockSait1 block">{{ $Blockone }}<br>
      {{ $contentone }}
    </div>
    <div class="BlockSait2 block">{{ $Blocktwo}}<br>
      {{ $contenttwo }}
    </div>
    <div class="BlockSait3 block">{{ $Blockthree}}<br>
      {{ $contentthree }}
    </div>
    <div class="BlockSait4 block">{{ $Blockfore}}<br>
      {{ $contentfore }}
    </div>
  </div>
</body>

</html>