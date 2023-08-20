@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <span style="">
                        Welcome to 
                    </span>
                </div>
                <div class="card-body">
                    <div class="btn btn-group-vertical">
                        <a href="{{route('member.create')}}" class="btn btn-warning">Add Member</a>
                        <a href="{{route('member.index')}}" class="btn btn-primary">View Memeber</a>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
