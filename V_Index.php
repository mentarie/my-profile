<!DOCTYPE html>
<html>
  <link rel="shortcut icon" type="assets/image/ico" href="<?php echo base_url(); ?>assets/images/img.jpg" />
  <title>Aii</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- font awesome lokal -->
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <style>
    /*semua font pakai font yang sudah di download*/
    body, h1,h2,h3,h4,h5,h6 {
      font-family: "Montserrat", sans-serif
    }
    .row-padding img {
      margin-bottom: 12px
    }
    /* atur lebar sidebar 120px */
    .sidebar {
      width: 120px;
      background: #222;
    }
    /* tambahkan margin kiri ke "konten halaman" yang cocok dengan sidebar (120px) */
    #main {
      margin-left: 120px
    }
    /* hapus margin waktu responsive*/
    @media only screen and (max-width: 600px) {
      #main {
        margin-left: 0
      }
    }
  </style>
  <body class="black">
    <!-- Icon Bar-->
    <nav class="sidebar bar-block small hide-small center">
      <!-- Avatar -->
      <img src="<?php echo base_url(); ?>assets/images/img.jpg" style="width:100%">
      <a href="#" class="bar-item button padding-large black">
        <i class="fa fa-home xxlarge"></i>
        <p>HOME</p>
      </a>
      <a href="#about" class="bar-item button padding-large hover-black">
        <i class="fa fa-user xxlarge"></i>
        <p>ABOUT</p>
      </a>
      <a href="#photos" class="bar-item button padding-large hover-black">
        <i class="fa fa-camera xxlarge"></i>
        <p>PHOTOS</p>
      </a>
      <a href="#blog" class="bar-item button padding-large hover-black">
        <i class="fa fa-wordpress xxlarge"></i>
        <p>BLOG</p>
      </a>
      <a href="#contact" class="bar-item button padding-large hover-black">
        <i class="fa fa-envelope xxlarge"></i>
        <p>CONTACT</p>
      </a>
    </nav>
    <!-- Icon Bar -->

    <!-- Navbar buat responsif kecil -->
    <div class="top hide-large hide-medium " id="myNavbar">
      <div class="bar black opacity hover-opacity-off center small">
        <!-- bikin important untuk memberikan prioritas terhadap perintah -->
        <a href="#" class="bar-item button" style="width:20% !important">HOME</a>
        <a href="#about" class="bar-item button" style="width:20% !important">ABOUT</a>
        <a href="#photos" class="bar-item button" style="width:20% !important">PHOTOS</a>
        <a href="#blog" class="bar-item button" style="width:20% !important">BLOG</a>
        <a href="#contact" class="bar-item button" style="width:20% !important">CONTACT</a>
      </div>
    </div>
    <!-- Navbar end -->

    <!-- Page Content -->
    <div class="padding-large" id="main">
      <!-- Header/Home -->
      <header class="container padding-32 center black" id="home">
        <h1 class="jumbo"><span class="hide-small"></span> Mentari E. Rizki</h1>
        <p>Secret Admirer and UX Researcher.</p>
        <img src="<?php echo base_url(); ?>assets/images/bnw.jpg" alt="boy" class="image" width="800" height="992">
      </header>
      <!-- About Section -->
      <div class="content justify text-grey padding-64" id="about">
        <h2 class="text-light-grey">She...</h2>
        <hr style="width:200px" class="opacity">
        <p> Loves both art and social interaction. Her mission is to integrate them and bring the best out into this world. She is well known as an humble-nature and always try to create a mutual working environment. She isn’t easy to befriend with, but you will love her if you already get to know her.
        </p>
        <h3 class="padding-16 text-light-grey">Skills</h3>
        <!-- pakai % untuk definisinya -->
        <p class="wide">Photoshop</p>
        <div class="white">
          <div class="dark-grey" style="height:28px;width:95%"></div>
        </div>
        <p class="wide">Web Design</p>
        <div class="white">
          <div class="dark-grey" style="height:28px;width:85%"></div>
        </div>
        <p class="wide">UX Research</p>
        <div class="white">
          <div class="dark-grey" style="height:28px;width:80%"></div>
        </div><br>
        <div class="row center padding-16 section light-grey">
          <div class="quarter section">
            <span class="xlarge">2+</span><br>
            Internship
          </div>
          <div class="quarter section">
            <span class="xlarge">10+</span><br>
            Partners
          </div>
          <div class="quarter section">
            <span class="xlarge">10+</span><br>
            Projects Done
          </div>
          <div class="quarter section">
            <span class="xlarge">100+</span><br>
            Meetings
          </div>
          <!-- <div>
            <button>Download CV</button>
          </div> -->
        </div>
        
        <!-- Experiences -->
        <h3 class="padding-24 text-light-grey">Experiences</h3>
        <img src="<?php echo base_url(); ?>assets/images/intern.jpg" alt="Avatar" class="left circle margin-right" style="width:80px">
        <p><span class="large margin-right">Website Developer</span> - CV. Karya Hidup Sejahtera (QUICK TRACTOR)</p>
        <p>Juli 2017 - Juli 2018.</p><br>
        <img src="<?php echo base_url(); ?>assets/images/intern2.png" alt="Avatar" class="left circle margin-right" style="width:80px">
        <p><span class="large margin-right">Junior Data Analyst</span> - Snapcart Digital Indonesia</p>
        <p>Agustus 2018 - Oktober 2018</p><br>
        <img src="<?php echo base_url(); ?>assets/images/intern3.png" alt="Avatar" class="left circle margin-right" style="width:80px">
        <p><span class="large margin-right">Organizing Committee Marketing and Communication</span> - AIESEC UGM</p>
        <p>Winter Project : Januari 2019 - Februari 2019</p>
        <!-- End About Section -->
      </div>

      <!-- Portfolio Section -->
      <div class="padding-64 content" id="photos">
        <h2 class="text-light-grey">Photos of UX Principle</h2>
        <hr style="width:200px" class="opacity">
        <!-- Grid for photos -->
        <div class="row-padding" style="margin:0 -16px">
          <div class="half">
            <div class="imov-container">
              <img src="<?php echo base_url(); ?>assets/images/a (1).gif" class="imov-image" style="width:100%">
              <div class="imov-middle myBtn">
                <div class="imov-text">Dolly & Zoom</div>
              </div>
            </div>
            <div class="imov-container">
              <img src="<?php echo base_url(); ?>assets/images/a (2).gif" class="imov-image" style="width:100%">
              <div class="imov-middle myBtn">
                <div class="imov-text">Value Change</div>
              </div>
            </div>
            <div class="imov-container">
              <img src="<?php echo base_url(); ?>assets/images/a (3).gif" class="imov-image" style="width:100%">
              <div class="imov-middle myBtn">
                <div class="imov-text">Transformation</div>
              </div>
            </div>
          </div>
          <div class="half">
            <div class="imov-container">
              <img src="<?php echo base_url(); ?>assets/images/a (4).gif" class="imov-image" style="width:100%">
              <div class="imov-middle myBtn">
                <div class="imov-text">Realtime Interaction</div>
              </div>
            </div>
            <div class="imov-container">
              <img src="<?php echo base_url(); ?>assets/images/a (5).gif" class="imov-image" style="width:100%">
              <div class="imov-middle myBtn">
                <div class="imov-text">Offset & Delay</div>
              </div>
            </div>
            <div class="imov-container">
              <img src="<?php echo base_url(); ?>assets/images/a (6).gif" class="imov-image" style="width:100%">
              <div class="imov-middle myBtn">
                <div class="imov-text">Obscuration</div>
              </div>
            </div>
          </div>
          <!-- End photo grid -->
        </div>
        <!-- End Portfolio Section -->
      </div>

      <!-- Blog Section -->
      <div class="padding-64 content" id="blog">
        <h2 class="text-light-grey">Blog</h2>
        <hr style="width:200px" class="opacity">
        <div class="section text-grey">
          <p>My recent post of my blog, just check this out : <a href="https://aimentari.wordpress.com" target="_blank"><em>https://aimentari.wordpress.com</em></a></p>
        </div>
          <div class="row center padding-16 section light-grey">
            <div class="quarter section imov-container text-grey">
              <a href="https://aimentari.wordpress.com/2018/11/08/beberapa-role-di-bidang-ui-ux/" target="_blank">
                  <img src="<?php echo base_url(); ?>assets/images/3.gif" class="imov-image" style="width: 150px;height: 150px" ><br>
              </a>
              <br>
                Role di Bidang UI/UX
            </div>
            <div class="quarter section imov-container text-grey">
              <a href="https://aimentari.wordpress.com/2018/11/24/tips-ux-motion2/" target="_blank">
                  <img src="<?php echo base_url(); ?>assets/images/1.gif" class="imov-image" style="width: 150px;height: 150px"><br>
              </a>
              <br>
                Tips UX Motion
            </div>
            <div class="quarter section imov-container text-grey">
              <a href="https://aimentari.wordpress.com/2018/11/24/recommended-five-homepage-design/" target="_blank">
                  <img src="<?php echo base_url(); ?>assets/images/5.gif" class="imov-image" style="width: 150px;height: 150px"><br>
              </a>
              <br>
                Recommended Homepage
            </div>
            <div class="quarter section imov-container text-grey">
              <a href="https://aimentari.wordpress.com/#post-109" target="_blank">
                  <img src="<?php echo base_url(); ?>assets/images/2.gif" class="imov-image" style="width: 150px;height: 150px"><br>
              </a>
              <br>
                UI & UX
            </div>
          </div>
        </div>
      <!-- End Blog Section -->

      <!-- Contact Section -->
      <div class="padding-64 content text-grey" id="contact">
        <h2 class="text-light-grey">Contact</h2>
        <hr style="width:200px" class="opacity">
        <div class="section">
          <p><i class="fa fa-map-marker fa-fw text-white xxlarge margin-right"></i> Yogyakarta, Indonesia</p>
          <p><i class="fa fa-phone fa-fw text-white xxlarge margin-right"></i> Phone: +62 83867184522</p>
          <p><i class="fa fa-envelope fa-fw text-white xxlarge margin-right"> </i> Email: mentari.e.r@mail.ugm.ac.id</p>
        </div><br>
        <p>Lets get in touch. Send me a message:</p>
        <form action="mailto:mentari.e.r@mail.ugm.ac.id" method="post" enctype="text/plain">
          <p><input class="input padding-16" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="input padding-16" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="input padding-16" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="input padding-16" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="button light-grey padding-large" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
        <!-- End Contact Section -->
      </div>

      <!-- Footer -->
      <footer class="content padding-64 text-grey xlarge">
        <a href="https://web.facebook.com/Menthary.guardian.Angel?ref=bookmarks" target="_blank">
          <i class="fa fa-facebook-official hover-opacity"></i>
        </a>

        &nbsp

        <a href="https://www.instagram.com/mentareen/" target="_blank">
          <i class="fa fa-instagram hover-opacity"></i>
        </a>

        &nbsp

        <a href="https://www.linkedin.com/in/mentari-e-8b0a5b127/" target="_blank">
          <i class="fa fa-linkedin hover-opacity"></i>
        </a>
      </footer>
      <!-- End footer -->
    </div>
    <!-- END PAGE CONTENT -->

    <!-- MODAL -->
    <!-- The Modal 1-->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <span class="close">×</span>
      <div class="modal-content">
        <div class="modal-body">
          <img src="<?php echo base_url(); ?>assets/images/a (1).gif" class="imov-image" style="width:50%">
          <h2 style="color: black">Dolly & Zoom</h2>
          <p></p>
        </div>
      </div>
    </div>
    <!-- The Modal 2-->
    <div id="myModal2" class="modal">
      <!-- Modal content -->
      <span class="close">×</span>
      <div class="modal-content">
        <div class="modal-body">
          <img src="<?php echo base_url(); ?>assets/images/a (2).gif" class="imov-image myBtn" style="width:50%">
          <h2 style="color: black">Value Change</h2>
        </div>
      </div>
    </div>
    <!-- The Modal 3-->
    <div id="myModal3" class="modal">
      <!-- Modal content -->
      <span class="close">×</span>
      <div class="modal-content">
        <div class="modal-body">
         <img src="<?php echo base_url(); ?>assets/images/a (3).gif" class="imov-image myBtn" style="width:50%">
          <h2 style="color: black">Transformation</h2>
        </div>
      </div>
    </div>
    <!-- The Modal 4-->
    <div id="myModal4" class="modal">
      <!-- Modal content -->
      <span class="close">×</span>
      <div class="modal-content">
        <div class="modal-body">
         <img src="<?php echo base_url(); ?>assets/images/a (4).gif" class="imov-image myBtn" style="width:50%">
          <h2 style="color: black">Realtime Interction</h2>
        </div>
      </div>
    </div>
    <!-- The Modal 4-->
    <div id="myModal5" class="modal">
      <!-- Modal content -->
      <span class="close">×</span>
      <div class="modal-content">
        <div class="modal-body">
         <img src="<?php echo base_url(); ?>assets/images/a (5).gif" class="imov-image myBtn" style="width:50%">
          <h2 style="color: black">Offset & Delay</h2>
        </div>
      </div>
    </div>
    <!-- The Modal 4-->
    <div id="myModal6" class="modal">
      <!-- Modal content -->
      <span class="close">×</span>
      <div class="modal-content">
        <div class="modal-body">
         <img src="<?php echo base_url(); ?>assets/images/a (6).gif" class="imov-image myBtn" style="width:50%">
          <h2 style="color: black">Obscuration</h2>
        </div>
      </div>
    </div>

  </div>
    <!-- MODAL END -->
    <!-- JS -->
    <script type="text/javascript">
      // Get the modal
      var modal = document.getElementsByClassName('modal');

      // Get the button that opens the modal
      var btn = document.getElementsByClassName("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close");

      // When the user clicks the button, open the modal 
      btn[0].onclick = function() {
          modal[0].style.display = "block";
      }

      btn[1].onclick = function() {
          modal[1].style.display = "block";
      }

      btn[2].onclick = function() {
          modal[2].style.display = "block";
      }
      btn[3].onclick = function() {
          modal[3].style.display = "block";
      }
      btn[4].onclick = function() {
          modal[4].style.display = "block";
      }
      btn[5].onclick = function() {
          modal[5].style.display = "block";
      }
      // When the user clicks on <span> (x), close the modal
      span[0].onclick = function() {
          modal[0].style.display = "none";
      }

      span[1].onclick = function() {
          modal[1].style.display = "none";
      }
      span[2].onclick = function() {
          modal[2].style.display = "none";
      }
      span[3].onclick = function() {
          modal[3].style.display = "none";
      }
      span[4].onclick = function() {
          modal[4].style.display = "none";
      }
      span[5].onclick = function() {
          modal[5].style.display = "none";
      }
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
    </script>
    <!-- JS END -->
  </body>
</html>