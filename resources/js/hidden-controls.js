document.addEventListener('click', function(event) {
    const isTouchDevice = !!('ontouchstart' in window || navigator.maxTouchPoints)

    if (!isTouchDevice) return

    let wrapper = event.target.closest('[data-control-container]')

    if (wrapper) {
        wrapper.querySelector('[data-hidden-control]').classList.add('active');
    }
    else {
        let playerMenus = document.querySelectorAll('[data-hidden-control].active')
        for (let i of playerMenus) {
            i.classList.remove('active');
        }
    }
})
