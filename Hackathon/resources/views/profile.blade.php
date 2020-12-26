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

                    <form action="{{ url('/profile')}}" method="POST">
                    {{ csrf_field() }}
                        <h2>公開情報</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><label for="industry">志望業界</label>
                                <input type="text" name="industry " id="industry" class="form-control w-50" placeholder="例：ソフトウェア、不動産 ..."></li>
                            <li class="list-group-item">卒業年度<br>
                                <select class="custom-select w-50 mt-2">
                                    <option selected>選択してください</option>
                                    <option value="21">21年度卒</option>
                                    <option value="22">22年度卒</option>
                                    <option value="23">23年度卒</option>
                                    <option value="0">既卒</option>
                                    <option value="1">その他</option>
                                </select>
                            </li>
                            <li class="list-group-item"><label for="major">所属学科もしくは所属業界</label>
                                <input type="text" name="major" id="major" class="form-control w-50">
                            </li>
                        </ul>
                        <br>
                        <h2>非公開情報</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><label for="colledge">所属大学</label>
                                <input type="text" name="colledge " id="colledge" class="form-control w-50"></li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <p class="control-label">性別</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1-1" value="1">
                                        <label class="form-check-label" for="inlineRadio1-1">男性</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1-2" value="2">
                                        <label class="form-check-label" for="inlineRadio1-2">女性</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <p class="control-label">専攻</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2-1" value="1">
                                        <label class="form-check-label" for="inlineRadio2-1">理系</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2-2" value="2">
                                        <label class="form-check-label" for="inlineRadio2-2">文系</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"></li>
                        </ul>
                        
                        <br>
                        <h2>面接相手について</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><input type="checkbox" name="check1"> &nbsp;年齢の近い人だけ</li>
                            <li class="list-group-item"><input type="checkbox" name="check2"> &nbsp;同性の人だけ</li>
                            <li class="list-group-item"><input type="checkbox" name="check3"> &nbsp;経験者だけ</li>
                        </ul>

                        <div class="text-right mt-4">
                            <button type="button" class="btn btn-secondary">キャンセル</button>
                            <input type="submit" class="btn btn-primary">変更を保存する</input>
                        </div>
                    </form>
                </div>
            </div>
            <div>aaa</div>
        </div>
    </div>
</div>
@endsection
