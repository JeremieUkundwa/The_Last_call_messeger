
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Archive') }}</div>

                    <div class="card-body">
                        <form method="post" class="card p-4 d-flex gap-2" action="{{ route('archive.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Archive Title</label>
                                <input value="{{ old('title') }}" required type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Archive Title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload Document File </label>
                                <input value="{{ old('document') }}" required type="file" class="form-control @error('document') is-invalid @enderror" name="document">
                                @error('document')
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
