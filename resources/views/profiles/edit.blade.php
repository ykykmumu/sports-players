@extends('layouts.app')

@section('content')



    <div class="profileEdit">
      <header class="header">
      <h3>プロフィール編集</h3>
      </header>
    </div>

  
  <form method="POST" action= "/update/{{ $user->id }}" >
    @csrf

    <table class="table table-striped">
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

    <div class="text-center">
    <button type="submit" class="btn submitBtn">変更する</button>
    </div>
    
  </form>
