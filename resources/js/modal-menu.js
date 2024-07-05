document.addEventListener('click', function(event) {
    let btn = event.target.closest('[data-action]');
    if (btn && btn.dataset.action == 'show-modal') {
        let id = btn.dataset.modalId;
        document.getElementById(id).classList.add('active-modal');

        let overflow = document.createElement('div');
        overflow.classList.add('modal-overflow');
        document.body.append(overflow);
    }
    else if (event.target.classList.contains('modal-overflow')) {
        document.querySelector('.active-modal').classList.remove('active-modal');
        document.querySelector('.modal-overflow').remove();
    }
})

