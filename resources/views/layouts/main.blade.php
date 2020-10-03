<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand Clothes</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <div class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="brand">Brand Clothes</a>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
                <li><a href="">Cart</a></li>
            </ul>
        </div>
    </div>

    @yield('content')



    <div class="footer">
        <div class="container">
            <p class="copyright">{{\Carbon\Carbon::now()->format('yy')}} &#169;. All right reserved</p>
            <p class="shotout">Made with <span>❤</span> by <a href="https://github.com/marwaneahansal" target="_blank">Marwane ahansal</a></p>
        </div>
    </div>


    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js" type="module"></script>
</body>
</html>