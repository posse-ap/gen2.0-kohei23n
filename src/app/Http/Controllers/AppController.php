<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Record;
use App\Language;
use App\Content;

class AppController extends Controller
{
    public function index()
    {
        // 今日の学習時間
        $today = Record::whereDate('study_date', date('Y-m-d'))->sum('study_time');

        // //今月の学習時間
        $month = Record::whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))->sum('study_time');

        // //合計学習時間
        $total = Record::sum('study_time');

        // 円グラフ（言語）
        $lang = Record::leftJoin('languages', 'records.language_id', '=', 'languages.id')
                            ->select('languages.language', DB::raw("SUM(records.study_time) as sum"), 'languages.colour')
                            ->groupBy('languages.language', 'languages.colour')
                            ->get();

        // 円グラフ（内容）
        $content = Record::leftJoin('contents', 'records.content_id', '=', 'contents.id')
                            ->select('contents.content', DB::raw("SUM(records.study_time) as sum"))
                            ->groupBy('contents.content')
                            ->get();

        // 棒グラフ
        $bar = Record::select(DB::raw("SUM(study_time) as sum"))
                        ->groupBy('study_date')
                        ->havingRaw(" DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')")
                        ->get();


    //棒グラフデータ
    // $bar_stmt = $db->query(
    // "SELECT 
    //     SUM(study_time) 
    // FROM 
    //     records 
    // GROUP BY
    //     study_date   
    // HAVING
    //     DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')"
    // );
    // $bars = $bar_stmt->fetchAll() ?: 0;


        return view('webapp', ['today' => $today, 'month' => $month, 'total' => $total, 'lang' => $lang, 'content' => $content, 'bar' => $bar]);
    }

    
}
