@extends('layouts.control-panel')

@section('content')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>{{ __('Create Services') }}</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">{{ __('Services') }}</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">{{ __('All Services') }}</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card">
            <div class="card-header">

                <h5 class="card-title">{{ __('Create Service') }}</h5>

            </div>
            <div class="card-body">
                {{-- alert componant --}}
                <x-alert />
                {{-- end alert component --}}

                {{-- form for store services --}}
                <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- service name --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name" class="form-label">{{ __('Service Name') }}</label>
                                <input type="text"  class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus >
                            </div>
                        </div>
                        {{-- end service name --}}
                        {{-- service name_en --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name" class="form-label">{{ __('Service Name in English') }}</label>
                                <input type="text"  class="form-control" id="name_en" name="name_en" value="{{ old('name') }}" required autofocus >
                            </div>
                        </div>
                        {{-- end service name_en --}}

                         {{-- service image --}}
                         <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group fallback w-100">
                                <label for="image" class="form-label">{{ __('Service Image') }}</label>
                                <input type="file" id="image" name="image" class="form-control" data-default-file="" >
                            </div>
                        </div>
                        {{-- end service image --}}

                        {{-- service description --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group fallback w-100">
                                <label for="description" class="form-label">{{ __('Service Description') }}</label>
                                <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        {{-- end service description --}}
                        {{-- service description en --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group fallback w-100">
                                <label for="description" class="form-label">{{ __('Service Description in English') }}</label>
                                <textarea name="description_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        {{-- end service description --}}

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
