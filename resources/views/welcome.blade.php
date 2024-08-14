<!-- Navegación añadida -->
@include('layouts.header')
<main>
    <section class="overflow-hidden relative w-full h-80">
        <div id="slider" class="flex transition-transform duration-300 ease-in-out h-full">
            <!-- Slide 1 -->
            <div class="w-full flex-shrink-0 h-full relative overflow-hidden">
                <img src="{{ asset('images/img1.jpg') }}" alt="Slide 1"
                    class="w-full h-full object-cover object-center brightness-50 transition-transform duration-500 ease-in-out transform hover:scale-110 cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-start ps-48 p-8 pointer-events-none">
                    <div class="max-w-md text-white">
                        <h2 class="text-3xl font-bold mb-4 border-s-4 ps-2 border-[#243d7c] uppercase"
                            style="font-family: 'Poppins', sans-serif;">
                            Inicia ya tu proyecto
                        </h2>
                        <p class="mb-6">Este es el contenido descriptivo que acompaña a la imagen. Aquí puedes
                            destacar lo más importante de la imagen o el producto que estás mostrando.</p>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="w-full flex-shrink-0 h-full relative overflow-hidden">
                <img src="{{ asset('images/img2.jpg') }}" alt="Slide 2"
                    class="w-full h-full object-cover object-center brightness-50 transition-transform duration-500 ease-in-out transform hover:scale-110 cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-start ps-48 p-8 pointer-events-none">
                    <div class="max-w-md text-white">
                        <h2 class="text-3xl font-bold mb-4 border-s-4 ps-2 border-[#243d7c] uppercase"
                            style="font-family: 'Poppins', sans-serif;">
                            Inicia ya tu proyecto
                        </h2>
                        <p class="mb-6">Este es el contenido descriptivo que acompaña a la imagen. Aquí puedes
                            destacar lo más importante de la imagen o el producto que estás mostrando.</p>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="w-full flex-shrink-0 h-full relative overflow-hidden">
                <img src="{{ asset('images/img3.jpeg') }}" alt="Slide 3"
                    class="w-full h-full object-cover object-center brightness-50 transition-transform duration-500 ease-in-out transform hover:scale-110 cursor-pointer">
                <div class="absolute inset-0 flex items-center justify-start ps-48 p-8 pointer-events-none">
                    <div class="max-w-md text-white">
                        <h2 class="text-3xl font-bold mb-4 border-s-4 ps-2 border-[#243d7c] uppercase"
                            style="font-family: 'Poppins', sans-serif;">
                            Inicia ya tu proyecto
                        </h2>
                        <p class="mb-6">Este es el contenido descriptivo que acompaña a la imagen. Aquí puedes
                            destacar lo más importante de la imagen o el producto que estás mostrando.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left area -->
        <div id="prev"
            class="absolute top-0 left-0 h-full w-1/6 bg-transparent hover:bg-white hover:bg-opacity-10 cursor-pointer transition-colors duration-300">
        </div>
        <!-- Right area -->
        <div id="next"
            class="absolute top-0 right-0 h-full w-1/6 bg-transparent hover:bg-white hover:bg-opacity-10 cursor-pointer transition-colors duration-300">
        </div>
    </section>
    <section class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Contenedor principal -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <!-- Título y descripción -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Contamos con una experiencia de 4 años en el
                        mercado</h2>
                    <p class="mt-4 text-gray-600">SOLDACE SAC fue fundada por un grupo de empresarios familiares
                        y desde el año 2017 nos especializamos en fabricación y reparación de componentes,
                        accesorios y piezas empleadas en la industria minera y otras; los proyectos se realizan
                        aplicando soldadura especial, mecanizado convencional y CNC, entre otros.</p>
                </div>

                <!-- Misión, Visión, Valores -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Misión -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md flex flex-col justify-between transform transition duration-500 hover:scale-105">
                        <div>
                            <h3 class="text-xl font-semibold text-blue-700">Misión</h3>
                            <p class="mt-4 text-gray-700">Brindar servicios y soluciones para proyectos
                                metalmecánicos y de soldadura; como lo son la fabricación o reparación de
                                componentes, accesorios y piezas; asimismo ofrecer el servicio de calificación y
                                homologación de soldadores bajo estándares internacionales regulados por la
                                American Welding Society (AWS).</p>
                        </div>
                        <a href="#"
                            class="w-fit mt-6 flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-full transition duration-300 hover:bg-blue-700">
                            Leer más
                            <x-heroicon-o-arrow-right class="w-6 h-6" /></a></li>
                        </a>
                    </div>

                    <!-- Visión -->
                    <div
                        class="bg-green-50 p-6 rounded-lg shadow-md flex flex-col justify-between transform transition duration-500 hover:scale-105">
                        <div>
                            <h3 class="text-xl font-semibold text-green-700">Visión</h3>
                            <p class="mt-4 text-gray-700">Nuestro objetivo es ser, para el 2023, una empresa
                                reconocida nacionalmente dentro de la industria de servicios metalmecánicos y de
                                soldadura como la representación de calidad y excelencia; siendo identificados
                                por nuestros clientes como socios y aliados en el crecimiento de sus empresas.
                            </p>
                        </div>
                        <a href="#"
                            class="w-fit mt-6 flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-full transition duration-300 hover:bg-green-700">
                            Leer más
                            <x-heroicon-o-arrow-right class="w-6 h-6" /></a></li>
                        </a>
                    </div>

                    <!-- Valores -->
                    <div
                        class="bg-yellow-50 p-6 rounded-lg shadow-md flex flex-col justify-between transform transition duration-500 hover:scale-105">
                        <div>
                            <h3 class="text-xl font-semibold text-yellow-700">Valores</h3>
                            <p class="mt-4 text-gray-700">Cada uno de los servicios que ofrecemos y todos los
                                proyectos de los que somos parte los desarrollamos bajo principios y valores que
                                rigen a la empresa: honestidad, respeto, calidad, puntualidad, pasión,
                                competitividad, trabajo en equipo y orientación al cliente.</p>
                        </div>
                        <a href="#"
                            class="w-fit mt-6 flex items-center gap-2 bg-yellow-600 text-white px-4 py-2 rounded-full transition duration-300 hover:bg-yellow-700">
                            Leer más
                            <x-heroicon-o-arrow-right class="w-6 h-6" /></a></li>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Título de la sección -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-orange-600">Nuestros Servicios</h2>
            </div>

            <!-- Servicios -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Servicio 1 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105 hover:rotate-2 flex flex-col">
                    <div class="overflow-hidden rounded-lg mb-4 flex-grow">
                        <img src="{{ asset('images/img1.jpg') }}" alt="Mecanizado CNC"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-90">
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-xl font-semibold text-blue-800 mb-2">Mecanizado CNC y Rectificado</h3>
                        <p class="text-gray-700 mb-4 text-center">Fabricación y reparación de componentes
                            metalmecánicos para la industria. Según requerimiento se diseñan planos, se
                            desarrollan hojas de cálculo, dosier de calidad y análisis estructural.</p>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105 hover:rotate-2 flex flex-col">
                    <div class="overflow-hidden rounded-lg mb-4 flex-grow">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Soldadura Especial"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-90">
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-xl font-semibold text-blue-800 mb-2">Soldadura Especial</h3>
                        <p class="text-gray-700 mb-4 text-center">Desarrollo de proyectos y reparación de
                            componentes utilizando soldadura especial en procesos SMAW, GTAW, FCAW y GMAW. Se
                            garantiza la calidad de los materiales y equipos.</p>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105 hover:rotate-2 flex flex-col">
                    <div class="overflow-hidden rounded-lg mb-4 flex-grow">
                        <img src="{{ asset('images/img3.jpeg') }}" alt="Homologación Soldadores"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-90">
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-xl font-semibold text-blue-800 mb-2">Homologación de Soldadores</h3>
                        <p class="text-gray-700 mb-4 text-center">Calificación de soldadores realizada por
                            Inspectores de Soldadura Certificados (CWI) acreditados por AWS, garantizando
                            pruebas según normativas internacionales.</p>
                    </div>
                </div>

                <!-- Servicio 4 -->
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105 hover:rotate-2 flex flex-col">
                    <div class="overflow-hidden rounded-lg mb-4 flex-grow">
                        <img src="{{ asset('images/img4.png') }}" alt="Alquiler Andamios"
                            class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-90">
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-xl font-semibold text-blue-800 mb-2">Alquiler y Venta de Andamios</h3>
                        <p class="text-gray-700 mb-4 text-center">Alquiler y venta de andamios tipo Acrow
                            certificados por la UNI con escaleras internas. También contamos con escaleras tipo
                            tijera y telescópica.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Título de la sección -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-orange-600">¿Por qué escogernos?</h2>
                <div class="mt-2 h-1 bg-gray-300 w-24 mx-auto"></div>
            </div>

            <!-- Lista de razones -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-center bg-white p-8 shadow-lg rounded-lg">
                <!-- Calidad -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-blue-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Calidad</h3>
                </div>

                <!-- Precisión y exactitud -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-red-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Precisión y exactitud</h3>
                </div>

                <!-- Asesoría en cada proyecto -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-green-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Asesoría en cada proyecto</h3>
                </div>

                <!-- Experiencia y Expertiz -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-yellow-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Experiencia y Expertiz</h3>
                </div>

                <!-- Profesionales y técnicos calificados -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-purple-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Profesionales y técnicos calificados</h3>
                </div>

                <!-- Compromiso -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-indigo-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Compromiso</h3>
                </div>

                <!-- Confianza -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-teal-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Confianza</h3>
                </div>

                <!-- Atención inmediata -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-orange-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Atención inmediata</h3>
                </div>

                <!-- Puntualidad -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-pink-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Puntualidad</h3>
                </div>

                <!-- Equipos, herramientas e instrumentos calibrados -->
                <div class="group">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-gray-600 transition-transform duration-300 transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-800">Equipos, herramientas e instrumentos
                        calibrados</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <!-- Título de la sección -->
            <div class="mb-8">
                <h2 class="text-4xl font-extrabold text-orange-600">Nuestros Clientes</h2>
                <p class="text-gray-600 mt-2 italic">Su satisfacción y confianza nos respaldan</p>
                <div class="mt-4 h-1 w-32 mx-auto bg-blue-600 rounded"></div>
            </div>

            <!-- Lista de clientes -->
            <div class="text-gray-800 text-lg font-medium space-y-4">
                <p class="transition-transform duration-300 transform hover:scale-105">
                    FERREYROS – ITEMAQ – FORTEMAQ – MIS PROVEEDORES UNIDOS S.A. – CRONOMETAL – MUR – ANDAMIOS
                    C&E – INTEROC – ANTIPINA – FYCO SRL
                </p>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer')