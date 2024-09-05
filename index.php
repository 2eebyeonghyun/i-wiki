<?php 
include_once './inc/pub_config.php';
include './inc/common.php'; ?>

<body>
	<?php include './inc/head.php'; ?>

	<div id="wrap" class="mainpage">
		<div class="search-area">
			<form name="tsearch" action="<?=DIR?>/inc/search.php" method="post" class="search-frm" onsubmit="return tsearchgo();">
				<div class="box">
					<div class="sec1">
						<h3>통합검색</h3>
					</div>
					<div class="sec2">
						<input type="text" class="sfrmText" name="stext" value="" placeholder="검색어를 입력해주세요.">
					</div>
					<div class="sec3">
						<button type="submit" class="sfrmBtn">
							<img src="<?=DIR?>/img/main/search-ico.png" alt="">
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="mainvisual">
			<div class="mainback-bg">
				<img src="<?=DIR?>/img/main/mainback-bg.png" alt="">
			</div>
			<div class="main-visual">
				<div class="swiper mainSwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="<?=DIR?>/img/main/mainA.png" alt="메인슬라이드 이미지1">
							<div class="txt">
								<h3>중랑<strong>아이</strong>위키</h3>
								<p>우리아이,<br>중랑구와 함께 키워요!</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img src="<?=DIR?>/img/main/mainB.png" alt="메인슬라이드 이미지2">
							<div class="txt">
								<h3>중랑<strong style="color:#1561a1;">아이</strong>위키</h3>
								<p>우리아이,<br>중랑구와 함께 키워요!</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img src="<?=DIR?>/img/main/mainD.jpg" alt="메인슬라이드 이미지3">
							<div class="txt">
								<h3 style="color:#333;">중랑<strong style="color:orange;">아이</strong>위키</h3>
								<p style="color:#333;">우리아이,<br>중랑구와 함께 키워요!</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img src="<?=DIR?>/img/main/mainE.jpg" alt="메인슬라이드 이미지4">
							<div class="txt">
								<h3 style="color:#333;">중랑<strong style="color:orange;">아이</strong>위키</h3>
								<p style="color:#333;">우리아이,<br>중랑구와 함께 키워요!</p>
							</div>
						</div>
					</div>

					<div class="slide-navi">
						<div class="slide-navi-detail">
							<div class="swiper-pager">
								<button type="button" class="slideBtn btn-prev">이전 슬라이드</button>
								<div class="pager-fraction"></div>
								<button type="button" class="slideBtn btn-next">다음 슬라이드</button>
							</div>
							<div class="swiper-auto">
								<button type="button" class="slideBtn btn-play">슬라이드 재생</button>
								<button type="button" class="slideBtn btn-stop active">슬라이드 일시정지</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner">
			<section>
				<article>
					<div id="notice">
						<div class="lef">
							<div class="tab">
								<a href="#" class="active">알림사항</a>
								<a href="#">육아소식</a>
								<a href="#">보육정보</a>
							</div>

							<div class="sec">
								<div class="area active">
									<a href="<?=DIR?>/sub6/sub01.php" class="more"><img src="<?=DIR?>/img/main/more-ico.png" alt="더보기 아이콘"></a>
									<div class="bx1 new-box">
										<a href="<?=DIR?>/sub6/sub6_view.php" class="in">
											<div class="circle">
												<span>NEW</span>
											</div>
											<div class="text">
												<p class="date">2022-05-08</p>
												<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											</div>
										</a>
									</div>
									<div class="bx1 box first-box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box last-box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
								</div>
								<div class="area">
									<a href="<?=DIR?>/sub6/sub02.php" class="more"><img src="<?=DIR?>/img/main/more-ico.png" alt="더보기 아이콘"></a>
									<div class="bx1 new-box">
										<a href="#" class="in">
											<div class="circle">
												<span>NEW</span>
											</div>
											<div class="text">
												<p class="date">2022-05-08</p>
												<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고1</p>
											</div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
								</div>
								<div class="area">
									<a href="<?=DIR?>/sub6/sub03.php" class="more"><img src="<?=DIR?>/img/main/more-ico.png" alt="더보기 아이콘"></a>
									<div class="bx1 new-box">
										<a href="#" class="in">
											<div class="circle">
												<span>NEW</span>
											</div>
											<div class="text">
												<p class="date">2022-05-08</p>
												<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고3</p>
											</div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
									<div class="bx1 box">
										<a href="#" class="in">
											<p class="date">2022-05-08</p>
											<p class="subject">2022년 우리동네 보육반장 참여자 추가 모집 공고</p>
											<div class="arrow"><img src="<?=DIR?>/img/main/arrow-ico.png" alt="알림 에로우 아이콘"></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="rig">
							<div class="topbanner">
                             <!-- 배너사이즈 490x179-->
							 	<h3>배너 ZONE</h3>
								<div class="swiper mySwiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<a class="sw-box" href="https://www.jccic.or.kr/2018/sub71_view.php?bbs_data=aWR4PTE0Nzk2JnN0YXJ0UGFnZT0mbGlzdE5vPSZ0YWJsZT1jc19iYnNfZGF0YSZjb2RlPW5vdGljZSZzZWFyY2hfaXRlbT0mc2VhcmNoX29yZGVyPQ==||&idx=14796" target="_blank">
												<img src="<?=DIR?>/img/slick/rban730.jpg" alt="팝업1">
											</a>
										</div>
										<div class="swiper-slide">
											<a class="sw-box" href="https://jccic.mnz.co.kr/2op" target="_blank">
												<img src="<?=DIR?>/img/slick/rban72.jpg" alt="팝업2">
											</a>
										</div>
										<div class="swiper-slide">
											<a class="sw-box" href="https://jccic.mnz.co.kr/2wg" target="_blank">
												<img src="<?=DIR?>/img/slick/rban100.jpg" alt="팝업3">
											</a>
										</div>
										<div class="swiper-slide">
											<a class="sw-box" target="_blank">
												<img src="<?=DIR?>/img/slick/rban7000_01.jpg" alt="팝업4">
											</a>
										</div>
										
									</div>
									<div class="slide-navi">
										<div class="slide-navi-detail">
											<div class="swiper-pager">
												<button type="button" class="slideBtn btn-prev">이전 슬라이드</button>
												<div class="pager-fraction"></div>
												<button type="button" class="slideBtn btn-next">다음 슬라이드</button>
											</div>
											<div class="swiper-auto">
												<button type="button" class="slideBtn btn-play">슬라이드 재생</button>
												<button type="button" class="slideBtn btn-stop active">슬라이드 일시정지</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="botbanner">
								<h3>행사</h3>
								<div class="swiper bannerSwiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<a class="sw-box" href="#none"><span style="background: #ddd;"></span></a>
										</div>
										<div class="swiper-slide">
											<a class="sw-box" href="#none"><span style="background: #f00;"></span></a>
										</div>
										<div class="swiper-slide">
											<a class="sw-box" href="#none"><span style="background: #ff0;"></span></a>
										</div>
									</div>
									
									<div class="slide-navi">
										<div class="slide-navi-detail">
											<div class="swiper-pager">
												<button type="button" class="slideBtn btn-prev">이전 슬라이드</button>
												<div class="pager-fraction"></div>
												<button type="button" class="slideBtn btn-next">다음 슬라이드</button>
											</div>
											<div class="swiper-auto">
												<button type="button" class="slideBtn btn-play">슬라이드 재생</button>
												<button type="button" class="slideBtn btn-stop active">슬라이드 일시정지</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article>
					<div class="quick-area">
						<div class="menubox">
							<h1 class="logo"><img src="<?=DIR?>/img/main/quick-ico.png" alt=""></h1>
							<div class="txt">
								<a href="#none">바로가기</a>
								<p>QUICK MENU</p>
							</div>
						</div>
						<div class="quickbanner">
							<ul>
								<li><a href="https://www.jungnang.go.kr/portal/main.do" target="_blank"><img src="<?=DIR?>/img/main/logo-ico1.png" alt="중랑구"></a></li>
								<li><a href="https://blog.naver.com/jnccic1214" target="_blank"><img src="<?=DIR?>/img/main/logo-ico2.png" alt="중랑구 보육반장 블로그"></a></li>
								<li><a href="https://www.jccic.or.kr/2018/sub39_3.php" target="_blank"><img src="<?=DIR?>/img/main/logo-ico3.png" alt="우리동네 꼼꼼 육아정보"></a></li>
								<li><a href="https://www.jccic.or.kr/2018/ebook/index.html" target="_blank"><img src="<?=DIR?>/img/main/logo-ico4.png" alt="중랑구는 우리아이 사계절 놀이터"></a></li>
							</ul>
						</div>
					</div>
				</article>
			</section>
		</div>
	</div>
	<?php include './inc/fotbanner.php'; ?>
	<?php include './inc/footer.php'; ?>
</body>
<script>
	notice.init();
</script>
<script>
	$(function() {
		var swiper = new Swiper(".mainSwiper", {
			cssMode: true,
			centeredSlides: true,
			speed: 800,
			effect: 'slide',
            loop:true,
			autoplay: {
				delay: 6000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".mainSwiper .slide-navi .slideBtn.btn-next",
				prevEl: ".mainSwiper .slide-navi .slideBtn.btn-prev",
			},
			pagination: {
				el: ".mainSwiper .slide-navi .pager-fraction",
				type: "fraction",
				clickable: true,
			},
			autoplayDisableOnInteraction: true,
			autoHeight: true,
		});

		$('.mainSwiper .swiper-auto > button').on('click', function() {
			$('.mainSwiper .swiper-auto > button').toggleClass('active');

			if ($(this).hasClass('btn-play')) {
				swiper.autoplay.start();
			} else {
				swiper.autoplay.stop();
			}
		})
	});

</script>
<script>
	$(function() {
		var swiper = new Swiper(".mySwiper", {
			cssMode: true,
			centeredSlides: true,
			speed: 800,
			effect: 'slide',
            loop:true,
			autoplay: {
				delay: 906000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".mySwiper > .slide-navi .slideBtn.btn-next",
				prevEl: ".mySwiper > .slide-navi .slideBtn.btn-prev",
			},
			pagination: {
				el: ".mySwiper > .slide-navi .pager-fraction",
				type: "fraction",
				clickable: true,
			},
			autoplayDisableOnInteraction: true,
			autoHeight: true,
		});

		$('.mySwiper > .swiper-auto > button').on('click', function() {
			$('.mySwiper > .swiper-auto > button').toggleClass('active');

			if ($(this).hasClass('btn-play')) {
				swiper.autoplay.start();
			} else {
				swiper.autoplay.stop();
			}
		})
	});

</script>
<script>
	$(function() {
		var swiper = new Swiper(".bannerSwiper", {
			cssMode: true,
			centeredSlides: true,
			speed: 800,
			effect: 'slide',
			autoplay: {
				delay: 6000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".bannerSwiper > .slide-navi .slideBtn.btn-next",
				prevEl: ".bannerSwiper > .slide-navi .slideBtn.btn-prev",
			},
			pagination: {
				el: ".bannerSwiper > .slide-navi .pager-fraction",
				type: "fraction",
				clickable: true,
			},
			autoplayDisableOnInteraction: true,
			autoHeight: true,
		});

		$('.bannerSwiper > .swiper-auto > button').on('click', function() {
			$('.bannerSwiper > .swiper-auto > button').toggleClass('active');

			if ($(this).hasClass('btn-play')) {
				swiper.autoplay.start();
			} else {
				swiper.autoplay.stop();
			}
		})
	});
</script>
<script>
	function tsearchgo(){
		var form=document.tsearch;
		if(form.stext.value == "검색어를 입력하세요."){
			form.stext.value = "";
		}
		if(!form.stext.value){
			alert("검색어를 입력하세요.");
			form.stext.focus();
			return false;
		}
		form.submit();		
	}
</script>
</html>
