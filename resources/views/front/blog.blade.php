<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Blog Home</title>

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
	<header class="header-area header-area2 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ url('storage/image/icon/'.$icon->icon) }}" alt="logo" class="img-fluid icon"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu main-menu2">
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
    <section class="banner-area banner-area2 menu-bg text-center" style="background-image: url('../image/paralax/paralax.jpg'); background-attachment: fixed; background-position: center; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Our Blog</i></h1>
                    <a href="index.html">home</a>
                    <span class="mx-2">/</span>
                    <a href="blog-home.html">blog page</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!--================Blog Categorie Area =================-->
    {{-- <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img src="assets/images/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Social Life</h5></a>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img src="assets/images/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Politics</h5></a>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="assets/images/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Food</h5></a>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================Blog Categorie Area =================-->
    
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                           {{-- <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div> --}}
                           @foreach ($data as $data)
                            <div class="col-md-12">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="{{route('front.berita.detail.page',$data->id)}}"><h4>{{ $data->title }}</h4></a>
                                        <p>{{ $data->news }}</p>
                                        <a href="{{route('front.berita.detail.page',$data->id)}}" class="template-btn">View More</a>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="fa fa-angle-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="fa fa-angle-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="assets/images/blog/author.png" alt="">
                            <h5>Charlie Barber</h5>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h4 class="widget_title">Popular Posts</h4>
                            <div class="media post_item">
                                <img src="assets/images/blog/popular-post/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h5>Space The Final Frontier</h5></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="assets/images/blog/popular-post/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h5>The Amazing Hubble</h5></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="assets/images/blog/popular-post/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h5>Astronomy Or Astrology</h5></a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="assets/images/blog/popular-post/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h5>Asteroids telescope</h5></a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="assets/images/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>															
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subscribe</a>
                            </div>	
                            <p class="text-bottom">You can unsubscribe at any time</p>	
                            <div class="br"></div>							
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- Footer Area Starts -->
        @include('front/footer')
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
