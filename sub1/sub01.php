<?php
$cheditor = "no"; $_dep = array(1,1);
$_tit = array('임신','임산부지원');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub1">
		<section>
			<article>
				<div class="inner">
					<div id="tab-area">
						<div class="tab">
							<a href="#" class="active">국가바우처사업-건강보험<br>임신 · 출산 진료비 지원</a>
							<a href="#">산전관리</a>
							<a href="#">고위험 임산부<br>의료비 지원</a>
						</div>

						<div class="contents">
							<div class="box active">
								<div class="info">
									<h3>국가바우처사업-건강보험 임신 · 출산 진료비 지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>지원대상</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>임신·출산(유산·사산 포함)이 확인된 건강보험 가입자 또는 피부양자 중 임신·출산 진료비 지원 신청자<br>(1세 미만의 영유아의 법정대리인 포함)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>혜택</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>임신 1회당 100만원 이용권 국민행복카드 지원(다태아 임산부는 140만원 지원)<br>※ 분만 취약자 20만원 추가</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>신청방법</p>
											</div>
											<ul class="text">
												<li><strong>1. 오프라인 신청</strong></li>
												<li>
													<ul class="numlist">
														<li><p>⑴</p><span>산부인과 방문 신청서상의 임신 및 출산 확인란 확인</span></li>
														<li><p>⑵</p><span>가까운 국민건강보험공단지사 또는 카트 영업점 방문</span></li>
														<li><p>⑶</p><span>건강보험 임신 및 출산 진료비 지급 신청서 제출</span></li>
														<li><p>⑷</p><span>국민행복카드 신청/발급</span></li>
													</ul>
												</li>
												<li><strong>2. 온라인 신청</strong></li>
												<li>
													<a href="http://www.voucher.go.kr/voucher/pregnancy.do">온라인 신청 바로가기 ></a>
												</li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>사용방법</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>국민행복카드를 이용하여 전국 요양기관에서 본인부담금 결제<br>※ 카드 수령 후 분만예정(출산·유산진단)일로부터 2년까지</span></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="box">
								<div class="info">
									<h3>산전관리</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>지원대상</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>초음파로 임신 확인된 임산부<br>(검사는 중랑구민만 가능)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>준비물</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>모자보건수첩, 신붕증, 초음파 필림</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>산전검사내용</p>
											</div>
											<ul class="text">
												<li class="table-area">
													<table class="table">
														<tbody>
															<tr>
																<th>임신주수</td>
																<th>검사내용</td>
																<th>비고</td>
															</tr>
															<tr>
																<th>8주~16주(초기검사)</td>
																<td>산전검사(혈액형, CBC, 간염, 매독, 에이즈, 풍진, 간기능검사, 소변검사)</td>
																<td>등록 후 검사 실시</td>
															</tr>
															<tr>
																<th>16주~20주</td>
																<td>기형아(쿼드검사): 에드워드증후군, 다운증후군, 신경관결손검사<br>※ 초음파 1회 실시</td>
																<td>전화예약 후 방문</td>
															</tr>
															<tr>
																<th>24주~28주(중기검사)</td>
																<td>CBC검사, 임신성당뇨검사</td>
																<td>임신성당뇨검사<br>(9시~10시30분, 1시~4시가능)<br>★ 금요일 또는 다음날이 휴일인 경우 오전만 검사 가능</td>
															</tr>
															<tr>
																<th>32주~40주(말기검사)</td>
																<td>CBC, 간기능검사</td>
																<td></td>
															</tr>
														</tbody>
													</table>
												</li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>엽산제 지급</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>임신진단 ~ 12주</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>철분제 지급</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>임신 20주 ~ 분만 전까지</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>문의</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>중랑구 보건소 건강증진과 02)2094.0826/0836</span></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="box">
								<div class="info">
									<h3>고위험 임산부 의료비 지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>지원대상</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>(소득기준) 기준중위소득 180% 이하 가구</span></li>
												<li><p>-</p><span>(가구원 수 산정) 신청일 기준 임산부 부부와 임산부의 자녀로서 직장 및 지역가입자가 아닌 자(분만한 출생아 및 사산아 포함), 주민등록을 같이 하고 건강 보험 상 같은 세대주의 피부양자로 등록되어 있는 직계 존비속</span></li>
												<li><p>-</p><span>(질환기준) 19대 고위험 임신질환의 질병코드와 지원 기간에 해당하는 질환</span></li>
												<li><p>-</p><span>분만결과 자궁 내 태아사망 등으로 사산한 경우도 지원대상에 포함</span></li>
												<li><p>-</p><span>지원제외자: 외국 국적인 자 및 국외 이주자(단, 영주권 취득 후 결혼이주여성, 난임협약에 의한 난민, 북한 이탈주민, 영주귀국할린 한인은 지원 가능)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>지원한도</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>1인당 300만원까지 지원</span></li>
												<li><p>-</p><span>2개 이상의 고위험 임산부 진단기준을 동시에 충족하더라도 1인당 지원한도는 300만원으로 동일하게 적용</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>구비서류</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>기준별 상이하여 홈페이지 참조</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>문의</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>중랑구 보건소 건강증진과 02)2094.0172/0874</span></li>
												<li><a href="#https://www.jungnang.go.kr/health/main/contents.do?menuNo=400214">고위험 임산부 의료비 지원 ></a></li>
											</ul>
										</li>
										<li>
											<ul class="text">
												<li class="table-area">
													<table class="table">
														<tbody>
															<tr>
																<th></th>
																<th>출산준비교실</td>
																<th>부부가 함께하는 예비맘교실</td>
																<th>모유수유 클리닉</td>
															</tr>
															<tr>
																<th class="subject">지원대상</th>
																<td>중랑구 거주 임신 20주 이상 임산부</td>
																<td>중랑구 거주 임시 20주 이상 임산부<br>(직장인 임신부 부부)</td>
																<td>중랑구 거주 출산 산모 또는 임신 24주 이상(임신 중기) 임신부</td>
															</tr>
															<tr>
																<th>일시</th>
																<td>3, 6, 8 ,9월 매주 월요일 또는 화요일(14:00~16:00)</td>
																<td>2~11월 매월 넷째 주 목요일(19:00~21:00)</td>
																<td>2~11월 둘째 주 목요일(14:00~15:00)<br>※ 2, 11월은 1, 3째 주 목요일</td>
															</tr>
															<tr>
																<th>내용</th>
																<td>
																	<ul class="table-info2">
																		<li><p>-</p><span>1주차 : 정상분만의 이해</span></li>
																		<li><p>-</p><span>2주차 : 라마즈분만법, 모유수유법</span></li>
																		<li><p>-</p><span>3주차 : 신생아&amp;산육기관리</span></li>
																		<li><p>-</p><span>4주차 : 임산부 산후우울 및 구강관리</span></li>
																	</ul>
																</td>
																<td>부부가 함께하는 달빛 예비맘 교실</td>
																<td>모유수유클리닉</td>
															</tr>
															<tr>
																<th>장소</th>
																<td>중랑구보건소 4층 보건교육실</td>
																<td>중랑구보건소 4층 보건교육실</td>
																<td>중랑구보건소 1층 모자건강센터 내 교육실</td>
															</tr>
															<tr>
																<th>인원</th>
																<td>선착순 30명</td>
																<td>선착순 15쌍 내외</td>
																<td>선착순 10명</td>
															</tr>
															<tr>
																<th>비용</th>
																<td colspan="3">무료</td>
															</tr>
															<tr>
																<th>신청기간</th>
																<td colspan="3">1개월 전부터</td>
															</tr>
															<tr>
																<th>신청방법</th>
																<td colspan="3">인터넷 접수</td>
															</tr>
															<tr>
																<th>문의</th>
																<td colspan="3">중랑구 보건소 건강증진과 02)2094.0835</td>
															</tr>
														</tbody>
													</table>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
	</div>
	
	<?php include '../inc/fotbanner.php'; ?>
	<?php include '../inc/footer.php'; ?>
</body>
<script>
	tab.init();

</script>

</html>
