@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">プロフィール編集</div>

                <div class="card-body">
                    <form method="POST" action="/update/{{ $user->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>

                            <div class="col-md-6">
                              <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="名前を入力してください"> 
                              @error('name')
                              <span class="errorMessage">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                            <div class="col-md-6">
                              <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="メールアドレスを入力してください"> 
                              @error('name')
                              <span class="errorMessage">{{ $message }}</span>
                              @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">変更する</button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
