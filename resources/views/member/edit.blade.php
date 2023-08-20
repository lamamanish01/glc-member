@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="text-success">
                        <a href="{{asset('home')}}" class="btn btn-outline-primary" role="button" style="float: right;">Return Home</a>
                        <h4>Edit Member</h4>
                    </span>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['member.store', $member->id], 'enctype' => "multipart/form-data"]) !!}

                    {!! Form::label('Name') !!}
                    {!! Form::text('name', $member->name, ['class' => 'form-control', 'placeholder' => 'Enter Full Name']) !!}
                    {!! Form::label('Email') !!}
                    {!! Form::text('email', $member->email, ['class' => 'form-control', 'placeholder' => 'Enter E-mail Address']) !!}
                    {!! Form::label('Address') !!}
                    {!! Form::text('address', $member->address, ['class' => 'form-control', 'placeholder' => 'Enter Address']) !!}
                    {!! Form::label('Contact Number') !!}
                    {!! Form::text('contact', $member->contact, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number']) !!}
                    {!! Form::label('Family Details') !!}
                    {!! Form::textarea('family', $member->family, ['class' => 'form-control', 'placeholder' => 'Enter Family Details Here ...']) !!}
                    {!! Form::label('Image') !!}<br/>
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                    {!! Form::submit('Save', ['class' => 'form-control btn btn-sm btn-primary']) !!}

                    {!! Form::close() !!}

                </div>
              </div>
        </div>
    </div>
</div>
@endsection
