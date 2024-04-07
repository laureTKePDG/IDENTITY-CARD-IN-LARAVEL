
@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>DONNEES DES CITOYENS</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Nom</th>
				<th>Prenom</th>
                <th>Datenaissance</th>
				<th>Lieu de naissance</th>
				<th>Sexe</th>
                <th>Taille</th>
				<th>pProfession</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->student_image) }}" width="75" /></td>
						<td>{{ $row->nom}}</td>
						<td>{{ $row->prenom}}</td>
                        <td>{{ $row->datenaissance}}</td>
						<td>{{ $row->lieunaissance}}</td>
						<td>{{ $row->student_gender }}</td>
                        <td>{{ $row->taille}}</td>
						<td>{{ $row->profession}}</td>
						<td>
							<form method="post" action="{{ route('students.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('students.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('students.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">Pas de donnees trouvees</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
