@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="" role="button">Return Home</a>
            <div class="card text-center">
                <div class="card-header">
                    <span style="">
                        View All GLC Member
                    </span>
                </div>
                <div class="card-body">

                    <table class="table table-sm table-striped table-reponsive">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Family</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($members as $member)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->address}}</td>
                                    <td>{{$member->contact}}</td>
                                    <td>{{$member->family}}</td>
                                    <td>
                                        <a href="{{route('member.update', $member->id)}}" class="btn btn-sm btn-{{$member->status ? 'success' : 'danger'}}" onclick="return confirm('Are you sure?')">
                                            {{$member->status ? 'Active' : 'Inactive'}}
                                        </a>
                                    </td>
                                    <td><img src="{{url('images/' . $member->image)}}" style="height: 100px; width: 100px">{{$member->image}}</td>
                                    <td>
                                        <div class="btn btn-group">
                                            {!! link_to_route('member.edit', "Edit", $member->id, ['class' => 'btn btn-sm btn-warning', 'onclick '=> "return confirm('Are you sure to edit?')"]) !!}
                                            {!! Form::open(['route' => ['member.destroy', $member->id], 'method' => 'Delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger', 'onclick '=> "return confirm('Are you sure to delete?')"]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">No Data Found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
