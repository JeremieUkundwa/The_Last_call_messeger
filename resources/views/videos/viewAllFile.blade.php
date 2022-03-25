@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div>
                <a class="btn btn-outline-primary" href="{{route('video.create')}}"> <i class="fa fa-plus-square"> Add New</i></a>
            </div>
            <div class="col-md-12">
            <table class="table table-striped w-auto">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Introduction</th>
                    <th class="w-25">Video</th>
                    <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                        <tr>
                            <td>{{$video->title}}</td>
                            <td>{{$video->introduction}}</td>
                            <td>
                                <video controls muted src="{{$video->video}}" class="w-100"></video>
                            </td>
                            <td>
                                <div class="list-inline-item">
                                    <a href=" {{ route('video.edit', ['video'=>$video]) }}" class="btn btn-outline-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div class="list-inline-item">
                                    <form method="post" action=" {{ route('video.destroy', ['video'=>$video]) }} ">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>



@endsection
