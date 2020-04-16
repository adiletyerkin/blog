@extends('layouts.app')

@section('title-block')
	Registration PAGE
@endsection

@section('content')
	<h1>Registration</h1>

	<form action="{{ route('contaact-form')}}" method="post">
		@csrf 
		<div class="form-group">
			<label for="name">Имя: </label>
			<input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="surname">Фамилия: </label>
			<input type="text" name="surname" placeholder="введите фамилию" id="surname" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Адрес e-mail: </label>
			<input type="text" name="email" placeholder="введите email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="phone">Телефон: </label>
			<input type="text" name="phone" placeholder="введите телефон" id="phone" class="form-control">
		</div>
		<button type="submit" name="button" class="btn btn-success">Регистрация</button>
	</form>
@endsection
	
