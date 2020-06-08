@extends('layouts.app')

@section('content')
<center><h1>¡Hola cobrador!</h1><br><br><br>

        <i><h3>Servicios disponibles para los suscriptores:</h3></i>
        <a href="/cobrador/create" class="btn btn-info" >Agregar servicio</a></center><br>
	
		  <!-- EMPIEZA CONTENIDO DE CREAR SERVICIO -->
		  <div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->

			  @foreach ($services as $item)
	 	    	<div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live"> <span class="m_1">{{ $item->nombre }} </span></li>
	 	    			<li class="room"></li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="../plantilla/images/{{ $item->imagen }}" class="img-responsive" alt=""/>
                      </div><center><br>
					  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal{{ $item->id }}">
                      Ver
                    </button>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal{{ $item->id }}Y{{ $item->id }}">
                      Modificar
                    </button>

				<!-- modal ver -->
			<div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Datos del servicio: {{ $item->nombre}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">    

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Servicio : </strong>
            {{ $item->nombre}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Costo : </strong>
            {{ $item->costo}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mora : </strong>
            {{ $item->mora}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Horario : </strong>
            {{ $item->horario}}
        </div>
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
				<!-- rermina modal ver -->

				<!-- empiezaa modal editar -->
				<div class="modal fade" id="modal{{ $item->id }}Y{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar o Eliminar</h5>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form class="form-group" method="POST" action="/cobrador/Servicio" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{ $item->nombre }}" class="form-control" required>
  </div>
   
  <div class="form-group">
    <label for="">Costo</label>
    <input type="number" value="{{ $item->costo }}" class="form-control" name="costo" min="0"  maxlength="10" required>
  </div>

  <div class="form-group">
    <label for="">Mora</label>
    <input type="number" value="{{ $item->mora }}" class="form-control" name="mora" min="0"  maxlength="10" required>
  </div>

  <div class="form-group">
    <label for="">Horario</label>
    <input type="text" name="horario" value="{{ $item->mora }}" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="">Imagen:</label>
    <input type="file" name="ima" required>
  </div>
  <button type="submit" class="btn btn-info">Actualizar</button>
</form>
				<!-- termina modal editar -->
        <form class="form-group" method="POST" action="/cobrador/Servicio/{{$item->slug}}">
       				 @csrf
        			 @method('DELETE')
        			 <button type="submit" class="btn btn-danger">Eliminar</button>
    			</form>
						</center>
			     </div>
				 @endforeach
				 <div class="clear"></div>	
			</div>
		  <!-- TERMINA CONTENIDO DE CREAR SERVICIO-->
@endsection
</body>
</html>