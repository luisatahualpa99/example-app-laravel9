<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DASHLY</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-home.css">

</head>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DASHLY</title>
    <link rel="stylesheet" href="../css/styles-home.css">

</head>
<body>

    @in
    <!-- Barra lateral de navegación -->
    <aside id="sidebar" class="sidebar">
        <!-- Logo de Dashly -->
        <div class="sidebar-logo">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 10V3L4 14h7v7l9-11h-7z"
                />
            </svg>
            <span>DASHLY</span>
        </div>

        <!-- Elementos del menú -->
        <nav class="sidebar-nav">
            <div class="sidebar-nav-item">
                <button class="sidebar-nav-button active" data-menu="Dashboards">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span>Dashboards</span>
                    <svg
                        class="arrow-icon expanded"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </button>
                <div class="sidebar-subitems" data-parent-menu="Dashboards">
                    <button class="sidebar-subitem-button active" data-submenu="Default">
                        <span class="dot"></span>
                        <span>Default</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="E-commerce">
                        <span class="dot"></span>
                        <span>E-commerce</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="CRM">
                        <span class="dot"></span>
                        <span>CRM</span>
                        <span class="new-badge">New</span>
                    </button>
                </div>
            </div>

            <div class="sidebar-nav-item">
                <button class="sidebar-nav-button" data-menu="Pages">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0113 3.414l.707.707A2 2 0 0114.586 5H18a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2 2V4h-.586l-.707.707A2 2 0 004 6h2zm2.5 1H6a1 1 0 000 2h2.5a1 1 0 000-2z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <span>Pages</span>
                    <svg
                        class="arrow-icon"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </button>
                <div class="sidebar-subitems hidden-subitems" data-parent-menu="Pages">
                    <button class="sidebar-subitem-button" data-submenu="Account">
                        <span class="dot"></span>
                        <span>Account</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="User">
                        <span class="dot"></span>
                        <span>User</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Pricing">
                        <span class="dot"></span>
                        <span>Pricing</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Wizard">
                        <span class="dot"></span>
                        <span>Wizard</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Help Center">
                        <span class="dot"></span>
                        <span>Help Center</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Invoice">
                        <span class="dot"></span>
                        <span>Invoice</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="API Keys">
                        <span class="dot"></span>
                        <span>API Keys</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Maintenance">
                        <span class="dot"></span>
                        <span>Maintenance</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Connect Apps">
                        <span class="dot"></span>
                        <span>Connect Apps</span>
                    </button>
                    <button class="sidebar-subitem-button" data-submenu="Landing Page">
                        <span class="dot"></span>
                        <span>Landing Page</span>
                        <span class="new-badge">New</span>
                    </button>
                </div>
            </div>
        </nav>
    </aside>


    <!-- Contenido principal -->
    <main id="mainContent" class="main-content">
        <!-- Botón para ocultar/mostrar la barra lateral -->
        <button id="toggleSidebar" class="toggle-sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 24px; height: 24px;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <h1 id="dashboardTitle">Bienvenido al Dashboard Default</h1>
        <p>
            Aquí puedes añadir el contenido de tu dashboard, como gráficos, tablas, y otros widgets.
        </p>

        <!-- Ejemplo de tarjeta de contenido -->
        <div class="card-grid">
            <div class="card">
                <h2>Tarjeta de Ejemplo 1</h2>
                <p>
                    Este es un espacio para tu contenido. Puedes usar esto para mostrar métricas clave,
                    información relevante o resúmenes de datos.
                </p>
            </div>
            <div class="card">
                <h2>Tarjeta de Ejemplo 2</h2>
                <p>
                    Personaliza estas tarjetas para adaptarlas a tus necesidades específicas.
                </p>
            </div>
            <div class="card">
                <h2>Tarjeta de Ejemplo 3</h2>
                <p>
                    Añade más contenido aquí para construir un dashboard completo.
                </p>
            </div>
        </div>
    </main>
    <script src="../js/main.js"></script>
</body>
</html>
