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
	}

	#title,.table_text{
	  font-family:'微軟正黑體';
	}

	#login,#setup{
	  margin-top:10;
	  margin-bottom:10;
	}

	.checkbox-inline{
	  float: right;
	}
	
	.table-border{
		border-width:3px !important;
	}

	.table-bordered th,.table-bordered td{
		border:3px solid #007bff;
	}
	
	.no{
		width: 70px;
	}
	
	.title-width{
		width: 315px;
	}
</style>
  <?php 
	$yahoo_link = $title[1];
	$yahoo_subtitle = $title[2];
    $count = count($yahoo_link);
  ?>
  <body>
    <div class="jumbotron vertical-center bg-info">
	<div class="container" style="width: 700px;">
		<h2 id="title" class="text-center text-black font-weight-bold">Yahoo 標題</h2>
		<div id="accordion">   
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-1" role="tab">焦點</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">運動</a></li>
        <li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#tab-3" role="tab">娛樂</a></li>
		<li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#tab-4" role="tab">生活</a></li>
		<li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#tab-5" role="tab">FUN</a></li>
		<li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#tab-6" role="tab">影音</a></li>
      </ul>
      <div id="collapse_title" class="card collapse">
        <div class="card-block">
          <div class="tab-content">
            <div class="tab-pane active" id="tab-1">
              <h4 class="card-title">Tab 1</h4>
              <p class="card-text">Libero at quibusdam autem magnam necessitatibus, ullam nisi quo, architecto molestias reprehenderit neque porro velit deleniti ipsa mollitia pariatur! Expedita, eius repudiandae.</p>
            </div>
            <div class="tab-pane" id="tab-2">
              <h4 class="card-title">Tab 2</h4>
              <p class="card-text">Magni autem a perferendis tempore perspiciatis aspernatur sapiente fuga deserunt dignissimos consequuntur maiores aliquid hic, in pariatur, officiis repellat voluptatum provident blanditiis.</p>
            </div>
            <div class="tab-pane" id="tab-3">
              <h4 class="card-title">Tab 3</h4>
              <p class="card-text">Odio, facilis, vel eum nam architecto maxime consequuntur consectetur et qui eveniet alias minus provident suscipit delectus odit cupiditate similique fuga vero!</p>
            </div>
          </div>
        </div>
      </div>


			<br/>
		
			<table class="table table-bordered table_text bg-white text-black table-striped table-border font-weight-bold table-responsive">
				<thead>
				  <tr>
					<th scope="col" class="no">序號</th>
					<th scope="col" class="title-width">主標題</th>
					<th scope="col" class="title-width">副標題</th>
				  </tr>
				</thead>
				<tbody>
				  <?php
					for($i=0;$i<$count;$i++){
				  ?>
					<tr>
					  <th><?= $i+1; ?></th>
					  <td><?= $yahoo_link[$i]; ?></td>
					  <td><?= $yahoo_subtitle[$i]; ?></td>
					</tr>
				  <?php
					}
				  ?>
				</tbody>
			 </table>
		</div>
	  </div>
	</div>
  </body>
  <script>
	$(document).ready(function() {

  $('.nav-link').on('click', function() {
    if (!$('#collapse_title').hasClass('show')) {
      $('#collapse_title').collapse('toggle')
    }
  })
});
  </script>
</html>