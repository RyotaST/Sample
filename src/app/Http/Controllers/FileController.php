<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\File;

class FileController extends Controller
{
    // Indexページの表示
    public function index() {
        $bbs = File::all(); // 全データの取り出し
        return view('bbs.file', ["file" => $bbs]);
    }

    // 投稿された内容を表示するページ
    public function create(Request $request) {

        // 投稿内容の受け取って変数に入れる
        $name = $request->input('name');
        $comment = $request->input('comment');

        Bbs::insert(["path" => $name, "comment" => $comment]);

        // 変数をビューに渡す
        $bbs = Bbs::all(); // 全データの取り出し
        return view('bbs.file', ["bbs" => $bbs]);
        
    }

}