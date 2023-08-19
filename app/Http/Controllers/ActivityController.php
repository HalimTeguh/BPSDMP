<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function index(){
        $activity = DB::table('activity')->get();

        return view('pages.db_activity', ['title' => 'activity', 'activity' => $activity]);
    }

    public function create(){
        return view('pages.db_formAddactivity', ['title' => 'activity']);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'excerpt' => 'required',
            'date' => 'required',
        ]);

        $filename = '';
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('img/kegiatan/', $filename);
        }else{
            $filename = 'default.png';
        }
        DB::table('activity')->insert([
            'title' => $request['title'],
            'description' => $request['description'],
            'excerpt' => $request['excerpt'],
            'date' => $request['date'],
            'image' => $filename
        ]);

        return redirect('/dashboard/activity');
    }

    public function show($id){
        $activity = DB::table('activity')->where('id', $id)->first();

        return view('pages.db_detailActivity', ['title' => 'activity', 'activity' => $activity]);
    }

    public function edit($id){
        
        $activity = DB::table('activity')->where('id', $id)->first();

        return view('pages.db_formEditactivity', ['title' => 'activity', 'activity' => $activity]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'excerpt' => 'required',
            'date' => 'required',
        ]);

        $filename = '';
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('img/kegiatan/', $filename);

            DB::table('activity')
            ->where('id', $id)
            ->update([
                'title' => $request['title'],
                'description' => $request['description'],
                'excerpt' => $request['excerpt'],
                'date' => $request['date'],
                'image' => $filename
            ]);
        }else{
            $activity = DB::table('activity')->where('id', $id)->first();

            if($activity->image == null || $activity->image == ""){
                DB::table('activity')
                    ->where('id', $id)
                    ->update([
                        'title' => $request['title'],
                        'description' => $request['description'],
                        'excerpt' => $request['excerpt'],
                        'date' => $request['date'],
                        'image' => 'default.png'
                    ]);
            }else{
                DB::table('activity')
                    ->where('id', $id)
                    ->update([
                        'title' => $request['title'],
                        'description' => $request['description'],
                        'excerpt' => $request['excerpt'],
                        'date' => $request['date'],
                    ]);
            }
        }

        return redirect('/dashboard/activity');
    }

    public function destroy($id){
        DB::table('activity')->where('id', $id)->delete();

        return redirect('/dashboard/activity');
    }
}
