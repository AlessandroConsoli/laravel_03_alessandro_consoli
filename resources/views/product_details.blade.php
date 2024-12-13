<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

{{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('Home_Page')}}">Home</a>
              <a class="nav-link" href="{{route('Products_List')}}">Shop</a>
            </div>
          </div>
        </div>
      </nav>
{{-- NAVBAR END --}}


    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-md-12 text-center">
                <h1>Dettagli del {{$product['brand']}} - {{$product['model']}}</h1>
                <h4>Schermo: {{$product['screenSize']}}</h4>
                <h4>ram: {{$product['ram']}}</h4>
                <img class="col-12 col-md-4 img-fluid" src="https://m.media-amazon.com/images/I/71PFKbMOehL._AC_UF1000,1000_QL80_.jpg" alt="Immagine smartphone">
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>