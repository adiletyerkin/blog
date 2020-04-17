@extends('layouts.app')

@section('title-block')
	List of users
@endsection

@section('content')

	<h1>List of users</h1>

<div class="container mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($registrationData as $dat)
    <tr>
      <th scope="row">{{ $dat -> id}}</th>
      <td>{{ $dat -> name}}</td>
      <td>{{ $dat -> surname}}</td>
      <td>{{ $dat -> email}}</td>
      <td>{{ $dat -> phone}}</td>
      <td>Edir or Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>



@endsection
	
