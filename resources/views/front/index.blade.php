<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Foodfun</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css//animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css//bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area navbar navbar-dark bg-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area pt-2">
                        <a href="index.html">
                            <img src="{{ url('storage/image/icon/'.$icon->icon) }}" alt="" class="img-fluid icon">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                                @include('front/navMenu')                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slider as $key => $slider)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img src="{{asset('storage/image/slider/'.$slider->image)}}" class="d-block w-100" alt="...">
                    </div>
            @endforeach
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="{{asset('storage/image/welcome-bg.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">welcome</span> <br>to {{ $welcome->title }}</h3>
                        <p>{{ $welcome->text }}</p>
                        <a href="#" class="template-btn mt-3">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="section-top">
                        <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                        <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $data)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-food">
                            <div class="food-img">
                                <img src="{{ url('storage/image/product/'.$data->image->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="food-content">
                                <div class="d-flex justify-content-between">
                                    <h5>{{ $data->name }}</h5>
                                    <span class="style-change">Rp. {{$data->price}}</span>
                                </div>
                                <p class="pt-3">{{ $data->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center" style="background-image: url('../image/paralax/paralax.jpg'); background-attachment: fixed; background-position: center; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Rasa Traditional Dengan Rasa International</h2>
                    <h4 class="mt-4">temukan cita rasa indonesia di sini</h4>
                    <a href="" class="template-btn template-btn2 mt-4">Lihat Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->
    
    {{-- <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Menu <span>Andalan</span> Kami</h3>
                        <p><i>Menu </i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div class="deshes-text">
                        <h3><span>Garlic</span><br> green beans</h3>
                        <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                        <span class="style-change">$12.00</span>
                        <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="assets/images/deshes1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="assets/images/deshes2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                    <h1>02.</h1>
                    <div class="deshes-text">
                        <h3><span>Lemon</span><br> rosemary chicken</h3>
                        <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                        <span class="style-change">$12.00</span>
                        <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End --> --}}

    <!-- Testimonial Area Starts -->
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3><span>
                            Kata
                        </span>Kostumer Kami</h3>
                        <p><i>Beberapa Testimoni Dari Pelanggan Kami</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        @foreach ($testimoni as $item)
                            <div class="single-slide d-sm-flex">
                                <div class="customer-img mr-4 mb-4 mb-sm-0">
                                    <img src="{{ url('storage/image/avatar/'.$item->image) }}" alt="">
                                </div>
                                <div class="customer-text">
                                    <h5>{{$item->name}}</h5>
                                    <span><i>{{$item->jobs}}</i></span>
                                    <p class="pt-3">{{$item->quote}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Update Area Starts -->
    <section class="update-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Our <span>food</span> update</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $news)
                    <div class="col-md-4">
                        <div class="single-food">
                            <div class="food-img">
                                <img src="{{ url('storage/image/news/'.$news->imageNews->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="food-content">
                                <div class="post-admin d-lg-flex mb-3">
                                    <span><i class="fa fa-calendar-o mr-2"></i>{{$news->created_at}}</span>
                                </div>
                                <h5>{{$news->title}}</h5>
                                <p>{{ $news->news }}</p>
                                <a href="{{route('front.berita.detail.page',$news->id)}}" class="template-btn3 mt-2">read more <span><i class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Update Area End -->

    {{-- <!-- Table Area Starts -->
    <section class="table-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Book <span>your</span> table</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="#">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" id="datepicker">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" id="datepicker2">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                            </div>
                            <input type="text">
                        </div>
                        <div class="table-btn text-center">
                            <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Table Area End --> --}}


    <!-- Footer Area Starts -->
        @include('front/footer',['footer'=>$footer])
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/vendor/owl-carousel.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
