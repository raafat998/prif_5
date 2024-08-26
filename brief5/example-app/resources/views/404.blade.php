@extends('layouts.app')

@section('title', 'Homeradar - Real Estate Listing Template')
@section('keywords', 'real estate, listing, template')
@section('description', 'Find the best real estate listings here.')

@section('content')
  <!-- content -->
  <div class="content">
    <!--  section  -->
    <section class="parallax-section color-bg" data-scrollax-parent="true">
        <div class="container">
            <div class="error-wrap">
                <div class="hero-text-big">
                    <h6>404</h6>
                </div>
                <p>We're sorry, but the Page you were looking for, couldn't be found.</p>
                <div class="clearfix"></div>
                <form action="#">
                    <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search...">
                    <button class="search-submit" id="submit_btn"><i class="fal fa-search"></i> </button>
                </form>
                <div class="clearfix"></div>
                <p>Or</p>
                <a href="index.html" class="btn   color-bg">Back to Home Page</a>
            </div>
        </div>
        <div class="pwh_bg fw-pwh">
            <div class="mrb_pin vis_mr mrb_pin3 "></div>
            <div class="mrb_pin vis_mr mrb_pin4 "></div>
        </div>
    </section>
    <!--  section  end-->
</div>
<!-- content end -->

@endsection
