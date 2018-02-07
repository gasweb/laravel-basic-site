@extends('layouts.app')

@section('content')
<h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut, cumque delectus doloremque facere ipsa iure maxime nostrum numquam perferendis, rerum vero? Consectetur cupiditate error illum in nam numquam velit.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection