@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>
                       プロフィール編集
                    </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h1 class="text-center"><img src="image/2.png" alt="サンプル画像"></h1>
                    </div>

                    <h2>非公開情報</h2>
                    <ul class="list-group">
                        <li class="list-group-item">・大学もしくは就業先<br>
                        <input type="text" name="colledge " id="colledge" class="form-control w-50"></li>
                        <li class="list-group-item">・性別<br>
                            <input type="radio" name="" id="sex" value=1>男
                            <input type="radio" name="" id="sex" value=2>女
                        </li>
                        <li class="list-group-item">・他</li>
                    </ul>
                    <br>
                    <h2>面接相手について</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><input type="checkbox"> &nbsp;年齢の近い人だけ</li>
                        <li class="list-group-item"><input type="checkbox"> &nbsp;同性の人だけ</li>
                        <li class="list-group-item"><input type="checkbox"> &nbsp;経験者だけ</li>
                    </ul>

                    <div class="text-right mt-4">
                        <button type="button" class="btn btn-secondary">キャンセル</button>
                        <button type="button" class="btn btn-primary">変更を保存する</button>
                    </div>
                    
                </div>
            </div>
            <div>aaa</div>
        </div>
    </div>
</div>
@endsection
