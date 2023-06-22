@extends('layout.app')

@section('title')
LOGIN PAGE
@endsection
@section('content')
<h1>LOGIN</h1>
<h2>PLUS 20 SA ACTIVITY</h2>
<form action="{{route('login.submit')}}" method="post">
    @csrf
    <div>
        <label for="username">USERNAME</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">PASSWORD</label>
        <input type="password" name="password">
    </div>
    <div>
        <button>SUBMIT</button>
    </div>
</form>
@endsection