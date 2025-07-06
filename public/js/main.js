document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los elementos que pueden tener un submenú
    const submenuToggles = document.querySelectorAll('[data-submenu-toggle]');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            event.preventDefault(); // Evita la navegación por defecto del enlace

            const targetId = this.dataset.submenuToggle;
            const submenu = document.getElementById(targetId);
            const icon = this.querySelector('i.fa-chevron-down'); // Selecciona el icono de chevron

            if (submenu) {
                // Cierra todos los demás submenús abiertos, excepto el que se está abriendo
                document.querySelectorAll('.submenu').forEach(otherSubmenu => {
                    if (otherSubmenu !== submenu && otherSubmenu.style.display === 'block') {
                        otherSubmenu.style.display = 'none';
                        const otherToggle = document.querySelector(`[data-submenu-toggle="${otherSubmenu.id}"]`);
                        if (otherToggle) {
                            otherToggle.classList.remove('submenu-open');
                            otherToggle.querySelector('i.fa-chevron-down')?.classList.remove('rotate-180');
                        }
                    }
                });

                // Alterna la visibilidad del submenú actual
                if (submenu.style.display === 'block') {
                    submenu.style.display = 'none';
                    this.classList.remove('submenu-open');
                    icon.classList.remove('rotate-180'); // Gira el icono de vuelta
                } else {
                    submenu.style.display = 'block';
                    this.classList.add('submenu-open');
                    icon.classList.add('rotate-180'); // Gira el icono
                }
            }
        });
    });

    // Manejo de la clase 'active' para los ítems del submenú
    const submenuItems = document.querySelectorAll('.submenu-item');
    submenuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remueve la clase 'active' de todos los ítems de submenú
            submenuItems.forEach(sub => sub.classList.remove('active'));
            // Agrega la clase 'active' al ítem clickeado
            this.classList.add('active');

            // Opcional: Si un ítem de submenú se activa, asegúrate de que su menú principal también tenga un estilo "activo"
            // Esto ya está manejado por la clase 'submenu-open' en el padre, pero podrías querer una clase 'active' en el nav-item principal también.
            // Para este ejemplo, el nav-item principal solo tiene la clase 'submenu-open' cuando el submenú está abierto.
        });
    });

    // Asegura que el submenú de Email esté abierto por defecto si "Inbox" es activo
    const inboxItem = document.querySelector('.submenu-item.active');
    if (inboxItem) {
        const parentSubmenu = inboxItem.closest('.submenu');
        if (parentSubmenu) {
            parentSubmenu.style.display = 'block';
            const parentToggle = document.querySelector(`[data-submenu-toggle="${parentSubmenu.id}"]`);
            if (parentToggle) {
                parentToggle.classList.add('submenu-open');
                parentToggle.querySelector('i.fa-chevron-down')?.classList.add('rotate-180');
            }
        }
    }
});