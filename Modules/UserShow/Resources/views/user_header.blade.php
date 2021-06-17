<?php
use  Modules\UserShow\Http\Controllers\UserController;
$total_cart = 0;
if(Session::has('user'))
{
    $total_cart = UserController::cartItem();
}

?>
<link rel="stylesheet" type="text/css" href="{{ Module::asset('UserShow:css/bootstrap.css') }}" />

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<!-- <link href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/font-awesome.min.css"
    rel="stylesheet" /> -->
<link href="{{ Module::asset('UserShow:css/font-awesome.min.css') }}" rel="stylesheet" />

<!-- Custom styles for this template -->
<!-- <link href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/style.css" rel="stylesheet" /> -->
<!-- <link href="http://localhost/Product_show/Modules/UserShow/Resources/assets/css/style.css" rel="stylesheet" /> -->
<link href="{{ Module::asset('UserShow:css/style.css') }}" rel="stylesheet" />
<!-- responsive style -->
<link href="{{ Module::asset('UserShow:css/responsive.css') }}" rel="stylesheet" />

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
             
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Watches </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> About </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/FetchAllProduct">Show Product</a>
                    </li> -->

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Product Categery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="FetchmMbileData">Mobile</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->

                    <form action="/search" method="Post" class="form-inline my-2 my-lg-0">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>

                    <div class="user_option-box">
                      
                    </div>
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
                    <a href="/Userloginshow">
                        <i class="fa fa-user" aria-hidden="true">Login</i>
                    </a>
                    @endif
                    <a href="/CartList">
                            <i class="fa fa-cart-plus"  aria-hidden="true" style="margin-left: 73px;"><?php echo $total_cart?></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- </div> -->

<!-- </div>
</div>
</section> -->

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