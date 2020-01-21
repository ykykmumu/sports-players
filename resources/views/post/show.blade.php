@extends('layouts.app')


@section('content') 

<div class="containter text-center">
    <h1>プレイヤーを探そう</h1>
    <form method="POST" action="" target="">
        <input class="textbox" type="text" name="search" placeholder="プレイヤーを探す">
        <input type="button" value="検索する">
    </form>
</div>


一つの投稿しか反映されない
ページネーション
tinkerで作った物しか反映されていない

<ul class="list">
                <li class="list_content">
                    @foreach ($sports as $sport)
                    <div class="img"><figure><img src="http://placehold.jp/150x150.png" alt=""></figure></div>
                    <div class="txt col-sm-10">
                        <h4>{{ $sport->caption }}</h4>
                        <h4>{{ $sport->place }}</h4>
                        <h4>{{ $sport->cost }}</h4>
                     @endforeach
                    </div>
                </li>

                <!-- <li class="list_content">
                
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
                </li> -->
</ul>


@endsection

