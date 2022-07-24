<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutUsRequest;
use App\Models\about_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;
class AboutUsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = about_us::paginate();

        return view('control-panel.about_us.index',[
            'about_us' => $about_us,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control-panel.about_us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutUsRequest $request)
    {
//        return $request;
        $data = $request->validated();



        DB::beginTransaction();

        try
        {

            $project = about_us::create($data);



            DB::commit();

        }catch (Throwable $e) {

            DB::rollBack();
            return redirect()->route('all-about_us')
                ->with('error', 'Operation failed');
        }

        return redirect()->route('all-about_us')->with('success' ,'About us '.$project->title.' Created Done!');
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
    public function edit(about_us $about_us)
    {
        return view('control-panel.about_us.edit',[
            'about_us' => $about_us,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAboutUsRequest $request, about_us $about_us)
    {

        $data = $request->validated();



        DB::beginTransaction();

        try
        {

            $about_us->update($data);

            DB::commit();

        }catch (Throwable $e) {
            DB::rollBack();
            return redirect()->route('all-about_us')
                ->with('error', 'Operation failed');
        }

        return redirect()->route('all-about_us')->with('success' ,'About Us  Updated Done!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about_us $about_us)
    {


        $about_us->delete();
        return redirect()->route('all-about_us')->with('success','About Deleted Done!');
    }
}
