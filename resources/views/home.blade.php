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
        <center><i><h3>Servicios disponibles:</h3></i></center>
         <!-- INICIA CONTENIDO DE SERVICIO -->
		 <div class="container">
		    <div class="row content-middle">
			  @foreach ($services as $item) 
			 
	 	    	<div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live"> <span class="m_1">{{ $item->nombre }}</span></li>
	 	    			<li class="room"></li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="../plantilla/images/{{ $item->imagen }}" class="img-responsive" alt=""/>
                      </div><center><br>
					  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal{{ $item->id }}">
                      Información
                    </button>
					

					<form class="btn-group" method="POST" action="/suscriptor/ServicioSus" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="usuario" class="form-control" id="id" value="{{auth()->id()}}">
               <input type="hidden" name="servicio" class="form-control" id="id" value="{{ $item->id }}">

               <button type="submit" class="btn btn-success">¡Suscríbete!</button>
          </form>



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

				 </div>
				 @endforeach
				 <div class="clear"></div>		 
			</div>
		  <!-- TERMINACONTENIDO DE SERVICIO-->
         

          <!-- INICIO GALERIA -->
          <div class="row about">
		 <div class="col-md-8">
		     	 <h3 class="m_2">Galeria</h3>
		     	 <div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>	    
		   </div>
           <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   <div class="col-md-4">
		   	 <h3 class="m_2">Patrocinadores</h3>
			  <ul class="partner">
			  	<li><img src="../plantilla/images/p6.png" alt=""/></li>
			  	<li><img src="../plantilla/images/p5.png" alt=""/></li>
			  	<li><img src="../plantilla/images/p4.png" alt=""/></li>
			  	<li><img src="../plantilla/images/p3.png" alt=""/></li>
			  	<li><img src="../plantilla/images/p2.png" alt=""/></li>
			  	<li><img src="../plantilla/images/p1.png" alt=""/></li>
			  	 <div class="clear"></div>
			  </ul>
		   </div>
	       <div class="clear"></div>
	      </div>
	     </div>
		</div>
          <!-- TERMINA GALERIA -->
@endsection
