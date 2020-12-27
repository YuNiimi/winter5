@component('mail::message')
#　面接日程とzoomURLが確定しました

面接開始時間　⇒
@php
    echo $data["meeting"]["start_time"];
@endphp


@if ($data["host"]==1)
    面接官として質問する事を決めておきましょう
    @component('mail::button', ['url' => $data["meeting"]["start_url"]])
        meetingを開始する
    @endcomponent
@else
    よくある質問に対する答えを考えておきましょう
    @component('mail::button', ['url' => $data["meeting"]["join_url"]])
        meetingに参加する
    @endcomponent
@endif

Thanks, <br>
{{ config('app.name') }}

@endcomponent
