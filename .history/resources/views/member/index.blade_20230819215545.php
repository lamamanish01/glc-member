@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <span style="">
                        View All GLC Member
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Family</th>
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
                                        <div class="btn btn-gro">
                                            {!! link_to_route('member.edit', "Edit", $member->id, ['class' => 'btn btn-sm btn-warning']) !!}
                                            {!! Form::open(['route' => ['member.destroy', $member->id], 'method' => 'Delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No Data Found.</td>
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
