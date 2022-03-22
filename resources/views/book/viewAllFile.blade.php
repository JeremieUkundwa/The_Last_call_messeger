@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="{{route('book.create')}}"> Add new </a>
            <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Photo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{$book->title}}</td>
                            <td><img class="w-25" src="{{$book->photo}}"></td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href=" {{ route('book.edit', ['book'=>$book]) }}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form method="post" action=" {{ route('book.destroy', ['book'=>$book]) }} ">
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
