function aggiungiClasseSeScrollo() {
    if (window.scrollY >= 400) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
}

// Aggiungi un listener per l'evento di scroll
window.addEventListener('scroll', aggiungiClasseSeScrollo);