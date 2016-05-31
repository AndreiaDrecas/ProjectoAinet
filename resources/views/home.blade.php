@extends('master')

@section('content')
<!-- Header -->
<a name="about"></a>
<div class="intro-header">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="intro-message">
					<h1>Urban Farmers' Market</h1>

				</div>
			</div>
		</div>

	</div>
</div>
<br>
<div class="col-lg-5">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Products Available</h3>
	</div>
	<div class="panel-body">
		<div class="btn-group">
			<button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Location <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				...
			</ul>
		</div>
	</div>
</div>
</div>

@endsection
