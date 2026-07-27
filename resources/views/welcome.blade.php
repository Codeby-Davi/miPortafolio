<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>David | Software Engineer</title>

    <!-- 🔌 ESTE ES EL CABLE MÁGICO: Conecta Vite con tu app.css y app.js -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    </script>

</head>
<body class="dark:bg-stone-900 font-sans antialiased selection:bg-amber-500 selection:text-stone-950">

    <button onclick="toggleTheme()"
        class="fixed top-5 right-5 md:top-8 md:right-8 z-50
               w-12 h-12 flex items-center justify-center rounded-full
               bg-white dark:bg-stone-800 
               border border-stone-200 dark:border-stone-700
               text-stone-600 dark:text-stone-300
               hover:bg-stone-100 dark:hover:bg-stone-700
               shadow-sm hover:shadow-md transition-all duration-300"
        aria-label="Alternar tema oscuro">
    
    <img src="{{ asset('icons/luna.png') }}" 
         alt="Activar Modo Oscuro" 
         class="w-6 h-6 block dark:hidden">

    <img src="{{ asset('icons/sol.png') }}" 
         alt="Activar Modo Claro" 
         class="w-6 h-6 hidden dark:block">

    </button>

    <!-- Hero Section: Monocromático Cálido & Amigable -->
    <section class="min-h-screen text-stone-100 flex items-center justify-center px-6">
        
        <div class="max-w-3xl mx-auto text-center py-20">

            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-neutral-900 dark:text-white">
            Hola, soy <span class="bg-gradient-to-r from-yellow-400 to-teal-500 bg-clip-text text-yellow-400">David</span>
            </h1>

            <!-- Título Principal -->
            <h2 class="text-2xl md:text-4xl font-bold text-sky-500 dark:text-sky-500 mb-6">
            Software Engineering Student • AI Focus
            </h2>
                                  
            <!-- Subtítulo -->
            <p class="text-base sm:text-xl dark:text-neutral-400 text-black font-normal max-w-2xl mx-auto mb-10 leading-relaxed">
                Estudiante de Ingeniería de Software con IA, apasionado por la tecnología y la innovación. Me especializo en el desarrollo de aplicaciones web y soluciones de inteligencia artificial, siempre buscando aprender y crecer en el mundo del software.
            </p>

            <!-- Botones de Acción -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#proyectos" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-stone-950 font-semibold text-base transition-all duration-200 shadow-xl shadow-orange-500/10 hover:scale-[1.02]">
                    Explorar mis trabajos
                </a>

                <a href="#contacto" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-stone-950 font-semibold text-base transition-all duration-200 shadow-xl shadow-orange-500/10 hover:scale-[1.02]">
                    Conversemos
                </a>
            </div>
        </section>
        

<section id="trayectoria" class="py-20 px-4 max-w-4xl mx-auto">
  <h2 class="text-4xl font-bold dark:text-white text-black mb-12 text-center">
    Mi <span class="text-yellow-400">Trayectoria</span>
  </h2>

  <!-- Contenedor principal de la línea de tiempo -->
  <div class="relative border-l border-gray-700 ml-4 md:ml-6">
    
    <!-- Item 1: Actualidad -->
    <div class="mb-12 ml-8">
      <!-- El punto en la línea (Cian) -->
      <span class="absolute flex items-center justify-center w-4 h-4 bg-cyan-400 rounded-full -left-2 ring-4 dark:ring-[#1a1a1a] ring-[#ffffff]"></span>
      
      <h3 class="flex items-center mb-1 text-xl font-bold dark:text-white text-black">
        Ingeniería de Software con Inteligencia Artificial
      </h3>
      <time class="block mb-2 text-sm font-medium text-cyan-400">SENATI | Actualidad</time>
      <p class="mb-4 text-base font-normal dark:text-gray-400 text-gray-900 leading-relaxed">
        Formación integral enfocada en el ciclo completo de desarrollo de software, diseño de bases de datos relacionales y la futura integración de modelos de inteligencia artificial para optimizar procesos.
      </p>
    </div>

    <!-- Item 2: Proyecto Destacado / Logro -->
    <div class="mb-12 ml-8">
      <!-- El punto en la línea (Gris/Naranja dependiendo de tu gusto) -->
      <span class="absolute flex items-center justify-center w-4 h-4 bg-gray-600 rounded-full -left-2 ring-4 dark:ring-[#1a1a1a] ring-[#ffffff]"></span>
      
      <h3 class="mb-1 text-xl font-bold dark:text-white text-black">
        Desarrollo de Sistemas Backend & Bases de Datos
      </h3>
      <time class="block mb-2 text-sm font-medium text-gray-500">Proyectos Prácticos</time>
      <p class="mb-4 text-base font-normal dark:text-gray-400 text-gray-900 leading-relaxed">
        Creación y despliegue de sistemas de gestión (ventas, matrículas escolares, sistemas clínicos) implementando arquitectura MVC, operaciones CRUD y alojamiento en la nube (Cloud SQL, Clever Cloud).
      </p>
    </div>

    <!-- Item 3: Inicios (Ejemplo) -->
    <div class="ml-8">
      <span class="absolute flex items-center justify-center w-4 h-4 bg-gray-600 rounded-full -left-2 ring-4 dark:ring-[#1a1a1a] ring-[#ffffff]"></span>
      
      <h3 class="mb-1 text-xl font-bold dark:text-white text-black">
        Inmersión en la Programación
      </h3>
      <time class="block mb-2 text-sm font-medium text-gray-500">Fundamentos</time>
      <p class="text-base font-normal dark:text-gray-400 text-gray-900 leading-relaxed">
        Inicio de la ruta de aprendizaje dominando la lógica de programación y lenguajes estructurados, sentando las bases para el desarrollo web y de escritorio.
      </p>
    </div>

  </div>
</section>

    <!-- Cinta de Texto Animada (Marquee) -->
<div class="w-full overflow-hidden bg-stone-50/50 dark:bg-stone-900/30 py-6 my-16 border-y border-stone-200 dark:border-stone-800">
    <!-- Contenedor que se mueve -->
    <div class="animacion-cinta gap-12 whitespace-nowrap text-sm font-bold tracking-[0.2em] uppercase text-stone-400 dark:text-stone-500">
        
        <!-- Grupo 1 -->
        <span>✦ Ingeniería de Software</span>
        <span>✦ Desarrollo Backend</span>
        <span>✦ Diseño de Bases de Datos</span>
        <span>✦ Metodologías Ágiles</span>
        <span>✦ Desarrollo Frontend</span>
        
        <!-- Grupo 2 (Duplicado exacto para crear la ilusión de bucle infinito) -->
        <span>✦ Ingeniería de Software</span>
        <span>✦ Desarrollo Backend</span>
        <span>✦ Diseño de Bases de Datos</span>
        <span>✦ Metodologías Ágiles</span>
        <span>✦ Desarrollo Frontend</span>
    </div>
</div>

                <!-- Sección de Habilidades -->
<section class="max-w-4xl mx-auto px-4 py-16">
    <h3 class="text-2xl font-bold text-center text-stone-800 dark:text-white mb-10">
        Mi Stack <span class="text-sky-500">Tecnológico</span>
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Tarjeta Backend -->
        <div class="bg-white dark:bg-stone-800/40 p-6 rounded-2xl border border-stone-200 dark:border-stone-700/50 hover:border-orange-500 transition-colors">
            <h4 class="text-lg font-semibold text-black dark:text-stone-300 mb-4">Backend & Datos</h4>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">Java</span>
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">PHP</span>
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">Laravel</span>
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">SQL</span>
            </div>
        </div>

        <!-- Tarjeta Frontend -->
        <div class="bg-white dark:bg-stone-800/40 p-6 rounded-2xl border border-stone-200 dark:border-stone-700/50 hover:border-yellow-500 transition-colors">
            <h4 class="text-lg font-semibold text-black dark:text-stone-300 mb-4">Frontend</h4>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">JavaScript</span>
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">Tailwind CSS</span>
            </div>
        </div>

        <!-- Tarjeta Herramientas -->
        <div class="bg-white dark:bg-stone-800/40 p-6 rounded-2xl border border-stone-200 dark:border-stone-700/50 hover:border-orange-500 transition-colors">
            <h4 class="text-lg font-semibold text-black dark:text-stone-300 mb-4">Herramientas</h4>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">Metodologías Ágiles</span>
                <span class="px-3 py-1 text-sm bg-stone-200 dark:bg-stone-900 rounded-full dark:text-stone-300 text-black">Git / GitHub</span>
            </div>
        </div>

    </div>
    </section>

        </div>

    </section>

    <!-- SECCIÓN DE PROYECTOS -->
    <section id="proyectos" class="min-h-screen py-24 px-4">
        
        <h2 class="text-3xl md:text-4xl font-bold text-center dark:text-stone-100 text-black text: mb-12">
            Mis Proyectos
        </h2>
        
        <!-- Grid de Proyectos: 2x2 en PC, 1 columna en celular -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
    
    <!-- TARJETA 1: Clínica (Individual) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 proyecto-izq opacity-0 -translate-x-32 transition-all duration-1000 ease-out">
        <div class= "mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Pagina Web - Clinica</h3>
            <p class="text-sm font-semibold dark:text-stone-300 text-black mb-4">Proyecto Individual</p>
            <p class="dark:text-stone-300 text-black leading-relaxed">
                El proyecto conciste en la creacion de una pagina web que ayuda a gestionar todo lo relacionado a la clinica, conteniendo un sistema de autenticacion y sus respectivas API para la interoperabilidad de los datos, contiene una interfaz moderna haciendo que sea agradable a la vista, todo esto guardando datos en la nube con CleverCloud y lanzando la pagina en Render.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">PHP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Laragon</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Laravel</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Render</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Codeby-Davi/WebHospital" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://webhospital-zyez.onrender.com" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Página</a>
            <button onclick="abrirModalVideo('{{ asset('videos/WebHospital.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

    <!-- TARJETA 2: Mini Market (Grupal) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 proyecto-der opacity-0 translate-x-32 transition-all duration-1000 ease-out">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Sistema de Ventas MiniMarket</h3>
            <p class="text-sm font-semibold dark:text-stone-300 text-black mb-4">Proyecto Grupal</p>
            <p class="dark:text-stone-300 text-black leading-relaxed">
                En este trabajo colaborativo sobre un sistema de ventas para un MiniMarket, me encargue de la logica en las secciones producto, categoria, el login y el panel de gestion, por otro, conectar el sistema a una base de datos en la nube la cual es la de CleverCloud, el apartado del frontend en dichas secciones y el empaquetado del programa para asi obtener el ejecutable .exe y ejecutarlo sin necesidad de tener instalado el entorno de desarrollo.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Java</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">XAMMP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">JPackage</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">HeidiSQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Codeby-Davi/SistemaDeVentas" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://github.com/Codeby-Davi/SistemaDeVentas/releases/download/v1.0.0/Minimarket-1.0.0.exe" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors">Descargar Instalador</a>
            <button onclick="abrirModalVideo('{{ asset('videos/MiniMarket.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

    <!-- TARJETA 3: Gestor de ventas (Individual) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 proyecto-izq opacity-0 -translate-x-32 transition-all duration-1000 ease-out">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Gestor de ventas</h3>
            <p class="text-sm font-medium dark:text-stone-300 text-black mb-4">Proyecto Individual</p>
            <p class="dark:text-stone-300 text-black  leading-relaxed">
                Siendo este mi primer proyecto de programacion, fue la creacion de un gestor de ventas o sistema de ventas, conteniendo una base de datos simple pero efectiva para este caso, aparte de subirlo a una nube tambien se le creo su respectivo .exe para asi facilitar la prueba de este mismo.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Java</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">XAMMP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">JPackage</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">HeidiSQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Codeby-Davi/GestorVentas" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://github.com/Codeby-Davi/GestorVentas/releases/download/v1.0.0/SistemaVentas-1.0.0.exe" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors">Descargar Instalador</a>
            <button onclick="abrirModalVideo('{{ asset('videos/GestorVentas.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

    <!-- TARJETA 4: Pagina escolar (Grupal) -->
    <article class="bg-white dark:bg-stone-800/40 p-8 rounded-2xl border dark:border-stone-700/50 border-stone-200 hover:border-stone-600 proyecto-der opacity-0 translate-x-32 transition-all duration-1000 ease-out">
        <div class="mb-6">
            <h3 class="text-xl font-bold dark:text-yellow-400 text-yellow-400 mb-1">Pagina Escolar - Innovatech</h3>
            <p class="text-sm font-medium dark:text-stone-300 text-black mb-4">Proyecto Grupal</p>
            <p class="dark:text-stone-300 text-black  leading-relaxed">
                Trabajo colaborativo donde, se diseño una pagina web basada en un instituto conteniendo un sistema de autenticacion, un sistema de matriculas y el respectivo sistema para agregar tanto alumnos, profesores y cursos, en este proyecto me encargue del apartado del backend como la base de datos, las logica usadas, el uso de CleverCloud y la desplegada en Render.
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">PHP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Laravel</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">XAMMP</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Render</span>
                <span class="dark:bg-stone-700/50 bg-stone-200 dark:text-stone-200 text-black px-3 py-1 rounded-full text-xs font-medium">Cloud SQL</span>
            </div>
        </div>
        <div class= "flex gap-5">
            <a href="https://github.com/Codeby-Davi/INNOVATEC-SistemaMatricula" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-white hover:text-stone-900 border-b border-orange-500 pb-0.5 transition-colors" target="_blank" rel="noopener noreferrer">Ver Repositorio</a>
            <a href="https://innovatech-vb4m.onrender.com" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-green-500 hover:text-green-800 border-b border-orange-500 pb-0.5 transition-colors">Ver Página</a>
            <button onclick="abrirModalVideo('{{ asset('videos/PaginaInnovatec.mp4') }}')" class="inline-block dark:text-stone-300 text-stone-500 dark:hover:text-yellow-500 hover:text-yellow-500 border-b border-orange-500 pb-0.5 transition-colors">Demostración</button>
        </div>
    </article>

</div>
    </section>


    <!-- Pon esto justo debajo del cierre de tu sección de proyectos -->
<section id="contacto" class="py-20 px-4 max-w-3xl mx-auto text-center">
  <h2 class="text-4xl font-bold dark:text-white text-black mb-6">¿Iniciamos un <span class="text-cyan-400">proyecto?</span></h2>
  <p class="dark:text-gray-400 text-gray-900 mb-10 text-lg">Déjame un mensaje y me pondré en contacto contigo lo más pronto posible.</p>

  <!-- Formulario -->
  <form action="TU_LOGICA_AQUI" method="POST" class="flex flex-col gap-6 text-left">
    <div class="flex flex-col md:flex-row gap-6">
      <input type="text" name="nombre" placeholder="Tu Nombre" required
             class="w-full dark:bg-[#2a2a2a] dark:text-white text-black border border-gray-700 rounded-lg px-4 py-3 focus:outline-none focus:border-cyan-400 transition-colors">
      <input type="email" name="correo" placeholder="Tu Correo" required
             class="w-full dark:bg-[#2a2a2a] dark:text-white text-black border border-gray-700 rounded-lg px-4 py-3 focus:outline-none focus:border-cyan-400 transition-colors">
    </div>
    
    <textarea name="mensaje" rows="4" placeholder="¿En qué te puedo ayudar?" required
             class="w-full dark:bg-[#2a2a2a] dark:text-white text-black border border-gray-700 rounded-lg px-4 py-3 focus:outline-none focus:border-cyan-400 transition-colors"></textarea>
    
    <button type="submit" 
            class="bg-orange-500 hover:bg-orange-600 text-gray-900 font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-[0_0_15px_rgba(249,115,22,0.3)] hover:-translate-y-1 mx-auto mt-2">
      Enviar Mensaje
    </button>
  </form>
</section>


    <!-- Modal Global de Video (Único para toda la web) -->
<div id="modalGlobal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/80 backdrop-blur-sm transition-opacity">
    <div class="relative w-11/12 max-w-4xl bg-neutral-900 p-2 rounded-xl border border-neutral-700 shadow-2xl">
        
        <button onclick="cerrarModalVideo()" class="absolute -top-4 -right-4 bg-red-600 hover:bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold shadow-lg">
            X
        </button>

        <video id="reproductorGlobal" class="w-full rounded-lg" controls>
            <!-- El src se inyectará aquí usando JavaScript -->
        </video>
    </div>
</div>
</div>

</body>
</html> 