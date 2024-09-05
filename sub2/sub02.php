<?php
$cheditor = "no"; $_dep = array(2,2);
$_tit = array('출산','산후관리');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub2">
		<section>
			<article>
				<div class="inner">
					<h3>산모 · 신생아 건강관리 지원사업</h3>
					<ul class="list-view">
						<li>
							<div class="title">
								<span></span>
								<p>지원대상</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>중랑구에 주민등록을 둔 모든 산모<br>※ 기초생활보장 해산급여 수급자, 긴급복지 해산비 수급자의 경우 중복 지원 가능</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>선정기준</p>
							</div>
							<ul class="text">
								<li><p>①</p><span>기본지원: 산모 및 배우자의 건강보험료 본인부담금 합산액이 기준중위소득 150% 이하 출산 가정</span></li>
								<li><p>②</p><span>정부 예외 지원:소득에 상관없이 지원<br>(희귀질환-중증난치질환 산모, 장애인 산모 또는 장애 신생아, 새터민 산모, 결혼이민 산모, 미혼모 산모(만24세 이하),쌍생아 이상 출산 가정, 둘째아 이상 출산 가정)</span></li>
								<li><p>③</p><span>서울시 지원: 정부형에 해당하지 않는 서울시 모든 출산 가정(단태아-첫째아 해당, 기준중위소득 150% 초과)<br>※ 기준중위소득은 가구원수와 최근월분 건강보험료 본인부담금으로 판정, 서비스 기간 차등</span></li>
								<li><a href="">기준중위소득 판정기준 및 정부지원금 ></a></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>신청기간</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>출산 예정일 40일 전~출산 후 30일까지 신청</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>신청방법</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>접수절차: 복지로</span></li>
								<li class="btn-area"><a href="https://www.bokjiro.go.kr/">복지로 ></a></li>
								<li>
									<p>※</p>
									<span>
										온라인제출서류
										<ul class="numlist">
											<li><p>①</p><span>가족관계증명성</span></li>
											<li><p>②</p><span>출산지(출생증명서)또는 출산예정일 증빙서류(의사소견서, 산모수첩 등)</span></li>
											<li><p>③</p><span>신청일 기준 최근 월분 건강보험료 산정금액 확인서(6개월분)</span></li>
										</ul>
									</span>
								</li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>문의</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>중랑구 보건소 건강증진과 모자건강팀 02) 2094.0840</span></li>
								<li class="more-btn">
									<a href="#none">서비스지원 신청서</a>
									<a href="#none">서비스 안내문</a>
									<a href="#none">위임장</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</article>
		</section>
	</div>
	<?php include '../inc/fotbanner.php';?>
	<?php include '../inc/footer.php';?>
</body>
</html>
