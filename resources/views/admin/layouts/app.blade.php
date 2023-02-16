<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>GasLink</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1.0, maximum-scale=1">
        <link rel="icon" type="image/icon" href="{{asset('admin/images/fire.png')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        >
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        @stack('css')
    </head>
    <body>
        @include('admin.includes.header')
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
            integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script type="text/javascript" src="{{asset('admin/js/script.js')}}"></script>
        <script>
            AOS.init();
            console.log('aos run');
          </script>
          <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
          <script>
              $(document).ready( function () {
                  $('#staffTable').DataTable();
              } );
          </script>
          @stack('js')
    </body>
</html>