document.addEventListener('DOMContentLoaded', function() {
    let countdownElements = document.querySelectorAll('.tournament__timestamp');

    countdownElements.forEach(function(element) {
        let startDateTime = new Date(element.dataset.startDatetime);
        updateCountdownTimer(startDateTime, element);
    });
});

function updateCountdownTimer(startDateTime, element) {
    let now = new Date();
    let diff = startDateTime - now;

    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((diff % (1000 * 60)) / 1000);

    let formattedTime = `${days}д ${hours}ч ${minutes}м ${seconds}с`;

    element.textContent = formattedTime;

    setInterval(function() {
        let now = new Date();
        let diff = startDateTime - now;

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        let formattedTime = `${days}д ${hours}ч ${minutes}м ${seconds}с`;

        element.textContent = formattedTime;
    }, 1000);
}

function updateTime() {
    const currentTime = new Date();
    const hours = currentTime.getHours().toString().padStart(2, '0');
    const minutes = currentTime.getMinutes().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}`;
    document.getElementById('current-time').textContent = timeString;
}

updateTime();
setInterval(updateTime, 60000);
