document.addEventListener('DOMContentLoaded', () => {
    
    const toggleButton = document.getElementById('toggle-button');
    const ingredientsList = document.getElementById('ingredients-list');

    // 1. Funcionalidad JS (Frontend Dinámico): Mostrar/Ocultar Ingredientes con Animación
    if (toggleButton && ingredientsList) {
        toggleButton.addEventListener('click', () => {
            // Evita clicks múltiples durante la animación
            if (ingredientsList.classList.contains('ingredients-entering') || ingredientsList.classList.contains('ingredients-leaving')) {
                return; 
            }

            // Verifica si está oculto
            if (ingredientsList.style.display === 'none') { // MOSTRAR
                
                // 1. Prepara el elemento para la animación (debe ser visible)
                ingredientsList.style.removeProperty('display'); 
                
                // 2. Ejecuta la animación de entrada
                ingredientsList.classList.remove('ingredients-leaving');
                ingredientsList.classList.add('ingredients-entering');
                toggleButton.textContent = 'Ocultar Ingredientes';
                
                // 3. Limpia la clase de animación después de terminar
                ingredientsList.addEventListener('animationend', function handler() {
                    ingredientsList.classList.remove('ingredients-entering');
                    ingredientsList.style.maxHeight = ''; 
                    ingredientsList.style.opacity = '';
                    ingredientsList.removeEventListener('animationend', handler);
                }, { once: true });

            } else { // OCULTAR
                
                // 1. Ejecuta la animación de salida
                ingredientsList.classList.remove('ingredients-entering');
                ingredientsList.classList.add('ingredients-leaving');
                toggleButton.textContent = 'Mostrar Ingredientes';

                // 2. Oculta y limpia el estado después de que la animación termina
                ingredientsList.addEventListener('animationend', function handler() {
                    ingredientsList.classList.remove('ingredients-leaving');
                    ingredientsList.style.display = 'none'; 
                    ingredientsList.style.opacity = '0';
                    ingredientsList.style.maxHeight = '0px';
                    ingredientsList.removeEventListener('animationend', handler);
                }, { once: true });
            }
        });
    } else {
        console.error("No se encontraron los elementos del botón o la lista de ingredientes.");
    }
    
    // 2. Animación de los pasos de instrucción al cargar la página
    const instructionSteps = document.querySelectorAll('.instruction-step');
    instructionSteps.forEach((step, index) => {
        setTimeout(() => {
            step.classList.add('visible');
        }, 200 * index + 500); // Retraso de 200ms entre cada paso
    });
});
