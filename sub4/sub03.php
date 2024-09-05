<?php
$cheditor = "no"; $_dep = array(4,3);
$_tit = array('가족','문화지원');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub4">
		<section>
			<article>
				<div class="inner">
					<h3>세상 모든 가족 함께</h3>
					<ul class="list-view">
						<li>
							<div class="title">
								<span></span>
								<p>모든 형태의 가족을 포용할 수 있는 환경 조성을 위해 사회적 인식 확산, 차별적 법·제도 개선, 보편적 서비스 인프라 구축 등을 포괄하는 캠페인</p>
							</div>
							<ul class="text">
								<li>
									<p>-</p>
									<span>내용
										<ul class="numlist">
											<li><p>·</p><span>(인식) 모든 형태의 가족에 대한 사회적 수용성 제고</span></li>
											<li><p>·</p><span>(제도) 차별적 법제를 개선하고 포용적 제도 구축</span></li>
											<li><p>·</p><span>(인프라) 지역사회 중심의 보편적 가족서비스</span></li>
										</ul>
									</span>
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
