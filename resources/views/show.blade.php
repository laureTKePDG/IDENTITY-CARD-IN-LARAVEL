@extends('master')

@section('content')
<style>
			
			img {
				position: absolue;
	            top: 0.005px;
	            left: 700px;
			}
		</style>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b> Detailles Sur Le citoyen</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.index') }}" class="btn btn-primary btn-sm float-end">Voire tous</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		
        <div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>Nom :</b></label>
				<div class="col-sm-10">
                    {{ $student->nom}}
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>Prenom :</b></label>
				<div class="col-sm-10">
                    {{ $student->prenom}}
				</div>
			</div>
		
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>Date de naissance :</b></label>
				<div class="col-sm-10">
                    {{ $student->datenaissance}}
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>Lieu de naissance :</b></label>
				<div class="col-sm-10">
                    {{  $student->lieunaissance}}
					
				</div>
			</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Sexe :</b></label>
			<div class="col-sm-10">
				{{ $student->student_gender }}
			</div>
		</div>

        <div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>Taille :</b></label>
				<div class="col-sm-10">
                    {{ $student->taille }}
					
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>Profession :</b></label>
				<div class="col-sm-10">
                 {{ $student->profession }}
					
				</div>
			</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Image :</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $student->student_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
