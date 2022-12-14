<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cgy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CgyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 多筆 全部
        // $cgies = Cgy::get();
        // 多筆 條件
        // $cgies = Cgy::where('id','>',50)->get();

        // 多筆 條件 +排序
        // $cgies = Cgy::orderBy('sort','desc')->where('id','>',50)->get();

        // 多筆 條件 +排序 + or where
        // $cgies = Cgy::orderBy('id','desc')->where('id','>',50)->orWhere('id','<',20)->get();

        $date = Carbon::createFromFormat('Y-m-d h:i:s', '2022-12-10 00:00:00');
        $cgies = Cgy::where('enabled_at', '<', $date)->get();
        //顯示
        //  var_dump($cgies);

        dd($cgies);

        //  echo "<pre>";
        //  print_r($cgies);

        return $cgies; //回傳
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //單筆
        // $cgy = Cgy::find($id);

        //單筆找不到會錯誤
        // $cgy = Cgy::findOrFaill($id);

        //單筆回傳第一個值
        // $cgy = Cgy::find($id)->first();

        //單筆 有條件  有排序
        $cgy = Cgy::where('enabled', true)->orderby('created_at', 'desc')->get();

        dd($cgy); //顯示
        return $cgy; //回傳

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
    public function destroy(Cgy $cgy)
    {
        return $cgy->delete();
    }
    public function relaArticle($id, $cid)
    {
        //取得 哪些文章 屬於 某個分類(cgy id)
        // $cgy = Cgy::find($id);
        // dd($cgy->articles);

        //取得 哪些文章 屬於 某個分類(cgy id) 且有上架
        // $cgy = Cgy::find($id);
        // dd($cgy->articles()->where('enabled', 1)->get());

        // 加入一筆資料
        $cgy = Cgy::find($cid);
        $article = Article::where('cgy_id', $id)->first();
        // dd($article);
        $cgy->articles()->save($article);
        dd(Article::find($article->id));
    }
}