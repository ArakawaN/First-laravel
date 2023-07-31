<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        dd('test');
        // ヘロクアント
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);
        $where = Test::where('text', '=', 'bird')->get();

        dd($values, $count, $first, $where);

        // クエリビルダ

        $query = DB::table('tests')
            // 何を取ってくるか
            ->where('text', '=', 'bird')
            // 何を表示するか
            ->select('id', 'text')
            ->get();

        // dd($values, $count, $first, $where);
        dd($query);

        return view('tests.test', compact('values'));
    }
}
