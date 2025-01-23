<div id="header-wrap">

    <div class="top-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="#"><i class="icon icon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-youtube-play"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-behance-square"></i></a>
                            </li>
                        </ul>
                    </div><!--social-links-->
                </div>
                <div class="col-md-6">
                    <div class="right-element">
                        <a href="#" class="user-account for-buy"><i
                                class="icon icon-user"></i><span>Account</span></a>
                        <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
                                $)</span></a>

                        <div class="action-menu">

                            <div class="search-bar">
                                <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                    <i class="icon icon-search"></i>
                                </a>
                                <form role="search" method="get" class="search-box">
                                    <input class="search-field text search-input" placeholder="Search"
                                        type="search">
                                </form>
                            </div>
                        </div>

                    </div><!--top-right-->
                </div>

            </div>
        </div>
    </div><!--top-content-->

    <header id="header">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <div class="main-logo">
                        <a href="index.html"><img src="{{asset('assets/images/main-logo.png')}}" alt="logo"></a>
                    </div>

                </div>

                <div class="col-md-10">

                    <nav id="navbar">
                        <div class="main-menu stellarnav">
                            <ul class="menu-list">
                                <li class="menu-item active"><a href="{{url('/')}}">Home</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#pages" class="nav-link">Pages</a>

                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Styles</a></li>
                                        <li><a href="index.html">Blog</a></li>
                                        <li><a href="index.html">Post Single</a></li>
                                        <li><a href="index.html">Our Store</a></li>
                                        <li><a href="index.html">Product Single</a></li>
                                        <li><a href="index.html">Contact</a></li>
                                        <li><a href="index.html">Thank You</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item"><a href="{{url('featured')}}" class="nav-link">Featured</a></li>
                                <li class="menu-item"><a href="{{url('popular')}}" class="nav-link">Popular</a></li>
                                <li class="menu-item"><a href="{{url('offers')}}" class="nav-link">Offer</a></li>
                                <li class="menu-item"><a href="{{url('articles')}}" class="nav-link">Articles</a></li>
                                
                            </ul>

                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>

                        </div>
                    </nav>

                </div>

            </div>
        </div>
    </header>

</div><!--header-wrap-->