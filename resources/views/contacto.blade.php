<!-- Navegación añadida -->
@include('layouts.header')
<main>
    <section class="bg-gradient-to-r from-blue-50 to-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Título de la sección -->
            <div class="text-center mb-12">
                <h1 class="text-5xl font-extrabold text-blue-800">Contáctanos</h1>
                <p class="text-lg text-gray-700 mt-4">Estamos aquí para ayudarte. Completa el formulario o utiliza la
                    información de contacto a continuación para ponerte en contacto con nosotros.</p>
                <div class="mt-4 h-1 w-32 mx-auto bg-orange-600 rounded"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Formulario de contacto -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-3xl font-extrabold text-blue-800 mb-6">Envíanos un mensaje</h2>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="name" id="name" required
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo
                                Electrónico</label>
                            <input type="email" name="email" id="email" required
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                            <textarea name="message" id="message" rows="6" required
                                class="mt-2 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition-colors duration-300">Enviar
                            Mensaje</button>
                    </form>
                </div>

                <!-- Detalles de contacto -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-extrabold text-blue-800 mb-6">Detalles de Contacto</h2>
                    <div class="space-y-6">
                        <!-- Teléfono -->
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 bg-blue-600 text-white p-4 rounded-full shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7-3m0 0l7 3m-7-3v14m-7-7h14"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">Teléfono</p>
                                <p class="text-gray-600">+51 947 337 745</p>
                                <p class="text-gray-600">+51 981 163 572</p>
                            </div>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 bg-green-600 text-white p-4 rounded-full shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12h2a2 2 0 002-2V5a2 2 0 00-2-2h-6a2 2 0 00-2 2v1"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12h-2a2 2 0 01-2-2V5a2 2 0 012-2h6a2 2 0 012 2v1m-4 7v4a2 2 0 01-2 2h-6a2 2 0 01-2-2v-4m10-3l2 2m0 0l2-2m-2 2V8m0 6l2 2m0 0l2-2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">Correo Electrónico</p>
                                <p class="text-gray-600">contacto@soldace.pe</p>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 bg-yellow-600 text-white p-4 rounded-full shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 2a10 10 0 00-10 10v1.72c0 .67.07 1.33.21 1.98l1.8 6.2c.26.9 1.13 1.6 2.08 1.6h12.62c.95 0 1.82-.7 2.08-1.6l1.8-6.2c.14-.65.21-1.31.21-1.98V12a10 10 0 00-10-10z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">Ubicación</p>
                                <p class="text-gray-600">Jirón Neon 5627, Los Olivos, Lima 15311</p>
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 bg-red-600 text-white p-4 rounded-full shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 2a2 2 0 00-2 2v2a2 2 0 01-2 2H10a2 2 0 01-2-2V4a2 2 0 00-2-2H4a2 2 0 00-2 2v16a2 2 0 002 2h16a2 2 0 002-2V4a2 2 0 00-2-2h-2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">Síguenos en</p>
                                <p class="text-gray-600">@SoldaceSAC</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mapa -->
            <div class="mt-16">
                <h2 class="text-3xl font-extrabold text-blue-800 text-center mb-8">Encuéntranos Aquí</h2>
                <div
                    class="w-full h-80 overflow-hidden rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.8700330180876!2d-77.05889188561606!3d-12.046374545750098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce51ff6fbf8f%3A0x5fbf5a5310c9f038!2sSOLDACE%20SAC!5e0!3m2!1ses!2spe!4v1593554613510!5m2!1ses!2spe"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer')