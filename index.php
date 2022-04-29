<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Eid </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
@import url('http://fonts.cdnfonts.com/css/ds-arabic');
@import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);

</style>
  <!-- =======================================================

  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>



  <main id="main">



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Eid</h2>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
   
  
</div>
        <div class="row" >

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">

          
              <div class="form-group col-md-12">
              <picture>
                <img id="canvasImg" src="assets/img/eid.png" class="img-fluid img-thumbnail" alt="...">
                </picture>
              </div>
                
              <div class="form-group col-md-12">
                  <label for="name">Your Name</label>
                  <br />
                  <input type="text" id="Name" placeholder="your name" class="form-control" style="margin-bottom: 10px;" />
                  <input type="button" value="أنشاء البطاقة" onclick="GenerateImage()" style="margin-bottom: 10px;" class="btn btn-primary" />
              </div>

            </div>

          </div>
          </div>

        </div>

      </div>
      <div class="hidden-md hidden-xs screen">
      </div>
      <div class="modal fade active screen" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align:center;">
                    <h5 class="modal-title" id="exampleModalLabel">Eid</h5>
                </div>
                <div class="modal-body">
                  <picture>
                    <canvas id="idCanvas" width="800" height="1334" > </canvas>
                  </picture>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="Download()" class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
    </div>
      
    </section>
    <!-- End Contact Section -->

  
  
  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link href="http://fonts.cdnfonts.com/css/ds-arabic" rel="stylesheet">


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



  <Script Language='Javascript'>


function GenerateImage() {
    var From = $('#Name').val();
    if (From == "")
        return alert("أكتب أسمك أولا");

    var canvas = document.getElementById('idCanvas');
    var context = canvas.getContext('2d');
    var imageObj = new Image();
    imageObj.src = "assets/img/eid.png"; 
    
    context.drawImage(imageObj, 0, 0,800,1334);
    context.font = "bold 36px Tajawal";
    context.fillStyle  = '#00000';
    context.fillText(From, 320, 1080);//أحداثيات الأسم الأول 
    
    //document.getElementById('canvasImg').setAttribute('crossOrigin', 'anonymous');
    $('#exampleModal').modal("show");
}

function Download() {
    var canvas = document.getElementById('idCanvas');
    var link = document.createElement('a');
    var dataURL = canvas.toDataURL();
    link.download = "my-image.png";
    link.href = dataURL;
    // alert(link.href);
    link.click();
}


$("#Name").on("change", function () {
    var Val = $(this).val();
    $('#Name').val(Val);
});

$("#ToInput").on("change", function () {
    var Val = $(this).val();
    $('#ToInput').val(Val);
});

$('#exampleModal').on('hidden.bs.modal', function(e) {
     console.log('Cerrada');
   })



</Script>





</body>

</html>