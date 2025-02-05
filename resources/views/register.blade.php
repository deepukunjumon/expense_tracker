@extends('layout')
@section('title', 'Expense Tracker | Register')
@section('content')
<main class="main">
	<div class="container">
		<section class="wrapper">
			<div class="heading">
				<h1 class="text text-large">Register</h1>
				<p class="text text-normal">Already have an account? <span><a href="{{ route('login') }}" class="text text-links">Login</a></span>
				</p>
			</div>
			<form action="{{ route('register.post') }}" method="POST" name="register" class="form">
				@csrf
                <div class="input-control">
                    <label for="name" class="input-label" hidden>Full Name</label>
                    <input type="text" name="name" id="name" class="input-field" placeholder="Full Name">
                </div>
                <div class="input-control">
                    <label for="mobile" class="input-label" hidden>Mobile Number</label>
                    <input type="text" name="mobile" id="mobile" class="input-field" placeholder="Mobile Number">
                </div>
				<div class="input-control">
					<label for="email" class="input-label" hidden>Email Address</label>
					<input type="email" name="email" id="email" class="input-field" placeholder="Email Address">
				</div>
				<div class="input-control">
					<label for="password" class="input-label" hidden>Password</label>
					<input type="password" name="password" id="password" class="input-field" placeholder="Password">
				</div>
				<div class="input-control">
					<input type="submit" name="submit" class="input-submit register" value="Register">
				</div>
			</form>
		</section>
	</div>
</main>
@endsection