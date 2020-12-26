@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                       面接官をやる
                    </h2>
                </div>
                <!-- @foreach ($records as $record)  
                    {{$record->id}}
                @endforeach -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h1 class="text-center"><img src="image/4.jpg" alt="サンプル画像"></h1>
                    </div>
                    <div>
                        <table class="table table-striped table-hover">
                            <thead class="">
                                <tr>
                                    <th>年月日</th>
                                    <th>時間</th>
                                    <th>卒業年度</th>
                                    <th>志望業界</th>
                                    <th>申し込む</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                                <tr>
                                    <td>{{$record->date}}</td>
                                    <td>{{$record->time}}</td>
                                    <td>{{$record->time}}</td>
                                    <td>{{$record->time}}</td>
                                    <td><input type="button" class="btn btn-primary" style="width:5rem;" value="{{$record -> id}}"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
