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
          <script>
            var audio = document.getElementById('bg-song');
            audio.volume = 0.1;
          </script>
          <source src="background.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>

      <div class="row landing-orange">
        <div class="col-xs-12">
          <?php include('meniu.html'); ?>
</div>
<!-- </div>

<div class="row"> -->
  <div class="col-xs-12 col-md-1"></div>
  <div class="col-xs-12 col-md-5">

    <div class="page-info">

<!-- <div class="page-info-header">
<strong><h3>Lorem ipsum</h3></strong><br />
</div> -->

<div class="page-info-content">

  <p class="content">Cursurile de chitară sunt destinate tuturor celor care doresc să descopere tainele unui instrument interesant, prezent în muzica ușoară și de divertisment.</p>

  <p class="content">Lecțiile pot începe de la vârsta de 8 ani, fără limită superioară de vârstă.</p>

  <p class="content">Ședințele sunt individuale și durează 55 de minute.</p>

  <p class="content">Abonamente:</p>

  <ul style="list-style-type:none">
  <li>4 ședințe: 250 RON</li>
  <li>8 ședințe: 400 RON</li>
  </ul>

  <p class="content"><a href="termeni.php">Termenii abonamentului</a></p>
  <!-- <div class="credit_ribbon"></div> -->
</div>

</div>
</div>

<div class="col-xs-12 col-md-5">

    <div class="page-info">

<!-- <div class="page-info-header">
<strong><h3>Lorem ipsum</h3></strong><br />
</div> -->

<div class="page-info-content">

  <p class="content">Se pot aprofunda umătoarele stiluri:</p>

  <ul style="list-style-type:none">
  <li>Folk</li>
  <li>Muzică blues</li>
  <li>Muzică country</li>
  <li>Muzică rock</li>
  <li>Muzică jazz</li>
  <li>Muzică pop</li>
  <li>Muzică cultă</li>
  <li>Muzică clasică</li>
  </ul>
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