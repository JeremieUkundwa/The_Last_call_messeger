@extends('layout')


@section('video-section')
<div class="video-section-imp">
  @foreach ($videos as $ video)
  <div class="video1">
    <video controls width="400px" height="400px" allow-fullscreen>
    <source src="{{$video->video}}" controls />
    </video>
    <h2>{{$video->title}}</h2>
    <p>{{$video->introduction}}</p>
  </div>
</div>
@endsection