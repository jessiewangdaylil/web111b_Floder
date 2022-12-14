<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $months=['一','二','三','四','五','六','七','八','九','十','十一','十二',];
        return view('posts.create',compact('months'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {



    // if ($request->hasFile('pic')) {
    //     $file = $request->file('pic');  //獲取UploadFile例項
    //     if ( $file->isValid()) { //判斷檔案是否有效
    //         //$filename = $file->getClientOriginalName(); //檔案原名稱
    //         $extension = $file->getClientOriginalExtension(); //副檔名
    //         $fileName = time() . "." . $extension;    //重新命名
    //         //$data['pic'] = $filename;
    //         $path = $file->storeAs('public/storage/pic',$fileName); //儲存至指定目錄
    //     }






        //return $request->all();
        //返回到Index 頁面:
        // return redirect(url(''));

        //  return $request->all();
        //Controller 中寫驗證方法一:
        // $this->validate($request,[
        //   'title' => 'required|max:5',
        //   'body' => 'required|min:2'
        // ]);
        //Controller 中寫驗證方法二:
      // $validator = Validator::make($request->all(),[
      //     'title' => 'required|max:5',
      //     'body' => 'required|min:2'
      //   ]);
      //   if ($validator ->fails()){
      //     dd($validator);
      //   }
      //   return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //2022 11 28 Request 物件
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function doAny(Request $request){
      // return $request->title;
      return var_dump($request->only('x'));
    }
}