<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Online Shop: Category Портативная техника</title>

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
          <li class="active"><a href="http://internet-shop.tmweb.ru/categories">Categories</a>
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
      <h1>
        {{ $category->name }}
      </h1>
      <p>
        {{ $category->description }}
      </p>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://internet-shop.tmweb.ru/storage/products/beats.jpg" alt="Наушники Beats Audio">
            <div class="caption">
              <h3>Наушники Beats Audio</h3>
              <p>275.71 $</p>
              <p>
              <form action="http://internet-shop.tmweb.ru/basket/add/5" method="POST">
                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                <a href="http://internet-shop.tmweb.ru/portable/beats_audio" class="btn btn-default" role="button">More
                  about</a>
                <input type="hidden" name="_token" value="8Wr6XQFMw2BfY5pxRG5rXJz468ltwtNEhn1iz91t">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://internet-shop.tmweb.ru/storage/products/gopro.jpg" alt="Камера GoPro">
            <div class="caption">
              <h3>Камера GoPro</h3>
              <p>163.62 $</p>
              <p>
              <form action="http://internet-shop.tmweb.ru/basket/add/6" method="POST">
                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                <a href="http://internet-shop.tmweb.ru/portable/gopro" class="btn btn-default" role="button">More
                  about</a>
                <input type="hidden" name="_token" value="8Wr6XQFMw2BfY5pxRG5rXJz468ltwtNEhn1iz91t">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://internet-shop.tmweb.ru/storage/products/video_panasonic.jpg"
              alt="Камера Panasonic HC-V770">
            <div class="caption">
              <h3>Камера Panasonic HC-V770</h3>
              <p>380.42 $</p>
              <p>
              <form action="http://internet-shop.tmweb.ru/basket/add/7" method="POST">
                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                <a href="http://internet-shop.tmweb.ru/portable/panasonic_hc-v770" class="btn btn-default"
                  role="button">More about</a>
                <input type="hidden" name="_token" value="8Wr6XQFMw2BfY5pxRG5rXJz468ltwtNEhn1iz91t">
              </form>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
