<!-- Modal start -->
<div id="modal" class="modal-bgrnd hidden">
  <div class="modal">
    <div class="modal-main" >
      <header class="modal-header">
        <h2 class="text-sm">Contacts</h2>
        <div class="focus:outline-none p-2">
          <svg onclick="closeModal('modal')" class="fill-current svg-a" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path
              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
            ></path>
          </svg>
        </div>
      </header>
      <main class="p-4 text-center">
      <p id="modal-text" class="font-semibold text-void-fgp text-sm">We got your contact information we gonna contact you as soon as possible, thank you!</p>
      </main>
      <footer class="flex justify-center p-2">
        <div class="text-right pb-4">
            <button onclick="closeModal('modal')" class="btn btn-primary">
              Confirm
            </button>
        </div>
      </footer>
    </div>
  </div>
</div>