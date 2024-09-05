<?php
$cheditor = "no"; $_dep = array(5,2);
$_tit = array('교육','유치원');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub5">
		<section>
			<article>
				<div class="inner">
					<h3>유치원</h3>
					<ul class="list-view">
						<li>
							<div class="title">
								<span></span>
								<p>유치원 정보</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>만3~5세 유아 교육을 위해「유아교육법」에 따라 설립·운영되는 학교</span></li>
								<li><p>-</p><span>설립 주체에 따라 국립, 공립, 사립유치원으로 구분</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>입학신청</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>유치원 입학을 원하는 보호자가 시간과 장소의 제한 없이 온라인으로 신청 가능</span></li>
								<li><p>-</p><span>입학대상 : 17개 시·도에 만3세부터 초등학교 취학 전까지의 어린이<br>※ 조기입학자(만3세반만 인정) 및 취학유예자도 접수 가능</span></li>
								<li>
									<p>-</p>
									<span>추첨방법
										<ul class="numlist">
											<li><p>·</p><span>우선모집 : 희망순 추첨</span></li>
											<li><p>·</p><span>일반모집 : 희망순(중복선발제한)추첨</span></li>
											<li><p>※</p><span>희망순(중복선발제한) 추첨에서는 상위희망 유치원 선발 시, 하위희망 유치원 추첨은 자동으로 제외</span></li>
											<li><p>※</p><span>선발된 유아의 등록포기가 최소화되어 대기자의 선발 가능성이 낮아지게 되므로 원서 접수 및 선발 등록 시 학부모의 신중한 선택 필요</span></li>
										</ul>
									</span>
								</li>
								<li style="margin: 0px;"><a href="https://www.go-firstschool.go.kr/PAMS_SS/selectGuidelinesApplicantsList.do">유치원 정보 ></a></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>유아학비 지원</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>지원대상 : 국·공·사립유치원에 다니는 만3~5세 유아<br>※ 유치원과 어린이집 등에서 교육부장관과 보건복지부장관이 협의하여 정하는 공통과정을 제공받는 유아에 대한 무상교육 기간은 3년을 초과할 수 없음</span></li>
								<li><p>-</p><span>지원방식 : 유아학비 지원은 원칙적으로 유아의 보호자에게 지원(바우처 방식)</span></li>
								<li style="margin: 0px;"><a href="https://www.bokjiro.go.kr/">유아학비 신청하기 ></a></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>방과 후 과정</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>교육과정 이후에 교육과정과 연계하여 유아 교육을 확장 및 심화하는 과정</span></li>
								<li><p>-</p><span>가정과 같이 편안하고 안정적인 분위기에서 유아가 행복하도록 운영</span></li>
								<li><p>-</p><span>휴식·건강·안전·영양 및 바깥놀이 등을 포함한 기본적인 돌봄 위주의 활동</span></li>
								<li>
									<p>-</p>
									<span>선발방법
										<ul class="numlist">
											<li><p>·</p><span>‘처음학교로’에서 [교육과정반]과 [교육과정 + 방과후과정반]을 별도로 모집하여 선발</span></li>
											<li><p>·</p><span>‘처음학교로’에서 교육과정만 뽑고, 선발된 인원 중에서 유치원 별도로 오프라인 방과후과정 선발</span></li>
										</ul>
									</span>
								</li>
								<li style="margin: 0px;"><a href="https://www.go-firstschool.go.kr/PAMS_SS/preschAdmnSys.do">방과후과정 운영 바로 ></a></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>유치원 비리 신고센터</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>신고대상: 유치원 관련 비리(유치원 운영과 관련된 불법행위 등)</span></li>
								<li style="margin: 0px;"><a href="https://www.sen.go.kr/web/services/page/viewPage.action?page=kor/part/part_04_13.html">유치원 비리 신고하기 ></a></li>
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
