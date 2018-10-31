@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Edit User</h1>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="card">
            <div class="card-content">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="name" class="label">Name</label>
                                <p class="control has-icons-left">
                                    <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                </p>
                            </div>
        
                            <div class="field">
                                <label for="email" class="label">Email</label>
                                <p class="control has-icons-left">
                                    <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                                    <span class="icon"><i class="fas fa-envelope"></i></span>
                                </p>
                            </div>
        
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <b-radio-group v-model="password_options">
                                    <div class="field">
                                        <b-radio v-model="password_options" native-value="keep">Do Not Change Password</b-radio>
                                    </div>
                                    <div class="field">
                                        <b-radio v-model="password_options" native-value="auto">Auto Generate New Password</b-radio>
                                    </div>
                                    <div class="field">
                                        <b-radio v-model="password_options" native-value="manual">Manually Give A New Password</b-radio>
                                        <p class="control has-icons-left m-t-10" v-if="password_options == 'manual'">
                                            <input type="text" class="input" password="password" id="password"  placeholder="Manually Give A Password">
                                            <span class="icon"><i class="fas fa-lock"></i></span>
                                        </p>                                        
                                    </div>
                                </b-radio-group>
                            </div>   
                        </div>
                        <div class="column">
                            <label for="roles" class="label">Roles:</label>
                            <input type="hidden" class="input" name="roles" :value="rolesSelected">
                            @foreach ($roles as $role)
                                <div class="field"><b-checkbox :native-value="{{$role->id}}" v-model="rolesSelected">{{$role->display_name}}</b-checkbox></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <button class="button is-primary">Edit User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });

  </script>
@endsection