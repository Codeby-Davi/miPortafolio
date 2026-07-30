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

document.getElementById('formulario').addEventListener('submit', async function(e) {
    e.preventDefault(); // Evita que la página recargue

    const btnSubmit = document.getElementById('btn-enviar');
    const formData = new FormData(this);

    // 1. Guardamos el texto original ANTES de cambiarlo
    const textoOriginal = btnSubmit.innerText;

    // 2. Cambiamos el estado del botón a "Enviando..."
    btnSubmit.innerText = 'Enviando...';
    btnSubmit.disabled = true;
    btnSubmit.classList.add('opacity-50', 'cursor-not-allowed'); // Agregamos el efecto visual de bloqueo

    try {
            // 4. Se comunica con Laravel
            const response = await fetch(this.action, { // this.action toma la url "/enviar-mensaje"
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest' // Le dice a Laravel que es una petición silenciosa
                }
            });

            if (response.ok) {
                // Aquí luego pondremos una notificación bonita
                alert('¡Mensaje enviado con éxito!'); 
                this.reset(); // Limpia los campos del form
            } else {
                alert('Hubo un problema al enviar el mensaje.');
            }
            
        } catch (error) {
            console.error('Error:', error);
            alert('Error de conexión.');
        } finally {
            // 5. Restaura el botón a la normalidad
            btnSubmit.innerText = textoOriginal;
            btnSubmit.disabled = false;
            btnSubmit.classList.remove('opacity-50', 'cursor-not-allowed');
        }
});