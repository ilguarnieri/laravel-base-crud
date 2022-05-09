require('./bootstrap');

const buttons = document.querySelectorAll('.delete-form [type="submit"]');

buttons.forEach( el => {
    el.addEventListener('click', function(e) {
        e.preventDefault();

        const btn = e.target;
        const form = btn.closest('.delete-form');

        if(form && confirm('Vuoi eliminare questo Comic?')){
            form.submit();
        }
    })
})