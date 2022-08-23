@extends('layouts.control-panel')

@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{__('Testimonial') }}</h4>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row tab-content">
                <div id="list-view" class="tab-pane fade active show col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{__('Project Station') }}  </h4>
                            @if(!isset($projects))
                            <a href="{{ route('create-testimonial') }}" class="btn btn-primary">{{ __('+ Add new') }}</a>
                        @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                {{-- alert componant --}}
                                <x-alert />
                                {{-- end alert componant --}}

                                {{-- table for display users --}}
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>{{ __('Research') }}</th>
                                        <th>{{ __('Wireframing') }}</th>
                                        <th>{{ __('Designing') }}</th>
                                        <th>{{ __('Development') }}</th>
                                        <th>{{ __('Testing & Publish') }}</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{-- get services from database --}}
                                    @foreach ($projects as $plan)
                                        <tr>
                                            <td>{{ $plan->research }}</td>
                                            <td>{{ $plan->wireframe }}</td>
                                            <td>{{ $plan->design }}</td>
                                            <td>{{ $plan->development }}</td>
                                            <td>{{ $plan->testing }}</td>

                                            <td style="padding-top: 10px;">
                                                <form method="post" id="deleteserviceform" action="{{ route('delete-project_station',$plan->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('edit-project_station',$plan->id) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <button onclick="if (confirm('Want to delete?')) { return true; }else{ return false; }" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{-- end table --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
