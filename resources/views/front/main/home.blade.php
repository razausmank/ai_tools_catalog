<x-front-master title="Home">

<!--================================MAP SECTION==========================================-->

<section id="map-section" style="background: black; height: 220px">
    <div id="wrapper">
        <div id="map_canvas">
            <h5>placeholder</h5>

        </div>
    </div>
</section>


<!--================================SEARCH FORM SECTION ==========================================-->

<section id="search-form">
    <div class="container">
        <div class="search-form-wrap">
            <form class="clearfix" action="#">
                <div class="input-field-wrap pull-left">
                    <input class="search-form-input" name="key-word" placeholder="enter keyword" type="text"/>
                </div>
                <div class="select-field-wrap pull-left">
                    <select class="search-form-select" name="location" >
                        <option class="options" value="all-locations">all locations</option>
                        <option class="options" value="america">America</option>
                        <option class="options" value="canada">Canada</option>
                        <option class="options" value="france">France</option>
                        <option class="options" value="germane ">germane</option>
                        <option class="options" value="russia">Russia</option>
                        <option class="options" value="china">china</option>
                    </select>
                </div>
                <div class="select-field-wrap pull-left">
                    <select class="search-form-select" name="categories" >
                        <option class="options" value="0">All Categories</option>
                        @foreach ($categories as $category)
                            <option class="options" value="{{ $category->id }}}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="submit-field-wrap pull-left">
                    <input class="search-form-submit bgyallow-1 white" name="key-word" type="submit"/>
                </div>
            </form>
        </div>
    </div>
</section>



<!--================================CATEGOTY SECTION==========================================-->

<section class="aside-layout-section padding-bottom-40">
    <div class="container"><!-- section container -->
        <div class="row"><!-- row -->
            <div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                <div class="listing-section">
                    <div class=""><!-- section container -->
                        <div class="add-listing-wrapper">
                            <div class="add-listing-nav shadow-1">
                                <div class="row clearfix">
                                    <div class="col-md-9 col-sm-9 col-xs-9 pull-left">
                                        <div class="listing-tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#latest-listing">Latest ads</a></li>
                                                <li><a data-toggle="tab" href="#recent-listing">Recent ads</a></li>
                                                <li><a data-toggle="tab" href="#popular-listing">popular ads</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
                                        <div class="view-switcher">
                                            <ul>
                                                <li class="gridview"><i class="fa fa-th"></i></li>
                                                <li class="listview active"><i class="fa fa-th-list"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-main listview tab-content padding-top-30">
                                    <div id="latest-listing" class="tab-pane active">
                                        <div class="listing-wrapper three-column row">
                                            @foreach ($products as $product)
                                                <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                    <div class="listing-item clearfix">
                                                        <div class="figure">
                                                            <img src="{{ asset('frontend_theme_assets/images/listings/270x220/01.jpg') }}" alt="listing item"/>
                                                            <div class="listing-overlay">
                                                                <div class="listing-overlay-inner rgba-bgyallow-1">
                                                                    <div class="overlay-content">
                                                                        <ul class="listing-links">
                                                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="listing-content clearfix">
                                                            <div class="listing-meta-cat">
                                                                <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                                            </div>
                                                            <div class="listing-title">
                                                                <h6><a href="single-listing.html">{{ $product->name }}</a></h6>
                                                            </div>
                                                            <div class="listing-disc">
                                                                <p>{{$product->short_description}}</p>
                                                            </div>
                                                            <div class="listing-location pull-left"><!-- location-->
                                                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                                <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                            </div><!-- location end-->
                                                            <div class="star-rating pull-right"><!-- rating-->
                                                                <div class="score-callback" data-score="5"></div>
                                                            </div><!-- rating end-->
                                                        </div>
                                                    </div>
                                                    <div class="listing-border-bottom bgyallow-1"></div>
                                                </div><!-- /.ITEM -->
                                            @endforeach

                                            {{-- <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/02.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgblue-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Doctor Available</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgblue-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/03.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bggreen-2">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">SALE MY Property</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bggreen-2"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/05.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgorange-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Meeting partner</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgorange-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/06.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bggreen-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bggreen-1" href="#"><i class="fa fa-plane white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bggreen-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/07.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgpurpal-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgred-1" href="#"><i class="fa fa-cutlery  white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">I need some food</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgred-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/08.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgorange-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgbrown-1" href="#"><i class="fa fa-paw white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">i love my pet</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgbrown-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/04.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgpurpal-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgpurpal-1" href="#"><i class="fa fa-eye white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Beauty & Spas</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgpurpal-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/09.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgblue-3">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgblue-3" href="#"><i class="fa fa-wrench white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgblue-3"></div>
                                            </div><!-- /.ITEM --> --}}
                                        </div>
                                    </div>
                                    <div id="recent-listing" class="tab-pane">
                                        <div class="listing-wrapper three-column row">
                                            @foreach ($products as $product)
                                                <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                    <div class="listing-item clearfix">
                                                        <div class="figure">
                                                            <img src="{{ asset('frontend_theme_assets/images/listings/270x220/01.jpg') }}" alt="listing item"/>
                                                            <div class="listing-overlay">
                                                                <div class="listing-overlay-inner rgba-bgyallow-1">
                                                                    <div class="overlay-content">
                                                                        <ul class="listing-links">
                                                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                            <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                            <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="listing-content clearfix">
                                                            <div class="listing-meta-cat">
                                                                <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                                            </div>
                                                            <div class="listing-title">
                                                                <h6><a href="single-listing.html">{{ $product->name }}</a></h6>
                                                            </div>
                                                            <div class="listing-disc">
                                                                <p>{{ $product->short_description }}</p>
                                                            </div>
                                                            <div class="listing-location pull-left"><!-- location-->
                                                                <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                                <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                            </div><!-- location end-->
                                                            <div class="star-rating pull-right"><!-- rating-->
                                                                <div class="score-callback" data-score="5"></div>
                                                            </div><!-- rating end-->
                                                        </div>
                                                    </div>
                                                    <div class="listing-border-bottom bgyallow-1"></div>
                                                </div><!-- /.ITEM -->
                                            @endforeach

                                            {{-- <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/02.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgblue-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Doctor Available</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgblue-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/03.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bggreen-2">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">SALE MY Property</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bggreen-2"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/05.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgorange-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Meeting partner</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgorange-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/06.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bggreen-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bggreen-1" href="#"><i class="fa fa-plane white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bggreen-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/07.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgpurpal-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgred-1" href="#"><i class="fa fa-cutlery  white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">I need some food</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgred-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/08.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgorange-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgbrown-1" href="#"><i class="fa fa-paw white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">i love my pet</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgbrown-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/04.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgpurpal-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgpurpal-1" href="#"><i class="fa fa-eye white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Beauty & Spas</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgpurpal-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/09.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgblue-3">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgblue-3" href="#"><i class="fa fa-wrench white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgblue-3"></div>
                                            </div><!-- /.ITEM --> --}}
                                        </div>
                                    </div>
                                    <div id="popular-listing" class="tab-pane">
                                        <div class="listing-wrapper three-column row">
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/01.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgyallow-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Looking for a job</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgyallow-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/02.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgblue-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Doctor Available</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgblue-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/03.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bggreen-2">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">SALE MY Property</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bggreen-2"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/05.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgorange-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Meeting partner</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgorange-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/06.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bggreen-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bggreen-1" href="#"><i class="fa fa-plane white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bggreen-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/07.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgpurpal-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgred-1" href="#"><i class="fa fa-cutlery  white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">I need some food</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgred-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/08.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgorange-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgbrown-1" href="#"><i class="fa fa-paw white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">i love my pet</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgbrown-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/04.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgpurpal-1">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgpurpal-1" href="#"><i class="fa fa-eye white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Beauty & Spas</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgpurpal-1"></div>
                                            </div><!-- /.ITEM -->
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">
                                                        <img src="{{ asset('frontend_theme_assets/images/listings/270x220/09.jpg') }}" alt="listing item"/>
                                                        <div class="listing-overlay">
                                                            <div class="listing-overlay-inner rgba-bgblue-3">
                                                                <div class="overlay-content">
                                                                    <ul class="listing-links">
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                                                        <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-content clearfix">
                                                        <div class="listing-meta-cat">
                                                            <a class="bgblue-3" href="#"><i class="fa fa-wrench white"></i></a>
                                                        </div>
                                                        <div class="listing-title">
                                                            <h6><a href="single-listing.html">Hotels & Travel</a></h6>
                                                        </div>
                                                        <div class="listing-disc">
                                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                                                        </div>
                                                        <div class="listing-location pull-left"><!-- location-->
                                                            <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                                                            <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                                                        </div><!-- location end-->
                                                        <div class="star-rating pull-right"><!-- rating-->
                                                            <div class="score-callback" data-score="5"></div>
                                                        </div><!-- rating end-->
                                                    </div>
                                                </div>
                                                <div class="listing-border-bottom bgblue-3"></div>
                                            </div><!-- /.ITEM -->
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- section container end -->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12"><!-- sidebar column -->
                <div class="sidebar sidebar-wrap">
                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bgyallow-1"></span>category list</h5>
                        </div>
                        <div class="sidebar-widget-content category-widget clearfix">
                            <div class="sidebar-category-widget-wrap">
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart bgblue-1 white"></i> Health & fitness <span>(8)</span></a></li>
                                    <li><a href="#"><i class="fa fa-plane bggreen-1 white"></i> Hotels & Travel <span>(5)</span></a></li>
                                    <li><a href="#"><i class="fa fa-eye bgpurpal-1 white"></i> Beauty & Spas <span>(7)</span></a></li>
                                    <li><a href="#"><i class="fa fa-suitcase bgyallow-1 white"></i> Jobs<span>(5)</span></a></li>
                                    <li><a href="#"><i class="fa fa-wrench bgblue-3 white"></i> Home Services <span>(2)</span></a></li>
                                    <li><a href="#"><i class="fa fa-female bgorange-1 white"></i> entertainment <span>(4)</span></a></li>
                                    <li><a href="#"><i class="fa fa-home bggreen-2 white"></i> real estate<span>(5)</span></a></li>
                                    <li><a href="#"><i class="fa fa-cutlery bgred-1 white"></i> food <span>(8)</span></a></li>
                                    <li><a href="#"><i class="fa fa-github bgbrown-1 white"></i> pets <span>(5)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bgpurpal-1"></span>location list</h5>
                        </div>
                        <div class="sidebar-widget-content location-widget clearfix">
                            <div class="sidebar-location-widget-wrap">
                                <ul>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> new york <span>(4)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> Kansas <span>(6)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> Nevada <span>(8)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> New Mexico<span>(4)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> South Carolina <span>(4)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> West Virginina <span>(6)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> Holloway<span>(8)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> Broomley <span>(4)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> Lankashire<span>(4)</span></a></li>
                                    <li><a class="nohover" href="#"><i class="fa fa-map-marker blue-1"></i> Manchester<span>(6)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget shadow-1">
                        <div class="sidebar-widget-title">
                            <h5><span class="bggreen-2"></span>Item tags</h5>
                        </div>
                        <div class="sidebar-widget-content tags  clearfix">
                            <div class="sidebar-tag-cloud">
                                <ul>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">Marriage</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">car</a></li>
                                    <li><a href="#">house</a></li>
                                    <li><a href="#">events</a></li>
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">job</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- section container end -->
</section>


</x-front-master>
