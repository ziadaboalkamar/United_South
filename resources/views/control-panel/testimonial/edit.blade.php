@extends('layouts.control-panel')

@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{ __('Create Testimonial') }}</h4>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title">{{ __('Create Testimonial') }}</h5>

                </div>
                <div class="card-body">
                    {{-- alert componant --}}
                    <x-alert />
                    {{-- end alert component --}}

                    {{-- form for store services --}}
                    <form method="POST" action="{{ route('update-testimonial',$project->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Client Name') }}</label>
                                    <input type="text"  class="form-control" id="name" name="name" value="{{ old('name',$project->name) }}" required autofocus >
                                </div>
                            </div>
                            {{-- end service name --}}

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="price" class="form-label">{{ __('Description') }}</label>
                                    <input type="text"  class="form-control" id="price" name="description" value="{{ old('description',$project->description) }}" required autofocus >
                                </div>
                            </div>





                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                <button type="reset" class="btn btn-light">{{ __('Cencel') }}</button>
                            </div>
                        </div>
                    </form>
                    {{-- end form --}}
                </div>
            </div>
        </div>
    </div>

@endsection
