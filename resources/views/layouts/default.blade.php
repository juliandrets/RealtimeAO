<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <title>RealtimeAO</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

    <!-- Tooltip -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tooltipster/css/tooltipster.bundle.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tooltipster/css/tooltipster-sideTip-borderless.min.css') }}" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('plugins/tooltipster/js/tooltipster.bundle.min.js') }}"></script>
</head>
<body>
    @yield('content')

    <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster({
                theme: 'tooltipster-borderless',
                contentCloning: true
            });
        });
    </script>
</body>
</html>
