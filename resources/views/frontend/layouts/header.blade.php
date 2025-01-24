<style>
    .auth-actions {
    display: flex;
    justify-content: flex-end; /* Align buttons to the right */
    gap: 10px; /* Add spacing between buttons */
}

.auth-actions a {
    display: inline-block; /* Ensure proper button alignment */
}
</style>

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

                        <div class="auth-actions">
                            <a href="#" id="user-email-display"  class="user-account for-buy" style="display: none;">
                                <i class="icon icon-user" ></i><span id="user-email"></span>
                            </a>

                            <a href="{{ route('login') }}" id="login-button" class="user-account for-buy" style="display: none;">
                                <i class="icon icon-user"></i><span>Login</span>
                            </a>

                            <a href="#" id="cart" class="cart for-buy" style="display: none;">
                                <i class="icon icon-clipboard"></i><span>Cart:(0 $)</span>
                            </a>
                        
                            
                            <a href="" id="logout-btn"  class="user-account for-buy" style="display: none;">
                                <i class="icon icon-user"></i><span>Logout</span>
                            </a>
                        </div>

                        {{-- <div class="action-menu">

                            <div class="search-bar">
                                <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                    <i class="icon icon-search"></i>
                                </a>
                                <form role="search" method="get" class="search-box">
                                    <input class="search-field text search-input" placeholder="Search"
                                        type="search">
                                </form>
                            </div>
                        </div> --}}

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
                                <li class="menu-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>             
                            <li class="menu-item {{ Request::is('featured') ? 'active' : '' }}"><a href="{{ url('featured') }}">Featured</a></li>
                            <li class="menu-item {{ Request::is('popular') ? 'active' : '' }}"><a href="{{ url('popular') }}">Popular</a></li>
                            <li class="menu-item {{ Request::is('offers') ? 'active' : '' }}"><a href="{{ url('offers') }}">Offer</a></li>
                            <li class="menu-item {{ Request::is('articles') ? 'active' : '' }}"><a href="{{ url('articles') }}">Articles</a></li>
                           
                            <li id="myCollection" class="menu-item {{ Request::is('mycollections') ? 'active' : '' }}"><a href="{{ url('mycollections') }}">My Collection</a></li>
                           
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

<script>
    // Get the current full URL
    const currentUrl = window.location.origin + window.location.pathname;

    // Get all menu items
    const menuItems = document.querySelectorAll("#navbar .menu-item");

    // Loop through each menu item
    menuItems.forEach((menuItem) => {
        const link = menuItem.querySelector("a"); // Get the anchor tag within the menu item

        if (link) {
            const linkHref = link.href; // Full href from the anchor
            if (currentUrl === linkHref) {
                // Remove 'active' class from all items
                menuItems.forEach((item) => item.classList.remove("active"));
                // Add 'active' class to the matched menu item
                menuItem.classList.add("active");
            }
        }
    });
</script>
