<?php 
include 'components/head.php';
echo head('Homepage','<link rel="stylesheet" href="../static/lib/tiny-slider/tiny-slider.css">');
?>
<body>
  <div class="box">
    <?php include 'components/header.php'; ?>
    <section class="box-content" styl="overflow-x: hidden;">
    <div class="container-img">
    <div class="container">

      <div class="text-center mt-60">
        <div class="border-b">
          <p class="mb-1 tt text-md">Gallery Vilnius</p>
        </div>

        <h1 class="header my-4">Discover, learn, and see extraordinary art.</h1>
        <div class="text-center" style="margin-top: 40px;">
          <a href="collection.php" class="btn btn-primary mx-1 text-xs">On view now</a>
          <a href="about.php" class="btn btn-secondary mx-1 text-xs">Contact us</a>
        </div>
      </div>

      <div class="mt-60 grid-index">
        <img class="hero-img" width="100%" src="../static/assets/art/girl-with-pearl-earring/gallery.jpg" alt="img" >
        <div class="mx-4 h-full flex align-center">
          <div class="w-full">
            <h2 class="title text-left my-3">Girl with a Pearl Earring</h2>
            <p class="text-left" style="line-height: 2.1;line-height: 1.4;">
              The painting is a tronie, the Dutch 17th-century description of a 'head' that was not meant to be a portrait.
              It depicts a European girl wearing an exotic dress, an oriental turban, and what was thought to be a very large
              pearl as an earring. In 2014, Dutch astrophysicist Vincent Icke raised doubts about the material of the earring
              and argued that it looks more like polished tin than pearl
              on the grounds of the specular reflection, the pear shape and the large size of the earring.
            </p>
            <div class="block mt-2">
              <div class="flex align-center">
                <img class="creator" src="../static/assets/art/girl-with-pearl-earring/artist.jpg"  alt="artist" width="96" height="96">
                <div class="mx-2">
                  <p>Creator</p>
                  <h3>Johannes Vermeer</h3>
                </div>
              </div>
              <p class="my-2">Johannes Vermeer was a Dutch Baroque Period painter who specialized in domestic interior scenes of middle-class life. During his lifetime, he was a moderately successful provincial genre painter, recognized in Delft and The Hague.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="mt-60 my-4">
        <div class="border-b my-4"> 
          <h2 class="title text-center my-3">More information</h2>
        </div>

        <div class="my-4 flex justify-center">
          <p class="text-center" style="max-width: 600px;">Continue your support of the Museum (and enjoy exclusive perks!) by becoming a Member. Membership starts at $20.</p>
        </div>

        <div class="grid-bottom mt-4">

          <div class="mx-2">
            <div>
              <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
              </svg>
              <h3 class="sub-title mb-2">Amazing Art Pieces</h3>
              <p>
               We add amazing and unique art pieces every season exclusive first week for members to see and enjoy them.
              </p>
            </div>
          </div>

          <div class="mx-2">
            <div>
              <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
              </svg>
              <h3 class="sub-title mb-2">Gifts plus local design.</h3>
              <p>
                Explore museum-inspired gifts plus local design. Buy amazing and unique drawings by local creators or art books that every art entusiast should read and more.
              </p>
            </div>
          </div>

          <div class="mx-2">
            <div>
              <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
              </svg>
              <h3 class="sub-title mb-2">Talks and teaching by creators</h3>
              <p>
                Make your art more unque and amazing by learning from the best creators or enjoy there talks about how they created this amazing art. 
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class="slider relative">
        <div class="border-b my-4 mt-60"> 
          <h2 class="title text-center my-3">Museum</h2>
        </div>
        <!-- https://unsplash.com/photos/1xp5VxvyKL0 -->
        <!-- https://unsplash.com/photos/oLhTLD-RBsc -->
        <div class="my-slider">
          <img src="../static/assets/bgrnd/bgrnd1.webp" width="100%" height="60%" alt="gallery live picture" />
          <img src="../static/assets/bgrnd/bgrnd0.webp" width="100%" height="60%" alt="gallery live picture" />
          <img src="../static/assets/bgrnd/bgrnd2.webp" width="100%" height="60%" alt="gallery live picture" />
        </div>
        <div class="dots-nav absolute">
          <div class="dots flex">
            <div id="dot-a">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-record2" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
                <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
              </svg>      
            </div>
            <div id="dot-b">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-record2" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
                <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
              </svg>             
            </div>
            <div id="dot-c">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
              </svg>  
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-record2" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
                <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
              </svg>           
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="border-b my-4"> 
          <h2 class="title text-center my-3">E-Newsletters</h2>
        </div>

        <div class="my-4">
          <p class="">Be the first to know about exhibitions, events, and more.</p>
        </div>

        <div>
          <div class="my-4">
            <p>New rare and intresting art pieces for fall season don't miss it—<span onclick="news(0)" class="link">Read more</span></p>
          </div>
          <div class="my-4">
            <p>From july 24 to 26 we gonna be closed sorry for inconveniens—<span onclick="news(1)" class="link">Read more</span></p>
          </div>
          <div class="my-4">
            <p>Github and other stuff for website—<span onclick="news(2)" class="link">Read more</span></p>
          </div>
        </div>
      </div>

      </div>
      </div>
    </section>
    <?php include 'components/footer.php'; ?>
  </div>
  <?php  
    include 'modals/news0.mod.php';
    include 'modals/news1.mod.php';
    include 'modals/news2.mod.php';
  ?>

  <script src="../static/lib/tiny-slider/tiny-slider.js"></script>
  <script src="../static/js/index.js"></script>
  <script src="../static/js/main.js"></script>
</body>
</html>