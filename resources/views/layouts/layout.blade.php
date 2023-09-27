<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.scss'])
 
</head>
<body>
<div class="container">
   <header class="row">

   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
   </footer>
</div>
</body>
</html>