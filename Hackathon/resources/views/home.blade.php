@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        <li class="list-group-item">
                            <div style="font-size:large">
                                ・当サイトでは登録者同士で面接の練習を行うことが可能です。<br>
                                <span style="background:yellow;">・面接を受ける際にポイントが１消費され、面接官として参加すると３ポイントもらえます。</span><br>
                                ・面接官として参加することは他の就活生のレベル感や様々な気づきが得られるのでぜひ参加してみましょう！
                            </div>
                        </li>
                        <a href="#"><li class="list-group-item">頻出質問リスト</li></a>
                        <a href="#"><li class="list-group-item">面接練習を受ける</li></a>
                        <a href="/hostReservation"><li class="list-group-item">面接官をやる</li></a>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
