<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
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
    
    {{-- CARDS --}}
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            @foreach ($products as $product)
            <div class="card m-3 text-center" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="phone image">
                <div class="card-body">
                    <h3 class="card-title">{{$product['brand']}}</h3>
                    <h5>{{$product['model']}}</h5>
                    <h6>RAM da {{$product['ram']}}</h6>
                    <a href="{{route('Product_Detail', ['id'=>$product['id']])}}" class="btn btn-primary">Dettagli prodotto</a>
                </div>
            </div>                    
            @endforeach
        </div>
    </div>
    {{-- CARDS END --}}










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>