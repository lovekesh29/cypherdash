@section('header')
<!-- Header -->
<header id="hb-header" class="hb-header">
                <div class="container">
                    <div class="hb-header__content display-flex hb-justify-content-space-between">
                        <div class="hb-header__left display-flex">
                            <!-- Logo -->

                            <div class="hb-header__logo display-flex hb-align-items-center">
                                <a href="/">
                                    <img
                                        src="{{ url('wp-content/themes/qrion/assets/images/logo.png') }}"
                                        alt="CypherDash - Web Development &amp; Digital Marketing Agency"
                                    />
                                </a>
                            </div>

                            <!-- End / Logo -->
                        </div>

                        <div class="hb-header__center display-flex">
                            <!-- Menu -->
                            <div id="main-nav" class="hb-header__nav stellarnav">
                                <ul id="menu-main" class="hb-menu-list">
                                    <li id="menu-item-9">
                                        <a href="/" aria-current="page">Home</a>
                                    </li>
                                    <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12">
                                        <a href="#">Countries</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12">
                                            <a href="#">India</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a href="{{ url('india/seo-services') }}">Seo Services</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/social-media-marketing') }}">Social Media Marketing</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/pay-per-click-marketing') }}">Pay Per Click Marketing</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/content-marketing') }}">Content Marketing</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/website-development-services') }}">Website Development Services</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End / Menu -->
                        </div>

                        <div class="hb-header__right display-flex">
                            <div class="hb-header__button display-flex hb-align-items-center">
                                <a href="{{ url('contact-us') }}" class="hb-btn hb-btn--round hb-btn--primary">CONTACT US</a>
                            </div>

                            <div id="hb-header__icon-bar" class="hb-header__icon hb-header__icon-bar display-flex hb-align-items-center">
                                <a href="#" class="hb-header__icon-inner" data-has-action="hb-header-navigation-mobile">
                                    <i class="hb_icon_bar"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Mobile -->
                <div class="hb-header-navigation-mobile box-shadow" data-action="hb-header-navigation-mobile">
                    <div class="hb-header__nav-mobile per-scrollbar">
                        <div class="container">
                            <nav class="hb-menu-dropdown">
                                <ul id="menu-main-1" class="hb-menu-list">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-9">
                                        <a href="{{ url('/') }}" aria-current="page">Home</a>
                                    </li>
                                    <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12">
                                        <a href="#">Countries</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12">
                                            <a href="#">India</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a href="{{ url('contact-us') }}">Organic Growth Strategy</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/social-media-marketing') }}">Social Media Marketing</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/pay-per-click-marketing') }}">Pay Per Click Marketing</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/content-marketing') }}">Content Marketing</a></li>
                                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="{{ url('india/website-development-services') }}">Website Development Services</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- End / Navigation Mobile -->
            </header>
            <!-- End / Header -->
            @endsection