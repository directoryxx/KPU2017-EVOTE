<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Voting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <link href="{{ URL::asset('css/login.css') }}  " rel="stylesheet" id="bootstrap-css">
    <style>
    body{
      background: url({{url::asset('img/1497285.jpg')}});
    }

    </style>


    <script src="{{ URL::asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
  @yield('content')
</body>
</html>
