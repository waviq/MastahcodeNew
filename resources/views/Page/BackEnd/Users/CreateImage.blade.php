@extends('Page.BackEnd.Profile')
@section('kontent')

    <div ng-app="MyAplications" ng-controller="MyController" class="col-md-12">
        {!! Form::open(['url'=>'user','files'=>true]) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!--nama form input-->
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="icon-prepend fa fa-user"></i></span>
            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Lengkap']) !!}
        </div>

        <!--alamat form input-->
        <div class="form-group input-group input-group">
            <span class="input-group-addon"><i class="icon-prepend fa fa-car "></i></span>
            {!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>'Alamat Lengkap']) !!}
        </div>

        <!--telfon form input-->
        <div class="form-group input-group input-group">
            <span class="input-group-addon"><i class="icon-prepend fa  fa-mobile  "></i></span>
            {!! Form::text('nomorTelfon',null,['class'=>'form-control','placeholder'=>'Nomor Telfon/hp']) !!}
        </div>




        <!--Title form input-->
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <!--Image form input-->
        <div class="form-group">
            {!! Form::label('image','Image:') !!}
            {!! Form::file('image',null,['class'=>'form-control']) !!}
        </div>
        
        <!--Deskription form input-->
        <div class="form-group">
            {!! Form::label('deskription','Deskription:') !!}
            {!! Form::textarea('deskription',null,['class'=>'form-control']) !!}
        </div>
        <!--submit Button Submit-->
        <div class="form-group">
            {!! Form::submit('submit', ['class' =>'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

        @include('Page.BackEnd.Partials.ErrorMessage')

    </div>


@endsection