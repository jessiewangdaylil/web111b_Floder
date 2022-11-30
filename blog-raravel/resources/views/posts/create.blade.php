<h1>建立表單頁面</h1>
{!! Form::open(['url'=>'/1130/posts','method'=>'POST','files'=>true]) !!}
<!-- 輸入項標籤-->
  {!! Form::label('標題1', '標題1') !!}

<!--單行文字輸入項-->
  {!! Form::text('欄位1','欄位預設內容',['style'=> 'color:blue;']) !!}<br>

<!--radio輸入項-->
  {!! Form::label('開關', '開關') !!}<br>
    {!! Form::radio('開關',1,True ) !!}
    {!! Form::radio('開關',0,False ) !!}<br>
{!! Form::close() !!}

<!--多行文字輸入項-->
  {!! Form::label('意見內容', '意見內容') !!}<br>
{!! Form::textarea('意見內容', '限500字',['cols'=>80,'rows'=>10]) !!}<br>
