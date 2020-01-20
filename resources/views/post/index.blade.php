@extends('layouts.app')


@section('content') 

<div class="containter text-center">
    <h1>プレイヤーを探そう</h1>
    <form method="POST" action="" target="">
        <input class="textbox" type="text" name="search" placeholder="プレイヤーを探す">
        <input type="button" value="検索する">
    </form>
</div>

<div class="container">
    @foreach ($posts as $post)
        <h4>{{ $posts->caption }}</h4>
        <h4>{{ $posts->place }}</h4>
        <h4>{{ $posts->cost }}</h4>
    @endforeach
</div>

一つの投稿しか反映されない
ページネーション
tinkerで作った物しか反映されていない

<ul class="list">
                <li class="list_content">
                    <div class="img"><figure><img src="http://placehold.jp/150x150.png" alt=""></figure></div>
                    <div class="txt col-sm-10">
                    @foreach ($posts as $post)
                        <h4>{{ $posts->caption }}</h4>
                        <h4>{{ $posts->place }}</h4>
                        <h4>{{ $posts->cost }}</h4>
                     @endforeach
                    </div>
                </li>

                <li class="list_content">
                <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
                </div>
                </li>

                <li class="list_content">
                    <div class="img"><figure><img src="http://placehold.jp/150x150.png" alt=""></figure></div>
                    <div class="txt col-sm-10">
                        <p class="date">投稿日時</p>
                        <h4>キャプション</h4>
                        <h4>場所</h4>
                        <h4>値段</h4>
                    </div>
                </li>

                <li class="list_content">
                    <div class="img"><figure><img src="http://placehold.jp/150x150.png" alt=""></figure></div>
                    <div class="txt col-sm-10">
                        <p class="date">投稿日時</p>
                        <h4>キャプション</h4>
                        <h4>場所</h4>
                        <h4>値段</h4>
                    </div>
                </li>
</ul>


@endsection

