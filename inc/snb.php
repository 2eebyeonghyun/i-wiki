
	<div id="svis" >
		<div class="inner">
			<h2><?=($_tit[1])?></h2>
			<div class="sub_navi_inner">
			    <span><?=$_tit[0]?></span>
			    <span>></span>
			    <span><?=$_tit[1]?></span>
			</div>
		</div>
	</div>

	<div id="snb">
	
		<ul class="snb">
			<li><a href="http://hansian.co.kr/jungnang/">HOME</a></li>
			<li class="ov">
				<span><?=$_tit[0]?></span>
				<ul>
					<li><a href="<?=DIR?>/sub1/sub01.php">임신</a></li>
					<li><a href="<?=DIR?>/sub2/sub01.php">출산</a></li>
					<li><a href="<?=DIR?>/sub3/sub01.php">육아</a></li>
					<li><a href="<?=DIR?>/sub4/sub01.php">가족</a></li>
					<li><a href="<?=DIR?>/sub5/sub01.php">교육</a></li>
					<li><a href="<?=DIR?>/sub6/sub01.php">알림</a></li>
				</ul>
			</li>
			
			
			
			<li class="ov">
				<span><?=$_tit[1]?></span>
				<?if($_dep[0]==1){?>
					<ul>
						<li class="<?pubGnb('1,1');?>"><a href="<?=DIR?>/sub1/sub01.php">임산부지원</a></li>
						<li class="<?pubGnb('1,2');?>"><a href="<?=DIR?>/sub1/sub02.php">난임지원</a></li>
					</ul>
				<?}else if($_dep[0]==2){?>
					<ul>
						<li class="<?pubGnb('2,1');?>"><a href="<?=DIR?>/sub2/sub01.php">출산지원</a></li>
						<li class="<?pubGnb('2,2');?>"><a href="<?=DIR?>/sub2/sub02.php">산후관리</a></li>
						<li class="<?pubGnb('2,3');?>"><a href="<?=DIR?>/sub2/sub03.php">돌봄지원</a></li>
						<li class="<?pubGnb('2,4');?>"><a href="<?=DIR?>/sub2/sub04.php">출산휴가</a></li>
					</ul>
				<?}else if($_dep[0]==3){?>
					<ul>
						<li class="<?pubGnb('3,1');?>"><a href="<?=DIR?>/sub3/sub01.php">양육수당</a></li>
						<li class="<?pubGnb('3,2');?>"><a href="<?=DIR?>/sub3/sub02.php">육아지원</a></li>
						<li class="<?pubGnb('3,3');?>"><a href="<?=DIR?>/sub3/sub03.php">놀이지원</a></li>
						<li class="<?pubGnb('3,4');?>"><a href="<?=DIR?>/sub3/sub04.php">육아상담</a></li>
						<li class="<?pubGnb('3,5');?>"><a href="<?=DIR?>/sub3/sub05.php">육아휴직</a></li>
					</ul>
				<?}else if($_dep[0]==4){?>
					<ul>
						<li class="<?pubGnb('4,1');?>"><a href="<?=DIR?>/sub4/sub01.php">가족지원</a></li>
						<li class="<?pubGnb('4,2');?>"><a href="<?=DIR?>/sub4/sub02.php">가족상담</a></li>
						<li class="<?pubGnb('4,3');?>"><a href="<?=DIR?>/sub4/sub03.php">문화지원</a></li>
					</ul>
				<?}else if($_dep[0]==5){?>
					<ul>
						<li class="<?pubGnb('5,1');?>"><a href="<?=DIR?>/sub5/sub01.php">어린이집</a></li>
						<li class="<?pubGnb('5,2');?>"><a href="<?=DIR?>/sub5/sub02.php">유치원</a></li>
						<li class="<?pubGnb('5,3');?>"><a href="<?=DIR?>/sub5/sub03.php">교육지원</a></li>
						<li class="<?pubGnb('5,4');?>"><a href="<?=DIR?>/sub5/sub04.php">부모·영유아 교육 및 행사</a></li>
					</ul>
				<?}else if($_dep[0]==6){?>
					<ul>
						<li class="<?pubGnb('6,1');?>"><a href="<?=DIR?>/sub6/sub01.php">알림사항</a></li>
						<li class="<?pubGnb('6,2');?>"><a href="<?=DIR?>/sub6/sub02.php">육아소식</a></li>
						<li class="<?pubGnb('6,3');?>"><a href="<?=DIR?>/sub6/sub03.php">보육정보</a></li>
					</ul>
				<?}?>
			</li>
			
		</ul>
	</div>

