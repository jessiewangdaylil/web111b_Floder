<h1>建立表單頁面</h1>
{!! Form::open(['url'=>'/1130/posts','method'=>'POST','files'=>true]) !!}
<!--檔案輸入項，記得表單頭要加入files=>true -->
{!! Form::file('pic') !!}<br>

<!-- 輸入項標籤-->
  {!! Form::label('title', '標題') !!}

<!--單行文字輸入項-->
  {!! Form::text('title',null,['style'=> 'color:blue;']) !!}<br>

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<!--radio輸入項-->
  {!! Form::label('開關', '開關') !!}<br>
    {!! Form::radio('開關',1,True ) !!}
    {!! Form::radio('開關',0,False ) !!}<br>


<!--多行文字輸入項-->
  {!! Form::label('content', '意見內容') !!}<br>
{!! Form::textarea('content', '限50字',['cols'=>80,'rows'=>10]) !!}<br>
@error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror




<!--checkbox-->
你的興趣?<br>
{!! Form::label('interests[]', '逛街') !!}
{!! Form::checkbox('interests[]','shoopping', false) !!}<br>
{!! Form::label('interests[]', '運動') !!}
{!! Form::checkbox('interests[]','workout', false) !!}<br>
{!! Form::label('interests[]', '看電影') !!}
{!! Form::checkbox('interests[]','movie', false) !!}<br>

<!--下拉輸入項-->
你的生日
{!! Form::select('birthday_m', $months,null, ['placeholder' => '請選擇']) !!}月

<!--{!! Form::select('birthday_m', $months,null) !!}月-->
<!--數字輸入項-->
{!! Form::number('birthday_d', 1, ['min'=>1 , 'max'=>31]) !!}日<br>

<!--密碼輸入項-->
密碼
{!! Form::password('password') !!}<br>

<!--Email輸入項-->
信箱
{!! Form::email('email','example@123.com') !!}<br>

<!--日期輸入項-->
截止日期
{!! Form::date('dateline') !!}<br>











<!--提交按鈕-->
{!! Form::submit('送出', []) !!}

<!--重置按鈕-->
{!! Form::reset('重置', []) !!}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif




{!! Form::close() !!}
