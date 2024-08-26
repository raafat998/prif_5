@extends('layouts.app')

@section('title', 'Homeradar - Real Estate Listing Template')
@section('keywords', 'real estate, listing, template')
@section('description', 'Find the best real estate listings here.')

@section('content')

   <!-- content -->
   <div class="content">
    <!--  section  -->
    <section class="hidden-section single-par2  " data-scrollax-parent="true">
        <div class="bg-wrap bg-parallax-wrap-gradien">
            <div class="bg par-elem "  data-bg="images/bg/5.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        </div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>Frequently Asked Questions</span></h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
            </div>
            <div class="scroll-down-wrap">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll Down To Discover</span>
            </div>
        </div>
    </section>
    <!--  section  end-->
    <!-- breadcrumbs-->
    <div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap">
        <div class="container">
            <div class="breadcrumbs-list">
                <a href="#">Home</a> <a href="#">Pages</a><span>Help FAQ</span>
            </div>
            <div class="share-holder hid-share">
                <a href="#" class="share-btn showshare sfcs">  <i class="fas fa-share-alt"></i>  Share   </a>
                <div class="share-container  isShare"></div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs end -->
    <!-- col-list-wrap -->
    <section class="gray-bg small-padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-widget fl-wrap fixed-column_menu-init">
                        <div class="box-widget-content fl-wrap  ">
                            <div class="box-widget-title fl-wrap">FAQ Navigation</div>
                            <div class="faq-nav scroll-init fl-wrap">
                                <ul>
                                    <li><a class="act-scrlink" href="#faq1">Payments</a></li>
                                    <li><a  href="#faq2">Suggestions</a></li>
                                    <li><a   href="#faq3">Reccomendations</a></li>
                                    <li><a   href="#faq4">Booking</a></li>
                                    <li><a   href="#faq5">Listing</a></li>
                                </ul>
                            </div>
                            <div class="search-widget fns fl-wrap">
                                <form action="#" class="fl-wrap custom-form">
                                    <input name="se" id="se" type="text" class="search" placeholder="Keywords" value="" />
                                    <button class="search-submit" id="submit_btn"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="list-single-main-container">
                        <!--   list-single-main-item -->
                        <div class="list-single-main-item fl-wrap" id="faq1">
                            <div class="list-single-main-item-title big-lsmt fl-wrap">
                                <h3>Payments</h3>
                            </div>
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How long does the sending process take? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">Can I use more than one payment method to pay for a reservation? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p> Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How do I edit or remove a payment method? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.  </p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                        </div>
                        <!--   list-single-main-item end -->
                        <!--   list-single-main-item -->
                        <div class="list-single-main-item fl-wrap" id="faq2">
                            <div class="list-single-main-item-title big-lsmt fl-wrap">
                                <h3>Suggestions</h3>
                            </div>
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">Can I pay my own taxes and insurance? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p> Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How long does the loan process take?<i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.  </p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                        </div>
                        <!--   list-single-main-item end -->
                        <!--   list-single-main-item -->
                        <div class="list-single-main-item fl-wrap" id="faq3">
                            <div class="list-single-main-item-title big-lsmt fl-wrap">
                                <h3>Reccomendations</h3>
                            </div>
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How long does the sending process take? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">Can I use more than one payment method to pay for a reservation? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p> Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How do I edit or remove a payment method? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.  </p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                        </div>
                        <!--   list-single-main-item end -->
                        <!--   list-single-main-item -->
                        <div class="list-single-main-item fl-wrap" id="faq4">
                            <div class="list-single-main-item-title big-lsmt fl-wrap">
                                <h3>Booking</h3>
                            </div>
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How long does the sending process take? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">Can I use more than one payment method to pay for a reservation? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p> Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How do I edit or remove a payment method? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.  </p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                        </div>
                        <!--   list-single-main-item end -->
                        <!--   list-single-main-item -->
                        <div class="list-single-main-item fl-wrap" id="faq5">
                            <div class="list-single-main-item-title big-lsmt fl-wrap">
                                <h3>Listing</h3>
                            </div>
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">How long does the sending process take? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                            <!--   accordion-lite -->
                            <div class="accordion-lite-container fl-wrap">
                                <div class="accordion-lite-header fl-wrap">Can I use more than one payment method to pay for a reservation? <i class="fas fa-plus"></i></div>
                                <div class="accordion-lite_content fl-wrap">
                                    <p> Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                </div>
                            </div>
                            <!--   accordion-lite end -->
                        </div>
                        <!--   list-single-main-item end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="limit-box fl-wrap"></div>
    </section>
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
