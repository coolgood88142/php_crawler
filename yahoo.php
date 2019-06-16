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
</style>
  <?php 
	$yahoo_link = $title[1];
    $yahoo_title = $title[2];
    $count = count($yahoo_title);
  ?>
  <body>
    <div class="jumbotron vertical-center bg-info">
    <div class="container" style="width: 500px;">
      <h2 id="title" class="text-center text-black font-weight-bold">Yahoo 標題</h2>
        <div id="accordion">       
          <table class="table table-bordered table_text bg-white text-black table-striped table-border font-weight-bold">
            <thead>
              <tr>
                <th scope="col">序號</th>
                <th scope="col">標題</th>
              </tr>
            </thead>
            <tbody>
              <?php
                for($i=0;$i<$count;$i++){
              ?>
                <tr>
                  <td><?= $i+1; ?></td>
				  <td><?= $yahoo_title[$i]; ?></td>
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
</html>