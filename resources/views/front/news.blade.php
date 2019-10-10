<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Kopi Azzahrah Product</title>
</head>
<body>
    {{-- navbar section --}}
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo.png') }}" alt="" class="img-fluid icon">            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('front.index') }}"">Home</a>                                        
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.product.page') }}">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('front.berita.page')}}">Berita <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.gallery.page') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header-news row align-items-center">
        <div class="header-content mx-auto text-center">
            <h1>Berita Terbaru Dari Kami</h1>
        </div>
    </div>
    <div class="product-content row justify-content-around">
            @foreach ($data as $data)    
                <div class="product col-lg-4 col-md-4 mb-4">                
                        <!--Card-->
                    <div class="card card-cascade narrower mb-4" style="margin-top: 28px">
                        <!--Card image-->
                        <div class="view view-cascade">
                            <img src="{{ url('storage/image/news/'.$data->imageNews->image) }}" class="card-img-top"
                            alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                
                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center">
                            <!--Title-->
                            <div class="card-title">
                                <h4>{{ $data->title }}</h4>
                                <small>posted at- {{ $data->created_at }}</small>
                            </div>
                            <!--Text-->
                            <a class="btn btn-outline-success">Read More</a>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->    
            </div>
            @endforeach
    </div>
    <div class="footer container-fluid">
            <footer class="row justify-content-around align">
                <div class="col-md-3">
                    <img src="{{ asset('image/logo.png')}}" alt="" class="img-fluid">
                    <div class="footer-items">
                        <div class="location icon row">
                            <img class="col-md-2 img-fluid"  src="{{asset('icons/placeholder.svg')}}" alt="location">
                            <small class="col-md-9">
                                Address : Jl. Bandang No.194 / 196, Parang Layang,
                                Bontoala, Kota Makassar, Sulawesi Selatan 90155
                            </small>
                        </div>
                        <div class="phone icon row">
                            <img class="col-md-2 img-fluid" src="{{asset('icons/incoming-call.svg')}}" alt="location">
                            <small class="col-md-9">
                                +(62) 0851-0566-6669
                            </small>
                        </div>
                        <div class="email icon row">
                            <img class="col-md-2 img-fluid" src="{{asset('icons/email.svg')}}" alt="location">
                            <small class="col-md-9">
                                admin@kopiazzahrah.com
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 links">
                    <h4>Links</h4>
                    <div class="links-content">
                        <div class="links-item">
                          <a href="" class="btn btn-link">Home</a>                       
                        </div>
                        <div class="links-item">
                            <a href="" class="btn btn-link">Product</a>                       
                        </div>
                        <div class="links-item">
                            <a href="" class="btn btn-link">Berita</a>                       
                        </div>
                        <div class="links-item">
                            <a href="" class="btn btn-link">Contact</a>                       
                        </div>
                    </div>
                </div>
                <div class="col-md-4 links">
                    <h4>Maps</h4>
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="223" id="gmap_canvas" src="https://maps.google.com/maps?q=kopi%20azzahrah&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://usave.co.uk">usave</a></div><style>.mapouter{position:relative;text-align:right;height:243px;width:238px;}.gmap_canvas {overflow:hidden;background:none!important;height:208px;width:338px;}</style></div>
                </div>
            </footer>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>