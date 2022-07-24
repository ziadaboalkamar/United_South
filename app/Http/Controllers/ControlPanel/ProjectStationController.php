<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectStationRequest;
use App\Models\project_station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProjectStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project_station::paginate();

        return view('control-panel.project_station.index',[
            'projects' => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control-panel.project_station.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectStationRequest $request)
    {
//        return $request;
        $data = $request->validated();

        $research_img = null;
        $wireframe_img = null;
        $design_img = null;
        $development_img = null;
        $testing_img = null;
        DB::beginTransaction();

        try
        {
            if($request->hasFile('research_img') && $request->file('research_img')->isValid())
            {
                $research_img = $request->file('research_img')->store('projects','public');
            }
            if($request->hasFile('testing_img') && $request->file('testing_img')->isValid())
            {
                $testing_img = $request->file('testing_img')->store('projects','public');
            }
            if($request->hasFile('design_img') && $request->file('design_img')->isValid())
            {
                $design_img = $request->file('design_img')->store('projects','public');
            }
            if($request->hasFile('development_img') && $request->file('development_img')->isValid())
            {
                $development_img = $request->file('development_img')->store('projects','public');
            }
            if($request->hasFile('wireframe_img') && $request->file('wireframe_img')->isValid())
            {
                $wireframe_img = $request->file('wireframe_img')->store('projects','public');
            }

            $data['research_img'] = $research_img;
            $data['testing_img'] = $testing_img;
            $data['design_img'] = $design_img;
            $data['development_img'] = $development_img;
            $data['wireframe_img'] = $wireframe_img;
            $project = project_station::create($data);



            DB::commit();

        }catch (Throwable $e) {

            DB::rollBack();
            return redirect()->route('all-project_station')
                ->with('error', 'Operation failed');
        }

        return redirect()->route('all-project_station')->with('success' ,'Project Created Done!');
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
    public function edit(project_station $project_station)
    {
        return view('control-panel.project_station.edit',[
            'project' => $project_station,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectStationRequest $request, project_station $project_station)
    {

        $data = $request->validated();


        $research_img = null;
        $wireframe_img = null;
        $design_img = null;
        $development_img = null;
        $testing_img = null;
        DB::beginTransaction();

        try
        {

            if($request->hasFile('research_img') && $request->file('research_img')->isValid())
            {
                $research_img = $request->file('research_img')->store('projects','public');
            }
            if($request->hasFile('testing_img') && $request->file('testing_img')->isValid())
            {
                $testing_img = $request->file('testing_img')->store('projects','public');
            }
            if($request->hasFile('design_img') && $request->file('design_img')->isValid())
            {
                $design_img = $request->file('design_img')->store('projects','public');
            }
            if($request->hasFile('development_img') && $request->file('development_img')->isValid())
            {
                $development_img = $request->file('development_img')->store('projects','public');
            }
            if($request->hasFile('wireframe_img') && $request->file('wireframe_img')->isValid())
            {
                $wireframe_img = $request->file('wireframe_img')->store('projects','public');
            }

            $data['research_img'] = $research_img;
            $data['testing_img'] = $testing_img;
            $data['design_img'] = $design_img;
            $data['development_img'] = $development_img;
            $data['wireframe_img'] = $wireframe_img;


            $project_station->update($data);

            DB::commit();

        }catch (Throwable $e) {
            DB::rollBack();
            return redirect()->route('all-project_station')
                ->with('error', 'Operation failed');
        }

        return redirect()->route('all-project_station')->with('success' ,'Project  Updated Done!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_station $project_station)
    {

        $project_station->delete();
        return redirect()->route('all-project_station')->with('success','Project Deleted Done!');
    }
}
