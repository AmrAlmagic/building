@extends('layouts.app')


@section('title')

     Building Editing {{ $bu->bu_name }}

@endsection

@section('header')

    {!!  Html::style('cus/buall.css')  !!}

@endsection
@section('content')


    <div class="container">
        <div class="row profile">
            @include('website.bu.pages')

            <div class="col-md-9">

                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/user/buildingshowwaiting') }}">Buildings wait for Activate</a></li>
                    <li><a href="{{ url('/user/edit/building/'.$bu->id) }}">Building Editing {{ $bu->bu_name }}</a></li>

                </ol>

                <div class="profile-content">
                    {!!  Form::model($bu,['url'=>'/user/update/building','method'=>'patch','files' => true])!!}
                    <input type="hidden" name="bu_id" value="{{ $bu->id }}"/>
                    @include('admin.bu.form',['user' => 1])
                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>
    <br>
    <br>




@endsection
