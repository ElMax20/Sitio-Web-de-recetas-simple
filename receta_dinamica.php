<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas Llamativas: Tostada de Aguacate</title>
    
    <!-- Carga de Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Enlace a los estilos CSS -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">

    <!-- Contenedor Principal de la Receta -->
    <main class="w-full max-w-4xl bg-white rounded-xl recipe-card overflow-hidden">

        <!-- Banner y Título -->
        <header class="p-6 md:p-8 bg-green-500 text-white rounded-t-xl">
            <h1 class="text-4xl font-extrabold mb-2">Receta Simple y Rápida</h1>
            <p class="text-green-100 italic">¡Cocina algo delicioso en minutos!</p>
        </header>

        <!-- Contenido de la Receta -->
        <section class="p-6 md:p-8">
            
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 pb-2 border-green-200">
                Tostada de Aguacate Clásica
            </h2>

            <!-- Imagen de la Receta con animación -->
            <div class="h-48 md:h-64 bg-gray-200 rounded-lg mb-6 overflow-hidden flex items-center justify-center animated-image">
                <img src="https://i0.wp.com/passionfood.ec/wp-content/uploads/2019/12/TOSTADA-AGUACATE.jpg?ssl=1" 
                     alt="Tostada de aguacate fresca y deliciosa" 
                     class="w-full h-full object-cover">
            </div>

            <p class="text-lg text-gray-600 mb-8">
                Un clásico sencillo, saludable y delicioso. Perfecto para un desayuno rápido, un almuerzo ligero o una merienda.
            </p>

            <!-- Sección de Ingredientes -->
            <div class="mb-8">
                <!-- Botón de Interacción JS: Muestra/Oculta Ingredientes -->
                <button id="toggle-button" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300 transform hover:scale-[1.02] active:scale-[0.98]">
                    Mostrar Ingredientes
                </button>

                <!-- Lista de Ingredientes (Inicialmente oculta con estilos inline para JS) -->
                <div id="ingredients-list" class="mt-4 p-4 border border-green-300 bg-green-50 rounded-lg" style="opacity: 0; max-height: 0; overflow: hidden; display: none;">
                    <h3 class="text-xl font-semibold text-green-800 mb-3">Ingredientes Necesarios</h3>
                    <ul class="list-disc pl-5 space-y-1 text-gray-700">
                        <li>1 rebanada de pan integral (o el que prefieras)</li>
                        <li>1/2 aguacate maduro</li>
                        <li>Jugo de 1/4 de limón o lima</li>
                        <li>Sal marina y pimienta negra al gusto</li>
                        <li>Opcional: hojuelas de chile, semillas de sésamo o aceite de oliva</li>
                    </ul>
                </div>
            </div>

            <!-- Sección de Instrucciones -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-1">Instrucciones</h3>
                <ol class="space-y-4 text-gray-700 instruction-list" style="counter-reset: step-counter;">
                    <li class="instruction-step">Tuesta la rebanada de pan hasta que esté dorada y crujiente.</li>
                    <li class="instruction-step">En un tazón pequeño, machaca la pulpa del medio aguacate con un tenedor.</li>
                    <li class="instruction-step">Añade el jugo de limón, sal y pimienta al aguacate y mezcla bien.</li>
                    <li class="instruction-step">Extiende la mezcla de aguacate de manera uniforme sobre la tostada.</li>
                    <li class="instruction-step">Decora con los ingredientes opcionales, como hojuelas de chile o un chorrito de aceite de oliva. ¡Sirve inmediatamente!</li>
                </ol>
            </div>
        </section>
    </main>

    <!-- Enlace a la funcionalidad JavaScript -->
    <script src="script.js"></script>

</body>
</html>
