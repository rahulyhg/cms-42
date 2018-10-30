@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="card">
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="field">
                                <label for="name" class="label">Name</label>
                                <p class="control has-icons-left">
                                    <input type="text" class="input" name="name" id="name">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                </p>
                            </div>
        
                            <div class="field">
                                <label for="email" class="label">Email</label>
                                <p class="control has-icons-left">
                                    <input type="text" class="input" name="email" id="email">
                                    <span class="icon"><i class="fas fa-envelope"></i></span>
                                </p>
                            </div>
        
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control has-icons-left">
                                    <input type="text" class="input" password="password" id="password"  placeholder="Manually Give A Password" :disabled="auto_password">
                                    <span class="icon"><i class="fas fa-lock"></i></span>
                                </p>
                                <b-checkbox name="auto-generate" class="m-t-20" v-model="auto_password">Auto Generate Password</b-checkbox>
                            </div>   
                            <button class="button is-success">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true
      }
    });
  </script>
@endsection