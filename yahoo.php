<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<title>Yahoo標題</title>
  </head>
  <?php include("crawler.php");?>
  <style>
	.vertical-center {
	  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
	  min-height: 100vh; /* These two lines are counted as one :-)       */

	  display: flex;
	  align-items: center; 
	}

	.jumbotron{
	  height:100%;
	  width:100%;
	  overflow-x: scroll;
	}
	
	.container{
		padding-right: 0px;
		padding-left: 0px;
	}

	#title,.table_text,#collapse_title{
	  font-family:'微軟正黑體';
	}
	
	.sky{
		background-color:#286DA8;
	}
	
	.tx-carbon{
		color:#5f5f5f;
	}
	
	a,.tx-watermelon{
		color:#324fe1;
	}
	
	.nav-tabs {
		border-color: #e2e2e6;
		background-color: #f4f4f4;
		border-bottom-width: 1px;
		zoom: 1;
		border-width: 0;
		border-style: solid;
	}
	
	a.nav-link.active.show{
		background-color:#286DA8;
	}

	a.nav-link{
		background-color:#ffffff;
	}

	#accordion{
		border-width: 1px;
		border-style: solid;
		border-color: #e2e2e6;
	}

	.nav-item{
		width:16%;
		border-left: 1px solid transparent;
		border-right: 1px solid transparent;
		text-align: center;
		padding-bottom: 2px;
	}
	
	.today-tab{
		font-weight: 700;
		border-top-width: 3px;
		border-top-style: solid;
		border-color: transparent
	}
	
	.active{
		border-right-color: #d6d6d6;
		border-bottom: 1px solid #fff;
		background-color: #fff;
		margin-bottom: -1px;
		color: #286DA8!important;
		border-bottom: 0;
		border-top-color: #286DA8;
		font-weight: 700;
		border-top-style: solid;
		border-color: transparent
	}
	
	
	.collapse_title{
		height: 224px;
		ackground-color: #fff;
	}
	
	
	.card{
		border: 0px;
	}
	
	.nav-tabs .nav-link.active{
		border-top-width: 3px;
		border-top-color: #286DA8;
	}

	.nav-tabs,#collapse_title{
		width: 633px;
	}
	
	.tab-pane.active{
		z-index: 2;
		margin-top: 0;
		margin: 0;
	}

	.title-cor{
		color:#286DA8;
	}
	
	.title-img{
		z-index: 1;
		position: absolute;
		height: 210px;
		top: 14px;
		left: 12px;
		border: 1px solid rgb(226, 226, 228);
		list-style:none;
	}
	
	.tab-data{
		position: relative;
		letter-spacing: normal;
		line-height: 1;
		display: inline-block;
		float: right;
	}
	
	.img-link,.img-alt{
		position:relative;
	}
	
	.img-alt{
		top: -45px;
	}
	
	.img-text{
		font-size: 24px;
		color: #fff!important;
		padding-right: 14px;
		padding-left: 14px;
		text-decoration: none;
		letter-spacing: normal;
	}
	
	.tab-text{
		width: 284px;
		float: right;
		position: relative;
		padding-top: 15px;
		display: block;
		margin-left: 20px;
		margin-right: 8px;
		margin-bottom: 6px;
	}
	
	.Va-tt{
		vertical-align: text-top;
		text-rendering: auto;
	}
	
	.card-text{
		margin-top: 0;
		margin-left: 32px;
		margin-right: 8px;
		line-height: 1;
		font: 13px/1.25 'Helvetica Neue',Helvetica,Arial,sans-serif;
	}
	
	.story-title{
		margin-top: 0;
		margin-left: 32px;
		margin-right: 8px;
	}
	
	.ImageLoader-Delayed{
		width: 100%;
		display: block;
	}
	
	.MainStoryImage{
		width: 350px;
		background-size: cover;
	}
</style>
  <?php 
	$yahoo_link = $title[1];
	$yahoo_title = $title[2];
	$yahoo_subtitle = $title[3];
	
	$yahoo_img = $img[0];
	$yahoo_alt = $img[1];
	$yahoo_img_link = $img_link[1];
    
	$category_title = $category[1];
	$category_count = count($category_title);

	$title_count = count($yahoo_title);

	include("add_data.php");
  ?>
  <body>
    <div class="jumbotron vertical-center bg-white">
		<div class="container" style="width: 635px;">
			<h2 id="title" class="text-center font-weight-bold title-cor">Yahoo 標題</h2>
			<div id="accordion">   
			    <ul class="nav nav-tabs">
					<?php
						for($k=0;$k<$category_count;$k++){
					?>
							<li class="nav-item"><span id="nav-<?= $k?>" class="nav-link text-dark today-tab" data-toggle="tab" href="#tab-<?= $k?>"><?= $category_title[$k]?></span></li>
					<?php
						}
					?>
			    </ul>
	      		<div id="collapse_title" class="card collapse show">
			        <div class="card-block">
			          	<div class="tab-content">
			          	<?php
			          		for($i=0;$i<$category_count;$i++){
			          	?>
			            		<div class="tab-pane" id="tab-<?= $i?>">
									<ul>
										<li class="title-img" >
											
												<a href="<?= $yahoo_img_link[$i];?>" class="img-link">
													<?= $yahoo_img[$i];?>
												</a>
												<a href="<?= $yahoo_img_link[$i];?>" class="img-alt">
													<p class="img-text"><?= $yahoo_alt[$i];?></p>
												</a>
											
										</li>
										
			            <?php  
			            		$a = $i * 4;
			            		$b = $a + 4;
			            		for($j=$a;$j<$b;$j++){
			            ?>
										<li class="tab-data">
											<div class="tab-text">
												<?= $yahoo_link[$j]; ?>
												<p class="card-text tx-carbon"><?= $yahoo_subtitle[$j]; ?></p>
											</div>
										</li>
						<?php
								}
						?>				
									</ul>
								</div>
						<?php		
							}
						?>
	            		</div>			
	          		</div>
	        	</div>
      		</div>
		</div>
	  </div>
	</div>
  </body>
  <script>
	$(document).ready(function() {
		$("#nav-0").addClass("active");
		$("#tab-0").addClass("active");
	});
	
	//標籤有[data-toggle="tab"]屬性，有滑鼠滑入時顯示tab區塊
	$(document).on('mouseenter', '[data-toggle="tab"]', function () {
      $(this).tab('show');
    });
  </script>
</html>