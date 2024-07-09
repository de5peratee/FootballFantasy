
document.addEventListener('click', function(event) {
    let btn = event.target.closest('[data-action]');
    
    if (!btn) return

    let action = btn.dataset.action;
    
    if (action.includes('increment')) {
        let input = document.getElementById(btn.dataset.targetId);
        if (!input.value) input.value = input.min || 0
        else if ((input.max && input.value < input.max) || !input.max) input.value++
    } 
    else if (action.includes('decrement')) {
        let input = document.getElementById(btn.dataset.targetId);
        if (!input.value) input.value = input.min || 0
        else if ((input.min && input.value > input.min) || !input.min) input.value--
    }   
})