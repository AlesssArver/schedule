@extends('layout')

@section('css', 'css/app.css')

@section('content')

  <div class="columns">
    <div class="column">
      <a href="#">
        <i class="fas fa-chevron-left"></i>
      </a>
    </div>
    <div class="column">
      <h3>{{Carbon\Carbon::now()->toDateTimeString()}}</h3>
    </div>
    <div class="column">
      <a href="#">
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </div>

<div class="columns">
  <div class="column is-2">

  </div>
  <div class="column">
      <h1 class="title">Create</h1>
  </div>
  <div class="column">

  </div>
</div>


  @foreach($schedules_tab as $schedule)


        <form class="" action="/schedules_tab/{{$schedule->id}}" method="post">
            @method('path')
            @csrf


              <div class="columns">
                <div class="column">

                </div>

                <div class="column is-6">

                  <div class="field">
                      <div class="control">
                        <input class="input" type="text" name="title" placeholder="Your task" value="{{$schedule->title}}" required>
                      </div>
                  </div>

                </div>
                <div class="column">

                  <div class="field">
                      <div class="control">
                        <input class="input" type="time" name="time" value="{{$schedule->time}}" required>
                      </div>
                  </div>
                </div>
                <div class="column">
                  <form class="" action="/schedules_tab/{{$schedule->id}}" method="post">
                      @method('delete')
                      @csrf

                      <div class="field">
                          <div class="control">
                            <button type="submit" class="delete"></button>
                          </div>
                      </div>
                  </form>
                </div>

                </div>

       </form>

   @endforeach



<form class="" action="/schedules_tab" method="post">
@csrf

  <div class="columns">
    <div class="column">

    </div>

    <div class="column is-6">

      <div class="field">
          <div class="control">
            <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" placeholder="Your task">
          </div>
      </div>
      <div class="field">
          <div class="control">
            <button type="submit" class="button">Create</button>
          </div>
      </div>

    </div>
    <div class="column">

      <div class="field">
          <div class="control">
            <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="time" name="time">
          </div>
      </div>
    </div>
    <div class="column">


    </div>


      @if($errors->any())
        <div class="notification is-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif

   </div>

    <!-- <div class="column is-1">
      <div class="field">
          <div class="control">
            <input class="input" type="time" name="time" placeholder="Your task">
          </div>
      </div>
    </div> -->
    <div class="column">

    </div>
  </div>
</form>


@endsection
