
<?php

include 'nav.php';

?>

<div class="row">
  <div class="col-8 m-5">

    <form action="contact.php" method="POST">

      <div class="form-group m-3 h6">
        <label for="name">Vaše ime:</label>
        <input type="text" class="form-control " id="name" name="name"   >
        <span class="text-danger"><?php 
         if(!empty($error['name'])){echo  $error['name'];} ?>
        </span>

      </div>

      <div class="form-group m-3 h6">
        <label for="email">Vaš email:</label>
        <input type="text" class="form-control " id="email" name="email" >
        <span class="text-danger"><?php 
            if(!empty($error['email'])){echo  $error['email'];} ?>
        </span>
      </div>

      <div class="form-group m-3 h6">
        <label for="phone">Vaš telefon:</label>
        <input type="text" class="form-control " id="phone" name="phone" >
        <span class="text-danger"><?php
       if(!empty($error['phone'])){echo  $error['phone'];} ?>
        </span>

      </div>

      <div class="form-group m-3 h6">
        <label for="title">Naslov poruke</label>
        <input type="text" class="form-control " id="title" name="title"  >
        <span class="text-danger"><?php 
                if(!empty($error['title'])){echo  $error['title'];} ?>
        </span>
      </div>

      <div class="form-group m-3 h6">
        <label for="text">Poruka</label>
        <textarea class="form-control" id="message" rows="8" name="message" ></textarea>
        <span class="text-danger"><?php
          if(!empty($error['message'])){echo  $error['message'];} ?>
        </span>
      </div>

      <button type="submit" class="btn btn-success m-3" name="sub" value="yes">POŠALJI</button>

    </form>

   

  </div>


  <div class="col-10 bg-success bg-opacity-50 m-5">

    <h2 class="m-3"> Kako do nas?</h2>
    <div class="m-3 h5"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-geo-alt-fill text-success " viewBox="0 0 16 16">
        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
      </svg>Perfect place, Božidara Veljkovića 1G, Niš, Srbija
      <p class="text-success p-4 h5">GPS:43.308448, 21.909381 </p>
    </div>


    <div class="m-3 h5">
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-envelope text-success" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
      </svg> apartmannisperfectplace@gmail.com
    </div>


    <div class="m-3 h5">
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-telephone text-success" viewBox="0 0 16 16">
        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
      </svg>+(381)600851085
    </div>

    <iframe id="different" class="m-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5806.585248103562!2d21.90534883333897!3d43.308133382692816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b19dfd9cee5f%3A0xa75f20dcffaccb9d!2sBo%C5%BEidara%20Veljkovi%C4%87a%201G!5e0!3m2!1sen!2srs!4v1664821280833!5m2!1sen!2srs" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


  </div>

</div>


<?php
include 'foot.php';
?>

