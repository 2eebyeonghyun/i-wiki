<?php
$cheditor = "no"; $_dep = array(2,1);
$_tit = array('출산','출산지원');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub2">
		<section>
			<article>
				<div class="inner">
					<h3>2022. 1. 1. 이후 출생아는 첫만남이용권으로 200만원 바우처 지급</h3>
					<ul class="list-view">
						<li>
							<div class="title">
								<span></span>
								<p>지급방식</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>국민행복카드에 일시금 충전<br>※ 지급 목적에서 벗어난 유흥업소, 사행, 레저 등 관련 유형으로 분류된 업종 등을 제외한 전 업종 사용 가능</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>지급시기</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>2022년 4월 1일 이후<br>(2022년 1~3월 생의 경우, 2022년 4월 1일 ~ 2023년 3월 31일까지 사용 가능)</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>신청방법</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>방문: 아동의 주민등록 상 주소지 읍·면·동 주민센터</span></li>
								<li><p>-</p><span>온라인: 복지로(bokjiro.go.kr)또는 정부24(gov.kr)<br>※ 아동의 보호자가 부모인 경우만 온라인 신청 가능<br>※ 출생 신고 시 행복출산 원스톱 서비스로 일관신청 가능(온·오프라인 모두 가능)</span></li>
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
