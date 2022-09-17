<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Record;
use App\Language;
use App\Content;

class AppController extends Controller
{
    public function index()
    {
        // 今日の学習時間
        $today = Record::whereDate('study_date', date('Y-m-d'))->sum('study_time');

        // 今月の学習時間
        $month = Record::whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))->sum('study_time');

        // 合計学習時間
        $total = Record::sum('study_time');

        // 言語円グラフ（グラフで使うデータ）
        $langs = Record::leftJoin('languages', 'records.language_id', '=', 'languages.id')
                        ->select('languages.language', DB::raw("SUM(records.study_time) as sum"), 'languages.colour')
                        ->groupBy('languages.language', 'languages.colour')
                        ->pluck("sum");
        // 言語円グラフ（ラベル）        
        $langs_labels = Language::pluck("language");
        // 言語円グラフ（色）        
        $langs_colours = Language::pluck("colour");


        // コンテンツ円グラフ（グラフで使うデータ、ラベル、色の取得）
        $contents = Record::leftJoin('contents', 'records.content_id', '=', 'contents.id')
                            ->select('contents.content', DB::raw("SUM(records.study_time) as sum"), 'contents.colour')
                            ->groupBy('contents.content', 'contents.colour')
                            ->pluck("sum");
        // 言語円グラフ（ラベル）        
        $contents_labels = Content::pluck("content");
        // 言語円グラフ（色）        
        $contents_colours = Content::pluck("colour");

        // 棒グラフ
        $bar = Record::select(DB::raw("SUM(study_time) as sum"))
                        ->whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))
                        ->groupBy('study_date')
                        ->pluck("sum");

        $record = Record::all();
        
        return view('webapp', compact('today', 'month', 'total', 'langs', 'langs_labels', 'langs_colours', 'contents', 'contents_labels', 'contents_colours', 'bar', 'record'));
    }
    
}
