<!DOCTYPE html>
<html>
<head>
	<title>Url Shortener</title>



	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	@yield('headers')
</head>
	<body>

		<div class="container" id="vue-app">

			<div class="jumbotron">
			  <h1>A hello world project in laravel</h1>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>

			<div class="alert alert-success" role="alert" v-if="urlGenerated">Url generated Successfully</div>
			<div class="alert alert-error" role="alert" v-if="errorGenerating">There was an error generating url</div>

			<div class="form-group">
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="actualUrl" placeholder="You Url" v-model='actualUrl'>
			    </div>

			    <button class="btn btn-primary" @click.prevent="generateUrl()"> Shorten!</button>
			</div>

			<div class="panel panel-default" v-if="urlGenerated">
			  <!-- Default panel contents -->
		  	<div class="panel-heading">Panel heading</div>

			  <!-- Table -->
			  <table class="table">
			   		<tr>
			   			<td>Short Link</td>
			   			<td> <input type="text" class="form-control" v-model="shortLink"> </td>
			   		</tr>
			  </table>
			</div>

			
			@yield('content')

		</div>

		<script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="{{ URL::asset('js/app.js') }}"></script>

		@yield('footer')
	</body>
</html>