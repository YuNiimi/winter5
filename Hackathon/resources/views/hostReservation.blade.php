@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        面接官をやる！
                    </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h1 class="text-center"><img style="width:40%" src="image/4.jpg" alt="サンプル画像"></h1>
                    <div class="card">
                        <b class="card-header" style="color:red; font-size:1.5rem">※注意事項</b>
                        <div class="card-body">
                            <ul class="list-group" style="font-size:1.2rem; font-weight:bold">
                                <li class="list-group-item">進め方と質問を決めてから申し込みましょう =＞<a href="#">質問リスト</a></li>
                                <li class="list-group-item">無断欠席した場合は－５ポイントとなります</li>
                                <li class="list-group-item">申し込み後メールにてzoomのURLが送信されるのでご確認ください。</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    
                    <form action="{{ url('/hostReserved')}}" name="form" method="POST">
                    {{ csrf_field() }}
                        <div>
                            <table class="table table-striped table-hover" style="table-layout:fixed;">
                                <thead class="">
                                    <tr>
                                        <th style="width:25%">面談日</th>
                                        <th style="width:25%;">時間</th>
                                        <th style="width:25%;">卒業年度</th>
                                        <th style="width:25%;">志望業界</th>
                                        <th style="width:25%;">申し込む</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($records as $record)
                                    <tr>
                                        <td>{{$record->date}}</td>
                                        <td>{{$record->time}} 時～</td>
                                        <td>{{$record->graduation}}</td>
                                        <td>{{$record->industry}}</td>
                                        <td><input type="submit" class="btn btn-primary" style="width:5rem;" onclick="form.key.value='{{$record -> id}}'" value="決定"></td>
                                        <!-- <td><input type="submit" class="btn btn-primary" style="width:5rem;" onclick="form.key.value=''" value="{{$record -> id}}"></td> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right mt-4 mb-4 mr-4">
                            <button type="button" class="btn btn-secondary" onclick="location.href='/home'">キャンセル</button>
                        </div>
                        <!-- keyにrecordのidを格納して送ります -->
                        <input name="key" type="hidden" value="" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
