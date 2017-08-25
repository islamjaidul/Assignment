@extends('layouts.frontend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('user.create') }}" class="btn btn-info pull-right">Create</a>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Create Time</th>
                    <th>Update Time</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->description }}</td>
                        <td>{{ $user->dateCreated }}</td>
                        <td>{{ $user->dateUpdated }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@push('styles')
    <style>
        .pull-right {
            float: right;
            margin-bottom: 20px;
        }
    </style>
@endpush