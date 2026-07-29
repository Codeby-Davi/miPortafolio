/**
 * Abre el modal global y carga el video específico del proyecto
 */
window.abrirModalVideo = function(rutaVideo) {
    const modal = document.getElementById('modalGlobal');
    const reproductor = document.getElementById('reproductorGlobal');

    // 1. Le asignamos la ruta del video al reproductor
    reproductor.src = rutaVideo;

    // 2. Mostramos la ventana quitando la clase 'hidden'
    modal.classList.remove('hidden');

    // 3. (Opcional) Hacemos que el video empiece a reproducirse solo
    reproductor.play();
};

/**
 * Cierra el modal global y limpia el reproductor
 */
window.cerrarModalVideo = function() {
    const modal = document.getElementById('modalGlobal');
    const reproductor = document.getElementById('reproductorGlobal');

    // 1. Ocultamos la ventana
    modal.classList.add('hidden');

    // 2. Pausamos el video
    reproductor.pause();

    // 3. Limpiamos la ruta del video para liberar memoria del navegador
    reproductor.src = ''; 
};


document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Aparece suavemente
                entry.target.classList.add('proyecto-visible');
            } else {
                // Se vuelve a ocultar suavemente si subes el scroll
                entry.target.classList.remove('proyecto-visible');
            }
        });
    }, {
        threshold: 0.15 
    });

    const proyectos = document.querySelectorAll('.proyecto-izq, .proyecto-der');
    proyectos.forEach((el) => observer.observe(el));
});