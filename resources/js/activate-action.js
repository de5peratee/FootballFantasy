
document.addEventListener('click', function(event) {
    let btn = event.target.closest('[data-action]')

    if (!btn || btn.dataset.action != 'activate-me') return

    let name = btn.dataset.name
    let prevActiveElement = document.querySelector(`[data-name='${name}'].active`)
    if (prevActiveElement) prevActiveElement.classList.remove('active')

    btn.classList.add('active')    
})