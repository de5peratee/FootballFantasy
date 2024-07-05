
document.addEventListener('click', function(event) {
    const isTouchDevice = !!('ontouchstart' in window || navigator.maxTouchPoints)

    if (!isTouchDevice) return
    
    let wrapper = event.target.closest('.player__avatar-wrapper')

    if (wrapper) {
        wrapper.querySelector('.player__controls').classList.add('active');
    }
    else {
        let playerMenus = document.querySelectorAll('.player__controls.active')
        for (let i of playerMenus) {
            i.classList.remove('active');
        }
    }
})