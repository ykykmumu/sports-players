@extends('layouts.app')


@section('content') 

<div class="containter text-center">
    <h1>プレイヤーを探そう</h1>
    <form method="GET" class="form-group" action="/home/basketball" target="">
      <input type="text" name="keyword">
      <input type="submit" value="検索する">
    </form>
</div>

<div class="container">
  <div class="row justify-content-left">
  @foreach ($sports as $sport)
  <div class="card col-md-6 my-sm-5" style="max-width: 500px;">
    <div class="card">
      <div class="col-md-4">
        <img src="http://placehold.jp/150x150.png" class="card-img rounded-circle" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-header">{{ $sport->caption }}</div>
        <div class="card-body">{{ $sport->place }}</div>
        <div class="card-text">{{ $sport->cost }}</div>
      </div>
    </div>
  </div>
  @endforeach
  </div>
</div>

<div class="row justify-content-center">
{{ $sports->links() }}
</div>

@endsection

