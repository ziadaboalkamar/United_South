@extends('layouts.control-panel')

@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{__('About Us') }}</h4>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row tab-content">
                <div id="list-view" class="tab-pane fade active show col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{('About Us') }}  </h4>
                            @if(!isset($about_us))
                            <a href="{{ route('create-about_us') }}" class="btn btn-primary">{{ __('+ Add new') }}</a>
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
                                        <th>{{ __('About Us') }}</th>
                                        <th>{{ __('Target') }}</th>
                                        <th>{{ __('Vision') }}</th>
                                        <th>{{ __('Message') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{-- get services from database --}}
                                    @foreach ($about_us as $plan)
                                        <tr>
                                            <td>{{ $plan->about_us }}</td>
                                            <td>{{ $plan->target }}</td>
                                            <td>{{ $plan->vision }}</td>
                                            <td>{{ $plan->message }}</td>

                                            <td style="padding-top: 10px;">
                                                <form method="post" id="deleteserviceform" action="{{ route('delete-about_us',$plan->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('edit-about_us',$plan->id) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
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
