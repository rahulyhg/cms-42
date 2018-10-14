@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Register</h1>

                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="name" class="label">Name</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" id="name" name="name" placeholder="Your Name" value="{{old('name')}}" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                            @if ($errors->has('name'))
                                <p class="help is-danger">{{$errors->first('name')}}</p>
                            @endif                            
                        </div>                        
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif                            
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <p class="control has-icons-left">
                                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" id="password" name="password" required>
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{$errors->first('password')}}</p>
                                    @endif
                                </div>                                
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="password_confirmation" class="label">Confirm Password</label>
                                    <p class="control has-icons-left">
                                        <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" id="password_confirmation" name="password_confirmation" required>
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </p>
                                    @if ($errors->has('password_confirmation'))
                                        <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                    @endif
                                </div> 
                            </div>
                        </div>                       
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
                    </form>
                </div>
            </div>
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
        </div>
    </div>
@endsection
