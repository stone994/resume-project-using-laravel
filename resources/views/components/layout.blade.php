<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">    
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title }}</title>
</head>
<body class="bg-dark">
    <div class="container-fluid bg-dark">
        <div class="row">
              <div class="col-md-12">
                @include('include.sidebar')
            </div>
        </div>
        <div class="row">
                {{ $content }}
        </div> 
    </div>
<script src="{{ asset('js/bootstrap.bundle.js') }}"> </script>
</body>
</html>