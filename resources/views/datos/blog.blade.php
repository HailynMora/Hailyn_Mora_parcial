@extends('principal')
@section('content')
<div algain="center">
<br><h1 align="center">Instrumentos de Cuerda</h1><br><br>
    <br>
    <h2>Los instrumentos musicales de cuerda</h2>
    <p>Producen el sonido mediante la vibración de cuerdas tensadas. 
    Poseen, además, una caja de resonancia para amplificar el sonido. Según el modo en que se 
    obtiene el sonido, podemos distinguir tres tipos: frotada, pulsada y percutida.</p>
</div>

<div class="media">
  <img src="{{url('/img/vi.png')}}" class="mr-3" alt="..." width="304" height="236">
  <div class="media-body">
    <h5 class="mt-0">Cuerda frotada</h5>
    El sonido se obtiene frotando las cuerdas con un arco. De más agudo a más grave, son los siguientes: violín, viola, violonchelo y contrabajo. Escuchemos un ejemplo: violín
  </div>
</div>
<br><br>
<div class="media">
  <img src="{{url('/img/13.jpg')}}" class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Cuerda pulsada</h5>
    El sonido se obtiene tocando las cuerdas con los dedos o con púas. Entre los instrumentos de este tipo tenemos la guitarra, el arpa., entre otros. Escuchemos un ejemplo: arpa.
  </div>
</div>
<br><br>
<div class="media">
  <img src="{{url('/img/14.jpg')}}" class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Cuerda percutida</h5>
    El sonido se obtiene percutiendo, golpeando, las cuerdas. Un ejemplo de este tipo de instrumentos es el piano. Al tocar sus teclas, se accionan unos macillos que golpean las cuerdas, las cuales se encuentran en el interior de la caja de resonancia.
  </div>
</div>
@stop