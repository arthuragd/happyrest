<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Happy Restaurante</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">

    </head>
    <body>

    <header>
      <!--LOGO-->
      <a id="logo" href="">
        <img class="logo" src="{{ URL::asset('img/logo.jpg') }}" alt="Logo">
      </a>
      <!--NavBar-->
      <ul class="nav justify-content-center navbar sticky-top">
        <li class="nav-item">
          <a class="nav-link active" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contato</a>
        </li>
      </ul>

    @yield('content')
      
    </body>
  <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      
        
</html>
