<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{@csrf_token()}}">
    <title>NRI Web dev Challenge</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div id="app"></div>

<script defer src="{{asset('js/app.js')}}"></script>
</body>
</html>
