<!doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Three False</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body id="body" style="background-color: black">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid" id="navbar-kecil">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#body">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#gallery" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gallery
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">large</a></li>
              <li><a class="dropdown-item" href="#">traditional</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Faq</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">find us</a>
          </li>
          <li class="nav-item" id="cta">
            <a class="nav-link" href="#">book now</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  {{-- Jumbotron --}}
  <div id="jumbotron" class="jumbotron jumbotron-fluid" style="background-image: url({{asset('paralax/para1.png')}})" style="background-size: cover">
    <div class="container-fluid" id="hero">
      <img src="{{asset('logo/Rectangle 57.png')}}" alt="" class="img-fluid" id="logo">
      <h1 class="display-4">GET THE BEST FROM THE BEST</h1>
      <h2 class="lead">Luxurious tatto shop | international hygiene standard | vegan tatto ink</h2>
      <a href="#" class="btn btn-lg" role="button" aria-pressed="true">Book Now</a>
    </div>
  </div>
  {{-- Jumbotron end --}}  

  {{-- About us --}}
  <div class="container-fluid">
    <div class="container" id="about">
      <h1>about us</h1>
        <h2>Luxurious Tatto Shop</h2>
        <p>We are a unique studio which demands the absolute highest level in tattoo art standards from the very best tattoo artists.
          We consider our level of art to be exceptional, where good art is not good enough. We are not a bulk tattoo franchise!
          <br>
          <br>
          We are has established a great reputation, not only because of the incredible art we produce but also due to the sterile environment of the studio and customer service which ensures complete customer satisfaction. Our artists are international award-winners and are gifted in tattoos of all styles. We have a specialists in each tattoo style. We design 100% original tattoos based on your ideas.
          <br>
          <br>
          You think it, we can ink it!
          <br>
          <br>
          We are happy to assess and fix existing tattoos, restore faded tattoos and do complete cover ups.
          <br>
          <br>
          In Bali you have to be extremely cautious where you get tattooed as many studio.</p>
    </div>
  </div>
  {{-- About us end --}}

  {{-- Paralax 2 --}}
  <div id="parallax2" class="jumbotron jumbotron-fluid" style="background-image: url({{asset('paralax/para2.jpg')}})" style="background-size: cover">
    <div id="hero">
    </div>
  </div>
  {{-- Paralax 2 end --}}

  {{-- Our Studio --}}
  <div class="container-fluid">
    <div class="container" id="studio">
      <h1>our studio</h1>
      <h2>International Hyigene Standard</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate est ducimus, consequuntur repudiandae rerum autem soluta voluptatem dolorem expedita voluptatum at possimus cum dignissimos, obcaecati dolores esse aspernatur a?</p>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('carousel/c1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('carousel/c2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('carousel/c3.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
  {{-- Our Studio --}}
  
  {{-- Our Gallery --}}
  <div class="container-fluid">
    <div class="container" id="gallery">
      <h1>our last work</h1>
      <h2>Vegan Tatto Ink</h2>
      <h3>large tatto</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g1.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g2.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g3.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
      <h3>SMALL TATTO</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g4.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g5.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g6.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
      <h3>HANDPOKE TATTO TRADITIONAL</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g7.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g8.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g9.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
      <h3>bODY PIERCING</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g10.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g11.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('gallery/g12.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
      <div>
        <a href="#" class="btn btn-lg" role="button" aria-pressed="true">view more</a>
      </div>
    </div>
  </div>
  {{-- Our Gallery end --}}

  {{-- Review --}}
  <div class="container">
    <div class="container">

    </div>
  </div>
  {{-- Review end --}}

  {{-- Book Now --}}
  <div id="parallax3" class="jumbotron jumbotron-fluid" style="background-image: url({{asset('paralax/book.png')}})" >
    <div class="container" id="booking">
      <div class="container" id="form">
        <h1>book now</h1>
        <h2>make an appoinment</h2>
        <div class="form-floating mb-3 mx-auto">
          <input type="Text" class="form-control" id="Nama" placeholder="Nama">
          <label for="floatingPassword">Name</label>
        </div>
        <div class="form-floating mb-3 mx-auto">
          <input type="email" class="form-control" id="Email" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3 mx-auto">
          <textarea class="form-control" placeholder="Message" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Message</label>
        </div>
        <div>
          <a href="#" class="btn btn-lg" role="button" aria-pressed="true">send</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Book Now --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script src="{{asset('js/script.js')}}">
  </script>
</body>

</html>