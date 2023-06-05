<!-- home -->
<section class="dfx_sec_blog">
    <!-- logo -->
    <div class="logo_content_top fadeIn">
        <div class="dfx_logo">
            <a href="{{url('/')}}">
                <img class="img_logo fadeIn" src="{{asset('images/dfx_logo.png')}}" alt="Logo difraxion">
            </a>
        </div>
    </div>
    <div class="container p-5">
        <div class="row p-5">
            <div class="col-sm-12 col-md-6 p-5">
                <div class="d-sm-flex justify-content-center align-items-center wrapper-title animated bounceInLeft delay-2s">
                    <div class="item-title m-3">
                        <div class="line-yellow"></div>
                    </div>
                    <div class="item-title m-3 dfx_raleway s25 ">{{isset($titulo) ?  $titulo : 'BLOG'}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
