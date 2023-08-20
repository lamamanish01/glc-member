@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="" role="button">Return Home</a>
                <div class="card-header">
                    <span >
                        Create Member
                    </span>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'member.store', 'enctype' => "multipart/form-data"]) !!}

                    {!! Form::label('Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name']) !!}
                    {!! Form::label('Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter E-mail Address']) !!}
                    {!! Form::label('Address') !!}
                    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Address']) !!}
                    {!! Form::label('Contact Number') !!}
                    {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number']) !!}
                    {!! Form::label('Family Details') !!}
                    {!! Form::textarea('family', null, ['class' => 'form-control', 'placeholder' => 'Enter Family Details Here ...']) !!}
                    {!! Form::label('Image') !!}<br/>
                    {!! Form::file('image', null, ['class' => 'form-control']) !!}<br/><br/>
                    {!! Form::submit('Save', ['class' => 'form-control btn btn-sm btn-primary']) !!}

                    {!! Form::close() !!}

                </div>
              </div>

@endsection
