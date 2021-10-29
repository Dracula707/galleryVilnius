<?php 
include 'components/head.php';
echo head('Homepage','');
?>

<body>
  <div class="box">
    <section class="box-content">

      <section>
        <header class="container">
          <div class="mt-60 mb-4">
            <div class="flex justify-between">
              <h1 class="header">Not found 404.</h1>
              <a class="mx-1 flex align-center mt-1" href="./">
                <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
                  <g stroke="var(--color-btn-b)" fill="none" fill-rule="evenodd"><path d="M1.528 1.843l20.538 10.27L1.528 22.382V1.843z" stroke-width="2"/><path fill="#D8D8D8" d="M24.708.5h1v22.775h-1z"/></g>
                </svg>
              </a>
            </div>
          </div>
        </header>
      </section>

      <div class="container">

        <div class="grid-index">
          <img class="img-w-full" src="../static/assets/other/notfound.png" alt="not found image" >
          <div class="flex align-center">
            <div class="">
              <h2 class="text-2xl mb-4">404</h2>
              <p class="text-xl">Sorry we couldn't find this page.</p>
              <p class="text-md text-small">But dont worry, you can find plenty of other things on our homepage.</p>
              <div class="my-4">
                <a href="./" class="text-center btn btn-primary my-2" style="display: inline-block;">Back to Homepage</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  
  </div>
</body>
</html>