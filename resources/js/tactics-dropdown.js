
let container = document.getElementById('tactics')

let btn = container.querySelector('.field__tactics-button')
let option = container.querySelector('.field__option.active')
btn.textContent = option.textContent

container.addEventListener('click', function(event) {
    btn.classList.toggle('active')

    let option = event.target.closest('.field__option')
    if (option) {
        btn.textContent = option.textContent
    }
})