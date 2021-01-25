@extends('frontend.layouts.app')

@section('content')
<div class="ps-panel--sidebar" id="navigation-mobile">
    <div class="ps-panel__header">
        <h3>Categories</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">
            <li class="current-menu-item "><a href="#">Hot Promotions</a>
            </li>
            <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Electronic<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                            </li>
                            <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Headphones</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Videosgames</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Office Electronic</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="#">Digital Cables</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Batteries</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="current-menu-item "><a href="#">Clothing &amp; Apparel</a>
            </li>
            <li class="current-menu-item "><a href="#">Home, Garden &amp; Kitchen</a>
            </li>
            <li class="current-menu-item "><a href="#">Health &amp; Beauty</a>
            </li>
            <li class="current-menu-item "><a href="#">Yewelry &amp; Watches</a>
            </li>
            <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Laptop</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Monitors</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Networking</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Computer Components</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                            </li>
                            <li class="current-menu-item "><a href="#">Accessories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="current-menu-item "><a href="#">Babies &amp; Moms</a>
            </li>
            <li class="current-menu-item "><a href="#">Sport &amp; Outdoor</a>
            </li>
            <li class="current-menu-item "><a href="#">Phones &amp; Accessories</a>
            </li>
            <li class="current-menu-item "><a href="#">Books &amp; Office</a>
            </li>
            <li class="current-menu-item "><a href="#">Cars &amp; Motocycles</a>
            </li>
            <li class="current-menu-item "><a href="#">Home Improments</a>
            </li>
            <li class="current-menu-item "><a href="#">Vouchers &amp; Services</a>
            </li>
        </ul>
    </div>
</div>


<div class="navigation--list">
    <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
</div>

<div class="ps-panel--sidebar" id="search-sidebar">
    <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="http://nouthemes.net/html/martfury/index.html" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Search something...">
                <button><i class="icon-magnifier"></i></button>
            </div>
        </form>
    </div>
    <div class="navigation__content"></div>
</div>


<div class="ps-panel--sidebar" id="menu-mobile">
    <div class="ps-panel__header">
        <h3>Menu</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">
            <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                <ul class="sub-menu">
                    <li class="current-menu-item "><a href="index.html">Marketplace Full Width</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
                    </li>
                    <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                    </li>
                    <li class="current-menu-item "><a href="home-medical.html">Home Medical</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                            </li>
                            <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                            </li>
                            <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                            </li>
                            <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                            </li>
                            <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                            </li>
                            <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Product Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="product-default.html">Default</a>
                            </li>
                            <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                            </li>
                            <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                            </li>
                            <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                            </li>
                            <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                            </li>
                            <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Product Types<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="product-default.html">Simple</a>
                            </li>
                            <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                            </li>
                            <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                            </li>
                            <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                            </li>
                            <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                            </li>
                            <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                            </li>
                            <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                            </li>
                            <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                            </li>
                            <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                            </li>
                            <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                            </li>
                            <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Woo Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                            </li>
                            <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                            </li>
                            <li class="current-menu-item "><a href="compare.html">Compare</a>
                            </li>
                            <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                            </li>
                            <li class="current-menu-item "><a href="my-account.html">My Account</a>
                            </li>
                            <li class="current-menu-item "><a href="checkout-2.html">Checkout 2</a>
                            </li>
                            <li class="current-menu-item "><a href="shipping.html">Shipping</a>
                            </li>
                            <li class="current-menu-item "><a href="payment.html">Payment</a>
                            </li>
                            <li class="current-menu-item "><a href="payment-success.html">Payment Success</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Basic Page<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="about-us.html">About Us</a>
                            </li>
                            <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                            </li>
                            <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                            </li>
                            <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                            </li>
                            <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                            </li>
                            <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                            </li>
                            <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                            </li>
                            <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                            </li>
                            <li class="current-menu-item "><a href="store-list.html">Store List</a>
                            </li>
                            <li class="current-menu-item "><a href="store-list.html">Store List 2</a>
                            </li>
                            <li class="current-menu-item "><a href="store-detail.html">Store Detail</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Account Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="user-information.html">User Information</a>
                            </li>
                            <li class="current-menu-item "><a href="addresses.html">Addresses</a>
                            </li>
                            <li class="current-menu-item "><a href="invoices.html">Invoices</a>
                            </li>
                            <li class="current-menu-item "><a href="invoice-detail.html">Invoice Detail</a>
                            </li>
                            <li class="current-menu-item "><a href="notifications.html">Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Blog Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Single Blog<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                            </li>
                            <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Shop</li>
        </ul>
    </div>
</div>


<div class="ps-page--shop">
    <div class="ps-container">
        <div class="ps-shop-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="#"><img src="{{asset('frontend')}}/img/slider/shop-default/1.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/slider/shop-default/2.jpg" alt=""></a></div>
        </div>
        {{-- <div class="ps-shop-brand"><a href="#"><img src="{{asset('frontend')}}/img/brand/1.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/2.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/3.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/4.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/5.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/6.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/7.jpg" alt=""></a><a href="#"><img src="{{asset('frontend')}}/img/brand/8.jpg" alt=""></a></div> --}}
        {{-- <div class="ps-shop-categories">
            <div class="row align-content-lg-stretch">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/1.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Clothing &amp; Apparel</h4>
                            <ul>
                                <li><a href="shop-default.html">Accessories</a></li>
                                <li><a href="shop-default.html">Bags</a></li>
                                <li><a href="shop-default.html">Kid's Fashion</a></li>
                                <li><a href="shop-default.html">Mens</a></li>
                                <li><a href="shop-default.html">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/2.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Garden &amp; Kitchen</h4>
                            <ul>
                                <li><a href="shop-default.html">Cookware</a></li>
                                <li><a href="shop-default.html">Decoration</a></li>
                                <li><a href="shop-default.html">Furniture</a></li>
                                <li><a href="shop-default.html">Garden Tools</a></li>
                                <li><a href="shop-default.html">Home Improvement</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/3.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Consumer Electrics</h4>
                            <ul>
                                <li><a href="shop-default.html">Air Conditioners</a></li>
                                <li><a href="shop-default.html">Audios &amp; Theaters</a></li>
                                <li><a href="shop-default.html">Car Electronics</a></li>
                                <li><a href="shop-default.html">Office Electronics</a></li>
                                <li><a href="shop-default.html">Refrigerations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/4.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Health &amp; Beauty</h4>
                            <ul>
                                <li><a href="shop-default.html">Equipments</a></li>
                                <li><a href="shop-default.html">Hair Care</a></li>
                                <li><a href="shop-default.html">Perfumer</a></li>
                                <li><a href="shop-default.html">Skin Care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/5.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Computers &amp; Technologies</h4>
                            <ul>
                                <li><a href="shop-default.html">Desktop PC</a></li>
                                <li><a href="shop-default.html">Laptop</a></li>
                                <li><a href="shop-default.html">Smartphones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/6.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Jewelry &amp; Watches</h4>
                            <ul>
                                <li><a href="shop-default.html">Gemstones Jewelry</a></li>
                                <li><a href="shop-default.html">Men's Watches</a></li>
                                <li><a href="shop-default.html">Women's Watches</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/7.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Phone &amp; Accessories</h4>
                            <ul>
                                <li><a href="shop-default.html">Iphone 8</a></li>
                                <li><a href="shop-default.html">Iphone X</a></li>
                                <li><a href="shop-default.html">Samsung Note 8</a></li>
                                <li><a href="shop-default.html">Samsung S8</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{asset('frontend')}}/img/categories/shop/8.jpg" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Sport &amp; Outdoor</h4>
                            <ul>
                                <li><a href="shop-default.html">Freezer Burn</a></li>
                                <li><a href="shop-default.html">Frigde Cooler</a></li>
                                <li><a href="shop-default.html">Wine Cabinets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="ps-layout--shop">
            <div class="ps-layout__left">
                <aside class="widget widget_shop">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="ps-list--categories">

                        @forelse ($categories as $category)
                        <li class="current-menu-item menu-item-has-children"><a href="javascript:void(0);" onclick="productByCat({{$category->id}});">{{$category->name}}</a><span class="sub-toggle"> </span>  
                        </li>
                        @empty
                            <h3>There is no Category</h3>
                        @endforelse


                        </li>
                    </ul>
                </aside>

                {{-- <aside class="widget widget_shop">
                    <h4 class="widget-title">BY BRANDS</h4>
                    <form class="ps-form--widget-search" action="http://nouthemes.net/html/martfury/do_action" method="get">
                        <input class="form-control" type="text" placeholder="">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                    <figure class="ps-custom-scrollbar" data-height="250">
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-1" name="brand">
                            <label for="brand-1">Adidas (3)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-2" name="brand">
                            <label for="brand-2">Amcrest (1)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-3" name="brand">
                            <label for="brand-3">Apple (2)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-4" name="brand">
                            <label for="brand-4">Asus (19)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-5" name="brand">
                            <label for="brand-5">Baxtex (20)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-6" name="brand">
                            <label for="brand-6">Adidas (11)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-7" name="brand">
                            <label for="brand-7">Casio (9)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-8" name="brand">
                            <label for="brand-8">Electrolux (0)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-9" name="brand">
                            <label for="brand-9">Gallaxy (0)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-10" name="brand">
                            <label for="brand-10">Samsung (0)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-11" name="brand">
                            <label for="brand-11">Sony (0)</label>
                        </div>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div id="nonlinear"></div>
                        <p class="ps-slider__meta">Price:<span class="ps-slider__value">$<span class="ps-slider__min"></span></span>-<span class="ps-slider__value">$<span class="ps-slider__max"></span></span></p>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-1" name="review">
                            <label for="review-1"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i></span><small>(13)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-2" name="review">
                            <label for="review-2"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i></span><small>(13)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-3" name="review">
                            <label for="review-3"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-4" name="review">
                            <label for="review-4"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-5" name="review">
                            <label for="review-5"><span><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(1)</small></label>
                        </div>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Color</h4>
                        <div class="ps-checkbox ps-checkbox--color color-1 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-1" name="size">
                            <label for="color-1"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-2 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-2" name="size">
                            <label for="color-2"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-3 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-3" name="size">
                            <label for="color-3"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-4 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-4" name="size">
                            <label for="color-4"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-5 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-5" name="size">
                            <label for="color-5"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-6 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-6" name="size">
                            <label for="color-6"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-7 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-7" name="size">
                            <label for="color-7"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-8 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-8" name="size">
                            <label for="color-8"></label>
                        </div>
                    </figure>
                    <figure class="sizes">
                        <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                    </figure>
                </aside> --}}
            </div>
            <div class="ps-layout__right">

                {{-- <div class="ps-block--shop-features">
                    <div class="ps-block__header">
                        <h3>Recommended Items</h3>
                        <div class="ps-block__navigation"><a class="ps-carousel__prev" href="#recommended"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href="#recommended"><i class="icon-chevron-right"></i></a></div>
                    </div>
                    <div class="ps-block__content">
                        <div class="owl-slider" id="recommended" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/1.jpg" alt=""></a>
                                    <div class="ps-product__badge">-37%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                        <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/2.jpg" alt=""></a>
                                    <div class="ps-product__badge">-37%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                        <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/3.jpg" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                        <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/4.jpg" alt=""></a>
                                    <div class="ps-product__badge">-46%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/5.jpg" alt=""></a>
                                    <div class="ps-product__badge">-46%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/6.jpg" alt=""></a>
                                    <div class="ps-product__badge">-28%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/recommended/7.jpg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$599.00</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <p class="ps-product__price">$599.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="ps-shopping ps-tab-root">
                    <div class="ps-shopping__header">
                        <p><strong> {{$count? $count: ''}} </strong> Products found</p>
                        <div class="ps-shopping__actions">
                            {{-- <select class="ps-select" data-placeholder="Sort Items">
                                <option>Sort by latest</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select> --}}
                            {{-- <div class="ps-shopping__view">
                                <p>View</p>
                                <ul class="ps-tab-list">
                                    <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                    <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="tab-1">
                            <div class="ps-shopping-product">
                                <div class="row"  id="product"> 
                                    @forelse ($products as $product)
                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail">
                                            <a href="{{route('frontend.single',$product->slug)}}">

                                                @php
                                                    $images = App\Models\Image::where('product_id', $product->id)->get();
                                                @endphp 
                                                <img src="{{ $images[0]->image? $images[0]->image : ''}}" alt="{{$product->name}}">
                                            </a>

                                            </div>
                                            <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="{{route('frontend.single',$product->slug)}}">{{$product->name}}</a>
                                                    <p class="ps-product__price"></p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{route('frontend.single',$product->slug)}}">{{$product->name}}</a>
                                                    <p class="ps-product__price"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @empty
                                    <h2 class="text-center text-gender">There is no product</h2>
                                    @endforelse




                                    {{-- <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend')}}/img/products/shop/2.jpg" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price">$42.99 - $60.00</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                    <p class="ps-product__price">$42.99 - $60.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>

                                {{-- {!! $products->render() !!} --}}
                            </div>

                            <div class="ps-pagination">
                                <ul class="pagination">
                                    {{ $products->links() }}
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="shop-filter-lastest" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action" href="#">Sort by</a><a class="list-group-item list-group-item-action" href="#">Sort by average rating</a><a class="list-group-item list-group-item-action" href="#">Sort by latest</a><a class="list-group-item list-group-item-action" href="#">Sort by price: low to high</a><a class="list-group-item list-group-item-action" href="#">Sort by price: high to low</a><a class="list-group-item list-group-item-action text-center" href="#" data-dismiss="modal"><strong>Close</strong></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Adding Loader --}}
<div id="overlay">
    <div class="loader"></div>
</div>
@include('frontend.includes.loader')
<style>#overlay .loader{display: none} </style>
@endsection 
<script>
    function productByCat(cat_id){
             
            if(cat_id){
                $('#overlay .loader').show(); 
                $.get("{{ route('category-product') }}",{id: cat_id},function(data){
                    // console.log(data)
                    $('#overlay .loader').hide();
                    $('#product').empty().html(data);
                })
            }

        }
</script>
