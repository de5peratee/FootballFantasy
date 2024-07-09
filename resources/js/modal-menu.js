document.addEventListener('click', function(event) {
    let btn = event.target.closest('[data-action]')
    
    if (!btn) return

    switch (btn.dataset.action) {
        case 'show-modal': {
            let id = btn.dataset.modalId
            let target = document.getElementById(id)

            if (target.classList.contains('active-modal')) return

            target.classList.add('active-modal')
            let overflow = document.createElement('div')
            overflow.classList.add('modal-overflow')
            overflow.setAttribute('data-action', 'close-modal')
            document.body.append(overflow)
            break
        }
        case 'close-modal': {
            document.querySelector('.active-modal').classList.remove('active-modal')
            document.querySelector('.modal-overflow').remove()
            break
        }
        case 'show-block': {
            let id = btn.dataset.targetId
            let target = document.getElementById(id)
            target.classList.add('active-block')
            break
        }
        case 'close-block': {
            let element = event.target.closest('.active-block')
            if (element) element.classList.remove('active-block')
        }
    }
})

