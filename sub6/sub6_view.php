<?php
$cheditor = "no"; $_dep = array(6,1);
$_tit = array('알림','알림사항');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con sub6">
		<section>
			<article>
				<div class="inner">
                   	<div id="content">
                   		<div class="__tbl-view">
                   			<div class="tit">
                   				<ul>
                   					<li>2022-05-23</li>
                   					<li>119</li>
                   				</ul>
                   				<strong>테스트 채용공고</strong>
                   			</div>
                   			<div class="file">
                   				<dl>
                   					<dt>첨부파일 :</dt>
                   					<dd>
                   						<a href="#none">
                   							<img src="<?=DIR?>/img/icon/ico_file.gif" alt="첨부파일" border="0">
                   							중랑구육아종합지원센터 테스트 파일.hwp
                   						</a>
                   					</dd>
                   				</dl>
                   			</div>
                   			
                   			<div class="content">
                   				<p style="text-align: left">테스트 글입니다.</p>
                   			</div>
                   		</div>
                   		
                   		<div class="__tbl-bot">
                   			<dl>
                   				<dt><a href="#">이전글</a></dt>
                   				<dd><a href="#">시간제 보육교사 채용공고</a></dd>
                   			</dl>
                   			<dl>
                   				<dt><a href="#">다음글</a></dt>
                   				<dd><a href="#">공동육아방 전담요원 서류합격자 안내</a></dd>
                   			</dl>
                   		</div>
                   	</div>
                   	
                    <div class="__botarea">
                    	<div class="rig">
                    		<a href="<?=DIR?>/sub6/sub01.php" class="__btn1">목록</a>
                    	</div>
                    </div>
				</div>
			</article>
		</section>
	</div>
	<?php include '../inc/fotbanner.php';?>
	<?php include '../inc/footer.php';?>
</body>
</html>
