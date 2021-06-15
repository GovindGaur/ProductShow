<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css"
    href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/bootstrap.css" />
<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/font-awesome.min.css"
    rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/responsive.css" rel="stylesheet" />

<!-- header section strats -->
<header class="header_section sticky-top" style="background-color: ghostwhite;">
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <span>
                    Products
                </span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form action="/search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control search-box" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
                <ul class="navbar-nav">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="watches.html"> Watches </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/FetchAllProduct"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/FetchAllProduct">Show Product</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Product Categery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="FetchmMbileData">Mobile</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>


                </ul>
                @if(Session()->has('user'))
                <div class="user_option-box">
                    <a href="">
                        {{Session::get('user')['name']}}
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                    </a>
                    <a href="/user_logout">
                        Logout
                        <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> -->
                    </a>
                    @else
                    <a href="Userloginshow">
                        login
                    </a>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/Userloginshow"> login </a>
                    </li> -->
                    @endif
                </div>
            </div>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse visible-lg" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/FetchAllProduct">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>

                    @if(Session()->has('user'))

                    <li class="nav-item active">
                        <a class="nav-link" href="/FetchAllProduct">Product <span class="sr-only">(current)</span></a>
                    </li>
                    <div class="user_option-box">
                        <a href="">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"> {{Session::get('user')['name']}} </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/user_logout">Logout <span class="sr-only">(current)</span></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/Userloginshow"> Login </a>
                    </li>
                    @endif -->

        </nav>
    </div>
</header>
<!-- end header section -->
<!-- slider section -->

<!-- end slider section -->
</div>

<!-- shop section -->

<!-- end shop section -->

<!-- about section -->

<!-- end about section -->

<!-- feature section -->

<!-- end feature section -->

<!-- contact section -->


<!-- <div class="col-md-6">
        <div class="img-box">
            <img src="http://localhost/Product_show/Modules/UserShow/Resources/assets/images/contact-img.jpg" alt="">
        </div>
    </div> -->
</div>
</div>
</section>

<!-- end contact section -->

<!-- client section -->

<!-- end client section -->

<!-- footer section -->

<!-- footer section -->

<!-- jQery -->
<script src="http://localhost/Product_show/Modules/UserShow/Resources/assets/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="http://localhost/Product_show/Modules/UserShow/Resources/assets/js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script src="http://localhost/Product_show/Modules/UserShow/Resources/assets/js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->
<script>
// function hello() {
//     $(".slider_section").hide();
// }
</script>