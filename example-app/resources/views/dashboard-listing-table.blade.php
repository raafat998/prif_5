@extends('layouts.main')

@section('title', 'dashboard-listing-table ')

@section('content')

 <!-- content -->
 <div class="dashboard-content">
    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
    <div class="container dasboard-container">
        <!-- dashboard-title -->
        <div class="dashboard-title fl-wrap">
            <div class="dashboard-title-item"><span>Your Listings</span></div>
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
            <div class="dasboard-listing-box fl-wrap">
                <div class="dasboard-opt sl-opt fl-wrap">
                    <div class="dashboard-search-listing">
                        <input type="text" onclick="this.select()" placeholder="Search" value="">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </div>
                    <a href="dashboard-add-listing.html" class="gradient-bg dashboard-addnew_btn">Add New <i class="fal fa-plus"></i></a>
                    <!-- price-opt-->
                    <div class="price-opt">
                        <span class="price-opt-title">Sort   by:</span>
                        <div class="listsearch-input-item">
                            <select data-placeholder="Lastes" class="chosen-select no-search-select" >
                                <option>Lastes</option>
                                <option>Oldes</option>
                                <option>Average rating</option>
                                <option>Name: A-Z</option>
                                <option>Name: Z-A</option>
                            </select>
                        </div>
                    </div>
                    <!-- price-opt end-->
                </div>
                <!-- dashboard-listings-wrap-->
                <div class="dashboard-listings-wrap fl-wrap">
                    <div class="row">
                        <!-- dashboard-listings-item-->
                        <div class="col-md-6">
                            <div class="dashboard-listings-item fl-wrap">
                                <div class="dashboard-listings-item_img">
                                    <div class="bg-wrap">
                                        <div class="bg  "  data-bg="images/all/3.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <a href="listing-single.html" class="color-bg">View</a>
                                </div>
                                <div class="dashboard-listings-item_content">
                                    <h4><a href="listing-single.html">Gorgeous House For Sale</a></h4>
                                    <div class="geodir-category-location">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i> <span>  70 Bright St New York, USA</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Good" data-starrating2="4"></div>
                                    <div class="dashboard-listings-item_opt">
                                        <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  645 </span>
                                        <ul>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Disable"><i class="far fa-signal-alt-slash"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dashboard-listings-item end-->
                        <!-- dashboard-listings-item-->
                        <div class="col-md-6">
                            <div class="dashboard-listings-item fl-wrap">
                                <div class="dashboard-listings-item_img">
                                    <div class="bg-wrap">
                                        <div class="bg  "  data-bg="images/all/1.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <a href="listing-single.html" class="color-bg">View</a>
                                </div>
                                <div class="dashboard-listings-item_content">
                                    <h4><a href="listing-single.html">Luxury Family Home</a></h4>
                                    <div class="geodir-category-location">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i> <span>    40 Journal Square  , NJ, USA</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Excellent" data-starrating2="5"></div>
                                    <div class="dashboard-listings-item_opt">
                                        <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  247 </span>
                                        <ul>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Disable"><i class="far fa-signal-alt-slash"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dashboard-listings-item end-->
                        <!-- dashboard-listings-item-->
                        <div class="col-md-6">
                            <div class="dashboard-listings-item fl-wrap">
                                <div class="dashboard-listings-item_img">
                                    <div class="bg-wrap">
                                        <div class="bg  "  data-bg="images/all/9.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <a href="listing-single.html" class="color-bg">View</a>
                                </div>
                                <div class="dashboard-listings-item_content">
                                    <h4><a href="listing-single.html">Family House for Rent</a></h4>
                                    <div class="geodir-category-location">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i> <span>   34-42 Montgomery St , NY, USA</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Good" data-starrating2="4"></div>
                                    <div class="dashboard-listings-item_opt">
                                        <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  24 </span>
                                        <ul>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Disable"><i class="far fa-signal-alt-slash"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dashboard-listings-item end-->
                        <!-- dashboard-listings-item-->
                        <div class="col-md-6">
                            <div class="dashboard-listings-item fl-wrap">
                                <div class="dashboard-listings-item_img">
                                    <div class="bg-wrap">
                                        <div class="bg  "  data-bg="images/all/6.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <a href="listing-single.html" class="color-bg">View</a>
                                </div>
                                <div class="dashboard-listings-item_content">
                                    <h4><a href="listing-single.html">Contemporary Apartment</a></h4>
                                    <div class="geodir-category-location">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i> <span>   W 85th St, New York, USA</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Excellent" data-starrating2="5"></div>
                                    <div class="dashboard-listings-item_opt">
                                        <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  921 </span>
                                        <ul>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Disable"><i class="far fa-signal-alt-slash"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dashboard-listings-item end-->
                        <!-- dashboard-listings-item-->
                        <div class="col-md-6">
                            <div class="dashboard-listings-item fl-wrap">
                                <div class="dashboard-listings-item_img">
                                    <div class="bg-wrap">
                                        <div class="bg  "  data-bg="images/all/5.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <a href="listing-single.html" class="color-bg">View</a>
                                </div>
                                <div class="dashboard-listings-item_content">
                                    <h4><a href="listing-single.html">Kayak Point House</a></h4>
                                    <div class="geodir-category-location">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i> <span>   75 Prince St, NY, USA</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Average" data-starrating2="3"></div>
                                    <div class="dashboard-listings-item_opt">
                                        <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed - 434 </span>
                                        <ul>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Disable"><i class="far fa-signal-alt-slash"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dashboard-listings-item end-->
                        <!-- dashboard-listings-item-->
                        <div class="col-md-6">
                            <div class="dashboard-listings-item fl-wrap">
                                <div class="dashboard-listings-item_img">
                                    <div class="bg-wrap">
                                        <div class="bg  "  data-bg="images/all/8.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <a href="listing-single.html" class="color-bg">View</a>
                                </div>
                                <div class="dashboard-listings-item_content">
                                    <h4><a href="listing-single.html">Urban House</a></h4>
                                    <div class="geodir-category-location">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i> <span> 70 Bright St, Jersey City, NJ USA</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Excellent" data-starrating2="5"></div>
                                    <div class="dashboard-listings-item_opt">
                                        <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  244 </span>
                                        <ul>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Disable"><i class="far fa-signal-alt-slash"></i></a></li>
                                            <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dashboard-listings-item end-->
                    </div>
                </div>
                <!-- dashboard-listings-wrap end-->
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
