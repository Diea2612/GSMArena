<!-- 
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')	
	<h1>{{ $title }}</h1>
	
	<p>Middleware page !!</p>
		
@endsection
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')

	<h1>{{ $title }}</h1>

	{!! Form::open([
		'route' => 'user.authenticate'
	]) !!}

	<table>		
		<tr>
			<td>{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::email('email', null, ['class' => 'form-control', 'size' => 40, ]) !!}</td>
		</tr>
		<tr>
			<td>{!! Form::label('password', 'Password', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::password('password', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
		</tr>		
		<tr>
			<td></td>
			<td>{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</td>
		</tr>
	</table>		
	
	{!! Form::close() !!}

@endsection
 -->













<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
        @vite('resources/css/account.css')

</head>
<body>
 

<div id="contact"></div>

@vite('resources/js/app.js')

</body>
</html> 



 -->




<!-- @extends('layouts.master')

@section('title', 'Account')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div id="account">
      <h1>Account Management</h1>
        <p>Welcome back! Here you can manage your account settings, view your posts, and see your upvotes.</p> -->
        
        <div>
            <!-- <h2>Your Actions</h2> -->
            <ul>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('upvotes.index') }}">Upvotes</a></li>
                <li><a href="{{ route('account.settings') }}">Account Settings</a></li>
            </ul>
        </div>

       <!--  <h2>Update Your Information</h2>
        <form @submit.prevent="updateUserInfo">
            <div>
                <label for="nickname">Your Nickname</label>
                <input type="text" v-model="nickname" required>
            </div>
            <div>
                <label for="email">Your Email</label>
                <input type="email" v-model="email" required>
            </div>
            <div>
                <label for="password">Your Password</label>
                <input type="password" v-model="password" required>
            </div>
            <div>
                <button type="submit">Update</button>
            </div> -->
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        new Vue({
            el: '#account', 
            data: {
                // nickname: '',
                // email: '',
                // password: ''
            },
            methods: {
                updateUserInfo() {
                    // Handle user information update logic here
                    // console.log('Updated Nickname:', this.nickname);
                    // console.log('Updated Email:', this.email);
                    // console.log('Updated Password:', this.password);
                    // You can make an API call to update the user information
                }
            }
        });
    </script>
@endsection

 -->


 <!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    @vite('resources/css/account.css')
</head>
<body>
    <div id="app">
        <account-component></account-component>
    </div>
    
    @vite('resources/js/app.js')
</body>
</html>

