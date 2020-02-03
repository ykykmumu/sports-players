@extends('layouts.app')

@section('content')



<div class="containter text-center">
    <h1>{{ $id->name }}さんのページ</h1>
</div>


<div class="container">
  <div class="container_title">
  
      <h1 class="text-center">{{ $sports->sport }}</h1>
      
  </div>

<div class="container m-auto">
  <div class="">
    <div class="card m-auto" style="max-width: 700px; max-height: 500px;">
      <div class="row">
        <div class="col-md-4">
          <img src="http://placehold.jp/150x150.png" class="card-img rounded-circle ml-2" alt="">
          <div class="card-text text-center">{{ $id->introduce }}</div>
        </div>
        <div class="col-md-7 offset-md-1">
          <div class="card-header text-center">キャプション</div>
            <div class="row justify-content-around">
                <div class="card-text">場所</div>
                <div class="card-text">値段</div>
            </div> 
            <br>
            <div class="card-header text-left">
                コメント
            </div> 
            <div class="">
                <div class="card-text">＠＠の練習相手を探しています。初心者から大歓迎です。ここにどう変数渡せばいいのか分からない。</div>
            </div>
        </div>
      </div>
    
        @if(Auth::id() == $id->id)
            <div class="text-center">
            <a class="btn btn-primary btn-sm mb-1" href="/home/{sport}/edit/{id}">投稿編集</a>
            </div>
            <div class="text-center">
            <form action="/home/{sport}/delete/{id}" method="DELETE">
            {{ csrf_field() }}
                <div class="destroy">
                    <button type="submit" class="btn btn-danger">投稿削除</a>
                    ここ削除もaタグでイケるのか、それともmethodのためにformじゃないとダメ？
                </div>
            </form>
            </div>
        @else
            <div class="text-center">
            <a class="btn btn-primary btn-sm mb-1" href="">参加リクエスト</a>
            </div>
        @endif 
    </div>   
  </div>
</div>


@endsection