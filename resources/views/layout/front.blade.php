<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>www.hoax.com</title>
  </head>
  <body>
    
    
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color:#000080;">
         <div class="container">
          <a class="navbar-brand " href="{{ route('index') }}"><h3 class="font-weight-bold text-danger">zulfas<span class="text-warning font-weight-bold" style="letter-spacing: 0.5px; font-size: 8pt;display: block;">www.hoax.com</span></h3>

          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto ">
              <a class="nav-item nav-link active text-light" target="_blank" href="https://www.youtube.com/feed/trending">Tranding <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link ml-3 text-light" target="_blank" href="https://www.alodokter.com/gaya-hidup-sehat-bisa-anda-mulai-sekarang">Life</a>
              <a class="nav-item nav-link ml-3 text-light" target="_blank" href="#">Olahraga</a>
              <a class="nav-item nav-link ml-3 text-light" target="_blank" href="https://www.traveloka.com/id-id/">Traveller</a>
               <a class="nav-item nav-link ml-3 text-light"  target="_blank" href="https://id.priceprice.com/fashion/wanita/">Fashion</a>
            </div>
            <div>
            </div>
                </nav>

      
   
    <!-- corousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://i.nextmedia.com.au/Utils/ImageResizer.ashx?n=https%3A%2F%2Fi.nextmedia.com.au%2FNews%2FGettyImages-1267633270_Cropped.jpg&h=468&w=832&c=1&s=1&q=85" class="d-block w-100" style="width: 7%;" alt="...">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.sportinglife.com/images/news/630x354/1fb28242-6dae-4ce7-8750-68c4c329741d.jpg" class="d-block w-100" style="width: 7%;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i1.wp.com/www.en24news.com/en24/wp-content/uploads/2020/08/erdogan-aciklamalari-son-dakika-erdogan-ne-acikladi-baskan-recep-tayyip-erdoganin-mujdesi-ne-dogalgaz-bulundu-mu-1598011193203.jpg?fit=806%2C378&ssl=1" class="d-block w-100" style="width: 7%;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- cards -->

    <div class="container mt-1" >
        <div class="row row-cols-1 row-cols-md-2">
         @foreach ( $artikel as $artikels )
           <div class="col-md-4 mb-4">
             <div class="card">
               <img src="/img/{{$artikels->image}}" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{ $artikels->title}}</h5>
                 <h6>{{ $artikels->content }}</h6>
                 <a href="#" >Read moree->>></a>

               </div>
             </div>
           </div>
         @endforeach
        </div>
    
    <!-- footer -->
  </div>
     <div class="row">
        <div class="col-md-12 bg-dark sm-8">
        <h1 class="text-light text-center" style="font-size: 20px;">www.hoax@gmail.com</h1>
     </div>


       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>