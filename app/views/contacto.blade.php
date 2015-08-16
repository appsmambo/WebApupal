@extends('layouts.frontend')
@section('contenido')
<section class="container-fluid fondo">
	<div class="container">
		<div class="row transparencia">
			<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
				<h2>
					CONTACTO
				</h2>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<p>
					Av. Las Palmeras 3943, Los Olivos, Lima&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: contacto@apupal.com
				</p>
				<form class="form-horizontal" name="contacto" action="{{url()}}/contacto" method="post" id="contacto">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control inputbox" id="nombre" name="nombre" placeholder="Nombres y Apellidos" required maxlength="100">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<input type="tel" class="form-control inputbox" id="telefono" name="tlefono" placeholder="Teléfono" required maxlength="50">
						</div>
						<div class="col-sm-6">
							<input type="email" class="form-control inputbox" id="email" name="email" placeholder="E-mail" required maxlength="100">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea name="mensaje" id="mensaje" class="form-control inputbox" placeholder="Mensaje" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="image" src="{{url()}}/img/boton-enviar.jpg" title="Enviar" class="pull-right">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<div id="map"></div>
<script type="text/javascript">
	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -11.988813, lng: -77.073256},
			zoom: 17,
			disableDefaultUI: true
		});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRumzBz4SBZiIQyaph048lUwfhLdVBElY&callback=initMap"></script>
@stop