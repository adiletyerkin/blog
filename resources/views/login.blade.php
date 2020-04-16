@extends('layouts.app')

@section('title-block')
	LOG IN PAGE
@endsection

@section('content')
	<h1>Log IN</h1>

	<form action="{{ url('login')}}" method="get">
		@csrf 
		<div class="form-group">
			<label for="email">Адрес e-mail: </label>
			<input type="text" name="email" placeholder="введите email" id="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Пароль: </label>
			<input type="password" name="password" placeholder="пароль" id="password" class="form-control">
		</div>
		<button type="submit" name="button" class="btn btn-success">Войти</button>
	</form>
@endsection
	
