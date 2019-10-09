<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Azzahrah Kopi</title>
</head>
<body>
    {{-- navbar section --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            Navbar
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- Header Section --}}
    <div class="header">
        <div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image/Header/header1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-content">
                        <h1>Start Your Day With A Cofee</h1>
                        <p>Find The Best Cofee For You Here</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/Header/header2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-content">
                        <h1>Real Taste Real Food</h1>
                        <p>Passion For Your Perfect Food</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/Header/header3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-content">
                        <h1>Test</h1>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{-- Introduction Section --}}
    <div class="introduction">
        <h1 class="mx-auto">About Us</h1>
        
        <div class="introduction-text container-fluid">
            <div class="row justify-content-center">
                <h3 class="col-md-12">KOPI TRADISIONAL AZZAHRAH</h3>
                <p class="col-md-8">Layanan terbaik dengan kopi yang berkualitas tinggi memanjakan setiap pembeli, kopi nikmat yang diproduksi secara tradisional memberikan aroma nikmat yang khas.</p>
            </div>
        </div>

        <div class="introduction-items">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card border-success">
                            <div class="card-body text-center text-center row justify-content-center">
                                <div class="image col-md-5 rounded-circle">
                                    <p><img src="{{asset('icons/coffee.svg')}}" alt=""></p>
                                </div>
                                <h4 class="card-title col-md-12">
                                    Cofee    
                                </h4>
                                <p>
                                    Mulai hari dengankopi nikmat yang di olah dari biji kopi berkualitas
                                </p>
                                <div class="button">
                                    <a href="#" class="btn btn-outline-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card border-success">
                            <div class="card-body text-center row justify-content-center">
                                <div class="image col-md-5 rounded-circle">
                                    <p><img src="{{asset('icons/chicken.svg')}}" alt=""></p>
                                </div>
                                <h4 class="card-title col-md-12">
                                    Food    
                                </h4>
                                <p>
                                    Nikmati makanan dengan cita rasa lokal yang kental dan menggugah selera
                                </p>
                                <div class="button">
                                    <a href="#" class="btn btn-outline-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card border-success">
                            <div class="card-body text-center row justify-content-center">
                                <div class="image col-md-5 rounded-circle">
                                    <p><img src="{{asset('icons/cake.svg')}}" alt=""></p>
                                </div>
                                <h4 class="card-title col-md-12">
                                    Traditional Cake
                                </h4>
                                <p>
                                    Kue tradisional yang di buat dengan penuh ketekunan memberikan rasa unik
                                </p>
                                <div class="button">
                                    <a href="#" class="btn btn-outline-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="quotation">
        <div class="container-fluid quotation-content">
            <div class="row align-items-center text-center">
                <h3 class="col-sm-12 col-md-12">
                    "Fresh and healthy master of town"
                </h3>
                <div class="links col-md-12">
                    <a href="#" class="btn btn-light btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="popularProduct">
        <h1 class="mx-auto text-center">Popular Product</h1>
        <div class="container-fluid row justify-content-around">
            <div class="product col-lg-4 col-md-6 mb-4">                
                        <!--Card-->
                        <div class="card card-cascade narrower mb-4" style="margin-top: 28px">
                          <!--Card image-->
                          <div class="view view-cascade">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="card-img-top"
                              alt="">
                            <a>
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <!--/.Card image-->
                    
                          <!--Card content-->
                          <div class="card-body card-body-cascade">
                            <!--Title-->
                            <h4 class="card-title">Product 1</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                              laboriosam, nisi ut
                              aliquid ex ea commodi.</p>
                            <a class="btn btn-outline-success">Beli</a>
                          </div>
                          <!--/.Card content-->
                    
                        </div>
                        <!--/.Card-->    
            </div>
            <div class="product col-lg-4 col-md-6 mb-4">                
                        <!--Card-->
                        <div class="card card-cascade narrower mb-4" style="margin-top: 28px">
                          <!--Card image-->
                          <div class="view view-cascade">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="card-img-top"
                              alt="">
                            <a>
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <!--/.Card image-->
                    
                          <!--Card content-->
                          <div class="card-body card-body-cascade">
                            <!--Title-->
                            <h4 class="card-title">Product 1</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                              laboriosam, nisi ut
                              aliquid ex ea commodi.</p>
                            <a class="btn btn-outline-success">Beli</a>
                          </div>
                          <!--/.Card content-->
                    
                        </div>
                        <!--/.Card-->    
            </div>
            <div class="product col-lg-4 col-md-6 mb-4">                
                        <!--Card-->
                        <div class="card card-cascade narrower mb-4" style="margin-top: 28px">
                          <!--Card image-->
                          <div class="view view-cascade">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="card-img-top"
                              alt="">
                            <a>
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <!--/.Card image-->
                    
                          <!--Card content-->
                          <div class="card-body card-body-cascade">
                            <!--Title-->
                            <h4 class="card-title">Product 1</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                              laboriosam, nisi ut
                              aliquid ex ea commodi.</p>
                            <a class="btn btn-outline-success">Beli</a>
                          </div>
                          <!--/.Card content-->
                    
                        </div>
                        <!--/.Card-->    
            </div>
            <div class="button mx-auto">
                <a href="" class="btn btn-lg btn-link">Show More</a>
            </div>
        </div>
    </div>

    <div class="contact">
        <h1 class="mx-auto text-center">Contact Us</h1>

        <div class="contactForm">
            <div class="container-fluid">
                <form action="" class="row justify-content-center">
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-8">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group col-md-8">
                        <textarea class="form-control" name="message" id="message" cols="106" rows="10" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="radio" name="subscribe" id="subscribe"> Ingatkan Saya Saat Ada Promo
                    </div>
                    <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
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