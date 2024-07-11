document.addEventListener('DOMContentLoaded', function () {
    const tacticsList = document.getElementById('tactic');
    const attackers = document.getElementById('attackers');
    const midfielders = document.getElementById('midfielders');
    const defenders = document.getElementById('defenders');

    function createFootballerCard() {
        const li = document.createElement('li');
        li.className = 'field__card-wrapper';
        const button = document.createElement('button');
        button.className = 'field__card';
        button.setAttribute('data-action', 'activate-me');
        button.setAttribute('data-name', 'footballer');
        const img = document.createElement('img');
        img.className = 'field__footballer-photo';
        img.src = '../images/avatar.svg';
        img.alt = '';
        img.width = 80;
        img.height = 80;
        img.loading = 'lazy';
        button.appendChild(img);
        li.appendChild(button);
        return li;
    }

    function updateField(tactic) {
        attackers.innerHTML = '';
        midfielders.innerHTML = '';
        defenders.innerHTML = '';

        let [def, mid, att] = tactic.split('-').map(Number);

        for (let i = 0; i < att; i++) {
            attackers.appendChild(createFootballerCard());
        }

        for (let i = 0; i < mid; i++) {
            midfielders.appendChild(createFootballerCard());
        }

        for (let i = 0; i < def; i++) {
            defenders.appendChild(createFootballerCard());
        }
    }

    tacticsList.addEventListener('click', function (e) {
        if (e.target && e.target.matches('li.select__item')) {
            document.querySelectorAll('.field__tactics-list .select__item').forEach(item => {
                item.classList.remove('active');
            });
            e.target.classList.add('active');
            updateField(e.target.getAttribute('value'));
        }
    });

    updateField(document.querySelector('.field__tactics-list .select__item.active').getAttribute('value'));
});



//модалка футболистов
document.addEventListener('DOMContentLoaded', function () {
    const activateButtons = document.querySelectorAll('.footballers__img-wrapper.button');
    const closeButtons = document.querySelectorAll('.close-footballer-controls');

    activateButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target-id');
            const targetModal = document.getElementById(targetId);

            if (targetModal) {
                closeAllModals();
                targetModal.style.display = 'block';
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target-id');
            const targetModal = document.getElementById(targetId);

            if (targetModal) {
                targetModal.style.display = 'none';
            }
        });
    });

    function closeAllModals() {
        const modals = document.querySelectorAll('.footballer-controls');
        modals.forEach(modal => {
            modal.style.display = 'none';
        });
    }
});

