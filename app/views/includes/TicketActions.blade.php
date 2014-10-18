<div class="panel-heading-content">
<div class="btn-group">
    <button type=button class="btn btn-sm btn-primary dropdown-toggle" data-toggle=dropdown>Acciones<span class=caret></span></button>
    <ul class=dropdown-menu role=menu>
        @if ($Ticket->State_Id == 1)
        @if (is_admin())<li><a href="{{ route('assignment_ticket', [$Ticket->id])  }}">Asignar</a></li>@endif
        @if (is_admin())<li><a href="{{ route('diagnostic_ticket', [$Ticket->id]) }}">Diagnosticar</a></li>@endif
        @if (is_admin())<li><a href="{{ route('recategorisation_ticket', [$Ticket->id]) }}">Recategorizar</a></li>@endif
        @if (is_admin())<li><a href="{{ route('refusal_ticket', [$Ticket->id]) }}">Rechazar</a></li>@endif

        @elseif ($Ticket->State_Id == 2)
        <li><a href="{{ route('diagnostic_ticket', [$Ticket->id]) }}">Diagnosticar</a></li>
        @if (is_admin())<li><a href="{{ route('reassignment_ticket', [$Ticket->id]) }}">Reasignar</a></li>@endif
        @if (is_admin())<li><a href="{{ route('refusal_ticket', [$Ticket->id]) }}">Rechazar</a></li>@endif
        @elseif ($Ticket->State_Id == 3)
        <li><a href="{{ route('solution_ticket', [$Ticket->id]) }}">Solucionar</a></li>
        @if (is_admin())<li><a href="{{ route('reassignment_ticket', [$Ticket->id]) }}">Reasignar</a></li>@endif
        @if (is_admin())<li><a href="{{ route('refusal_ticket', [$Ticket->id]) }}">Rechazar</a></li>@endif
        @elseif ($Ticket->State_Id == 4)
        <li><a href="{{ route('confirm_ticket', [$Ticket->id]) }}">Confirmar</a></li>
        @elseif ($Ticket->State_Id == 5)
        <li><a href="{{ route('tracking_ticket', [$Ticket->id]) }}">Seguimiento</a></li>
        @elseif ($Ticket->State_Id == 6)
        <li><a href="#">Seguimiento</a></li>
        @endif
    </ul>
</div>
</div>