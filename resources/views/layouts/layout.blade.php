
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
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.scss'])
    
  
</head>
<body>
   
    @yield('title')
    @yield('content')   
</body>
</html>