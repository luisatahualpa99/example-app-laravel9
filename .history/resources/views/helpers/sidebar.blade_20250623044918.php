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