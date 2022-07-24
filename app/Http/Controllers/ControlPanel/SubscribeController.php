<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
   public function index(){
       $subscribe = Subscribe::paginate();

       return view('control-panel.subscribe.index',[
           'subscribe' => $subscribe,
       ]);
   }
    public function destroy(Subscribe $subscribe)
    {
        $subscribe->delete();

        return redirect()->route('subscribe.index')->with('success','Subscribe Deleted Done!');
    }
}
