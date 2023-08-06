@extends('layouts.top')

@section('title', '駅ルーレット')

@section('content')

<h1>駅ルーレット</h1>

{{ Form::open(['route'=>['station'],'method'=>'get']) }}
@csrf

<table>
    <tr>
        <th>
            <label class="selectbox">
                <select name="pref">
                    @foreach($pref_list as $key => $pref)
                    <option value="{{$key}}" @if($session['pref']==$key) selected @endif>{{$pref}}</option>
                    @endforeach
                </select>
            </label>
        </th>
    </tr>
    <tr>
        <th>
            @if(!empty($session['line']))

            {{ Form::text('line',$session['line'],['class' => 'textbox','maxlength' => '15'])}}

            @else

            {{ Form::text('line',null,['placeholder' => '路線名','class' => 'textbox','maxlength' => '15'])}}
            @endif
        </th>
    </tr>
    <tr>
        <th>
            {{Form::submit('駅出力',['class' => 'btn btn--orange btn--radius'])}}
        </th>
    </tr>
</table>

{{Form::close()}}

@if(!empty($stations -> station_name))
<p class="line_name">{{$stations -> line_name}}</p>
<p class="station_name"><strong>{{$stations -> station_name}}駅</strong></p>
@else
<p class="nothing_result">検索に一致する駅がありません</p>
@endif

@endsection