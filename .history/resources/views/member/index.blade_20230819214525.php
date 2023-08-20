@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <span style="">
                        View GLC Member
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped-columns">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Conatact</th>
                            </tr>
                        </thead>
                    </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
