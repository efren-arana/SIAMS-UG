<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">

            <li><a><i class="fa fa-search"></i> Análisis <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/analisis') }}">Puntos Georeferenciales</a></li>
                    <li><a href="{{ url('/association_rules') }}">Reglas de Asociación</a></li>
                    <li><a href="{{ url('/analisis_trayectoria') }}">Eclat</a></li>
                     <!--<li><a href="{{ url('/k-means') }}">K-means</a></li>-->
                </ul>
            </li>


            <!--<li><i class="fas fa-notes-medical"></i> Historia clínica
                </a></li>

            <li><a href=''><i class="fas fa-calendar-alt"></i> Agendar cita </a></li>
            <li><a href=''><i class="fas fa-calendar-alt"></i> Agendar cita 2 </a></li>

            </li> -->
        </ul>
        <ul class="nav side-menu">

            <li><a><i class="fa fa-chart-line"></i> Predicción <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/prediction') }}">Redes Neuronales</a></li>
                     <!--<li><a href="{{ url('/k-means') }}">K-means</a></li>-->
                </ul>
            </li>


            <!--<li><i class="fas fa-notes-medical"></i> Historia clínica
                </a></li>

            <li><a href=''><i class="fas fa-calendar-alt"></i> Agendar cita </a></li>
            <li><a href=''><i class="fas fa-calendar-alt"></i> Agendar cita 2 </a></li>

            </li> -->
        </ul>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-chart-line"></i> Administracion <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/arquitectura_asociacion') }}">Arquitectura de Reglas de Asociación</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->
