@extends('layouts.frontend')
@section('contenido')
<section class="container-fluid fondo">
	<div class="container">
		<div class="row inicio">
			<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
				<h2>
					TU HOGAR
				</h2>
				<h3>
					Con más de 10 años de experiencia y la búsqueda continua de dar lo mejor a nuestros amigos, buscamos ser el apoyo más cercano para acompañarte en tu camino hacia el éxito.
				</h3>
				<a href="#contenido" class="bajar center-block">
					<img src="{{url()}}/img/boton-bajar.png" alt="">
				</a>
			</div>
		</div>
		<div id="contenido" class="clearfix"></div>
		<h4>
			Eventos
		</h4>
		<p class="text-center wow fadeIn">
			<img src="{{url()}}/img/eventos.jpg" alt="" class="img-responsive img-rounded">
		</p>
		<h4>
			¡Feliz Cumpleaños!
		</h4>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<p class="text-center">
					Hoy es un gran día porque cumplen años nuestros hermanos, vecinos, amigos, familiares. Les deseamos un feliz cumpleaños a lado de sus seres queridos y de parte de sus amigos de APUPAL:
					<span class="mes">
						<span class="verde">mes</span> <span class="azul">de</span> <span class="plomo">agosto</span> 
					</span>
					Un fuerte abrazo para:
					<br><br>
					Rosales Perez Marcos<br>
					Patricio Echevarria<br>
					Ruiz Sanches Paula
				</p>
			</div>
		</div>
	</div>
</section>
@stop