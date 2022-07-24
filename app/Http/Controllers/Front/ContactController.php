<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\StoreContactRequest;
use App\Models\about_us;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
//        return $request;
        $data = $request->validated();



        DB::beginTransaction();

        try
        {
//            return $data;

            $project = Contact::create($data);



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
