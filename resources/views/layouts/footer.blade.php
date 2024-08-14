<footer>
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <!-- Título de la sección -->
            <div class="mb-12">
                <h2 class="text-4xl font-extrabold text-orange-600">¿Qué espera para iniciar ya su proyecto?
                </h2>
                <p class="text-gray-600 mt-2 italic">¡Crezcamos juntos!</p>
                <div class="mt-4 h-1 w-32 mx-auto bg-blue-600 rounded"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-center">
                <!-- Mapa de ubicación -->
                <div class="flex flex-col items-center">
                    <h3 class="text-3xl font-bold text-blue-800 mb-6">Ubícanos</h3>
                    <div
                        class="w-full md:w-3/4 h-80 overflow-hidden rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.8700330180876!2d-77.05889188561606!3d-12.046374545750098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce51ff6fbf8f%3A0x5fbf5a5310c9f038!2sSOLDACE%20SAC!5e0!3m2!1ses!2spe!4v1593554613510!5m2!1ses!2spe"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>

                <!-- Información de contacto -->
                <div class="flex flex-col items-center">
                    <h3 class="text-3xl font-bold text-blue-800 mb-6">Contáctanos</h3>
                    <div class="text-center md:text-left">
                        <!-- Números telefónicos -->
                        <div class="mb-6">
                            <h4 class="text-xl font-semibold text-orange-500 mb-2">Números telefónicos</h4>
                            <ul class="text-gray-800 space-y-1">
                                <li class="transition-transform duration-300 transform hover:scale-105">947 337
                                    745</li>
                                <li class="transition-transform duration-300 transform hover:scale-105">981 163
                                    572</li>
                                <li class="transition-transform duration-300 transform hover:scale-105">994 141
                                    715</li>
                            </ul>
                        </div>

                        <!-- Correos electrónicos -->
                        <div class="mb-6">
                            <h4 class="text-xl font-semibold text-blue-500 mb-2">Correos electrónicos</h4>
                            <ul class="text-blue-600 space-y-1">
                                <li class="transition-transform duration-300 transform hover:scale-105">
                                    <a href="mailto:richard.davila@soldace.pe">richard.davila@soldace.pe</a>
                                </li>
                                <li class="transition-transform duration-300 transform hover:scale-105">
                                    <a href="mailto:administracion@soldace.pe">administracion@soldace.pe</a>
                                </li>
                                <li class="transition-transform duration-300 transform hover:scale-105">
                                    <a href="mailto:logistica.ventas@soldace.pe">logistica.ventas@soldace.pe</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Cuenta de Facebook -->
                        <div>
                            <h4 class="text-xl font-semibold text-blue-800 mb-2">Cuenta de Facebook</h4>
                            <ul class="text-blue-800 space-y-1">
                                <li class="transition-transform duration-300 transform hover:scale-105">
                                    @Soldacesac</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
</div>
<script>
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('#slider > div');
    let currentIndex = 0;
    const slideCount = slides.length;

    function showNextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function showPrevSlide() {
        currentIndex = (currentIndex - 1 + slideCount) % slideCount;
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    document.getElementById('next').addEventListener('click', showNextSlide);
    document.getElementById('prev').addEventListener('click', showPrevSlide);

    // Auto slide every 3 seconds
    setInterval(showNextSlide, 3000);
</script>
</body>

</html>