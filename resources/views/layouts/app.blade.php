<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>{{ $title or '1000 Subscribers - An Obstacle.co Course' }}</title>
        <meta name="description" content="{{ $description or '1,000 Subcribers and $1,000 in 90 days' }}">
        <link rel="icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/obstacleco-assets/wp-content/uploads/2016/06/30162432/dual-avatar-40px.png" data-pin-nopin="true">
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="https://use.typekit.net/tui3qtx.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        @yield('styles')
        @yield('headScripts')
    </head>
    <body class="">
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')
        <script src="/assets/js/site.js"></script>
        @yield('footScripts')
        <script>
            $(document).foundation();
        </script>
        @if (ENV('APP_ENV') == 'production' && Auth::guest())
            
        @endif
    </body>
</html>