@extends('layouts.main')

@section('title', 'Dashboard - Reviews')

@section('content')

  <!-- content -->
  <div class="dashboard-content">
    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
    <div class="container dasboard-container">
        <!-- dashboard-title -->
        <div class="dashboard-title fl-wrap">
            <div class="dashboard-title-item"><span>Reviews</span></div>
            <div class="dashbard-menu-header">
                <div class="dashbard-menu-avatar fl-wrap">
                    <img src="images/avatar/5.jpg" alt="">
                    <h4>Welcome, <span>Alica Noory</span></h4>
                </div>
                <a href="index.html" class="log-out-btn   tolt" data-microtip-position="bottom"  data-tooltip="Log Out"><i class="far fa-power-off"></i></a>
            </div>
            <!--Tariff Plan menu-->
            <div class="tfp-det-container">
                <div   class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                <div class="tfp-det">
                    <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                    <a href="#" class="tfp-det-btn color-bg">Details</a>
                </div>
            </div>
            <!--Tariff Plan menu end-->
        </div>
        <!-- dashboard-title end -->
        <div class="dasboard-wrapper fl-wrap">
            <div class="dasboard-widget-title fl-wrap">
                <h5><i class="fal fa-comments-alt"></i>Last Reviews <span> ( +2 New ) </span></h5>
                <a href="#" class="mark-btn  tolt" data-microtip-position="bottom" data-tooltip="Mark all as read"><i class="far fa-comment-alt-check"></i> </a>
            </div>
            <div class="dasboard-widget-box fl-wrap">
                <div class="dasboard-opt fl-wrap">
                    <!-- price-opt-->
                    <div class="price-opt">
                        <span class="price-opt-title">Sort   by:</span>
                        <div class="listsearch-input-item">
                            <select data-placeholder="Lastes" class="chosen-select no-search-select" >
                                <option>Lastes</option>
                                <option>Oldes</option>
                                <option>Average rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- price-opt end-->
                </div>
                <!-- reviews-comments-item -->
                <div class="reviews-comments-item">
                    <div class="review-comments-avatar">
                        <img src="images/avatar/2.jpg" alt="">
                        <div class="review-notifer">New</div>
                    </div>
                    <div class="reviews-comments-item-text smpar">
                        <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                        <div class="show-more-snopt-tooltip bxwt">
                            <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                        </div>
                        <h4><a href="#">Liza Rose <span>For Luxury Family Home </span></a></h4>
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="3"><span class="re_stars-title">Average</span></div>
                        <div class="clearfix"></div>
                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                        <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>12 April 2020</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>6</span> </a></div>
                    </div>
                </div>
                <!--reviews-comments-item end-->
                <!-- reviews-comments-item -->
                <div class="reviews-comments-item">
                    <div class="review-comments-avatar">
                        <img src="images/avatar/3.jpg" alt="">
                        <div class="review-notifer">New</div>
                    </div>
                    <div class="reviews-comments-item-text smpar">
                        <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                        <div class="show-more-snopt-tooltip bxwt">
                            <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                        </div>
                        <h4><a href="#">Adam Koncy <span>Kayak Point House</span></a></h4>
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span class="re_stars-title">Excellent</span></div>
                        <div class="clearfix"></div>
                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                        <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>03 December 2019</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>2</span> </a></div>
                    </div>
                </div>
                <!--reviews-comments-item end-->
                <!-- reviews-comments-item -->
                <div class="reviews-comments-item">
                    <div class="review-comments-avatar">
                        <img src="images/avatar/4.jpg" alt="">
                    </div>
                    <div class="reviews-comments-item-text smpar">
                        <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                        <div class="show-more-snopt-tooltip bxwt">
                            <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                        </div>
                        <h4><a href="#">Mark Rose <span>For Gorgeous House For Sale </span></a></h4>
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span class="re_stars-title">Excellent</span></div>
                        <div class="clearfix"></div>
                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                        <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>06 December 2018</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>2</span> </a></div>
                    </div>
                </div>
                <!--reviews-comments-item end-->
            </div>
            <!-- pagination-->
            <div class="pagination float-pagination">
                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                <a href="#" >1</a>
                <a href="#" class="current-page">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
            </div>
            <!-- pagination end-->
        </div>
    </div>


<!-- content end -->

@endsection
