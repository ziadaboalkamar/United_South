@extends('layouts.control-panel')

@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{ __('Create Project Station') }}</h4>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title">{{ __('Create Project Station') }}</h5>

                </div>
                <div class="card-body">
                    {{-- alert componant --}}
                    <x-alert />
                    {{-- end alert component --}}

                    {{-- form for store services --}}
                    <form method="POST" action="{{ route('store-project_station') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Research') }}</label>
                                    <textarea name="research" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Research in English') }}</label>
                                    <textarea name="research_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- website favicon --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fallback w-100">
                                    <label for="favicon_image" class="form-label">{{ __('Research Image') }}</label>
                                    <input type="file" id="favicon_image" name="research_img" class="form-control" value="{{ old('favicon_image',($website->favicon_image ?? ' ')) }}" data-default-file="" >
                                </div>
                            </div>
                            {{-- end website favicon --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Wireframing') }}</label>
                                    <textarea name="wireframe" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Wireframing in english') }}</label>
                                    <textarea name="wireframe_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- website favicon --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fallback w-100">
                                    <label for="favicon_image" class="form-label">{{ __('Wireframing Image') }}</label>
                                    <input type="file" id="favicon_image" name="wireframe_img" class="form-control" value="{{ old('favicon_image',($website->favicon_image ?? ' ')) }}" data-default-file="" >
                                </div>
                            </div>
                            {{-- end website favicon --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Designing') }}</label>
                                    <textarea name="design" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}

                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Designing in english') }}</label>
                                    <textarea name="design_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- website favicon --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fallback w-100">
                                    <label for="favicon_image" class="form-label">{{ __('Designing Image') }}</label>
                                    <input type="file" id="favicon_image" name="design_img" class="form-control" value="{{ old('favicon_image',($website->favicon_image ?? ' ')) }}" data-default-file="" >
                                </div>
                            </div>
                            {{-- end website favicon --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Development') }}</label>
                                    <textarea name="development" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Development in english') }}</label>
                                    <textarea name="development_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- website favicon --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fallback w-100">
                                    <label for="favicon_image" class="form-label">{{ __('Development Image') }}</label>
                                    <input type="file" id="favicon_image" name="development_img" class="form-control" value="{{ old('favicon_image',($website->favicon_image ?? ' ')) }}" data-default-file="" >
                                </div>
                            </div>
                            {{-- end website favicon --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Testing & Publish') }}</label>
                                    <textarea name="testing" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Testing & Publish in english') }}</label>
                                    <textarea name="testing_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- website favicon --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fallback w-100">
                                    <label for="favicon_image" class="form-label">{{ __('Testing Image') }}</label>
                                    <input type="file" id="favicon_image" name="testing_img" class="form-control" value="{{ old('favicon_image',($website->favicon_image ?? ' ')) }}" data-default-file="" >
                                </div>
                            </div>
                            {{-- end website favicon --}}
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
