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
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name']) !!}
                    {!! Form::label('Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter E-mail Address']) !!}
                    {!! Form::label('Address') !!}
                    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Address']) !!}
                    {!! Form::label('Contact Number') !!}
                    {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number']) !!}
                    {!! Form::label('Active') !!}
                    {!! Form::radio('active', 'not_active') !!}
                    {!! Form::label('Image') !!}
                    {!! Form::file('image', null, ['class' => 'form-control']) !!}

                </div>
              </div>
        </div>
    </div>
</div>
@endsection
