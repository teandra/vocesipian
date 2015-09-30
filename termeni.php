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

      <div class="row landing-brown">
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


  <h4>1. Modul de plată</h4>
  <p class="content">Plata sedințelor se va face la începutul abonamentului. Aceasta se poate efectua numerar la locația: Strada Eforie, nr. 2, sector 5, Bucuresti sau prin transfer bancar.</p>
  <h4>2. Durata abonamentului</h4>
  <p class="content">Abonamentul are o valabilitate de 30 de zile din ziua începerii primei ședințe. Abonamentul poate fi:</p>
  <ul style="list-style-type:none">
  <li>a. Cel de 4 ședințe la prețul de 250 de lei (valabil la secțiunile de pian, voce, chitară)</li>
  <li>b. Cel de 8 ședințe la prețul de 450 de lei (valabil la secțiunile de pian, voce, chitară)</li>
  <li>c. Cel de 4 ședințe la prețul de 350 de lei (valabil la secțiunea de jazz)</li>
  <li>d. Cel de 8 ședințe la prețul de 600 de lei (valabil la secțiunea de jazz)</li>
  </ul>

  <p>Durata unei ședințe este de 55 de minute, cu 5 minute pauză.</p>
  
  <h4>3. Punctualitate</h4>
  <p class="content">Cursantul este așteptat și rugat să sosească la timp pentru lecții. Nu se va prelungi durata ședințelor în cazul întârzierilor ce i se datorează.</p>

  <h4>4. Sedințe nefrecventate</h4>
  <p class="content">Clubul Muzical Voce si Pian nu este obligat să recupereze ședințele nefrecventate de cursant. Orele de curs programate și neonorate prin prezența cursantului, se achită de către acesta, conform onorariului convenit. În cazul în care anularea ședinței este cauzată de profesor, onorariul nu se va pierde, ora de curs fiind recuperată în cel mai scurt timp posibil, în baza abonamentului achitat.</p>

  <p class="content"><i><ins>Excepție:</ins></i> În condițiile în care, din motive de boală sau alte incidente, cursantul va lipsi, profesorul va fi anunțat cu cel puțin 12 de ore înainte; ședința va fi reprogramată și recuperată la prima dată liberă din calendarul profesorului.</p>
  <p class="content"><i><ins>Excepție:</ins></i> Dacă profesorul este bolnav pentru o perioadă mai îndelungată de 3 săptămâni, atunci lecțiile lui vor fi preluate de un alt profesor.</p>

  <h4>5. Întreruperile temporare</h4>
  <p class="content">Datorate concediilor sau vacanțelor școlare ale cursanțiilor, trebuiesc anunțate cu cel puțin o săptămână în avans. Regula este valabilă în ambele sensuri, pauzele datorate concediilor profesoriilor vor fi aduse la cunoștiința cursanților cu cel puțin o săptămână înainte.</p>

  <h4>6. Programarea ședințelor</h4>
  <p class="content">Se face <b>exclusiv telefonic</b>, la numărul de telefon afișat în pagina de <a style="color:#459BA8" href="#contact"><b>contact</b></a> a 
site-ului.</p>
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