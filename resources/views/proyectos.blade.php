<!-- Navegación añadida -->
@include('layouts.header')
<main>
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Título de la sección -->
            <div class="text-center mb-12">
                <h1 class="text-5xl font-extrabold text-blue-800">Nuestros Proyectos</h1>
                <p class="text-lg text-gray-700 mt-4">Explora algunos de los proyectos destacados en los que hemos
                    trabajado, demostrando nuestro compromiso con la calidad y la excelencia.</p>
                <div class="mt-4 h-1 w-24 mx-auto bg-orange-600 rounded"></div>
            </div>

            <!-- Proyectos destacados -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12">
                <!-- Proyecto 1 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Proyecto de Mecanizado CNC"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">Proyecto de Mecanizado CNC</h3>
                    <p class="text-gray-700 leading-relaxed">Realizamos la fabricación y rectificado de componentes
                        críticos para la industria minera, asegurando precisión y durabilidad en condiciones extremas.
                    </p>
                    <a href="#"
                        class="text-orange-600 font-bold mt-4 inline-block transition-colors duration-300 hover:text-orange-800">Ver
                        más detalles</a>
                </div>

                <!-- Proyecto 2 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Proyecto de Soldadura Especial"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">Proyecto de Soldadura Especial</h3>
                    <p class="text-gray-700 leading-relaxed">Implementamos técnicas avanzadas de soldadura en la
                        construcción de estructuras metálicas para un nuevo complejo industrial.</p>
                    <a href="#"
                        class="text-orange-600 font-bold mt-4 inline-block transition-colors duration-300 hover:text-orange-800">Ver
                        más detalles</a>
                </div>

                <!-- Proyecto 3 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Homologación de Soldadores en Planta Industrial"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">Homologación de Soldadores en Planta
                        Industrial</h3>
                    <p class="text-gray-700 leading-relaxed">Supervisamos y certificamos la calidad del trabajo de
                        soldadores en una planta industrial, garantizando estándares internacionales.</p>
                    <a href="#"
                        class="text-orange-600 font-bold mt-4 inline-block transition-colors duration-300 hover:text-orange-800">Ver
                        más detalles</a>
                </div>

                <!-- Proyecto 4 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Construcción de Infraestructura con Andamios"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">Construcción de Infraestructura con Andamios
                    </h3>
                    <p class="text-gray-700 leading-relaxed">Proveímos y montamos andamios seguros y certificados para
                        la construcción de una nueva sede corporativa.</p>
                    <a href="#"
                        class="text-orange-600 font-bold mt-4 inline-block transition-colors duration-300 hover:text-orange-800">Ver
                        más detalles</a>
                </div>

                <!-- Proyecto 5 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Mantenimiento de Equipos Mineros"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">Mantenimiento de Equipos Mineros</h3>
                    <p class="text-gray-700 leading-relaxed">Llevamos a cabo el mantenimiento preventivo y correctivo de
                        equipos mineros, mejorando su rendimiento y prolongando su vida útil.</p>
                    <a href="#"
                        class="text-orange-600 font-bold mt-4 inline-block transition-colors duration-300 hover:text-orange-800">Ver
                        más detalles</a>
                </div>

                <!-- Proyecto 6 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Automatización de Procesos Industriales"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">Automatización de Procesos Industriales</h3>
                    <p class="text-gray-700 leading-relaxed">Desarrollamos e implementamos soluciones de automatización
                        en una planta de procesamiento, mejorando la eficiencia operativa.</p>
                    <a href="#"
                        class="text-orange-600 font-bold mt-4 inline-block transition-colors duration-300 hover:text-orange-800">Ver
                        más detalles</a>
                </div>
            </div>

            <!-- Llamado a la acción -->
            <div class="text-center mt-16">
                <h2 class="text-4xl font-extrabold text-blue-800 mb-6">¿Interesado en nuestros proyectos?</h2>
                <p class="text-lg text-gray-700 mb-8">Ponte en contacto con nosotros para obtener más información sobre
                    cómo podemos ayudar a llevar tu proyecto al siguiente nivel.</p>
                <a href="#contacto"
                    class="inline-block bg-orange-600 text-white px-8 py-4 rounded-full shadow-lg hover:bg-orange-800 transition-colors duration-300">Contáctanos</a>
            </div>
        </div>
    </section>

</main>
@include('layouts.footer')