@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TOP') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h1 class="text-center"><img src="image/1.png" alt="サンプル画像"></h1>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">プロフィール編集</li>
                        <li class="list-group-item">頻出質問リスト</li>
                        <li class="list-group-item">面接練習を行う</li>
                    </ul>
                </div>
            </div>
            <div>aaa</div>
        </div>
    </div>
</div>
@endsection
