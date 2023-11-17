<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\callsAndServices;
use Illuminate\Http\Request;
use Carbon\Carbon;
class CallsAndServicesController extends Controller
{

    public function index(){
        $date = Carbon::now();

        $calls = callsAndServices::whereDate('created_at', $date)->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.index', compact('calls'));
    }

    public function history_index()
    {


        $calls = callsAndServices::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.history_index', compact('calls'));
    }

    public function create(){
        return view('admin.calls.create_call');
}
    public function create_call(Request $request){


        //code to create a new call and service
        $call = new callsAndServices();

        $call->call_name = $request->call_name;
        $call->call_link = $request->call_link;
        $call->call_text = $request->call_text;

        if ($request->hasFile('call_image')) {
            $call_image = $request->file('call_image');
            $call_image_name = $request->call_name . '_' . time() . '.' . $call_image->getClientOriginalExtension();
            $call_image->move(public_path('admin/call_image/call_image/'), $call_image_name);
            $call->call_image = 'admin/call_image/call_image/' . $call_image_name;
        }

        if ($request->hasFile('call_audio')) {
            $call_audio = $request->file('call_audio');
            $call_audio_name = $request->call_name . '_' . time() . '.' . $call_audio->getClientOriginalExtension();
            $call_audio->move(public_path('admin/call_audio/call_audio/'), $call_audio_name);
            $call->call_audio = 'admin/call_audio/call_audio/' . $call_audio_name;
        }

        if($call->save()){
            return redirect(route('create_call'))->with('success', 'Call created successfully');
        }
    }

    public function edit_call($id){
        $call = callsAndServices::where('id',$id)->first();
        return view('admin.calls.edit_call',compact('call'));
    }

    public function update_call(Request $request){

//dd($request->all());
        //code to create a new call and service
        $call = callsAndServices::where('id',$request->id)->first();

        $call->call_name = $request->call_name;
        $call->call_link = $request->call_link;
        $call->call_text = $request->call_text;
        $call->follow_up = $request->follow_up;

        if ($request->hasFile('call_image')) {
            $call_image = $request->file('call_image');
            $call_image_name = $request->call_image . '_' . time() . '.' . $call_image->getClientOriginalExtension();
            $call_image->move(public_path('admin/call_image/call_image/'), $call_image_name);
            $call->call_image = 'admin/call_image/call_image/' . $call_image_name;
        }

        if ($request->hasFile('call_audio')) {
            $call_audio = $request->file('call_audio');
            $call_audio_name = $request->call_audio . '_' . time() . '.' . $call_audio->getClientOriginalExtension();
            $call_audio->move(public_path('admin/call_audio/call_audio/'), $call_audio_name);
            $call->call_audio = 'admin/call_audio/call_audio/' . $call_audio_name;
        }

        if($call->save()){
            return redirect()->back()->with('success','call edited successfully');
        }
    }

    public function delete_call($id){
        $call = callsAndServices::where('id',$id);
        if($call->delete()){
            return redirect()->back()->with('success', 'Lead Deleted Successfully');
        }
    }



}
