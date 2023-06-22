@extends('layout.app')

@section('title')
REGISTER PAGE
@endsection
@section('content')
<h1>REGISTER</h1>
<form action="" method="post">
    @csrf
    <div>
        <label for="username">USERNAME</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="username">USERNAME</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">PASSWORD</label>
        <input type="text" name="password">
    </div>
    <div>
        <button>SUBMIT</button>
    </div>
</form>
@endsection