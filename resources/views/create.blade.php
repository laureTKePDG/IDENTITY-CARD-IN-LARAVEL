@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">AJOUTER UN NOUVEAU CITOYEN</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom :</label>
				<div class="col-sm-10">
					<input type="text" name="nom" class="form-control" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Prenom :</label>
				<div class="col-sm-10">
					<input type="text" name="prenom" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date de naissance :</label>
				<div class="col-sm-10">
					<input type="text" name="datenaissance" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Lieu de naissance :</label>
				<div class="col-sm-10">
					<input type="text" name="lieunaissance" class="form-control" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Sexe :</label>
				<div class="col-sm-10">
					<select name="student_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Taille :</label>
				<div class="col-sm-10">
					<input type="text" name="taille" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Profession :</label>
				<div class="col-sm-10">
					<input type="text" name="profession" class="form-control" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image :</label>
				<div class="col-sm-10">
					<input type="file" name="student_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
