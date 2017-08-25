@extends('layouts.frontend')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h4>Create User</h4>
            <hr/>
            
            <form action="{{ route('user.store') }}" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                    @if ( $errors->has('name') )
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
                    

                    @if ( $errors->has('description') )
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                
                {{ csrf_field() }}
                
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Create">
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
        h4 {
            color: gray;
        }
    </style>
@endpush