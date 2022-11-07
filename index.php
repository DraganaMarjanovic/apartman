<?php 
$page="index";
include 'nav.php';

?>

<body style="background-color: rgba(86, 144, 86, 0.8);">

  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="./image/prva.jpg" class="w-100" alt="welcome">
      <div class="carousel-caption bg-light p-1 ">
        <p class="text-success ">Bez obzira da li ostajete samo jednu noć ili par dana, objekat će Vam pružiti sve što je potrebno da se osećate opušteno i prijatno kao u atmosferi toplog doma.</p>
      </div>
    </div>
  </div>


  <div class="row m-2 " >
    <div class="col m-2" id="unique">
      <img src="./image/vrt.jpg" width="530px" height="500px" alt="vrt">
      <h4 class="text-light p-3">Objekat se nalazi nedaleko od parka Čair i Kliničkog Centra na uzvišenju iznad Niške pivare i Sv.Nikolske crkve. Lokalna autobuska stanica je od objekta udaljena oko 100m.</h4>
      <img src="./image/cair.jpg" width="530px" height="500px" alt="cair">
      <h4 class="text-light">Apartman odiše prijatnom i relaksirajućom atmosferom što pogoduje osobama koje žele da se udalje od buke grada i saobraćaja, u ne tako prometnoj ulici, a opet blizu gradskih dešavanja. Nalazi se u prizemlju novoizgrađene zgrade, sa privatnim parkingom. </h4>
    </div>
  </div>



  <div class="col-4 ">
      <a href="contact.php" class="btn btn-light m-4">
      <img src="./image/welcome.png" width="500" height="500" alt="welcome"> KONTAK</a>
  </div>

</body>

<?php
include 'foot.php';
?> 