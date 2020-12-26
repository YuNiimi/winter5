@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        申し込みが完了しました！
                    </h2>
                </div>
                <!-- {{$start_url}} -->
                <!-- {{$start_time}} -->
                <form action="{{ url('/guestReserved')}}" method="POST">
                {{ csrf_field() }}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <h1 class="text-center"><img src="image/3.png" alt="サンプル画像"><br>
                            当日使用するzoomのURLがメールで送信されたのでご確認ください</h1>
                        </div>
                        <h3 class="text-center" style="background-color:yellow; color:red">※無断での欠席は－５ポイントとなります</h3>
                        <div class="card">
                            <div class="card-header">ミーティング情報</div>
                            <div class="card-body">
                                <div>
                                    参加URL<br>
                                    <a href="">{{$start_url}}</a>
                                </div>
                                <div>
                                    模擬面接開始日時：
                                    {{ $start_time }}
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mt-4">
                            <span class="my-labelmr-4">日付の選択</span>
                            <div class="date-label">
                                <input type="date" name="date" required />
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="my-label">参加可能な時間</span>
                            <div class="container mt-2">
                                <div class="row my-label">
                                    <div class="col-sm">
                                        <input class="time-check" type="checkbox" name="time[]" value="9">9:00～
                                        <br><input class="time-check" type="checkbox" name="time[]" value="10">10:00～
                                        <br><input class="time-check" type="checkbox" name="time[]" value="11">11:00～
                                    </div>
                                    <div class="col-sm">
                                        <input class="time-check" type="checkbox" name="time[]" value="14">14:00～
                                        <br><input class="time-check" type="checkbox" name="time[]" value="15">15:00～
                                        <br><input class="time-check" type="checkbox" name="time[]" value="16">16:00～
                                    </div>
                                    <div class="col-sm">
                                        <input class="time-check" type="checkbox" name="time[]" value="18">18:00～
                                        <br><input class="time-check" type="checkbox" name="time[]" value="19">19:00～
                                        <br><input class="time-check" type="checkbox" name="time[]" value="20">20:00～
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="text-right mt-4 mb-4 mr-4">
                            <button type="button" class="btn btn-secondary" onclick="location.href='/home'">TOPページへ戻る</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
