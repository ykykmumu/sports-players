@extends('layouts.app')


@section('content') 

<div class="card-header">投稿画面</div>
<div class="card-body">
    <form class="upload" id="new_post" action="{{ url('posts') }}" method="POST">
    {{ csrf_field() }}

    <input type="text" name="caption" value="">
    <input type="text" name="place" value="">
    <input type="text" name="cost" value="">
    <input type="submit" name="commit" value="投稿する">


    </form>




</div>












@endsection('content') 