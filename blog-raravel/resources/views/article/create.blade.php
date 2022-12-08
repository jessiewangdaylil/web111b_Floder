<h1>建立表單頁面</h1>
{!! Form::open(['url'=>'/1202/posts','method'=>'POST','files'=>true]) !!}

<!-- 輸入項標籤-->
  {!! Form::label('subject', 'subject') !!}<br>
  <br>
@error('subject')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

分類選單<br>
<!--下拉輸入項-->
{!! Form::select('category',$category, ['placeholder' => '請選擇']) !!}<br>
<br>


<!--多行文字輸入項-->
  {!! Form::label('desc', '內文') !!}<br>
{!! Form::textarea('content', '限4000字',['cols'=>80,'rows'=>10]) !!}<br>
@error('desc')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<!--radio輸入項-->
  {!! Form::label('states', '狀態') !!}<br>
    {!! Form::radio('狀態一',1,True ) !!}狀態一<br>
    {!! Form::radio('狀態二',0,False ) !!}狀態二<br>
<br>
<!--日期輸入項-->
載入日期<br>
{!! Form::date('enable_at') !!}<br>
<br>
確認清單<br>
{!! Form::label('tages[]', 'news') !!}
{!! Form::checkbox('tages[]','news', false) !!}
{!! Form::label('tages[]', 'skill') !!}
{!! Form::checkbox('tages[]','skill', false) !!}
{!! Form::label('tages[]', 'like') !!}
{!! Form::checkbox('tages[]','like', false) !!}<br>
<br>


<!--提交按鈕-->
{!! Form::submit('送出', []) !!}
<!--重置按鈕-->
{!! Form::reset('重置', []) !!}

{!! Form::close() !!}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
