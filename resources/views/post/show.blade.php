@extends('layouts.app')


@section('content') 


<div class="containter text-center">
    <h1>プレイヤーを探そう</h1>
    
    <form method="GET" class="form-group" action="/home/{sport}" target="">
      <input type="text" name="keyword">
      <input type="submit" value="検索する">
    </form>
</div>

<div class="container row m-auto">
@foreach ($sports as $sport)
  @if ($loop->first)
    <div class="container_title col-12">
      <h1 class="text-center">{{ $sport->sport }}</h1>
    </div>
  @endif
  <div class="col-6">
    <div class="row justify-content-around pb-5">
      <div class="card col-md-10 my-sm-2" style="max-width: 600px;">
        <div class="row">
          <div class="col-md-4">
            <a href="{{ route('profile',['id'=>$sport->user->id]) }}"><img src="http://placehold.jp/150x150.png" class="card-img rounded-circle" alt=""></a>
            <div class="card-text text-center">{{$sport->user->name}}</div>
          </div>
          <div class="col-md-7 offset-md-1">
            <div class="card-header text-center"><a href="/home/{{ $sport->sport }}/person/{{$sport->user->id}}">{{ $sport->caption }}</a></div>
              <div class="row justify-content-around">
                <div class="card-text"><a href="/home/{{ $sport->sport }}/person/{{$sport->user->id}}">{{ $sport->place }}</a></div>
                <div class="card-text"><a href="/home/{{ $sport->sport }}/person/{{$sport->user->id}}">{{ $sport->cost }}円</a></div>
              </div>
            <div class="text-left">
                自己紹介
            </div> 
            <div class="">
                <div class="card-text">{{$sport->user->introduce}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>


<div class="row justify-content-center">
{{ $sports->links() }}
</div>

<a href="/home" class="row justify-content-center">戻る</a>

@endsection


