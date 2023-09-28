
<!doctype html>
<html>
<head>
 <title>Laravel</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    
    @vite(['resources/css/app.scss'])
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                         
        <button class="navbar-toggler" type="button" data-bs-toggle="dropdown" data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
        </button> <a class="navbar-brand" href="{{url('/')}}">icon home</a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="navbar-nav" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{url('shop')}}">All</a>
                        <a class="dropdown-item" href="{{url('shop/headwear')}}">Headwear</a>
                        <a class="dropdown-item" href="{{url('shop/scarfs')}}">Scarfs</a>
                        <a class="dropdown-item" href="{{url('shop/sets')}}">Matching Sets</a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('shop/bags')}}">Bags</a>
                        <a class="dropdown-item" href="{{url('shop/bandc')}}">Bookmarks and Coasters</a>
                    </div>
                  </li>
                <li class="nav-item">
                     <a class="nav-link" href="{{url('stripe/index')}}">Stripe</a>
                </li>                
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" /> 
                <button class="btn btn-primary my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>
    @yield('content') 
    <script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
    crossorigin="anonymous"></script>    @vite(['resources/js/app.js'])
</body>
</html>