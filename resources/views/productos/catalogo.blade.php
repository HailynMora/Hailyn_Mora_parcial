@extends('principal')
@section('content')
<br><h1 align="center">Instrumentos de Cuerda</h1><br><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('img/1.png')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p1 as $ct1)
		      		{{ $ct1 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/2.png')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p2 as $ct2)
		      		{{ $ct2 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/3.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p3 as $ct3)
		      		{{ $ct3 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
	</div><br>
	<div>
		<div class="card-deck">
        <div class="card">
		    <img src="{{url('img/4.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p4 as $ct4)
		      		{{ $ct4 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/5.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p5 as $ct5)
		      		{{ $ct5 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/6.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p6 as $ct6)
		      		{{ $ct6 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		</div><br>
	</div>
    <br><h1 align="center">Instrumentos de Viento</h1><br><br>
    <div>
		<div class="card-deck">
        <div class="card">
		    <img src="{{url('img/7.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p7 as $ct7)
		      		{{ $ct7 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/8.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p8 as $ct8)
		      		{{ $ct8 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/9.png')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p9 as $ct9)
		      		{{ $ct9 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		</div><br>
        
    </div>
    <div>
		<div class="card-deck">
        <div class="card">
		    <img src="{{url('img/10.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p10 as $ct10)
		      		{{ $ct10 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/11.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p11 as $ct11)
		      		{{ $ct11 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('img/12.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <ul>
		      	@foreach($p12 as $ct12)
		      		{{ $ct12 }}<br>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-secondary">Alquilar</button>
		    </div>
		  </div>
		</div><br>
@stop