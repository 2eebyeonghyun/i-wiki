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
					<h5 class="center-h3">알림사항<p>'공지사항'에서는 중랑구육아종합지원센터와 관련된 다양한 정보 및 공지를 올려드립니다.</p></h3>
					
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
                    
                    <table class="__tbl-list">
                    	<caption></caption>
                    	<thead>
                    		<tr>
                    			<th>번호</th>
                    			<th>제목</th>
                    			<th>등록일</th>
                    			<th>조회</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr class="notice">
                    			<td><span class="__ico3">공지</span></td>
                    			<td class="subject">
                    				<a href="<?=DIR?>/sub6/sub6_view.php">코로나19 유행대비 어린이집용 대응 지침 11판 안내</a>
                    			</td>
                    			<td>2022-05-24</td>
                    			<td>857</td>
                    		</tr>
                    		<tr>
                    			<td>1853</td>
                    			<td class="subject">
                    				<a href="#none">[서울시 식생활종합지원센터] 건강한 나를 위한 작은 습관_#오늘의 채소와 과일 먹기! 안내<span class="ico"><span class="ico"><img src="<?=DIR?>/img/icon/ico-new.png" alt=""></span></span></a>
                    			</td>
                    			<td>2022-06-16</td>
                    			<td>9</td>
                    		</tr>
                    		<tr>
                    			<td>1852</td>
                    			<td class="subject">
                    				<a href="#none">[중랑구어린이급식관리지원센터]2022년 식생활스크리닝검사(DST)안내<span class="ico"><span class="ico"><img src="<?=DIR?>/img/icon/ico-new.png" alt=""></span></span></a>
                    			</td>
                    			<td>2022-06-16</td>
                    			<td>14</td>
                    		</tr>
                    		<tr>
                    			<td>1851</td>
                    			<td class="subject">
                    				<a href="#none">공동육아방 전담요원 최종 합격자 안내</a>
                    			</td>
                    			<td>2022-06-15</td>
                    			<td>91</td>
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
