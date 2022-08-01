<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome/css/all.css') }}">
    <style>
     
        body {
          
            padding:30px;
        }
        .error {
            color: #ff0000;
        }
        .w-5 {
            display: none;
        }
        .pull-right {
            float: right;
        }
    </style>
    
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
  




    
</body>
</html>