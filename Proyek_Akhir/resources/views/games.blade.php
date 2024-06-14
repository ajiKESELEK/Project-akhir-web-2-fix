<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/style_game.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    @if(Auth::check() && Auth::user()->name)
        <div class="menu">
            <div class="flex-container2">
                <div><i class="fas fa-user-plus"></i> Welcome, {{ Auth::user()->name }}</div>
                <div><i class="fas fa-dollar-sign"></i> 0</div>
                <div><i class="fas fa-shopping-cart"></i> 0</div>
            </div>
            <hr>
            <div class="flex-container">
                <a class="menu_button">Play</a>
                <div>Setting</div>
                <a href="{{ route('dashboard.logout') }}" class="menu_button">Quit</a>
            </div>
        </div>
    @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
