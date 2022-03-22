@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Sermony') }}</div>

                    <div class="card-body">
                        <form method="post" class="card p-4 d-flex gap-2" action="{{ route('sermon.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Sermony Title</label>
                                <input value="{{ old('title') }}" required type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Sermony Introduction</label>
                                <textarea value="{{ old('introduction') }}" required class="form-control @error('introduction') is-invalid @enderror" name="introduction" placeholder="Type Introduction"></textarea>
                                @error('introduction')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Full Content</label>
                                <textarea cols="80" rows="10" value="{{ old('content') }}" required class="form-control ckeditor @error('content') is-invalid @enderror" name="content" placeholder="Type full Content"></textarea>
                                <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $('.ckeditor').ckeditor();
                                    });
                                </script>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label>Upload Word/Pdf File</label>
                                <input value="{{ old('document') }}" type="file" class="form-control @error('document') is-invalid @enderror" name="document"/>
                                @error('document')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Sermony Type</label>
                                <select value="{{ old('type') }}" required type="text" class="form-control @error('type') is-invalid @enderror" name="type"> 
                                    <option value="Justfication by faith">Justfication by faith</option>
                                    <option value="Current event">Current Event</option>
                                    <option value="Temperance">Temperance</option>
                                </select>
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Sermony Photo</label>
                                <input value="{{ old('photo') }}" required type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                                @error('photo')
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

