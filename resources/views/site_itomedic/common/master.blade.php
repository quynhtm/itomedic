<!DOCTYPE html>
<html>

@include('site_itomedic.common.head')

<body>
	<!--Header-->
	@include('site_itomedic.common.header')
	@yield('content')
	@include('site_itomedic.common.footer')
	<!-- js -->
	<script type="text/javascript" src="{{URL::to('/')}}/assets/frontend/site/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="{{URL::to('/')}}/assets/frontend/site/js/main.js"></script>
	<!--//search-bar-->
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- stats -->
	<script src="{{URL::to('/')}}/assets/frontend/site/js/jquery.waypoints.min.js"></script>
	<script src="{{URL::to('/')}}/assets/frontend/site/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->


	<script src="{{URL::to('/')}}/assets/frontend/site/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- script for responsive tabs -->
	<script src="{{URL::to('/')}}/assets/frontend/site/js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{URL::to('/')}}/assets/frontend/site/js/move-top.js"></script>
	<script type="text/javascript" src="j{{URL::to('/')}}/assets/frontend/site/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear'
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="{{URL::to('/')}}/assets/frontend/site/js/bootstrap-3.1.1.min.js"></script>


	{{--<script type="text/javascript">--}}
        {{--$(".thumbnail").hover(function(){--}}
            {{--$('.read_more').css("display", "block");--}}
        {{--});--}}
	{{--</script>--}}
	<script>
        $(".single-left1 img").each(function () {
            $(this).removeAttr("style");
            $(this).removeAttr("class");
            $(this).addClass("img-responsive")
        });
	</script>

</body>

</html>