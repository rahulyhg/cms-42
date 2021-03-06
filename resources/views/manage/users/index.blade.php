@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Edit User</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fas fa-user-plus m-r-10"></i>Create New User</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-content">
                <table class="table is-fullwidth is-hoverable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                <td><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                                <td><a class="button is-outlined" href="{{route('users.show', $user->id)}}">View</a></td>                                
                            </tr>                
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$users->links()}}
    </div>
@endsection