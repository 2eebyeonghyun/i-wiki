<?php
$cheditor = "no"; $_dep = array(1,2);
$_tit = array('임신','난임지원');

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
							<a href="#" class="active">정부형 난임 지원</a>
							<a href="#">서울형 난임 지원</a>
							<a href="#">한의약 난임치료 지원</a>
						</div>
						
						<div class="contents">
							<div class="box active">
								<div class="info">
									<h3>정부형 난임 지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>지원자격</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>난임시술을 요하는 의사의 '난임진단서' 제출자<br>※ 난임진단서는 '정부지정 난임시술 의료기관의 난임시술 의사'에게 발급</span></li>
												<li><p>-</p><span>법적 혼인상태에 있거나, 신청일 기준 1년 이상 사실상 혼인관계를 유지하였다고 관할 보건소로부터 확인된 난임부부<br>(매 회차시마다 지원신청 접수일 기준)</span></li>
												<li><p>-</p><span>부부 중 최소한 한명은 주민등록이 되어 있는 대한민국 국적 소유자(주민등록 말소자, 재외국민 주민등록자는 대상에서 제외)이면서, 부부 모두 건강보험 가입 및 보험료 고지 여부가 확인되는 자</span></li>
												<li><p>-</p><span>난임부부 건강보험료 본인부담금 고지금액 기준으로 가족수별 건강보험료 기준중위소득 180% 이하인 가구</span></li>
												<li><p>-</p><span>기초생활보장수급자 및 차상위계층</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>지원원칙</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>시술 기간(시술시작일 ~ 임신낭 확인일)동안 소요된 시술 비용 지원</span></li>
												<li><p>-</p><span>일부·전액 본인부담금은 난임부부가 부담한 비용의 90% 범위 내에서 지원</span></li>
												<li><p>-</p><span>비급여는 배아동결비(30만원 한도) 및 유산방지·착상보조제(각 20만원 한도)지원</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>신청방법</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>보건소 방문(난임부부 중 여성의 주소지 관할 시･군･구 보건소) 또는 온라인(정부24) 신청</span></li>
												<li><p>-</p><span>신청은 원칙적으로 난임부부가 하되, 불가피한 경우 난임부부의 직계존속 또는 형제자매 신청 가능</span></li>
												<li><p>-</p><span>난임부부의 직계존속이나 형제자매가 신청 시에는 가족관계를 증빙할 수 있는 신분증 제시 및 서류(가족관계증명서 등)제출</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>구비서류</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>홈페이지 참조(기준별 상이)</span></li>
												<li><a href="https://www.jungnang.go.kr/health/main/contents.do?menuNo=400256">정부형 난임 지원 ></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="box">
								<div class="info">
									<h3>서울형 난임 지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>지원대상</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>체외수정 신선배아 건강보험 적용 횟수 소진자</span></li>
												<li><p>-</p><span>신청일 기준 6개월 이상 서울시에 거주한 난임부부(사실혼 부부도 지원 가능)<br>※ 거주지 및 거주기간 기준 : 여성</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>신청방법</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>(오프라인) 난임부부 여성 거주지 관할 보건소</span></li>
												<li><p>-</p><span>(온라인) 서울시 임신· 출산 정보센터</span></li>
												<li><a href="http://seoul-agi.seoul.go.kr">서울시 임신출산정보센터</a></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>지원내용</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>체외수정 신선배아 시술비 총 1회 지원, 최대 180만원</span></li>
												<li><p>-</p><span>`21년 최초 신청자(1회, 최대 180만원) - 체외수정(신선배아)시술의 건강보험급여 적용 횟수 소진으로 전액본인부담금, 비급여로 전환된 비용</span></li>
												<li><p>-</p><span>`20년 최초 신청자 중 `20년 지원기준 내 잔여 지원횟수가 인정되는 자 (`20년 지원기준 잔여횟수, 1회 최대 180만원) - 체외수정(신선배아)시술 건강보험급여 적용 횟수 소진으로 전액본인부담금, 비급여로 전환된 비용</span></li>
												<li><p>-</p><span>비급여 항목 중 배아동결비, 착상유도제, 유산방지제 비용지원은 제외</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>구비서류</p>
											</div>
											<ul class="text">
												<li><strong>[신청 시 제출 서류]</strong></li>
												<li>
													<ul class="numlist">
														<li><p>①</p><span>주민등록등본</span></li>
														<li><p>②</p><span>건강보험 가입자격 득실 확인서</span></li>
														<li><p>③</p><span>난임진단서(시술일 기준 1개월 이내 지정 시술의료기관 발급)</span></li>
														<li><p>④</p><span>체외수정(신선배아)시술의 건강보험 적용 소진 확인</span></li>
														<li><p>-</p><span>2가지 중 1가지로 확인</span></li>
														<li><p>-</p><span>난임진단서 내 난임시술 횟수(신청시 확인)</span></li>
														<li><p>-</p><span>시술 의료기관 발급 시술 확인서 내 건강보험 적용여부 확인(시술 후 청구서 확인)→지원 제외 가능성에 대한 사전 설명 필요</span></li>
														<li><p>⑤</p><span>난임부부 관계확인 : 주민등록등본, 가족관계증명서, 사실혼 증빙서류 등</span></li>
														<li><p>-</p><span>※ 사실혼 부부의 난임 진단서는 비용청구 전까지 제출</span></li>
														<li><p>-</p><span>※ 사실혼 확인보증 자격은 내국인 성년자여야 함</span></li>
														<li><p>⑥</p><span>지원신청서, 개인정보제공동의서 : 온라인(임신출산정보센터) 로그인 후 작성 제출</span></li>
													</ul>
												</li>
												<li><strong>[청구 시 제출서류] (소급청구 시)</strong></li>
												<li><p>①</p><span>시술비 지원청구서 1부(온라인 출력)</span></li>
												<li><p>②</p><span>난임치료 시술확인서(시술 의료기관 발급)</span></li>
												<li><p>③</p><span>진료비 영수증</span></li>
												<li><p>④</p><span>진료비 상세 내역서(일부본인부담금, 비급여 및 전액본인부담금 표시)</span></li>
												<li><p>⑤</p><span>본인 명의 통장 사본</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>문의</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>중랑구 보건소 모자건강센터 02)2094.0172/0874</span></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="box">
								<div class="info">
									<h3>한의약 난임치료 지원</h3>
									<ul class="list-view">
										<li>
											<div class="title">
												<span></span>
												<p>지원대상</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>자연임신을 원하는 원인불명의 난임 진단 부부(1년이상의 사실혼 포함)</span></li>
												<li><p>-</p><span>신청일 기준 서울시 6개월 이상 거주하고 있는 난임부부<br>※ 단, 여성 만 44세 이하(1977.1.1. 이후 출생자)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>지원내용</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>3개월 한약투약 난임치료 본인부담금의 90% (1회 최대 1,192,320원)<br>※ 수급자 및 차상위는 본인부담금 전액 지원</span></li>
												<li><p>-</p><span>치료 안전성 모니터링을 위한 사전·사후 검사 시행</span></li>
												<li><p>-</p><span>사전: (남녀공통) 일반혈액(CBC), FBS, 신기능(BUN/Cr), 간기능(LFT), B형간염검사<br>(남성) 정액검사, (여성) AMH, 풍진면역검사</span></li>
												<li><p>-</p><span>사후: (남녀공통) 일반혈액(CBC), 신기능(BUN/Cr), 간기능(LFT)<br>※ 사전검사 결과 유효기간: 신청일 기준 6개월 이내(풍진면역검사는 유효기간 없음)<br>※ 사후검사: 가능한 최종 첩약복약 후 2주 이내 시행</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>지원횟수</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>1인당 최대 2회(연 1회)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>신청방법</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>온라인 : 서울시 임신출산정보센터</span></li>
												<li><p>-</p><span>오프라인 : 난임부부 중 여성 거주지 자치구 보건소 방문 신청</span></li>
												<li><a href="https://seoul-agi.seoul.go.kr">서울시 임신출산정보센터 ></a></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>구비서류</p>
											</div>
											<ul class="text">
												<li><p>①</p><span>원인불명의 난임을 확인할 수 있는 난임진단서: 신청일 기준 2년 이내 발급<br>※ 부부치료 시 남성 진단서 제출 생략 가능</span></li>
												<li><p>②</p><span>사전선별지 : 서울시 임신출산정보센터에서 사전 선별 자가 점검</span></li>
												<li><p>③</p><span>사전검사결과지<br>(남녀공통) 일반혈액(CBC), FBS, 신기능(BUN/Cr), 간기능(LFT), B형간염검사<br>(남성) 정액검사, (여성) AMH, 풍진면역검사</span></li>
												<li><p>④</p><span>주민등록등본</span></li>
												<li><p>⑤</p><span>가족관계증명서(부부 주민등록지가 다른 경우)</span></li>
												<li><p>⑥</p><span>사실혼 증명서류(사실혼의 경우): 주민등록등본 및 가족관계등록부 당사자별 각 1부, 사실혼 당사자 치료동의서, 1년이상 사실상 혼인관계 증명가능한 공문서 1부(또는 사실혼 확인보증서 및 보증인 신분증 사본 각 1부)</span></li>
												<li><p>⑦</p><span>기초생활수급자. 차상위계층 확인서(수급자 및 차상위 대상의 경우)</span></li>
											</ul>
										</li>
										<li>
											<div class="title">
												<span></span>
												<p>문의</p>
											</div>
											<ul class="text">
												<li><p>-</p><span>중랑구 보건소 모자건강센터 02)2094.0172/0874</span></li>
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
		
		<?php include '../inc/fotbanner.php'; ?>
		<?php include '../inc/footer.php'; ?>
	</div>
</body>
</html>
