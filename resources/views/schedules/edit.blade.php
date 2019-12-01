@extends('layout')

@section('content')

  <h1 class="title">Edit</h1>

 @foreach($schedules_tab as $schedule)
    <form class="" action="/schedules_tab/{{$schedule->id}}" method="post">
        {{ method_field('patch') }}
        @csrf

        <div class="field">
            <div class="control">
              <input class="input" type="text" name="title" placeholder="Your task" value="{{$schedule->title}}">
            </div>
        </div>
    </form>
  @endforeach

@endsection
