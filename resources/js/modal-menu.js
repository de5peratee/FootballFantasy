
document.addEventListener('click', function(event) {
    let btn = event.target.closest('[data-action]')
    
    if (!btn) return

    let actions = btn.dataset.action.split(' ')

    if (actions.includes('show-modal')) {
        let id = btn.dataset.modalId
        let target = document.getElementById(id)

        if (target.classList.contains('active-modal')) return

        target.classList.add('active-modal')
        let overflow = document.createElement('div')
        overflow.classList.add('modal-overflow')
        overflow.setAttribute('data-action', 'close-modal')
        document.body.append(overflow)
    }
    else if (actions.includes('close-modal')) {
        document.querySelector('.active-modal').classList.remove('active-modal')
        document.querySelector('.modal-overflow').remove()
    }
    if (actions.includes('show-block')) {
        let id = btn.dataset.targetId
        let target = document.getElementById(id)
        target.classList.add('active-block')
        console.log('show block')
    }
    else if (actions.includes('close-block')) {
        let element = event.target.closest('.active-block')
        if (element) element.classList.remove('active-block')
    }
})

