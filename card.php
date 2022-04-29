<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="description" content="">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="بطاقات معايده">
    <meta property="twitter:site" content="بطاقات معايده">
    <meta property="twitter:creator" content="بطاقات معايده">
	
    <!-- Open Graph Meta-->
    <meta property="og:type" content="بطاقات معايده">
    <meta property="og:site_name" content="بطاقات معايده">
    <meta property="og:title" content="بطاقات معايده">
    <meta property="og:description" content="بطاقات معايده">
	
    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="pictures/icon.png" sizes="32x32" />
    <link rel="icon" type="image/ico" href="pictures/icon.png" sizes="16x16" />

    <!-- Title -->
    <title>بطاقات معايده</title>

    <!-- Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="stylefull.css">
		
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <style type="text/css" media="screen">
      body{
        color: #0c5460        font-size:  1rem !important;
      }
      .bg-dark{
        background: #0c5460 !important;
      }
      .img-thum img{
        border-color: #0c5460 !important;
      }
      .btn-dark{
        background-color: #0c5460 !important;
        border-color: #0c5460 !important;
      }
      .form-control{
        border-color: #0c5460 !important;
      }
      .lead{
        font-size:  1.25rem !important;
      }
      h1, .h1{
        font-size:  2.5rem !important;
      }
      h2, .h2{
        font-size:  2rem !important;
      }
      h3, .h3{
        font-size:  1.75rem !important;
      }
      h4, .h4{
        font-size:  1.5rem !important;
      }
      h5, .h5{
        font-size:  1.25rem !important;
      }
      h6, .h6{
        font-size:  1rem !important;
      }
    </style>
  </head>
  <body>
	
        <nav class="navbar navbar-dark bg-dark navbar-light bg-light">
		    <div class="container">
		    
              <a class="navbar-brand" href="index.php"><i class="fa fa-cube"></i> بطاقات معايده</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="/">الأعياد</a>
                </div>
              </div>
			  
		    </div>
        </nav>

		<div class="container">
		
		    <div style="margin-top: 30px">
			  <p class="alert alert-info" role="alert">
			     وبكل بساطة تكتب اسمك وتحدد مكان ولون وحجم النص وترسل لأحبابك ..			  </p>
		    </div><hr>

			<div class="row">
				<div class="col-sm-12" style="margin-bottom: 15px;">
					<label class="control-label">أدخل اسمك:</label>
					<textarea  class="form-control" name="name-input" id="name-input"></textarea>
				</div>
				<div class="col">
					<label class="control-label">إختر اللون:</label>
					<input type="color" class="form-control" placeholder="اختر اللون" name="color" id="color" value="#0c5460">
				</div>
				<div class="col">
					<label class="control-label">حجم الخط:</label>
					<div class="text-center text-name">
						<div class="slidecontainer">
							<input type="range" min="1" max="100" name="font_size" id="font_size" value="20">
						</div>
					</div>
				</div>
			</div>

			<br>
		  

		  
			<div class="row">

				<div class="col-sm-12 text-center" style="position: relative;">
					<div class="dir-buttom">
					  <button class="btn btn-dark" onclick="javascript: movetext('right');"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
					  <button class="btn btn-dark" onclick="javascript: movetext('left');"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
					  <button class="btn btn-dark" onclick="javascript: movetext('up');"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
					  <button class="btn btn-dark" onclick="javascript: movetext('down');"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>
					</div>
					<img id="card-image" width="360" height="360" src="assets/pictures/13.jpg" style="display: none">
					<div class="canimg">
						<canvas width="360" height="360" id="canvas"></canvas>
					</div>
				</div>

				<p class="col-sm-12 text-center">
					<a class="btn btn-dark" id="download_btn" style="color: #fff;">تحميل البطاقة</a>
					<a class="btn btn-dark" href="index.php" style="color: #fff;">الرئيسية</a>
				</p>
				<div class="col-sm-12 text-center">
				    <form method="get" action="card.php" style="text-align: center" target="_blank">
                    <input type="hidden" name="id" value="14">
                    <input type="hidden" name="generate" value="1">
                    <input type="hidden" name="x_axis" id="x_axis" value="0">
                    <input type="hidden" name="y_axis" id="y_axis" value="0">
                    <input type="hidden" name="wname" id="wname" value="">
                    <input type="hidden" name="wfont_size" id="wfont_size" value="20">
                    <input type="hidden" name="wfont_color" id="wfont_color" value="#0c5460">
                                        <button type="submit" class="btn btn-dark" style="color: #fff;">تحميل البطاقة بدقة عالية</a>
                                        </form>
				</div>
				
			</div>
			

				
		</div>

		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<!-- /.container -->

		
<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
<script type="text/javascript">
var context = null;
var canvas = null;
var size_template = "bold Xpx Tajawal";

window.onload = function()
{
    var tag = $('#card-image').get(0);
    var w = $(tag).attr('width');
    var h = $(tag).attr('height');

	canvas = document.getElementById('canvas'), context = canvas.getContext('2d');
	canvas.width = $('#card-image').width();
	canvas.height = $('#card-image').height();
	context.imageSmoothingEnabled = true;
	//canvas.crossOrigin = "Anonymous";
	context.drawImage(tag, 0, 0, w, h);

	var size_template = "bold Xpx Tajawal";
	context.font = size_template.replace("Xpx", $("#font_size").val() + "px");
	var value = '';
	
	update_xy(canvas);

	$(document).on('input','#name-input', function()
	{
	    var tag = $('#card-image').get(0);
        w = $(tag).attr('width');
        h = $(tag).attr('height');
        
		var x_a = $("#x_axis").val();
		var y_a = $("#y_axis").val();
	
		console.log($(this).val());
		context.imageSmoothingEnabled = true;
		context.clearRect(0, 0, ((canvas.width/2)),((canvas.height/2)));
		context.drawImage($('img').get(0), 0, 0, w, h);
		context.fillStyle = $("#color").val();
		context.fillText($(this).val(), x_a, y_a);
		value = $(this).val();
		
		$("#wname").val($(this).val());
	});
	
	function downloadCanvas(link, canvasId, filename) 
	{
		var image = new Image();
		image.src = document.getElementById(canvasId).toDataURL("image/png");
		var ua = navigator.userAgent.toLowerCase(); 
		if (ua.indexOf('safari') != -1) { 
		  if (ua.indexOf('chrome') > -1) {
		  } else {
			  $('#download').attr("target", "_blank");
		  }
		}
		
		link.href = document.getElementById(canvasId).toDataURL("image/png");
		link.download = filename;               
	}
	
	document.getElementById('download_btn').addEventListener('click', function() {
		downloadCanvas(this, 'canvas', value);
	}, false);
	
	$("#color").on('change', function()
	{
		refresh_card();
		$("#wfont_color").val($(this).val());
	});
	
	$("#font_size").on('change', function()
	{
		context.font = size_template.replace("Xpx", $("#font_size").val() + "px");
		refresh_card();
		$("#wfont_size").val($(this).val());
	});
};
function update_xy(canvas)
{
	var x_a = $("#x_axis").val();
	var y_a = $("#y_axis").val();
	
	if(x_a == 0)
	{
		$("#x_axis").val(((canvas.width/1.5)));
		$("#y_axis").val(((canvas.height/1.5)));
	}
	
	console.log(x_a, y_a);
}
function refresh_card()
{
    var tag = $('#card-image').get(0);
    w = $(tag).attr('width');
    h = $(tag).attr('height');
    
	var ccontext = window.context;
	var ccanvas = window.canvas;
	var x_a = $("#x_axis").val();
	var y_a = $("#y_axis").val();

    ccontext.imageSmoothingEnabled = true;
	ccontext.clearRect(0, 0, ((ccanvas.width/2)),((ccanvas.height/2)));
	ccontext.drawImage($('img').get(0), 0, 0, h, w);
	ccontext.fillStyle = $("#color").val();
	ccontext.fillText($("#name-input").val(), x_a, y_a);
}
function movetext(direction)
{
	var ccanvas = window.canvas;
	
	switch(direction)
	{
		case 'left':
			var new_val = parseInt($("#x_axis").val())-10;
			if(new_val < 10) new_val = ccanvas.width/2;
			
			$("#x_axis").val(new_val);
			refresh_card();
		break;
		case 'right':
			var new_val = parseInt($("#x_axis").val()) + 10;
			console.log(new_val, ccanvas.width);
			if(new_val > ccanvas.width) new_val = ccanvas.width/2;
			
			$("#x_axis").val(new_val);
			refresh_card();
		break;
		case 'up':
			var new_val = parseInt($("#y_axis").val())-10;
			if(new_val < 10) new_val = ccanvas.height/2;
			
			$("#y_axis").val(new_val);
			refresh_card();
		break;
		case 'down':
			var new_val = parseInt($("#y_axis").val())+10;
			if(new_val > ccanvas.height) new_val = ccanvas.height/2;
			
			$("#y_axis").val(new_val);
			refresh_card();
		break;
	}
}
</script>


  </body>
</html>