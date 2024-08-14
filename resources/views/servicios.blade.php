<!-- Navegación añadida -->
@include('layouts.header')
<main>
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Título principal -->
    <div class="text-center mb-12">
      <h1 class="text-5xl font-extrabold text-orange-600">Nuestros Servicios</h1>
      <p class="text-lg text-gray-700 mt-4">Descubre la variedad y calidad de servicios que ofrecemos, diseñados para satisfacer las necesidades más exigentes de la industria.</p>
      <div class="mt-4 h-1 w-24 mx-auto bg-blue-600 rounded"></div>
    </div>

    <!-- Servicios principales -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 mb-16">
      <!-- Servicio 1 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
        <div class="overflow-hidden rounded-lg mb-4">
          <img src="{{ asset('images/img1.jpg') }}" alt="Mecanizado CNC y Rectificado" class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
        </div>
        <h3 class="text-xl font-semibold text-blue-800 mb-2">Mecanizado CNC y Rectificado</h3>
        <p class="text-gray-700 leading-relaxed">Fabricación y reparación de componentes metalmecánicos para la industria. Diseño de planos, desarrollo de hojas de cálculo, dosier de calidad y análisis estructural.</p>
      </div>

      <!-- Servicio 2 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
        <div class="overflow-hidden rounded-lg mb-4">
          <img src="{{ asset('images/img2.jpg') }}" alt="Soldadura Especial" class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
        </div>
        <h3 class="text-xl font-semibold text-blue-800 mb-2">Soldadura Especial</h3>
        <p class="text-gray-700 leading-relaxed">Desarrollo de proyectos y reparación de componentes utilizando soldadura especial en procesos SMAW, GTAW, FCAW y GMAW. Garantía de calidad.</p>
      </div>

      <!-- Servicio 3 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
        <div class="overflow-hidden rounded-lg mb-4">
          <img src="{{ asset('images/img3.jpeg') }}" alt="Homologación de Soldadores" class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
        </div>
        <h3 class="text-xl font-semibold text-blue-800 mb-2">Homologación de Soldadores</h3>
        <p class="text-gray-700 leading-relaxed">Calificación de soldadores realizada por un Inspector Certificado, asegurando el cumplimiento de normativas internacionales.</p>
      </div>

      <!-- Servicio 4 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-500 hover:scale-105">
        <div class="overflow-hidden rounded-lg mb-4">
          <img src="{{ asset('images/img4.png') }}" alt="Alquiler y Venta de Andamios" class="h-64 w-full object-cover transition-transform duration-500 transform hover:scale-110">
        </div>
        <h3 class="text-xl font-semibold text-blue-800 mb-2">Alquiler y Venta de Andamios</h3>
        <p class="text-gray-700 leading-relaxed">Alquiler y venta de andamios tipo Acrow certificados por la UNI con escaleras internas. Escaleras tipo tijera y telescópica disponibles.</p>
      </div>
    </div>

    <!-- Testimonios -->
    <div class="bg-blue-50 py-12 rounded-lg mb-16">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-blue-800 mb-6">Lo que dicen nuestros clientes</h2>
        <div class="flex flex-col md:flex-row justify-center gap-8">
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <p class="text-lg text-gray-700 leading-relaxed">"La calidad del servicio de SOLDACE SAC superó nuestras expectativas. Su equipo es altamente calificado y siempre cumplen con los plazos establecidos."</p>
            <p class="mt-4 text-blue-800 font-bold">- Juan Pérez, CEO de Minería S.A.</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <p class="text-lg text-gray-700 leading-relaxed">"Recomendamos a SOLDACE SAC por su profesionalismo y compromiso con la calidad. Han sido nuestros socios en proyectos clave."</p>
            <p class="mt-4 text-blue-800 font-bold">- María García, Directora de Proyectos, Construcciones Globales</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Estadísticas de éxito -->
    <div class="mb-16">
      <h2 class="text-3xl font-extrabold text-orange-600 text-center mb-8">Nuestras Estadísticas</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
          <h3 class="text-5xl font-extrabold">+100</h3>
          <p class="text-lg mt-2">Proyectos Completados</p>
        </div>
        <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
          <h3 class="text-5xl font-extrabold">+50</h3>
          <p class="text-lg mt-2">Clientes Satisfechos</p>
        </div>
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg">
          <h3 class="text-5xl font-extrabold">+10</h3>
          <p class="text-lg mt-2">Años de Experiencia</p>
        </div>
      </div>
    </div>

    <!-- Llamado a la acción -->
    <div class="text-center">
      <h2 class="text-4xl font-extrabold text-orange-600 mb-6">¿Listo para trabajar con nosotros?</h2>
      <p class="text-lg text-gray-700 mb-8">Contáctanos hoy mismo y descubre cómo podemos ayudarte a llevar tu proyecto al siguiente nivel.</p>
      <a href="#contacto" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-full shadow-lg hover:bg-blue-800 transition-colors duration-300">Contáctanos</a>
    </div>
  </div>
</section>

</main>
@include('layouts.footer')