<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- This is not secure approach to include external javascript
      -- in our application.
      -- Just I did that before it is not real website.
      -- The optimal solution to inslude the source code in your repository
      -- So, we will get the control on the code.--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#minTripStartDate" ).datepicker({
                dateFormat: "yy-mm-dd",
                autoclose: true,
                todayHighlight: true,
            });
            $( "#maxTripStartDate" ).datepicker({
                dateFormat: "yy-mm-dd",
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>

    <title>Expedia</title>
</head>

<body>

@yield('header')

<div class="container">
    @yield('content')

    @yield('footer')
</div>

</body>

</html>