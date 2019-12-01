@extends('layout')

@section('content')

                <div class="columns">
                  <div class="column">

                  </div>
                  <div class="column is-2 is-4-desktop is-7-mobile is-6-tablet">
                    <div class="title">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                          <form class="" action="" method="post">
                            <div class="field">
                                <div class="control">
                                  <input id="name" class="input  {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" placeholder="Name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                  <input id="email" class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                  <input id="password" class="input  {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" placeholder="Password" value="{{ old('password') }}" autocomplete="password" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                  <input id="password-confirm" class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password_confirmation" placeholder="Password repeat" value="{{ old('password') }}" autocomplete="new-password" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                  <button type="submit" class="button">{{ __('Register') }}</button>
                                </div>
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
                          <div class="column">

                          </div>
                        </div>

                          </form>


@endsection
