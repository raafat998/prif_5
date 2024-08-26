@extends('layouts.main')

@section('title', 'Dashboard ')

@section('content')
     <!-- content -->
     <div class="dashboard-content">
        <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
        <div class="container dasboard-container">
            <!-- dashboard-title -->
            <div class="dashboard-title fl-wrap">
                <div class="dashboard-title-item"><span>Dashboard</span></div>
                <div class="dashbard-menu-header">
                    <div class="dashbard-menu-avatar fl-wrap">
                        <img src="images/avatar/5.jpg" alt="">
                        <h4>Welcome, <span>Alica Noory</span></h4>
                    </div>
                    <a href="index.html" class="log-out-btn   tolt" data-microtip-position="bottom"
                        data-tooltip="Log Out"><i class="far fa-power-off"></i></a>
                </div>
                <!--Tariff Plan menu-->
                <div class="tfp-det-container">
                    <div class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                    <div class="tfp-det">
                        <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade.
                        </p>
                        <a href="#" class="tfp-det-btn color-bg">Details</a>
                    </div>
                </div>
                <!--Tariff Plan menu end-->
            </div>
            <!-- dashboard-title end -->
            <div class="dasboard-wrapper fl-wrap no-pag">
                <div class="dashboard-stats-container fl-wrap">
                    <div class="row">
                        <!--dashboard-stats-->
                        <div class="col-md-3">
                            <div class="dashboard-stats fl-wrap">
                                <i class="fal fa-map-marked"></i>
                                <h4>Active Listings</h4>
                                <div class="dashboard-stats-count">124</div>
                            </div>
                        </div>
                        <!-- dashboard-stats end -->
                        <!--dashboard-stats-->
                        <div class="col-md-3">
                            <div class="dashboard-stats fl-wrap">
                                <i class="fal fa-chart-bar"></i>
                                <h4>Listing Views</h4>
                                <div class="dashboard-stats-count">1056<span>(<strong>+356</strong> this
                                        week)</span></div>
                            </div>
                        </div>
                        <!-- dashboard-stats end -->
                        <!--dashboard-stats-->
                        <div class="col-md-3">
                            <div class="dashboard-stats fl-wrap">
                                <i class="fal fa-comments-alt"></i>
                                <h4>Your Reviews</h4>
                                <div class="dashboard-stats-count">357<span>(<strong>+12</strong> this
                                        week)</span></div>
                            </div>
                        </div>
                        <!-- dashboard-stats end -->
                        <!--dashboard-stats-->
                        <div class="col-md-3">
                            <div class="dashboard-stats fl-wrap">
                                <i class="fal fa-heart"></i>
                                <h4>Times Bookmarked</h4>
                                <div class="dashboard-stats-count">2329<span>(<strong>+234</strong> this
                                        week)</span></div>
                            </div>
                        </div>
                        <!-- dashboard-stats end -->
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="notification success-notif  fl-wrap">
                            <p>Your listing <a href="#">Family house in Brooklyn</a> has been approved!</p>
                            <a class="notification-close" href="#"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="dashboard-widget-title fl-wrap">Your Statistic</div>
                        <div class="dasboard-content fl-wrap">
                            <!-- chart-wra-->
                            <div class="chart-wrap   fl-wrap">
                                <div class="chart-header fl-wrap">
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Week" class="chosen-select no-search-select">
                                            <option>Week</option>
                                            <option>Month</option>
                                            <option>Year</option>
                                        </select>
                                    </div>
                                    <div id="myChartLegend"></div>
                                </div>
                                <canvas id="canvas-chart"></canvas>
                            </div>
                            <!--chart-wrap end-->
                        </div>
                        <div class="dashboard-widget-title fl-wrap">Last Activites</div>
                        <div class="dashboard-list-box  fl-wrap">
                            <!-- dashboard-list end-->
                            <div class="dashboard-list fl-wrap">
                                <div class="dashboard-message">
                                    <span class="close-dashboard-item color-bg"><i
                                            class="fal fa-times"></i></span>
                                    <div class="main-dashboard-message-icon color-bg"><i
                                            class="far fa-check"></i></div>
                                    <div class="main-dashboard-message-text">
                                        <p>Your listing <a href="#">Urban Appartmes</a> has been approved! </p>
                                    </div>
                                    <div class="main-dashboard-message-time"><i
                                            class="fal fa-calendar-week"></i> 28 may 2020</div>
                                </div>
                            </div>
                            <!-- dashboard-list end-->
                            <!-- dashboard-list end-->
                            <div class="dashboard-list fl-wrap">
                                <div class="dashboard-message">
                                    <span class="close-dashboard-item color-bg"><i
                                            class="fal fa-times"></i></span>
                                    <div class="main-dashboard-message-icon color-bg"><i
                                            class="fal fa-comment-alt"></i></div>
                                    <div class="main-dashboard-message-text">
                                        <p> Someone left a review on <a href="#">Park Central</a> listing!</p>
                                    </div>
                                    <div class="main-dashboard-message-time"><i
                                            class="fal fa-calendar-week"></i> 28 may 2020</div>
                                </div>
                            </div>
                            <!-- dashboard-list end-->
                            <!-- dashboard-list end-->
                            <div class="dashboard-list fl-wrap">
                                <div class="dashboard-message">
                                    <span class="close-dashboard-item color-bg"><i
                                            class="fal fa-times"></i></span>
                                    <div class="main-dashboard-message-icon color-bg"><i
                                            class="far fa-heart"></i></div>
                                    <div class="main-dashboard-message-text">
                                        <p><a href="#">Fider Mamby</a> bookmarked your <a href="#">Holiday
                                                Home</a> listing!</p>
                                    </div>
                                    <div class="main-dashboard-message-time"><i
                                            class="fal fa-calendar-week"></i> 28 may 2020</div>
                                </div>
                            </div>
                            <!-- dashboard-list end-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--box-widget-->
                        <div class="dasboard-widget fl-wrap">
                            <div class="dasboard-widget-title fl-wrap">
                                <h5><i class="fas fa-comment-alt"></i>Last Messages</h5>
                            </div>
                            <div class="chat-contacts fl-wrap">
                                <!-- chat-contacts-item-->
                                <a class="chat-contacts-item" href="#">
                                    <div class="dashboard-message-avatar">
                                        <img src="images/avatar/2.jpg" alt="">
                                        <div class="message-counter">2</div>
                                    </div>
                                    <div class="chat-contacts-item-text">
                                        <h4>Mark Rose</h4>
                                        <span>27 Dec 2018 </span>
                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut
                                            feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id
                                            ultrices sed, accumsan sed dolor.</p>
                                    </div>
                                </a>
                                <!-- chat-contacts-item -->
                                <!-- chat-contacts-item-->
                                <a class="chat-contacts-item" href="#">
                                    <div class="dashboard-message-avatar">
                                        <img src="images/avatar/1.jpg" alt="">
                                        <div class="message-counter">1</div>
                                    </div>
                                    <div class="chat-contacts-item-text">
                                        <h4>Adam Koncy</h4>
                                        <span>27 Dec 2018 </span>
                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut
                                            feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id
                                            ultrices sed, accumsan sed dolor.</p>
                                    </div>
                                </a>
                                <!-- chat-contacts-item -->
                                <!-- chat-contacts-item-->
                                <a class="chat-contacts-item chat-contacts-item_active" href="#">
                                    <div class="dashboard-message-avatar">
                                        <img src="images/avatar/3.jpg" alt="">
                                        <div class="message-counter">3</div>
                                    </div>
                                    <div class="chat-contacts-item-text">
                                        <h4>Andy Smith</h4>
                                        <span>27 Dec 2018 </span>
                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut
                                            feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id
                                            ultrices sed, accumsan sed dolor.</p>
                                    </div>
                                </a>
                                <!-- chat-contacts-item -->
                                <!-- chat-contacts-item-->
                                <a class="chat-contacts-item" href="#">
                                    <div class="dashboard-message-avatar">
                                        <img src="images/avatar/5.jpg" alt="">
                                        <div class="message-counter">4</div>
                                    </div>
                                    <div class="chat-contacts-item-text">
                                        <h4>Joe Frick</h4>
                                        <span>27 Dec 2018 </span>
                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut
                                            feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id
                                            ultrices sed, accumsan sed dolor.</p>
                                    </div>
                                </a>
                                <!-- chat-contacts-item -->
                                <!-- chat-contacts-item-->
                                <a class="chat-contacts-item" href="#">
                                    <div class="dashboard-message-avatar">
                                        <img src="images/avatar/4.jpg" alt="">
                                    </div>
                                    <div class="chat-contacts-item-text">
                                        <h4>Alise Goovy</h4>
                                        <span>27 Dec 2018 </span>
                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut
                                            feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id
                                            ultrices sed, accumsan sed dolor.</p>
                                    </div>
                                </a>
                                <!-- chat-contacts-item -->
                                <!-- chat-contacts-item-->
                                <a class="chat-contacts-item" href="#">
                                    <div class="dashboard-message-avatar">
                                        <img src="images/avatar/6.jpg" alt="">
                                    </div>
                                    <div class="chat-contacts-item-text">
                                        <h4>Cristiano Olando</h4>
                                        <span>27 Dec 2018 </span>
                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut
                                            feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id
                                            ultrices sed, accumsan sed dolor.</p>
                                    </div>
                                </a>
                                <!-- chat-contacts-item -->
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="banner-widget fl-wrap">
                                <div class="bg-wrap bg-parallax-wrap-gradien">
                                    <div class="bg  " data-bg="images/all/blog/1.jpg"></div>
                                </div>
                                <div class="banner-widget_content">
                                    <h5>Participate in our loyalty program. Refer a friend and get a discount.
                                    </h5>
                                    <a href="#" class="btn float-btn color-bg small-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                    </div>
                </div>
            </div>
        </div>
@endsection

