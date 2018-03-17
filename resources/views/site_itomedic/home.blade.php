@extends('site_itomedic.common.master')
@section('slide_show')
    @include('site_itomedic.common.slide')
@endsection
@section('content')
<!-- /about -->
<div class="banner_bottom">
    <div class="news-right">
        <p class="myTitle">Dịch vụ khám và điều trị - nâng cao sức khỏe</p>
        <div class="noi_dung_kham">
            <div class="item">
                <div class="main_ndk">
                    <div class="pditem">
                        <i class="fa fa-2x fa-check licon"></i>
                        <span>Điều dưỡng và nâng cao sức khỏe</span>
                        <i class="fa fa-3x fa-angle-down ricon" data-toggle="collapse" data-target="#demo"></i>
                    </div>
                </div>
                <div id="demo" class="collapse collapse1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="item">
                <div class="main_ndk">
                    <div class="pditem">
                        <i class="fa fa-2x fa-check licon"></i>
                        <span>Điều dưỡng và nâng cao sức khỏe</span>
                        <i class="fa fa-3x fa-angle-down ricon" data-toggle="collapse" data-target="#demo"></i>
                    </div>
                </div>
                <div id="demo1" class="collapse collapse1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="item">
                <div class="main_ndk">
                    <div class="pditem">
                        <i class="fa fa-2x fa-check licon"></i>
                        <span>Điều dưỡng và nâng cao sức khỏe</span>
                        <i class="fa fa-3x fa-angle-down ricon" data-toggle="collapse" data-target="#demo"></i>
                    </div>
                </div>
                <div id="demo2" class="collapse collapse1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="item">
                <div class="main_ndk">
                    <div class="pditem">
                        <i class="fa fa-2x fa-check licon"></i>
                        <span>Điều dưỡng và nâng cao sức khỏe</span>
                        <i class="fa fa-3x fa-angle-down ricon" data-toggle="collapse" data-target="#demo"></i>
                    </div>
                </div>
                <div id="demo3" class="collapse collapse1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="item">
                <div class="main_ndk">
                    <div class="pditem">
                        <i class="fa fa-2x fa-check licon"></i>
                        <span>Điều dưỡng và nâng cao sức khỏe</span>
                        <i class="fa fa-3x fa-angle-down ricon" data-toggle="collapse" data-target="#demo"></i>
                    </div>
                </div>
                <div id="demo4" class="collapse collapse1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- //about -->
<!-- /projects -->
<div class="mid_slider">
    <div class="mid_slider_info">
        <p class="myTitle">Thiết bị điều trị mới trong vật lý trị liệu phục hồi chức năng và y học cổ truyền</p>
        <div class="inner_sec_info_wthree_agile">
            <!-- banner -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail">
                                    <img src="{{URL::to('/')}}/assets/frontend/site/images/b1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                                <div class="sIntro">
                                    <h3 class="title_slide_2">
                                        Máy điều trị siêu âm kết hợp điện xung, điện phân,
                                        vi dòng 4 kênh tích hợp máy và điện cực hút chân
                                        không EU-941&amp;SU-540
                                    </h3>
                                    <div class=" read_more text-center" style="display: none;">
                                        <a href="#">
                                            <button class=" btn-success">Đọc tiếp</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- The Modal -->
            </div>
        </div>
    </div>

</div>
<!-- //projects -->
<!-- /stats -->
<div class="stats_test">
    <div class="col_md_12 stats">
        <p class="myTitle">Danh mục thiết bị vật lý và phục hồi chức năng</p>
        <div class="row">
            <div class="col-md-3">
                <ul class="list_thietbi">
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list_thietbi">
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list_thietbi">
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list_thietbi">
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            Thiết bị điều trị kết hợp bằng siêu âm + kích thích điện
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="stats_test">
    <div class="col_md_12 stats">
        <p class="myTitle">Các đối tác và đại diện phân phối tại thị trường Việt Nam </p>
        <div class="doi_tac">
            <div class="row">
                <div class="content_doitac ">
                    <div class="col-md-2">
                        <a href="#">
                            <img class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive"  src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                </div>
                <div class="content_doitac">
                    <div class="col-md-2">
                        <a href="#">
                            <img class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive"  src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <img  class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/ito.gif">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //stats -->
@endsection