<div id=sidebar>
    <!-- Start .sidebar-inner -->
    <div class=sidebar-inner>
        <!-- Start #sideNav -->
        <ul id=sideNav class="nav nav-pills nav-stacked">
            <li class=top-search>
                <form>
                    <input name=search placeholder="Search ...">
                    <button type=submit><i class="ec-search s20"></i></button>
                </form>
            </li>
            <li><a href="{{ route('dashboard') }}">Dashboard <i class=im-screen></i></a></li>

            <li><a href="">Ticket <i class=im-paragraph-justify></i></a>
                <ul class="nav sub">
                    <li><a href="{{ route('list_ticket') }}"><i class=ec-pencil2></i> Listar</a></li>
                    <li><a href="{{ route('registration_ticket') }}"><i class=fa-pencil></i> Registrar</a></li>
                </ul>
            </li>
            <li><a href=#>Reportes <i class=im-table2></i></a>
                <ul class="nav sub">
                    <li><a href=""><i class=en-arrow-right7></i> Ticket Por Estado</a></li>
                    <li><a href=""><i class=en-arrow-right7></i> Ticket Por Solicitante</a></li>
                    <li><a href=""><i class=en-arrow-right7></i> Ticket Por Local</a></li>
                    <li><a href=""><i class=en-arrow-right7></i> Ticket Por Usuario</a></li>
                </ul>
            </li>

            <li><a href=#>Manager <i class=st-files></i></a>
                <ul class="nav sub">
                    <li><a href=#><i class=st-files></i> Ticket</a>
                        <ul class="nav sub">
                            <li><a href=""><i class=st-file-broken></i> Tipo</a></li>
                            <li><a href=""><i class=st-file-broken></i> Clase</a></li>
                            <li><a href=""><i class=st-file-broken></i> Categoria</a></li>
                            <li><a href=""><i class=st-file-broken></i> Problema</a></li>
                            <li><a href=""><i class=st-file-broken></i> Prioridad</a></li>
                            <li><a href=""><i class=st-file-broken></i> Estado</a></li>
                            <li><a href=""><i class=st-file-broken></i> Canal Atención</a></li>
                        </ul>
                    </li>
                    <li><a href=#><i class=st-files></i> Persona</a>
                        <ul class="nav sub">
                            <li><a href="{{ route('list_users') }}"><i class=fa-bell></i> Usuarios</a></li>
                            <li><a href=""><i class=br-window></i> Roles</a></li>
                            <li><a href=""><i class=im-windows8></i> Personas[]</a></li>
                            <li><a href=""><i class=st-cube></i> Empleados[]</a></li>
                            <li><a href=""><i class=im-stack></i> Cargos</a></li>
                            <li><a href=""><i class=im-play2></i> Areas</a></li>
                        </ul>
                    </li>
                    <li><a href=#><i class=st-files></i> Locales</a>
                        <ul class="nav sub">
                            <li><a href=""><i class=im-calendar2></i> Tiendas</a></li>
                            <li><a href=""><i class=im-calendar2></i> Oficinas</a></li>
                            <li><a href=""><i class=st-grid></i> Zonas</a></li>
                            <li><a href=""><i class=im-font></i> Marcas</a></li>
                            <li><a href=""><i class=fa-list></i> Sectores</a></li>
                        </ul>
                    </li>
                    <li><a href=#><i class=st-files></i> Extras</a>
                        <ul class="nav sub">
                            <li><a href=""><i class=st-file-broken></i> Activos</a></li>
                        </ul>
                    </li>
                    <li><a href=#><i class=st-files></i> Configuraciones</a>
                        <ul class="nav sub">
                            <li><a href=""><i class=st-file-broken></i> Unidad Negocio</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- End #sideNav -->
        <!-- Start .sidebar-panel -->
        <div class=sidebar-panel>
            <h4 class=sidebar-panel-title><i class=im-fire></i> Server usage</h4>
            <div class=sidebar-panel-content>
                <ul class=server-stats>
                    <li><span class=txt>Tickets Pendientes</span> <span class=percent>78</span>
                        <div id=usage-sparkline class=sparkline>Loading...</div>
                        <div class=pie-chart data-percent=78></div>
                    </li>
                </ul>
                <ul class=server-stats>
                    <li><span class=txt>Tickets Atención Rapido</span> <span class=percent>30</span>
                        <div id=cpu-sparkline class=sparkline>Loading...</div>
                        <div class=pie-chart data-percent=56></div>
                    </li>
                </ul>
                <ul class=server-stats>
                    <li><span class=txt>Tickets Rechazados</span> <span class=percent>14</span>
                        <div id=ram-sparkline class=sparkline>Loading...</div>
                        <div class=pie-chart data-percent=14></div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End .sidebar-panel -->
    </div>
    <!-- End .sidebar-inner -->
</div>