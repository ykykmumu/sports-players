@extends('layouts.app')
@section('content')

<div class="profileEdit">
  <header class="header">
    <h3>プロフィール編集</h3>
  </header>
  <div class=" mt-4 pb-5 container">
  <div class="row">
  <table class="table table-striped">
  <form class="form mt-5" method="post" action="/update/{{ $user->id }}" enctype="multipart/form-data">
  @csrf
    <tbody>
      <tr>
        <th>項目</th>
        <th>変更値</th>
      </tr>
      <tr>
        <th>名前</th>
        <td>
        <div class="form-group @error('name')has-error @enderror">
          <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="名前を入力してください">
          @error('name')
              <span class="errorMessage">
                {{ $message }}
              </span>
          @enderror
        </div>
        </td>
      </tr>
      <tr>
        <th>メール</th>
        <td>
        <div class="form-group @error('email')has-error @enderror">
          <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="メールアドレスを入力してください">
          @error('email')
              <span class="errorMessage">
                {{ $message }}
              </span>
          @enderror
        </div>
        </td>
      </tr>
    </tbody>
  </table>
  
  
  <!-- <h3 id="ehead">画像編集</h3>
  
  <table class="table">
    <tbody>
      <tr><th>プロフィール画像</th></tr>
      <tr>
        <label for="file_photo" class="rounded-circle userProfileImg">
          <div class="userProfileImg_description">画像をアップロード</div>
          <i class="fas fa-camera fa-3x"></i>
          <input type="file" id="file_photo" name="image">
        </label>
        <div class="userImgPreview" id="userImgPreview">
          <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
          <p class="userImgPreview_text">画像をアップロード済み</p>
        </div>
        <td>
        <td> 
        </td>
      </tr>
    </tbody>
  </table> -->
      
    
  <button type="submit" class="btn submitBtn">変更する</button>
        
  </form> 
  </div>
  </div>
  @endsection