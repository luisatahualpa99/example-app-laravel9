<!-- Barra lateral de navegación -->
<div class="sidebar w-64 h-screen p-4 flex flex-col rounded-lg">
        <!-- Encabezado de la barra lateral -->
    <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200">
        <div class="flex items-center space-x-2">
            <i class="fas fa-bars text-gray-500 text-xl"></i>
            <img src="https://placehold.co/32x32/007bff/ffffff?text=F" alt="Falcon Logo" class="w-8 h-8 rounded-full">
            <span class="text-2xl font-bold text-blue-600">falcon</span>
        </div>
    </div>

    <!-- Dashboard -->
    <div class="mb-4 relative">
        <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 active group" data-submenu-toggle="dashboard-submenu">
            <div class="flex items-center space-x-3">
                <i class="fas fa-chart-pie icon text-lg"></i>
                <span class="text-base">Dashboard</span>
            </div>
            <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
        </a>
        <div id="dashboard-submenu" class="submenu space-y-1 py-1">
            <!-- Agrega ítems de submenú aquí -->
            <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Analytics</a>
            <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">CRM</a>
        </div>
    </div>

    <!-- Sección App -->
    <div class="mb-4">
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="calendar-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-calendar-alt icon text-lg"></i>
                    <span class="text-base">Calendar</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="calendar-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Month View</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Day View</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="chat-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-comments icon text-lg"></i>
                    <span class="text-base">Chat</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="chat-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Direct Messages</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Group Chats</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="email-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope icon text-lg"></i>
                    <span class="text-base">Email</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="email-submenu" class="submenu space-y-1 py-1">
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Inbox</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Email detail</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Compose</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="events-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-calendar-check icon text-lg"></i>
                    <span class="text-base">Events</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="events-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Upcoming</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Past Events</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="ecommerce-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-shopping-cart icon text-lg"></i>
                    <span class="text-base">E Commerce</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="ecommerce-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Products</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Orders</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="elearning-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-graduation-cap icon text-lg"></i>
                    <span class="text-base">E Learning</span>
                    <span class="new-badge">New</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="elearning-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Courses</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Students</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="kanban-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-columns icon text-lg"></i>
                    <span class="text-base">Kanban</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="kanban-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Boards</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Tasks</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="social-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-share-alt icon text-lg"></i>
                    <span class="text-base">Social</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="social-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Profile</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Feed</a>
            </div>
        </div>
        <div class="relative">
                <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="support-submenu">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-headset icon text-lg"></i>
                        <span class="text-base">Support desk</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
                </a>
                <div id="support-submenu" class="submenu space-y-1 py-1">
                    <!-- Agrega ítems de submenú aquí -->
                    <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Tickets</a>
                    <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Knowledge Base</a>
                </div>
            </div>
        
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="starter-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-flag icon text-lg"></i>
                    <span class="text-base">Starter</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="starter-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Blank Page</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Sample Page</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="landing-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-globe icon text-lg"></i>
                    <span class="text-base">Landing</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="landing-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Landing Page 1</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Landing Page 2</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="authentication-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-lock icon text-lg"></i>
                    <span class="text-base">Authentication</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="authentication-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Sign In</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Sign Up</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="user-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-user icon text-lg"></i>
                    <span class="text-base">User</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="user-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Profile</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Settings</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="pricing-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-tag icon text-lg"></i>
                    <span class="text-base">Pricing</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="pricing-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Plans</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Features</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="faq-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-question-circle icon text-lg"></i>
                    <span class="text-base">Faq</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="faq-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">General</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">Technical</a>
            </div>
        </div>
        <div class="relative">
            <a href="#" class="nav-item flex items-center justify-between p-2 rounded-lg transition-colors duration-200 group" data-submenu-toggle="errors-submenu">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-exclamation-circle icon text-lg"></i>
                    <span class="text-base">Errors</span>
                </div>
                <i class="fas fa-chevron-down text-xs group-[.submenu-open]:rotate-180 transition-transform duration-200"></i>
            </a>
            <div id="errors-submenu" class="submenu space-y-1 py-1">
                <!-- Agrega ítems de submenú aquí -->
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">404</a>
                <a href="#" class="submenu-item block p-2 rounded-lg transition-colors duration-200">500</a>
            </div>
        </div>
    </div>
</div>