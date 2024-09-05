<?php
$cheditor = "no"; $_dep = array(2,4);
$_tit = array('출산','출산휴가');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub2">
		<section>
			<article>
				<div class="inner">
					<ul class="list-view">
						<li>
							<div class="title">
								<span></span>
								<p>출산휴가 기간</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>출산 전후 90일(다태아는 120일), 출산휴가 기간의 배정은 반드시 45일(다태아는 60일) 이상 확보</span></li>
								<li><p>-</p><span>※ 출산일이 늦어져 45일(다태아는 60일)을 초과할경우, 출산휴가 기간은 45일(다태아는 60일) 이상 연장</span></li>
								<li>
									<p>※</p>
									<span>
										예외적으로 출산 전 휴가를 나누어 사용할 수 있는 경우
										<ul class="numlist">
											<li><p>①</p><span>유산 또는 사산의 경험이 있는 산모</span></li>
											<li><p>②</p><span>위험이 있다는 의료기관의 진단서 제출<span></li>
											<li><p>③</p><span>청구 당시 근로자의 나이가 만 40세 이상</span></li>
										</ul>
									</span>
								</li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>출산휴가 급여 대상</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>사업주로부터 출산휴가 또는 유산, 사산휴가를 부여받은 근로자</span></li>
								<li><p>-</p><span>고용보험센터로부터 급여는 피보험단위기간이 통산 180일, 그리고 실제 직장에서의 근무일이 180일 이상이어야 신청 가능</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>출산휴가 급여 신청 기한</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>대기업: 휴가 시작 후 60일이 지난 1개월부터 휴가가 끝난 날 이후 12개월 이내 30일 단위로 신청</span></li>
								<li><p>-</p><span>우선 지원 대상기업: 휴가 시작한 날 이후 1개월부터 휴가가 끝난 날 이후 12개월 이내 30일 단위로 신청</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>출산휴가 급여 신청 방법</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>온라인: (사업주) 출산휴가확인서 고용보험에 제출 → (근로자) 신청 가능</span></li>
								<li><p>-</p><span>센터방문/우편접수: 구비서류를 신청인의 거주지나 사업장 소재지를 담당하는 고용센터에 제출, 신청</span></li>
								<li>
									<p>※</p>
									<span>
										구비서류
										<ul class="numlist">
											<li><p>①</p><span>출산휴가 확인서(최초 1회만 제출)</span></li>
											<li><p>②</p><span>출산휴가 급여신청서</span></li>
											<li><p>③</p><span>통상임금을 확인할 수 있는 자료(최근 3개월의 임금대장, 근로계약서 등) 사본 1부</span></li>
											<li><p>④</p><span>유산이나 사산하였음을 증명할 수 있는 의료기관의 진단서 1부(유산, 사산 휴가때만 해당, 임신기간 기재 필수)</span></li>
											<li><p>⑤</p><span>신분증 및 통장사본</span></li>
										</ul>
									</span>
								</li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>출산휴가 급여 금액(출산휴가 지원금)</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>대기업: (사업주)출산휴가기간 90일 중 최초 60일(다태아는 75일) 통상임금 100% 부담, (고용보험) 나머지 30일(다태아는 45일) 지급</span></li>
								<li><p>-</p><span>우선지원대상기업: 출산휴가기간 90일(다태아는 120일)의 휴가 급여 고용보험에서 지급<br>※ 통상임금이 200만원 이상의 경우, 고용보험은 200만원까지만 지급(나머지 차액은 사업주가 지급)</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>배우자 출산휴가</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>근로자의 배우자가 출산한 경우, 배우자와 태아의 건강보호 등을 위해 휴가를 신청 후 사용하는 제도</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>배우자 출산휴가 기간</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>10일의 휴가 제공(10일 미만으로 청구해도 반드시 10일 부여 필수)<br>※ 근로자가 원할 때 1회 한정하여 기간을 나눠 사용 가능, 출산휴가 중 휴일 등이 포함된 경우는 휴가일수에 미포함</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>배우자 출산휴가 급여</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>고용보험센터로부터 급여는 피보험단위기간이 통산 180일, 그리고 실제 직장에서의 근무일이 180일 이상 시 신청 가능</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>배우자 출산휴가 급여 신청 방법</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>온라인: (사업주) 출산휴가확인서 고용보험에 제출 → (근로자) 신청 가능</span></li>
								<li><p>-</p><span>센터방문/우편접수: 구비서류를 신청인의 거주지나 사업장 소재지를 담당하는 고용센터에 제출, 신청</span></li>
								<li>
									<p>※</p>
									<span>
										구비서류
										<ul class="numlist">
											<li><p>①</p><span>배우자 출산휴가 확인서 1부 (최초 1회만 제출)</span></li>
											<li><p>②</p><span>배우자 출산휴가 급여신청서</span></li>
											<li><p>③</p><span>신분증 및 통장사본</span></li>
											<li><p>④</p><span>통상임금을 확인할 수 있는 자료(최근 3개월의 임금대장, 근로계약서 등) 사본 1부</span></li>
										</ul>
									</span>
								</li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>배우자 출산휴가 급여 금액</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>대기업: 10일분 휴가 급여 일괄 지급</span></li>
								<li><p>-</p><span>우선지원대상기업: (정부지원) 유급 5일분을 날짜로 계산(상한액 382,770원) + (사업주) 나머지 금액</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>배우자 출산휴가 급여 신청 기간</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>배우자 출산휴가 종료 후 일괄신청 (12개월 이내에 신청하지 않으면 지원 불가)</span></li>
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
