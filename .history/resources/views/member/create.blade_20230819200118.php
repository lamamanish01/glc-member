@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <span style="">
                        GreenLand Church Member
                    </span>
                </div>
                <div class="card-body">
                    <div class="btn btn-group-vertical">
                        <a href="{{route('member.create')}}" class="btn btn-warning">Add Member</a>
                        <a href="#" class="btn btn-primary">View Memeber</a>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
