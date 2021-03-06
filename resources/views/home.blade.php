@extends('partials.nav')

@section('content')
<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="{{ URL::asset('img/peixe.jpg') }}" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="{{ URL::asset('img/carne.jpg') }}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{ URL::asset('img/frango.jpg') }}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!--Imagens Hover-->

      
        <div class="containt">
          <h1 class="texto text-center">Promoções</h1>
          <a href="#">
            <img src="{{ URL::asset('img/carne.jpg') }}" alt="Promocao" class="image"
              style="width:100%">
            <div class="overlay">
              <div class="text" href="#">Promoções</div>
            </div>
          </a>
        </div>

        <div class="containt">
        <h1 class="texto text-center">Mais Vendidos</h1>
          <a href="#">
            <img src="{{ URL::asset('img/peixe.jpg') }}" alt="Mais_Vendidos" class="image"
              style="width:100%">
            <div class="overlay">
              <div class="text" href="#">Mais Vendidos</div>
            </div>
          </a>
        </div>
    

      <!-- FOOTER -->
      <footer class="container  text-center">
        <p>&copy; Happy Restaurante - Desde 2007</p>
      </footer>
    </main>

@endsection
