const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const form = urlParams.get('form');

if(form != null) {
    const formRef = document.getElementById('modal');
    formRef.classList.remove('hidden');
    window.history.replaceState({}, document.title, window.location.href.split('?')[0]);
}

