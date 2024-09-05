<?php
$cheditor = "no"; $_dep = array(4,1);
$_tit = array('가족','가족상담');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>

	<div id="wrap" class="con sub4">
		<section>
			<article>
				<div class="inner">
					<div id="tab-area">
						<div class="tab">
							<a href="#" class="active">한부모가족지원</a>
							<a href="#">미혼가정지원</a>
							<a href="#">다문화가정지원</a>
							<a href="#">부모역할 지원</a>
						</div>

						<div class="contents">
							<div class="box active">
								<div class="info">
									<h3>한부모가족지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>저소득 한부모가족의 아동양육비, 아동교육지원비, 생활보조금 등의 지원을 통해 아동의 건강한 성장과 가정의 생활안정 도모</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>지원대상 : 사별, 이혼 등에 의한 한부모 가족으로 다음 조건을 모두 충족하는 자</span></li>
												<li>
													<p>(1)</p>
													<span>한부모가족증명서 발급대상
														<ul class="numlist">
															<li><p>·</p><span>세대주인 모 또는 부가 만18세 미만(취학 시 만 22세 미만)의 자녀를 양육하는 경우</span></li>
															<li><p>·</p><span>가구 소득인정액 기준 중위소득 60% 이하인 경우</span></li>
														</ul>
													</span>
												</li>
												<li>
													<p>(2)</p>
													<span>한부모가족 복지급여 지급대상
														<ul class="numlist">
															<li><p>·</p><span>세대주인 모 또는 부가 만18세 미만의 자녀를 양육하는 경우</span></li>
															<li><p>·</p><span>가구 소득인정액 기준 중위소득 52% 이하인 경우</span></li>
														</ul>
													</span>
												</li>
												<li><p>-</p><span>지원내용 : 한부모가족증명서 발급, 복지급여 지급</span></li>
												<li style="margin: 40px 0 0;"><a href="http://www.mogef.go.kr/sp/fam/sp_fam_f006.do">저소득 한부모가족 지원 ></a></li>
											</ul>
										</li>
										
										<li>
											<div class="title">
												<span></span>
												<p>저소득 무주택 한부모가족에게 한부모가족복지시설 등 주거·양육 지원을 통해 사회·경제적 자립 기반 조성</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>지원대상 : 무주택 저소득 한부모가족</span></li>
												<li><p>-</p><span>지원내용 : 주거·양육, 심리 상담·치료, 직업연계 교육 등 자립 지원, 임신 미혼모의 경우 출산 지원</span></li>
												<li><p>-</p><span>신청절차 및 방법 : 입소상담(시설 또는 시·군·구청) → 입소 신청서(시·군·구청 또는 읍·면·동 주민센터)→ 입소자격 확인(시·군·구청 ) → 시설 입소</span></li>
												<li><p>-</p><span>필요서류 : 한부모가족증명서, 가족관계증명서, 혼인관계 증명서 등</span></li>
												<li style="margin: 40px 0 0;"><a href="">시설입소이용신청서 ></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="box">
								<div class="info">
									<h3>미혼가정지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>스스로 자녀를 양육하고자 하는 미혼모 또는 미혼부 가족을 위해 경제적 자립과 정서적 안정 등 자녀 양육에 대한 전반적인 서비스 제공</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>지원대상 : 시설입소자(보장시설수급자)를 제외한 미혼모·부자 가정</span></li>
												<li><p>-</p><span>지원내용 : 심리·정서 지원, 출산·양육 지원, 프로그램·자조모임, 자원 연계 등</span></li>
												<li style="margin: 40px 0 0;"><a href="http://www.mogef.go.kr/cs/opf/cs_opf_f071.do">미혼가정 자녀양육 지원 ></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="box">
								<div class="info">
									<h3>다문화가정지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>한국어 교육</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>결혼이민자, 중도입국자녀 대상 기초 한국어 능력 향상 및 한국생활적응 지원을 위한 한국어 교육 진행</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>방문교육사업</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>센터에서 진행되는 집합교육에 참석하기 어려운 결혼이민자와 가족을 대상으로 해당 가정으로 방문지도사를 파견하여 일대일 맞춤 교육 실시</span></li>
												<li><p>-</p><span>대상 : 입국 5년 이하 결혼이민자 또는 다문화가정</span></li>
												<li><p>-</p><span>내용 : 한국어교육/부모교육지원서비스/자녀생활지원서비스</span></li>
												<li><p>-</p><span>이용방법 : 센터방문(회원가입필수),  방문자녀교육의 경우 거주지 주민센터 방문신청</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>가족교육지원사업</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>다문화부부교육 : 부부사이 관계증진 프로그램 및 체험활동을 통해 부부사이 친밀감과 애정향상 도모</span></li>
												<li><p>-</p><span>자녀건강지도교육 : 결혼이민자 및 다문화가족을 대상으로 건강교육을 제공하여 자녀의 건강한 성장발달 지원</span></li>
												<li><p>-</p><span>다문화가족 캠프 및 나들이 : 다문화가족의 친밀한 관계유지 및 문화활동 증진을 위한 캠프 및 나들이 진행</span></li>
												<li><p>-</p><span>다문화이해교육 : 결혼이민자 및 다문화가족의 한국사회조기정착을 위해 한국사회의 문화교육과 체험활동 진행(다문화이해교육, 인권교육)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>다문화가족 나눔봉사단</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>지역사회에서 다문화가족이 나눔봉사활동 실시,  다문화가족의 긍정적 이미지를 전달하여 사회통합 기여</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>언어발달지원서비스</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>의사소통에 어려움을 가진 아동들을 연령수준에 맞는 언어를 사용할 수 있도록 지원</span></li>
												<li><p>-</p><span>대상 : 다문화가족자녀 및 외국인 자녀 만0세~ 만12세</span></li>
												<li><p>-</p><span>장소 : 센터 및 외부기관(초등학교, 어린이집)</span></li>
												<li><p>-</p><span>언어평가 : 보호자와 초기면담 이후 적합한 평가도구를 활용하여 언어발달정도평가</span></li>
												<li><p>-</p><span>언어교육 : 주2회, 회당 40분 / 개별교육, 모둠교육(어휘/구문발달, 의사소통능력 향상, 읽기/쓰기 발달)</span></li>
												<li><p>-</p><span>이용방법: 센터 방문 회원가입(필수) 및 상담 -> 아동언어발달평가 -> 평가에 따른 수업</span></li>
												<li style="margin: 40px 0 0;"><a href="https://www.liveinkorea.kr/center/main/main.do?centerId=jungnanggu">다문화가족 지원 ></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="box">
								<div class="info">
									<h3>부모역할 지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>가족갈등 예방 및 해소방법, 부모의 역할, 자녀 이해 및 양육방법 등 부모교육 지원</p>
											</div>
											<ul class="text">
												<li>
													<p>-</p>
													<span>지원내용 :
														<ul class="numlist">
															<li><p>1)</p><span>생애주기별 부모교육 : 예비부모, 임신·출산기·영유아기·학령기 자녀 부모 등 생애주기를 고려한 부모교육 실시</span></li>
															<li><p>2)</p><span>찾아가는 부모교육 : 부모교육 대상에 적합한 전문 강사를 선정하여 교육 희망 기관 방문 교육 실시</span></li>
														</ul>
													</span>
												</li>
												<li><p>-</p><span>신청방법 : 중랑구가족센터 홈페이지 신청</span></li>
												<li style="margin: 40px 0 0;"><a href="https://jungnang.familynet.or.kr/center/index.do">가족지원 프로그램 신청 ></a></li>
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
