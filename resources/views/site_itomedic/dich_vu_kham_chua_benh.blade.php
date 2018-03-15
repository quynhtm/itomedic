@extends('site_itomedic.common.master')
@section('content')
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short">
                <li><a href="common/master.blade.php">Home</a><span>|</span></li>
                <li>Dịch vụ khám chữa </li>
            </ul>
        </div>
    </div>
    <!--//short-->
    <!-- /inner_content -->
    <div class="banner_bottom">
        <div class="container">
            <div class="inner_sec_info_wthree_agile">
                <div class="col-md-8 blog_section">
                    <div class="blog_img single">
                        <div class="single-left1">
                            <p class="myTitle">ITOMEDIC ứng dụng công nghệ tiên tiến</p>
                            <img src="{{URL::to('/')}}/assets/frontend/site/images/banerfix-330qotid0aqeeprwf411xc.png">
                            <div class="current_date">
                                14/03/2018
                            </div>
                            <h4>Ứng dụng công nghệ tiên tiến</h4>
                            <p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse
                                ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
                                rhoncus nec nibh non, mollis sodales odio. Nullam facilisis diam non magna porta luctus. Aenean facilisis erat posuere
                                erat ornare ultrices. Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
                                <i>Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi et
                                    lacinia. Aliquam maximus iaculis mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur orci efficitur nec.</i>								In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse
                                ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
                                rhoncus nec nibh non, mollis sodales odio.</p>
                        </div>

                    </div>
                </div>
                @include('site_itomedic.common.content_right_1')
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection