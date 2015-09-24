<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Voice&Piano</title>
  <link rel="shortcut icon" href="favicon.ico">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <link href="css/format.css" rel="stylesheet" type="text/css"/>

  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <script>
 
    var vsp = new google.maps.LatLng(44.439676, 26.113518);
    var marker;
    
    function initialize() {
     var myOptions = {
      zoom: 15,
      center: vsp ,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"),
      myOptions);
    
    var marker = new google.maps.Marker({
      position: vsp, 
      map: map, 
      title:"Voce si Pian !"
    });   
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <div class="container-fluid">
    <div class="row" style="display:none">
      <div class="col-xs-12 maincolor">
        <audio class="maincolor" id="bg-song" controls autoplay volume=0.5>

          <source src="background.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <script>
            var audio = document.getElementById('bg-song');
            audio.volume = 0.1;
            audio.addEventListener('canplaythrough', function() {
              this.currentTime = 15;
              this.play();
            });
            </script>
        </div>
      </div>

      <div class="row landing-dark-blue">
        <div class="col-xs-12">
          <?php include('meniu.html'); ?>
</div>
<!-- </div>

<div class="row"> -->
  <div class="col-xs-12 col-md-1"></div>
  <div class="col-xs-12 col-md-10">

    <div class="page-info">

<!-- <div class="page-info-header">
<strong><h3>Lorem ipsum</h3></strong><br />
</div> -->

<div class="page-info-content">

  <h3 style="text-align:center">Lecții de pian, voce, chitară și jazz pentru toate vârstele</h3>

  <p class="content">Găsiți un loc propice învățării, cu metode de predare adaptate fiecărui cursant, profesori cu experiență și o locație ruptă de aglomerația orașului. Ascultăm dorințele voastre muzicale, adaptăm programul de lucru pentru nevoile fiecăruia și personalizăm fiecare oră.</p>
  <p class="content">Motto: <blockquote style="text-align:center">,,Muzica purifică sufletele de praful vieții cotidiene,, - Berthold Auerbach</blockquote></p>
  <p class="content">Verificați secțiuniile de <a style="color:#4B942D" href="pian.php"><b>pian</b></a>, <a style="color:#F5D63D" href="voce.php"><b>voce</b></a>, <a style="color:#F28C33" href="chitara.php"><b>chitară</b></a>, <a style="color:#F44336" href="jazz.php"><b>jazz</b></a> pentru toate informațiile sau puteți suna la nr. 0762686570.</p>
  <p class="content">Locația? La 10 minute de metrou Universitate și 2 minute de Biserica Armenească. Pentru hartă apasă secțiunea contact.</p>
  <p class="content">Vrei să fii informat cu ultimele noutăți și evenimente,  apasă LIKE paginii noastre de facebook: <a href="http://www.facebook.com/Clubul.Muzical.Voce.si.Pian">www.facebook.com/Clubul.Muzical.Voce.si.Pian</a></p>

  <!-- <div class="credit_ribbon"></div> -->
</div>

</div>
</div>

<div class="col-xs-12 col-md-1"></div>
<!-- <div class="col-xs-12 col-md-1"></div> -->
</div>

<div class="row footer">
<a name="contact"></a>
  <div class="col-xs-12 col-md-1"></div>
  <div class="col-xs-12 col-md-4">

  <!-- <div class="page-info">
    <div class="page-info-header">

      <strong><h4>Date de contact</h4></strong>

    </div>
    <div class="page-info-content"> -->
      <div class="footer-contact">
        <span class="contactAddress">Strada Spatarului, nr. 27 (harta) <br />la 2 minute de Biserica Armeneasca si 10 minute de metrou Universitate
        </span>
        <span class="contactPhone">0762686570</span>
        <span class="contactEmail"><a href="mailto:alexandra.stefan.soprano@gmail.com">alexandra.stefan.soprano@gmail.com</a></span>
      </div>
  <!--   </div>
</div> -->

</div>
<div class="col-xs-12 col-md-1"></div>

<div class="col-xs-12 col-md-5">


  <div id="map">
  </div>
</div>

<div class="col-xs-12 col-md-1"></div>
</div>

</div>
</body>
</html>