@extends('layouts.app')


@section('content') 

<div class="containter text-center">
    <h1>プレイヤーを探そう</h1>
    <form method="POST" class="form-group" action="" target="">
      <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : '' }}">
      <input type="submit" value="検索する">
    </form>
</div>

<div class="container row justify-content-between mx-auto">
@foreach ($sports as $sport)
<div class="card col-md-6 my-sm-5" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="http://placehold.jp/150x150.png" class="card-img rounded-circle" alt="">
      
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $sport->caption }}</h5>
        <p class="card-text">{{ $sport->place }}</p>
        <p class="card-text">{{ $sport->cost }}</p>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>

<div class="paginate text-center">
{{ $sports->links('pagination::bootstrap-4') }}
</div>

@endsection

