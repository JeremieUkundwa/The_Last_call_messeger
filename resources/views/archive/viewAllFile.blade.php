@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="pull-right">
                <a class="btn btn-outline-primary" href="{{route('archive.create')}}"> <i class="fa fa-plus-square"> Add New</i></a>
            </div>
            <div class="col-md-12">
            <table class="table table-striped w-auto border-2 border-primary">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($archives as $archive)
                        <tr>
                            <td>{{$archive->title}}</td>
                            <td>
                                <div class="list-inline-item">
                                    <a href=" {{ route('archive.edit', ['archive'=>$archive]) }}" class="btn btn-outline-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div class="list-inline-item">
                                    <form method="post" action=" {{ route('archive.destroy', ['archive'=>$archive]) }} ">
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
