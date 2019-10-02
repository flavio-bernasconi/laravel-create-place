@extends('template.base')

@section('content')
  <a href="{{ route('createPlace')}}">Add Place</a>

  <ul class="list-group">
    @foreach ($arrPlaces as $place)
      <li class="list-group-item">
        {{$place -> name}}
        {{$place -> address}}
      </li>
    @endforeach
  </ul>
@endsection
