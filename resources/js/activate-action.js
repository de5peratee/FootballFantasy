
document.addEventListener('click', function(event) {
    let btn = event.target.closest('[data-action]')

    if (!btn) return

    let actions = btn.dataset.action.split(' ')

    if (actions.includes('activate-me')) {
        let name = btn.dataset.name
        let prevActiveElement = document.querySelector(`[data-name='${name}'].active`)
        if (prevActiveElement) prevActiveElement.classList.remove('active')

        btn.classList.add('active')
    }   
    else if (actions.includes('deactivate')) {
        let name = btn.dataset.name
        let prevActiveElement = document.querySelector(`[data-name='${name}'].active`)
        if (prevActiveElement) prevActiveElement.classList.remove('active')
    }
})

