<?php
$cheditor = "no"; $_dep = array(6,2);
$_tit = array('알림','육아소식');

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
                   			<div class="tit"><strong>노로바이러스 및 장내 아데노바이러스 예방수칙</strong></div>
                   			<table class="tbl">
                   				<tbody>
                   					<tr>
                   						<th>글쓴이</th>
                   						<td>관리자</td>
                   						<th>등록일</th>
                   						<td>2022-06-29</td>
                   					</tr>
                   					<tr>
                   						<th>유형</th>
                   						<td>건강</td>
                   						<th>조회수</th>
                   						<td>9</td>
                   					</tr>
                   					<tr>
                   						<th>첨부파일</th>
                   						<td colspan="3"></td>
                   					</tr>
                   				</tbody>
                   			</table>
                   			<div class="con">
                   				<p style="text-align: left">테스트 글입니다.</p>
                   			</div>
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
                   	
                    <div class="__botarea">
                    	<div class="rig">
                    		<a href="<?=DIR?>/sub6/sub02.php" class="__btn1">목록</a>
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
