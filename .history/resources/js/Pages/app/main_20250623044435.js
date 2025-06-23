document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const toggleSidebarButton = document.getElementById('toggleSidebar');
    const mainContent = document.getElementById('mainContent');
    const menuButtons = document.querySelectorAll('.sidebar-nav-button');
    const subMenuButtons = document.querySelectorAll('.sidebar-subitem-button');
    const dashboardTitle = document.getElementById('dashboardTitle');

    let activeMenu = 'Dashboards';
    let activeSubMenu = 'Default';

    // Función para actualizar el título del dashboard
    const updateDashboardTitle = () => {
        let titleText = 'Bienvenido al Dashboard';
        if (activeSubMenu) {
            titleText += ` ${activeSubMenu}`;
        } else if (activeMenu) {
            titleText += ` ${activeMenu}`;
        }
        dashboardTitle.textContent = titleText;
    };

    // Manejar clic en botón de alternar barra lateral
    toggleSidebarButton.addEventListener('click', () => {
        document.body.classList.toggle('sidebar-collapsed');
    });

    // Manejar clics en los botones del menú principal
    menuButtons.forEach(button => {
        button.addEventListener('click', () => {
            const menuName = button.dataset.menu;
            const subitemsContainer = document.querySelector(`.sidebar-subitems[data-parent-menu="${menuName}"]`);
            const arrowIcon = button.querySelector('.arrow-icon');

            // Desactivar todos los menús y submenús
            menuButtons.forEach(btn => btn.classList.remove('active', 'expanded'));
            subMenuButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.sidebar-subitems').forEach(sub => sub.classList.add('hidden-subitems'));

            if (activeMenu === menuName) {
                // Si el menú activo es el mismo, lo colapsamos y desactivamos
                activeMenu = '';
                activeSubMenu = '';
                updateDashboardTitle();
            } else {
                // Activar el menú clicado
                button.classList.add('active', 'expanded');
                activeMenu = menuName;

                if (subitemsContainer) {
                    subitemsContainer.classList.remove('hidden-subitems');
                    // Si el menú tiene subelementos, activa el primero por defecto
                    const firstSubItem = subitemsContainer.querySelector('.sidebar-subitem-button');
                    if (firstSubItem) {
                        firstSubItem.classList.add('active');
                        activeSubMenu = firstSubItem.dataset.submenu;
                    } else {
                        activeSubMenu = ''; // No hay submenús
                    }
                } else {
                    activeSubMenu = ''; // No tiene submenús
                }
                updateDashboardTitle();
            }
        });
    });

    // Manejar clics en los botones de submenú
    subMenuButtons.forEach(button => {
        button.addEventListener('click', () => {
            subMenuButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            activeSubMenu = button.dataset.submenu;
            updateDashboardTitle();
        });
    });

    // Inicializar el estado activo del menú y submenú al cargar
    const initialActiveMenuButton = document.querySelector(`.sidebar-nav-button[data-menu="${activeMenu}"]`);
    if (initialActiveMenuButton) {
        initialActiveMenuButton.classList.add('active', 'expanded');
        const initialSubitemsContainer = document.querySelector(`.sidebar-subitems[data-parent-menu="${activeMenu}"]`);
        if (initialSubitemsContainer) {
            initialSubitemsContainer.classList.remove('hidden-subitems');
            const initialActiveSubMenuButton = document.querySelector(`.sidebar-subitem-button[data-submenu="${activeSubMenu}"]`);
            if (initialActiveSubMenuButton) {
                initialActiveSubMenuButton.classList.add('active');
            }
        }
    }
    updateDashboardTitle(); // Asegura que el título inicial sea correcto
});