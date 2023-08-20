@extends('layouts.app')

@section('content')
            <div class="btn btn-primary">
                {{link}}
            </div>
                <div class="card-header">
                    <span style="">
                        GreenLand Church Member
                    </span>
                </div>
                <div class="card-body">
                    <div class="btn btn-group-vertical">
                        <a href="{{route('member.create')}}" class="btn btn-warning">Add Member</a>
                        <a href="{{route('member.index')}}" class="btn btn-primary">View Memeber</a>
                    </div>
                </div>
              </div>
@endsection
