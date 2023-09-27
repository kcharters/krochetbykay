<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KrochetbyKay</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/js/app.js'])
        @vite(['resources/js/boostrap.js'])
        @vite(['resources/css/app.scss'])
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div>
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                         <a class="navbar-brand" href="#">Brand</a>
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                     <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="#">Link</a>
                                </li>
                                
                            </ul>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="text" /> 
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                    Search
                                </button>
                            </form>
                            <ul class="navbar-nav ml-md-auto">
                                <li class="nav-item active">
                                     <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                         <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider">
                                        </div> <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                        
                    </nav>
                    <div class="jumbotron">
                        <h2>
                            Hello, world!
                        </h2>
                        <p>
                            This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
                        </p>
                        <p>
                            <a class="btn btn-primary btn-large" href="#">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
