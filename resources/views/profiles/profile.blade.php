@extends('layouts.app')


@section('content') 
<div class="Profile"> 

 <div class="container">

  <div class="Profile_contents">
   <h1 class="h3 loginPage_contents_title">プロフィール</h1>

　 <div class=" mt-4 mb-4 container">
   <div class="row">
   <aside class="col-sm-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
        {{ $user->name }}
        </h3>
      </div>
      <div class="card-body" id="user_image">
          <img alt="" class="" src="">
      </div>
    </div>
    <div class="pt-2">
     
    </div>
  </aside>


  <div class="col-sm-8">
    <ul class="nav nav-tabs nav-justified mb-3">
      <li class="nav-item"><a href="" class="nav-link ">参加履歴</a></li>
      <li class="nav-item"><a href="" class="nav-link ">フォロー<span class="badge badge-secondary">0</span></a></li>
      <li class="nav-item"><a href="" class="nav-link ">フォロワー<span class="badge badge-secondary">0</span></a></li>
      <li class="nav-item"><a href="" class="nav-link ">メッセージ<span class="badge badge-secondary">0</span></a></li>
    </ul>
     <div class="d-inline">プロフィール
     <a class="btn btn-primary btn-sm mb-1" href="/edit/{{$user->id}}">プロフィールの編集</a>
  </div>
<table class="table table-striped">
  <tbody>
    <tr>
      <th>名前</th>
      <td>{{ $user->name }}</td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>{{ $user->email }}</td>
    </tr>
    <!-- <tr>
      <th>参加回数</th>
      <td></td>
    </tr>
    <tr>
      <th>自己紹介</th>
      <td></td>
    </tr> -->
  </tbody>
</table>

 
  </div>
  </div>
</div>

    <div class="text-center">
        <div class="linkToLogout">
            <a href="{{ route('logout') }}">ログアウト</a>
        </div>
    </div>

  </div> 
 </div> 
</div> 
    
    
@endsection


