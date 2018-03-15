<div class="header" id="home">
    <!--top-bar-w3-agile-->
    <div class="top-bar_w3agileits">
        <div class="top-logo_info_w3layouts">
            <div class="col-md-12">
                <a href="{{url('trang-chu.html')}}"><img class="img-responsive" src="{{URL::to('/')}}/assets/frontend/site/images/banerfix-330qotid0aqeeprwf411xc.png"/></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="header-nav">
            <div class="inner-nav_wthree_agileits">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li><a href="{{url('trang-chu.html')}}" class="active">Trang chủ</a></li>
                                <li><a href="{{url('gioi-thieu.html')}}">Giới thiệu</a></li>
                                <li><a href="{{url('showroom.html')}}">Showroom</a></li>
                                <li><a href="{{url('san-pham.html')}}">Sản phẩm</a></li>
                                <li><a href="{{url('dich-vu-kham-chua-benh.html')}}">Dịch vụ khám chữa bệnh</a></li>
                                <li><a href="{{url('dao-tao-y-te.html')}}">Đào tạo y tế</a></li>
                                <li><a href="{{url('nhat-ban-ngay-nay.html')}}">Nhật Bản ngày nay</a></li>
                                <li><a href="{{url('lien-he.html')}}">Liên Hệ</a></li>
                            </ul>
                        </nav>

                    </div>
                </nav>
                <div class="search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul>
                        <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Click enter after typing...">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//top-bar-w3-agile-->
    <!-- banner-text -->
    @yield('slide_show')

<!--//Slider-->
</div>