@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="{{route('sermon.create')}}"> Add new </a>
            <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Introduction</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($sermonies as $sermon)
                        <tr>
                            <td>{{$sermon->title}}</td>
                            <td>{{$sermon->introduction}}</td>
                            <td>{{$sermon->type}}</td>
                            <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <a href=" {{ route('sermon.edit', ['sermon'=>$sermon]) }}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <form method="post" action=" {{ route('sermon.destroy', ['sermon'=>$sermon]) }} ">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </li>
                            </ul>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>



@endsection