<?php
$cheditor = "no"; $_dep = array(7,1);
$_tit = array('검색','통합검색');

include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body class="sub_ sub_<?=$_dep[0];?> sub_<?=$_dep[0].$_dep[1].$_dep[2];?>">
	<?php include '../inc/head.php'; ?>
	<?php include '../inc/snb.php'; ?>
	
	<div id="wrap" class="con search">
		<section>
			<article>
				<div class="inner">
					<form action="" class="total_sch_form" name="tsearch" onsubmit="return tsearchgo();">
						<fieldset>
							<legend>통합검색 키워드 입력</legend>
							<input type="search" class="sch_keyword" placeholder="검색어를 입력해주세요" name="stext" value="">
							<input type="image" src="<?=DIR?>/img/icon/btn_to_sch.jpg" class="btn_submit">
						</fieldset>	
					</form>
					
					<ul class="sch_result">
						<li>
							<strong class="category">알림사항</strong>
							<dl>
								<dt></dt>
								<dd>검색된 내용이 없습니다.</dd>
							</dl>
						</li>
						<li>
							<strong class="category">육아소식</strong>
							<dl>
								<dt></dt>
								<dd>검색된 내용이 없습니다.</dd>
							</dl>
						</li>
						<li>
							<strong class="category">보육정보</strong>
							<dl>
								<dt></dt>
								<dd>검색된 내용이 없습니다.</dd>
							</dl>
						</li>
					</ul>
				</div>
			</article>
		</section>
	</div>
	
	<?php include '../inc/fotbanner.php';?>
	<?php include '../inc/footer.php';?>
</body>
<script>
	function tsearchgo(){
		var form=document.tsearch;
		if(form.stext.value == "검색어를 입력하세요."){
			form.stext.value = "";
		}
		if(!form.stext.value){
			alert("검색어를 입력하세요.");
			form.stext.focus();
			return false;
		}
		form.submit();		
	}
</script>
</html>