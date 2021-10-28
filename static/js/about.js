const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const form = urlParams.get('form');
const text = document.getElementById('modal-text');

if(form != null) {
    if(form === "submited") {
        text.innerHTML = 'We got your contact information we gonna contact you as soon as possible, thank you!';
    } else {
        text.innerHTML = 'Sorry something whent wrong try again later!';
    }

    document.body.classList.toggle('modal-on');
    
    const formRef = document.getElementById('modal');
    formRef.classList.remove('hidden');
    window.history.replaceState({}, document.title, window.location.href.split('?')[0]);
}
