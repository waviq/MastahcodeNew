@extends('Page.BackEnd.Profile')
@section('header')
    <h1>Form Edit FAQs</h1>
@endsection
@section('kontent')

    <div class="col-md-12">
        @include('flash::message')
        {!! Form::model($faqs,['method' => 'PATCH', 'action'=>['FAQsController@update', $faqs->id],'files'=>true]) !!}

        <!--Title form input-->
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('isi','Isi:') !!}
            {!! Form::textarea('isi',null,['class'=>'form-control']) !!}
        </div>


        {{--<!--Image form input-->
        <div class="form-group">
            {!! Form::label('image','Image:') !!}
            {!! Form::file('image',null,['class'=>'form-control']) !!}
        </div>--}}


        <!--Add Artikel Button Submit-->
        <div class="form-group">
            {!! Form::submit('Simpan', ['class' =>'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

        @include('Page.BackEnd.Partials.ErrorMessage')

    </div>




@endsection

