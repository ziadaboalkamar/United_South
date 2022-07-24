@extends('layouts.control-panel')

@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{ __('Create About Us') }}</h4>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title">{{ __('Create About Us') }}</h5>

                </div>
                <div class="card-body">
                    {{-- alert componant --}}
                    <x-alert />
                    {{-- end alert component --}}

                    {{-- form for store services --}}
                    <form method="POST" action="{{ route('store-about_us') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('About us in arabic') }}</label>
                                    <textarea name="about_us" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('About us in english') }}</label>
                                    <textarea name="about_us_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}

                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Vision in arabic') }}</label>
                                    <textarea name="vision" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Vision in english') }}</label>
                                    <textarea name="vision_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Target in arabic') }}</label>
                                    <textarea name="target" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}

                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Target in english') }}</label>
                                    <textarea name="target_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Message in arabic') }}</label>
                                    <textarea name="message" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}
                            {{-- service name --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Message in english') }}</label>
                                    <textarea name="message_en" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- end service name --}}

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
