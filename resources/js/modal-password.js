document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('passwordModal');
    const span = document.getElementsByClassName('close')[0];

    document.querySelectorAll('.tournament__link[data-password="true"]').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const tournamentId = this.dataset.tournamentId;
            // Display modal
            document.getElementById('tournamentId').value = tournamentId;
            modal.style.display = 'block';
        });
    });

    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    const form = document.getElementById('passwordForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch(this.action, {
            method: this.method,
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    const errorDiv = document.getElementById('passwordError');
                    errorDiv.textContent = data.message;
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
});
