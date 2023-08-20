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

<div class="input-group md-form form-sm form-1 pl-0">
    <div class="input-group-prepend">
      <span class="input-group-text pink lighten-3" id="basic-text1"><i class="fas fa-search text-white"
          aria-hidden="true"></i></span>
    </div>
    <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
  </div>
                    <table class="table table-sm table-striped">
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
                                    <td><img src="{{url('documents/' . $member->image)}}" style="height: 100px; width: 100px"></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-{{$member->status ? 'success' : 'danger'}}">
                                            {{$member->status ? 'Active' : 'Inactive'}}
                                        </a>
                                    </td>
                                    <td>{{$member->image}}</td>
                                    <td>
                                        <div class="btn btn-gro">
                                            {!! link_to_route('member.edit', "Edit", $member->id, ['class' => 'btn btn-sm btn-warning']) !!}
                                            {!! Form::open(['route' => ['member.destroy', $member->id], 'method' => 'Delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Data Found.</td>
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
