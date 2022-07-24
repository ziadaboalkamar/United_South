<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\SubscribeRequest;
use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function store(SubscribeRequest $request)
    {
//        return $request;
        $data = $request->validated();



        DB::beginTransaction();

        try
        {
//            return $data;

            $project = Subscribe::create($data);



            DB::commit();

        }catch (Throwable $e) {

            DB::rollBack();
            return response()->json([
                'status' => 500,
                'message' => 'يوجد خطاء ما',

            ], 500);
        }

        return response()->json([
            'status' => 500,
            'message' => __("Send Successfully"),

        ], 200);
    }

}
