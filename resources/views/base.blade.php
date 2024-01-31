<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <title>@yield('title') | {{config('app.name')}}</title>
</head>
<body>
    <header class="main_menu home_menu">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('homePage') }}" ><img class="" width="50px" src="/storage/restaurant-logos-png-png_25706.jpg" alt="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('show') }}">Dashboard</a>
           </li>
           
           <li class="nav-item">
                <a class="nav-link" href="{{ route('add') }}">Add reccete</a>
            </li>
        </ul>
            </div>
        </div>
    </nav>
    </header>
    
    <div class="container">
        @if ($errors->any())
        
        <div class="alert alert-danger">
            <strong>Errors</strong>
                @foreach ($errors->all() as $error)
            
                <li class="liste-group-item">{{ $error }}</li>
                

        @endforeach
    </div>

        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>