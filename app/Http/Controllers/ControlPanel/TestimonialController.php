<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestimonialRequest;
use App\Models\testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = testimonial::paginate();

        return view('control-panel.testimonial.index',[
            'testimonial' => $testimonial,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control-panel.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {
//        return $request;
        $data = $request->validated();
//return $data;


        DB::beginTransaction();

        try
        {

            $project = testimonial::create($data);



            DB::commit();

        }catch (Throwable $e) {
return $e;
            DB::rollBack();
            return redirect()->route('all-testimonial')
                ->with('error', 'Operation failed');
        }

        return redirect()->route('all-testimonial')->with('success' ,'Testimonial '.$project->name.' Created Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(testimonial $testimonial)
    {
        return view('control-panel.testimonial.edit',[
            'project' => $testimonial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTestimonialRequest $request, testimonial $testimonial)
    {

        $data = $request->validated();



        DB::beginTransaction();

        try
        {

            $testimonial->update($data);

            DB::commit();

        }catch (Throwable $e) {
            DB::rollBack();
            return redirect()->route('all-testimonial')
                ->with('error', 'Operation failed');
        }

        return redirect()->route('all-testimonial')->with('success' ,'Testimonial '.$testimonial->name.' Updated Done!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimonial $testimonial)
    {


        $testimonial->delete();
        return redirect()->route('all-testimonial')->with('success','Testimonial Deleted Done!');
    }
}
