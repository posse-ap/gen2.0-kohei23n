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

    public function create(Request $request) 
    {
        $record = new Record();

        // データベースに値をinsert
        $record->create([
            'study_date' => $request->input('study_date'),
            'study_time' => $request->input('study_time'),
            'language_id' => $request->input('lang_value'),
            'content_id' => $request->input('content_value'),
            'language_id' => '1',
            'content_id' => '1',
        ]);

        dd($request->input('content_value'));

        // Record::create([
        //     'study_date' => '2022-9-29',
        //     'study_time' => '2',
        //     'languge_id' => '1',
        //     'content_id' => '1'
        // ]);

        // //event_generationテーブルにeventとgenerationのidを入れる
        // $create_data = [];
        // if ($request->id == "") {
        //     foreach ($generations as $generation) {
        //         $create_data[] = [
        //             'event_id' => $id,
        //             'generation_id' => $generation
        //         ];
        //     }
        // }else{
        //     EventGeneration::where('event_id', $request->id)->delete();
        //     foreach ($generations as $generation) {
        //         $create_data[] = [
        //             'event_id' => $request->id,
        //             'generation_id' => $generation
        //         ];
        //     }
        // }
        // EventGeneration::insert($create_data);
        // //トップページに遷移する
        return redirect('/top');
    }
    
}
