@extends('layouts.app2')

@section('content')
<div class="main">
<!-- EMPIEZA CONTENIDO DE ENCABEZADO -->
	 	 <div class="container">
		
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="../plantilla/images/fitness.png" class="img-responsive" alt=""/> 
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h2>Saldo actual: -$450.00 </h2>	 
				   <h3>¡Muchas gracias por ser parte de esta familia!</h3>
				   <p>BIENVENIDO (A)</p>
				 </div>
            </div>
		 </div>
		<!-- TERMINA CONTENIDO DE ENCABEZADO -->
        <center><i><h3>Historial de pagos:</h3></i></center><br><br><br><br>
		
		 <div  class="container">
		 <center>
 

		 @foreach ($select1 as $item1 ) 
                @if (auth()->id() == $item1->user_id)
            <tr>
                  <h3><td>Servicio contratado: {{ $item1->nombre }}</td><br>
                  <td>Costo del servicio: {{ $item1->costo }}</td><br>
				  <td>Fecha que te suscribiste: {{ $item1->created_at }}</td><br><br></h3>
              
            </tr>
            @endif
              @endforeach
		 



		 </center>
		 </div>
@endsection
