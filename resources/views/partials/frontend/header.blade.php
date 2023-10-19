<header class="header clearfix element_to_stick">
    <div class="layer"></div>
    <div class="container-fluid">
{{--        <div id="logo">--}}
{{--            <a href="{{ route('home') }}">--}}
{{--                <img src="{{ asset($general ? $general->logo:'') }}" width="40" height="4000" alt="" class="logo_normal">--}}
{{--                <img src="{{ asset($general ? $general->logo:'') }}" width="40" height="4000" alt="" class="logo_sticky">--}}
{{--            </a>--}}
{{--        </div>--}}
        <ul id="top_menu">
            <li><a href="#0" class="search-overlay-menu-btn"><i class="fas fa-search"></i></a></li>
            @guest
                @else
                <li>
                    <div class="dropdown dropdown-cart">
                        <a href="{{ route('getcart', auth()->user()->id) }}" class="cart_bt"><i class="fas fa-cart-plus"></i> <strong>{{ App\Models\Cart::where('user_id', auth()->user()->id)->sum('quantity'); }}</strong></a>
                    </div>
                </li>
            @endguest
        </ul>
        <!-- /top_menu -->
        <a href="#" class="open_close">
            <i class="icon_menu"></i><span>منو</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>منو</span>
                </a>
                <a href="index.html"><img src="img/logo.svg" width="140" height="35" alt=""></a>
            </div>
            <ul>
                <li class="submenu">
                    <a href="{{ route('home') }}" class="show-submenu">صفحه اصلی</a>
                </li>
                <li class="submenu">
                    <a href="{{ route('about') }}" class="show-submenu">درباره ما</a>
                </li>
                <li class="submenu">
                    <a href="{{ route('menu') }}" class="show-submenu">منو</a>
                </li>
                <li class="submenu">
                    <a href="#" class="show-submenu">گالری</a>
                    <ul>
                        <li><a href="{{ route('gallery', 'photo') }}"> عکس </a></li>
                        <li><a href="{{ route('gallery', 'video') }}">فیلم</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ route('allblogs') }}" class="show-submenu">بلاگ</a>
                </li>
                <li class="submenu">
                    <a href="{{ route('contact') }}" class="show-submenu">ارتباط با ما</a>
                </li>
                @guest
                <li><a href="javascript:void(0)" class="btn_top" data-bs-toggle="modal" data-bs-target="#exampleModal">ورود</a></li>
                <li><a href="javascript:void(0)" class="btn_top" data-bs-toggle="modal" data-bs-target="#registerModal">ثبت نام</a></li>
                @else
                <li>
                    <a class="btn_top" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('خروج') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
    <!-- Search -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><span class="closebt"><i class="icon_close"></i></span></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_search"></i></button>
        </form>
    </div><!-- End Search -->
</header>
