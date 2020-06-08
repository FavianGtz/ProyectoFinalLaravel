<!DOCTYPE HTML>
<html>
<head>
<title>GYM</title>
<link href="../plantilla/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../plantilla/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script src="../plantilla/js/jquery.min.js"></script>

<!-- grid-slider -->
<script type="text/javascript" src="../plantilla/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="../plantilla/js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="../plantilla/js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->



</head>
<body>

@if (Route::has('login'))
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 <div class="logo">
			<a href="/"><img src="../plantilla/images/logo.png" alt=""/></a>
		 </div>
		
		 <div class="h_menu4"><!-- start h_menu4 -->
		
			 <ul class="nav">
			 @auth
			   <li ><a href="{{ url('/home') }}">Inicio</a></li>
			   @else
			   <li> <a href="{{ route('login') }}">Iniciar sesión</a></li>
			 </ul>
			 @if (Route::has('register'))
			  <script type="text/javascript" src="../plantilla/js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->	


	 <div class="main">
	 	 <div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="../plantilla/images/pic.png" class="img-responsive" alt=""/> 
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h3>Inicia el cambio ¡Ahora!</h3>
				   <p>BIENVENIDO A GYMTEC</p>
				   <a href="{{ route('register') }}" class="btn btn-info" >¡Sucríbete!</a>
				   @endif
                    @endauth 
				 </div>
				 
            </div>			
		 </div>
		 @endif	
		<!-- end content-top -->

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
                      </div><center>
					  <i><b><p>Para más inf. ¡Sucríbete, por favor!</p></i></b></center>
			     </div>
				 @endforeach
				 <div class="clear"></div>		 
			</div>
		  <!-- TERMINACONTENIDO DE SERVICIO-->
		
				  
		
		
   
      <div class="row about">
		 <div class="col-md-8">
		     	 <h3 class="m_2">Galería</h3>
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
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
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
</body>
</html>