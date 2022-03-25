
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Video') }}</div>

                    <div class="card-body">
                        <form method="post" class="card p-4 d-flex gap-2" action="{{ route('video.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Video Title</label>
                                <input value="{{ old('title') }}" required type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Video Title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Video Introduction</label>
                                <textarea value="{{ old('introduction') }}" required class="form-control @error('introduction') is-invalid @enderror" name="introduction" placeholder="Type Introduction"></textarea>
                                @error('introduction')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload Video </label>
                                <input value="{{ old('video') }}" required type="file" class="form-control @error('video') is-invalid @enderror" name="video">
                                @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <button type="submit" class="btn btn-outline-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection