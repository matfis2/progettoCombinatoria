const particle = document.getElementById('particle');

function getRandomPosition(containerWidth, containerHeight) {
    const x = Math.random() * (containerWidth - 20);
    const y = Math.random() * (containerHeight - 20);
    return { x, y };
}

function moveParticle() {
    const container = document.querySelector('.container');
    const containerWidth = container.clientWidth;
    const containerHeight = container.clientHeight;

    const newPosition = getRandomPosition(containerWidth, containerHeight);
    particle.style.left = newPosition.x + 'px';
    particle.style.top = newPosition.y + 'px';
}

setInterval(moveParticle, 1000); // Cambia la posizione della particella ogni secondo
