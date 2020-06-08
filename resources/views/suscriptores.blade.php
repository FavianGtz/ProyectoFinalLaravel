@extends('layouts.app')
@section('content')  


<center><h2><b><i><p style="color:#000000";>LISTA DE SUSCRIPTORES&nbsp; &nbsp; &nbsp; <a class="btn btn-info" data-toggle="modal" data-target="#modalForm">Mensaje difusión</a></center>

<table>

    <thead>
        <tr>
            <th>Último mes</th>
            <th>Nombre</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    @foreach ($select as $resp)
    <tr>
    <td><div class="control">
  <label class="radio">
    <input type="radio" >
    Pendiente
  </label>  <label class="radio">
    <input type="radio"  checked>
    Pagado
  </label>
</div></td>
        <td>{{ $resp->name }}</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana{{ $resp->id }}">
       Historial de pagos
      </button></td>
<!-- MODAL START HISTORIAL DE PAGOS -->
<div class="modal fade" id="ventana{{ $resp->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">HIstorial de pagos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      @foreach ($select1 as $resp1 ) 
                @if ($resp->id == $resp1->user_id)
                <center>
                  Nombre del servicio: {{ $resp1->nombre }}<br>
                  Costo del pago realizado: {{ $resp1->costo }}<br>
                  Fecha del pago realizado: {{ $resp1->created_at }}<br>
                </center>
                  @endif
              @endforeach
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <!-- MODAL END HISTORIAL DE PAGOS -->
<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana{{ $resp->id }}U{{ $resp->id }}">
  Historial de servicios
</button></td>




<!-- MODAL START HISTORIAL DE SERVICIO -->
<div class="modal fade" id="ventana{{ $resp->id }}U{{ $resp->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Historila de servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @foreach ($select2 as $resp2)
                @if ($resp->id == $resp2->user_id)
                <center>
                Nombre del servicio contratado: {{ $resp2->nombre }}<br>
                Fecha cuando se suscribió: {{ $resp2->created_at }}<br><br>
                </center>
                

                @endif
              @endforeach
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <!-- MODAL END HISTORIAL DE SERVCIO -->
        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventana{{ $resp->id }}U{{ $resp->id }}U{{ $resp->id }}">
          Infonformación
        </button></td>

<!-- MODAL START INFORMACION -->
<div class="modal fade" id="ventana{{ $resp->id }}U{{ $resp->id }}U{{ $resp->id  }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Información del cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center>
                  Nombre: {{ $resp->name }}<br>
                  Dirección: {{ $resp->direccion }}<br>
                  Rfc: {{ $resp->rfc }}<br>
                  Profesion: {{ $resp->profesion }}<br>
                  Celular: {{ $resp->celular }}<br>
                  Correo Electrónico: {{ $resp->email }}<br>
      </center>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <!-- MODAL END INFORMACION -->

<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalmsjind">
  Mensaje
</button></td>
<!-- INICIO MODAL PARA MENSAJE indi -->
<div class="modal fade" id="modalmsjind" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLongTitle">MENSAJE INDIVIDUAL</h5>
		    </div>  
            <!-- Modal Body -->
            <div class="modal-body">  
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Asunto</label>
                        <input type="text" class="form-control" id="inputName" />
                    </div> 
                </form>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Mensaje</label>
                        <textarea  rows="2" cols="47">
                        
                        </textarea>
                    </div> 
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a class="btn btn-info" href="/cobrador/verSusciptores">Enviar</a>
            </div>
        </div>
    </div>
</div>
            <!-- FINZALIZA MODAL PARA MENSAJE ind -->
    </tr> 
    @endforeach
  </table>
  <br>
    
  <!-- INICIO MODAL PARA MENSAJE DIFUSION -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLongTitle">MENSAJE DIFUSIÓN</h5>
		    </div>  
            <!-- Modal Body -->
            <div class="modal-body">  
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Asunto</label>
                        <input type="text" class="form-control" id="inputName" />
                    </div> 
                </form>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Mensaje</label>
                        <textarea  rows="2" cols="47">
                        
                        </textarea>
                    </div> 
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a class="btn btn-info" href="/cobrador/verSusciptores">Enviar</a>
            </div>
        </div>
    </div>
</div>
            <!-- FINZALIZA MODAL PARA MENSAJE DIFUSION -->        
  <center><a href="/" class="btn btn-danger" >Cerrar</a></center>
@endsection