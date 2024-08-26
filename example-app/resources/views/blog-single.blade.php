@extends('layouts.app')

@section('title', 'Homeradar - Real Estate Listing Template')
@section('keywords', 'real estate, listing, template')
@section('description', 'Find the best real estate listings here.')

@section('content')
 <!-- content -->
 <div class="content">
    <!-- breadcrumbs-->
    <div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap   top-smpar  ">
        <div class="container">
            <div class="breadcrumbs-list">
                <a href="#">Home</a><a href="#">Blog</a> <span>Blog Single</span>
            </div>
            <div class="share-holder hid-share">
                <a href="#" class="share-btn showshare sfcs">  <i class="fas fa-share-alt"></i>  Share   </a>
                <div class="share-container  isShare"></div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs end -->
    <!-- col-list-wrap -->
    <div class="gray-bg small-padding fl-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-container fl-wrap">
                        <!-- article> -->
                        <article class="post-article fl-wrap">
                            <div class="list-single-main-media fl-wrap">
                                <div class="single-slider-wrapper carousel-wrap fl-wrap">
                                    <div class="single-slider fl-wrap carousel lightgallery"  >
                                        <!--  slick-slide-item -->
                                        <div class="slick-slide-item">
                                            <div class="box-item">
                                                <a href="images/all/blog/1.jpg" class="gal-link popup-image"><i class="fal fa-search"  ></i></a>
                                                <img src="images/all/blog/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <!--  slick-slide-item end -->
                                        <!--  slick-slide-item -->
                                        <div class="slick-slide-item">
                                            <div class="box-item">
                                                <a href="images/all/blog/2.jpg" class="gal-link popup-image"><i class="fal fa-search"  ></i></a>
                                                <img src="images/all/blog/2.jpg" alt="">
                                            </div>
                                        </div>
                                        <!--  slick-slide-item end -->
                                        <!--  slick-slide-item -->
                                        <div class="slick-slide-item">
                                            <div class="box-item">
                                                <a href="images/all/blog/3.jpg" class="gal-link popup-image"><i class="fal fa-search"  ></i></a>
                                                <img src="images/all/blog/3.jpg" alt="">
                                            </div>
                                        </div>
                                        <!--  slick-slide-item end -->
                                    </div>
                                    <div class="swiper-button-prev ssw-btn"><i class="fas fa-caret-left"></i></div>
                                    <div class="swiper-button-next ssw-btn"><i class="fas fa-caret-right"></i></div>
                                </div>
                            </div>
                            <div class="list-single-main-item fl-wrap block_box">
                                <div class="single-article-header fl-wrap">
                                    <h2 class="post-opt-title"><a href="blog-single.html">Best House to Your Family .</a></h2>
                                    <span class="fw-separator"></span>
                                    <div class="clearfix"></div>
                                    <div class="post-author"><a href="#"><img src="images/avatar/5.jpg" alt=""><span>By , Alisa Noory</span></a></div>
                                    <div class="post-opt">
                                        <ul class="no-list-style">
                                            <li><i class="fal fa-calendar"></i> <span>15 April 2019</span></li>
                                            <li><i class="fal fa-eye"></i> <span>164</span></li>
                                            <li><i class="fal fa-tags"></i> <a href="#">Shop</a> , <a href="#">Hotels</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="fw-separator fl-wrap"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
                                <p>Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et</p>
                                <blockquote>
                                    <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                </blockquote>
                                <p>Ut nec hinc dolor possim. An eros argumentum vel, elit diceret duo eu, quo et aliquid ornatus delicatissimi. Cu nam tale ferri utroque, eu habemus albucius mel, cu vidit possit ornatus eum. Eu ius postulant salutatus definitionem, an e trud erroribus explicari. Graeci viderer qui ut, at habeo facer solet usu. Pri choro pertinax indoctum ne, ad partiendo persecuti forensibus est.</p>
                                <div class="clearfix"></div>
                                <span class="fw-separator fl-wrap"></span>
                                <div class="list-single-tags tags-stylwrap">
                                    <span class="tags-title">  Tags : </span>
                                    <a href="#">Hotel</a>
                                    <a href="#">Hostel</a>
                                    <a href="#">Room</a>
                                    <a href="#">Spa</a>
                                    <a href="#">Restourant</a>
                                    <a href="#">Parking</a>
                                </div>
                            </div>
                        </article>
                        <!-- article end -->
                        <!--content-nav_holder-->
                        <div class="content-nav_holder fl-wrap color-bg">
                            <div class="content-nav">
                                <ul>
                                    <li>
                                        <a href="blog-single.html" class="ln"><i class="fal fa-long-arrow-left"></i><span>Prev <strong>- Post Title</strong></span></a>
                                        <div class="content-nav-media">
                                            <div class="bg"  data-bg="images/bg/1.jpg"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="rn"><span >Next <strong>- Post Title</strong></span> <i class="fal fa-long-arrow-right"></i></a>
                                        <div class="content-nav-media">
                                            <div class="bg"  data-bg="images/bg/2.jpg"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--content-nav_holder end -->
                        <div class="list-single-main-container fl-wrap" style="margin-top: 30px;">
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap" id="sec6">
                                <div class="list-single-main-item-title">
                                    <h3>Comments <span>2</span></h3>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="reviews-comments-wrap fl-wrap">
                                        <!-- reviews-comments-item -->
                                        <div class="reviews-comments-item">
                                            <div class="review-comments-avatar">
                                                <img src="images/avatar/1.jpg" alt="">
                                            </div>
                                            <div class="reviews-comments-item-text smpar">
                                                <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                <div class="show-more-snopt-tooltip bxwt">
                                                    <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                                                    <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                </div>
                                                <h4><a href="#">Liza Rose</a></h4>
                                                <div class="clearfix"></div>
                                                <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Comment  <span>6</span> </a></div>
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
                                                <h4><a href="#">Adam Koncy</a></h4>
                                                <div class="clearfix"></div>
                                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>   Helpful Comment <span>2</span> </a></div>
                                            </div>
                                        </div>
                                        <!--reviews-comments-item end-->
                                    </div>
                                </div>
                            </div>
                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap" id="sec5">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Add Your Comment</h3>
                                </div>
                                <!-- Add Review Box -->
                                <div id="add-review" class="add-review-box">
                                    <div class="leave-rating-wrap">
                                    </div>
                                    <!-- Review Comment -->
                                    <form   class="add-comment custom-form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Your name* <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                                    <input   name="phone" type="text"    onClick="this.select()" value="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Yourmail* <span class="dec-icon"><i class="fas fa-envelope"></i></span></label>
                                                    <input   name="reviewwname" type="text"    onClick="this.select()" value="">
                                                </div>
                                            </div>
                                            <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                        </fieldset>
                                        <button class="btn big-btn color-bg float-btn">Submit Comment <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <!-- Add Review Box / End -->
                            </div>
                            <!-- list-single-main-item end -->
                        </div>
                    </div>
                </div>
                <!-- col-md 8 end -->
                <!--  sidebar-->
                <div class="col-md-4">
                    <div class="box-widget-wrap fl-wrap fixed-bar">
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="search-widget fl-wrap">
                                <form action="#" class="fl-wrap custom-form">
                                    <input name="se" id="se" type="text" class="search" placeholder="Search.." value="" />
                                    <button class="search-submit" id="submit_btn"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-title fl-wrap">Popular Posts</div>
                            <div class="box-widget-content fl-wrap">
                                <!--widget-posts-->
                                <div class="widget-posts  fl-wrap">
                                    <ul class="no-list-style">
                                        <li>
                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/all/blog/5.jpg" alt=""></a></div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Nullam dictum felis</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 27 Mar 2020</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/all/blog/2.jpg" alt=""></a></div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Scrambled it to mak</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 12 May 2020</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/all/blog/6.jpg" alt=""></a> </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Fermentum nis type</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i>22 Feb  2020</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/all/blog/4.jpg" alt=""></a> </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Rutrum elementum</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 7 Mar 2019</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- widget-posts end-->
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-title fl-wrap">Categories</div>
                            <div class="box-widget-content fl-wrap">
                                <ul class="cat-item no-list-style">
                                    <li><a href="#">Standard</a> <span>3</span></li>
                                    <li><a href="#">Video</a> <span>6 </span></li>
                                    <li><a href="#">Gallery</a> <span>12 </span></li>
                                    <li><a href="#">Quotes</a> <span>4</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="banner-widget fl-wrap">
                                <div class="bg-wrap bg-parallax-wrap-gradien">
                                    <div class="bg  "  data-bg="images/all/blog/1.jpg"></div>
                                </div>
                                <div class="banner-widget_content">
                                    <h5>Do you want to join our real estate network?</h5>
                                    <a href="#" class="btn float-btn color-bg small-btn">Become an Agent</a>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-title fl-wrap">Tags</div>
                            <div class="box-widget-content fl-wrap">
                                <!--tags-->
                                <div class="list-single-tags fl-wrap tags-stylwrap" style="margin-top: 20px;">
                                    <a href="#">Hotel</a>
                                    <a href="#">Hostel</a>
                                    <a href="#">Room</a>
                                    <a href="#">Spa</a>
                                    <a href="#">Restourant</a>
                                    <a href="#">Parking</a>
                                </div>
                                <!--tags end-->
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-title fl-wrap">Archive</div>
                            <div class="box-widget-content fl-wrap">
                                <ul class="cat-item cat-item_dec no-list-style">
                                    <li><a href="#">March 2020</a></li>
                                    <li><a href="#">May 2019</a>  </li>
                                    <li><a href="#">January 2016</a>  </li>
                                    <li><a href="#">Decemder 2018</a> </li>
                                </ul>
                            </div>
                        </div>
                        <!--box-widget end -->
                    </div>
                    <!-- sidebar end-->
                </div>
            </div>
        </div>
    </div>
    <div class="limit-box fl-wrap"></div>
</div>
<!-- content end -->
<!-- subscribe-wrap -->
<div class="subscribe-wrap fl-wrap">
    <div class="container">
        <div class="subscribe-container fl-wrap color-bg">
            <div class="pwh_bg"></div>
            <div class="mrb_dec mrb_dec3"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-header">
                        <h4>newsletter</h4>
                        <h3>Sign up for newsletter and get latest news and update</h3>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="footer-widget fl-wrap">
                        <div class="subscribe-widget fl-wrap">
                            <div class="subcribe-form">
                                <form id="subscribe">
                                    <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Enter Your Email" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">  Subscribe</button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe-wrap end -->

@endsection
