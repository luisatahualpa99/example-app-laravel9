@extends('layouts.layoutPos')

@section('content')
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
@section()