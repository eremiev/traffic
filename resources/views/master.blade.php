<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traffic</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <!-- Theme -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico"
          href="https://www.google.bg/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjimfWJxuLPAhUIzRQKHR6aCGEQjRwIBw&url=https%3A%2F%2Fwww.iconfinder.com%2Ficons%2F629818%2Fcop_crime_emergency_law_officer_police_traffic_icon&bvm=bv.135974163,d.bGs&psig=AFQjCNEIlxbYGhpR348XCPFSSwL0CHGJDQ&ust=1476818043792663"/>
<style>
    body, html, {
        height: 100%;
    }
</style>
</head>
<body>
@include('_header')

<div class="container">
    @yield('content')
</div>
{{--@include('web._footer')--}}

<!-- Theme -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


</body>
</html>
