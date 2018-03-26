
@extends('layout.default', ['title' =>'about'])


@section('content')

<div class="container">
	<h2>What is {{config('app.name')}}?</h2>
	<p>Laracarte est un clone de l'application <a href="https:https://github.com/Couldevlop/laracartet-tdn">laracate</a> </p>

	<div class="row" >
		<div calss="col-md-6">
		<p class="alert alert-warning">
			<strong><i class="fa fa-exclamation-triangle"></i> C'est un très bon projet que j'ai réalisé un peu un peu</strong> 
		</p>	

		</div>
	</div>
	<p>Voici tout le code source de notre application developpée avec  <a href="#">laravel</a> </p>
 <hr>
 <h2>Qu'est ce que s'est que Laramap?</h2>
 <p>Rien que l'eau à boire? Laravel est très simple je vous assur</p>
 <hr>

 <h2>Comment avez-vous aimé Laravel?</h2>

 <ul>
 	<li>Laravel</li>
 	<li>Bootstrap</li>
 	<li>Amazone s3</li>
 	<li>Madrill</li>
 	<li>Gogole Map</li>
 	<li>Gravatar</li>
 	<li>Antony martin's</li>
 	<li>Michel Fontin's</li>
 </ul>
</div>

@stop