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
					<h5 class="center-h3">육아소식<p>'육아소식'에서는 영유아와 관련된 최신의 뉴스를 전해드립니다.</p></h3>
					
					<div class="list-search-form">
                    	<form action="sform" method="get">
                    		<select name="searchType">
                    			<option value="total" selected="selected">전체</option>
                    			<option value="title">제목</option>
                    			<option value="content">내용</option>
                    		</select>
                    		<div>
                    			<label for></label>
                    			<input type="text" name="searchText" value>
                    			<button type="submit">
                    				<span>검색</span>
                    			</button>
                    		</div>
                    	</form>
                    </div>
                    
                    <table class="__tbl-list __tbl-list-w">
                    	<caption></caption>
                    	<thead>
                    		<tr>
                    			<th>번호</th>
                    			<th>유형</th>
                    			<th>제목</th>
                    			<th>등록일</th>
                    			<th>조회</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td>1666</td>
                    			<td>건강</td>
                    			<td class="subject">
                    				<a href="<?=DIR?>/sub6/sub6_view2.php">노로바이러스 및 장내 아데노바이러스 예방수칙<span class="ico"><span class="ico"><img src="<?=DIR?>/img/icon/ico-new.png" alt=""></span></span></a>
                    			</td>
                    			<td>2022-06-16</td>
                    			<td>9</td>
                    		</tr>
                    		<tr>
                    			<td>1665</td>
                    			<td>부모교육자료</td>
                    			<td class="subject">
                    				<a href="#none">우리 아기가 낯을 가리기 시작했어요. 낯가림을 줄이는 놀이법</a>
                    			</td>
                    			<td>2022-06-16</td>
                    			<td>9</td>
                    		</tr>
                    	</tbody>
                    </table>
                    
                    <div class="__botarea">
                    	<div class="cen">
                    		<?php include '../inc/paging.php';?>
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
