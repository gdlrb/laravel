@extends('app')

@section('content')

    @include('post._menu')

    <h1>Create</h1>
    {!! Form::open(['route' => 'post.store']) !!}
    @include('post._form')
    {!! Form::close()!!}
@endsection

