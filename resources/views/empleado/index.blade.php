<h2>Bienvenido a la página de empleados</h2>
<br>
@foreach ($data as $w)
    {{ $w->nombre }}    
@endforeach