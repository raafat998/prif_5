@extends('layouts.main')

@section('title', 'dashboard-listing-table ')


@section('content')
<!-- content -->
<div class="dashboard-content">
    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
    <div class="container dasboard-container">
        <!-- dashboard-title -->
        <div class="dashboard-title fl-wrap">
            <div class="dashboard-title-item"><span>Bookings</span></div>
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
                <h5><i class="fal fa-comments-alt"></i>Last Bookings <span> ( +3 New ) </span></h5>
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
                            </select>
                        </div>
                    </div>
                    <!-- price-opt end-->
                </div>
                <div class="row">
                    <!-- bookings-item -->
                    <div class="col-md-6">
                        <div class="bookings-item fl-wrap">
                            <div class="bookings-item-header fl-wrap">
                                <img src="images/all/2.jpg" alt="">
                                <h4>For <a href="listing-single.html" target="_blank">Gorgeous house for sale</a></h4>
                                <span class="new-bookmark">New</span>
                            </div>
                            <div class="bookings-item-content fl-wrap">
                                <ul>
                                    <li>Name: <span>Andy Smith</span></li>
                                    <li>Phone: <span>+7(123)987654</span></li>
                                    <li>Date: <span>18.05.2021</span></li>
                                    <li>Time: <span>12 AM</span></li>
                                </ul>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="bookings-item-footer fl-wrap">
                                <span class="message-date">12 December 2020</span>
                                <ul>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-envelope"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Call"><i class="far fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--bookings-item end-->
                    <!-- bookings-item -->
                    <div class="col-md-6">
                        <div class="bookings-item fl-wrap">
                            <div class="bookings-item-header fl-wrap">
                                <img src="images/all/1.jpg" alt="">
                                <h4>For <a href="listing-single.html" target="_blank">Luxury Family Home</a></h4>
                                <span class="new-bookmark">New</span>
                            </div>
                            <div class="bookings-item-content fl-wrap">
                                <ul>
                                    <li>Name: <span>Adam Forser</span></li>
                                    <li>Phone: <span>+7(123)987654</span></li>
                                    <li>Date: <span>28.05.2020</span></li>
                                    <li>Time: <span>10 AM</span></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut.</p>
                            </div>
                            <div class="bookings-item-footer fl-wrap">
                                <span class="message-date">05 October 2020</span>
                                <ul>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-envelope"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Call"><i class="far fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--bookings-item end-->
                    <!-- bookings-item -->
                    <div class="col-md-6">
                        <div class="bookings-item fl-wrap">
                            <div class="bookings-item-header fl-wrap">
                                <img src="images/all/4.jpg" alt="">
                                <h4>For <a href="listing-single.html" target="_blank">Kayak Point House</a></h4>
                            </div>
                            <div class="bookings-item-content fl-wrap">
                                <ul>
                                    <li>Name: <span>Jessie Wilcox</span></li>
                                    <li>Phone: <span>+7(123)987654</span></li>
                                    <li>Date: <span>14.05.2020</span></li>
                                    <li>Time: <span>5 PM</span></li>
                                </ul>
                                <p>Consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut.</p>
                            </div>
                            <div class="bookings-item-footer fl-wrap">
                                <span class="message-date">25 May 2020</span>
                                <ul>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-envelope"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Call"><i class="far fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--bookings-item end-->
                    <!-- bookings-item -->
                    <div class="col-md-6">
                        <div class="bookings-item fl-wrap">
                            <div class="bookings-item-header fl-wrap">
                                <img src="images/all/3.jpg" alt="">
                                <h4>For <a href="listing-single.html" target="_blank">Urban House</a></h4>
                                <span class="new-bookmark">New</span>
                            </div>
                            <div class="bookings-item-content fl-wrap">
                                <ul>
                                    <li>Name: <span>Adam Forser</span></li>
                                    <li>Phone: <span>+7(123)987654</span></li>
                                    <li>Date: <span>28.05.2020</span></li>
                                    <li>Time: <span>10 AM</span></li>
                                </ul>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="bookings-item-footer fl-wrap">
                                <span class="message-date">12 December 2020</span>
                                <ul>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-envelope"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Call"><i class="far fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--bookings-item end-->
                </div>
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

@endsection
