@extends('layouts.layout')

@section('title')
    <title>{{ \Illuminate\Support\Facades\Auth::user()->name }}</title>
@endsection

@section('content')
    @include('components.header')


@endsection
