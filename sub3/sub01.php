<?php
$cheditor = "no"; $_dep = array(3,1);
$_tit = array('육아','양육수당');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub3">
		<section>
			<article>
				<div class="inner">
					<ul class="list-view">
						<li>
							<div class="title">
								<span></span>
								<p>아동수당</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>지원대상 : 만 8세 미만의 모든 아동 (0~95개월)</span></li>
								<li><p>-</p><span>지원내용 : 매월 25일 아동 또는 부모 등의 명의 계좌로 현금 지급</span></li>
								<li><p>-</p><span>지원금액 : 아동 1인당 월 10만원<br>※ 출생일로부터 60일 이내 신청 시 출생월부터 지급</span></li>
								<li><p>-</p><span>신청방법 : 동주민센터 방문 신청, 복지로 온라인</span></li>
								<li style="margin: 0px;"><a href="https://www.bokjiro.go.kr/">복지로 ></a></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>영아수당</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>지원대상 : ’22년 1월1일 이후 출생한 만 2세 미만의 아동 (0~23개월)</span></li>
								<li><p>-</p><span>선정기준 : 어린이집 등을 이용하지 않고 가정에서 양육하는 영아에게 지원<br>※ 가정양육 하는 아동의 경우 만2세부터는 가정양육수당을 지급</span></li>
								<li><p>-</p><span>지원내용 : 매월 25일 현금 또는 바우처로 지급<br>※ 현금, 보육료, 아이돌봄서비스 중 1가지 서비스만 수급 가능</span></li>
								<li><p>-</p><span>지원금액 : 아동 1인당 월30만원</span></li>
								<li><p>-</p><span>신청방법 : 동주민센터 방문 신청, 복지로 온라인</span></li>
								<li style="margin: 0px;"><a style="margin-bottom: 40px;" href="https://www.bokjiro.go.kr/">복지로 ></a></li>
								<li><p>-</p><span>※ 출생신고 시 행복출산원스톱서비스로 일괄 신청 가능</span></li>
							</ul>
						</li>
						<li>
							<div class="title">
								<span></span>
								<p>가정양육수당</p>
							</div>
							<ul class="text">
								<li><p>-</p><span>지원대상 : 어린이집･유치원(특수학교 포함)･종일제 아이돌봄 서비스를 이용하지 않고 가정에서 양육되는 영유아 (0~86개월)</span></li>
								<li><p>-</p><span>지원내용 : 매월 25일 계좌 이체를 통한 현금 지급</span></li>
								<li><p>-</p><span>선정기준 : 영아수당 도입에 따라 ‘22년 이후 출생아는 만 2세부터 가정양육수당 지원</span></li>
								<li><p>-</p><span>신청방법 : 동주민센터 방문 신청, 복지로 온라인 신청</span></li>
								<li style="margin: 0px;"><a style="margin-bottom: 40px;" href="https://www.bokjiro.go.kr/">복지로 ></a></li>
								<li class="table-area">
									<table class="table">
										<tbody>
											<tr>
												<th>연령</td>
												<th>가정양육수당</td>
												<th>연령</td>
												<th>장애아동 양육수당</td>
											</tr>
											<tr>
												<td>0~11개월</td>
												<td>200,000원</td>
												<td rowspan="2">0~35개월</td>
												<td rowspan="2">200,000원</td>
											</tr>
											<tr>
												<td>12~23개월</td>
												<td>150,000원</td>
											</tr>
											<tr>
												<td>24~86개월</td>
												<td>100,000원</td>
												<td>36~86개월</td>
												<td>100,000원</td>
											</tr>
										</tbody>
									</table>
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
