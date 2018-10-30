@extends('layouts.manage')
@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New Role</h1>
      </div> <!-- end of column -->
    </div>
    <hr class="m-t-0">

    <form action="{{route('roles.store')}}" method="POST">
        @csrf
        @method('PUT')


        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Role Details</h2>
                                <div class="field">
                                    <p class="control">
                                        <label for="display_name" class="label">Name (Human Readable)</label>
                                        <input type="text" class="input" value="{{old('display_name')}}" name="display_name" id="display_name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label for="name" class="label">Slug (Cannot be edited)</label>
                                        <input type="text" class="input" value="{{old('name')}}" name="name" id="name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label for="description" class="label">Description</label>
                                        <input type="text" class="input" value="{{old('description')}}" name="description" id="description">
                                    </p>
                                </div>
                                <input type="hidden" :value="permissionsSelected" name="permissions">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Permissions</h2>
                                <ul>
                                    @foreach ($permissions as $permission)
                                        <div class="field">
                                            <b-checkbox :native-value="{{$permission->id}}" v-model="permissionsSelected">{{$permission->display_name}}<em class="m-l-20">({{$permission->description}})</em></b-checkbox>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Box End -->
                <!-- Submit Button -->
                <button class="button is-primary">Create New Role</button>
                <!-- End Submit Button -->                
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                permissionsSelected: []
            }
        });
    </script>
@endsection