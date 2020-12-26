@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>
                       希望日時を登録する。
                    </h2>
                </div>

                <form action="{{ url('/guestReserved')}}" method="POST">
                {{ csrf_field() }}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <h1 class="text-center"><img src="image/2.png" alt="サンプル画像"><br>
                            参加したい日時を選びましょう！</h1>
                        </div>
                            <div class="text-right">※面接は一回当たり３０分以内で終了します</div>
                        <div>
                            <span class="my-label mr-4">日付の選択</span>
                            <div class="date-label">
                                <input type="date" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="my-label">参加可能な時間</span>
                            <div class="container mt-2">
                                <div class="row my-label">
                                    <div class="col-sm">
                                        <input class="time-check" type="checkbox" name="time" value="9">9:00～
                                        <br><input class="time-check" type="checkbox" name="time" value="10">10:00～
                                        <br><input class="time-check" type="checkbox" name="time" value="11">11:00～
                                    </div>
                                    <div class="col-sm">
                                        <input class="time-check" type="checkbox" name="time" value="14">14:00～
                                        <br><input class="time-check" type="checkbox" name="time" value="15">15:00～
                                        <br><input class="time-check" type="checkbox" name="time" value="16">16:00～
                                    </div>
                                    <div class="col-sm">
                                        <input class="time-check" type="checkbox" name="time" value="18">18:00～
                                        <br><input class="time-check" type="checkbox" name="time" value="19">19:00～
                                        <br><input class="time-check" type="checkbox" name="time" value="20">20:00～
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-4 mb-4 mr-4">
                            <button type="button" class="btn btn-secondary" onclick="location.href='/home'">キャンセル</button>
                            <input type="submit" class="btn btn-primary" value="変更を保存する"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
