<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shop: Product</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Online Shop</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://internet-shop.tmweb.ru">All products</a></li>
                    <li><a href="http://internet-shop.tmweb.ru/categories">Categories</a>
                    </li>
                    <li><a href="http://internet-shop.tmweb.ru/basket">Your cart</a></li>
                    <li><a href="http://internet-shop.tmweb.ru/reset">Reset project to default state</a></li>
                    <li><a href="http://internet-shop.tmweb.ru/locale/ru">ru</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">$<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                            <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                            <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://internet-shop.tmweb.ru/login">Login</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="starter-template">
            <h1>iPhone X 256GB</h1>
            <h1>{{ $products }}</h1>
            <h2>Мобильные телефоны</h2>
            <p>Price: <b>1227.01 $</b></p>
            <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg">
            <p>Отличный продвинутый телефон с памятью на 256 gb</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
                <button type="submit" class="btn btn-success" role="button">Add to Cart</button>

                <input type="hidden" name="_token" value="8Wr6XQFMw2BfY5pxRG5rXJz468ltwtNEhn1iz91t">
            </form>
        </div>
    </div>
</body>

</html>