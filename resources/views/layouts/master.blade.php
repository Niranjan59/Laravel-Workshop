<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Project</title>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
  
</head>

<body>
       <header>
        <ul class="menu">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/product">Product</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Login</a></li>
           </ul>
    </header>
    
    @yield('home')
    @yield('content')


</body>

</html>