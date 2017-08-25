@extends('layouts.frontend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('user.store', ['id' => $user->id]) }}" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">

                    @if ( $errors->has('name') )
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $user->description }}</textarea>

                    @if ( $errors->has('description') )
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Update">
                </div>
            </form>
        </div>
    </div>
@stop

@push('styles')
<style>
    .help-block {
        color: #ff0000;
    }
</style>
@endpush