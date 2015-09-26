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

      <div class="row landing-purple">
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



  <p class="content">Suntem o echipă tânără de profesori care are scopul de a construi o comunitate muzicală, unde oamenii sunt liberi să exploreze şi să îşi dezvolte interesele muzicale. Indiferent de stilul de muzică, noi îl îmbrăţişăm şi vom încerca să găsim o modalitate de a dezvolta abilităţile muzicale ale cursanțiilor.</p> 

  <p class="content">Într-un efort de a introduce cât mai multe stiluri muzicale în comunitate, organizăm evenimente publice, încurajându-ne mereu atât profesorii, cât şi cursanții să participe la diverse concursuri de muzică. Noi credem că muzica merită să fie împărtăşită şi ne-ar place să vă alăturaţi nouă în timpul unuia dintre evenimentele noastre.</p>

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

  <p class="content">Obiective Generale:<br />
  <ul style="list-style-type:disc">
  <li>stimularea interesului tinerilor pentru studiul muzicii în învățământul particular;</li>
  <li>oferirea unei alternative culturale de petrecere a timpului liber;</li>
  <li>dezvoltarea creativitații și importanța în plan personal și profesional;</li>
  <li>dezvoltarea capacității de a se exprima mai repede și mai ușor prin muzică;</li>
  <li>confirmarea importanței școliilor de arte, rolul important al acestora în ridicarea nivelului cultural al populației;</li>
  <li>dezvoltarea emisferelor creierului;</li>
  <li>învățarea noțiunilor de bază: ritm, note muzicale, genuri muzicale, acorduri și tehnică instrumentală;</li>
  <li>citirea notelor la prima vedere, reproducerea și recunoașterea notelor și a fragmentelor muzicale;</li>
  <li>îmbogățirea repertoriului muzical a cursanțiilor.</li>
  </ul>
  </p>

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
      <?php include('footer.html'); ?>
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