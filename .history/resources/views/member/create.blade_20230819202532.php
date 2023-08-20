@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span style="">
                        Create Member
                    </span>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'member.store']) !!}
                    {!! Form::label('Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! Form::label('Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! Form::label('Phone Number') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
