@extends('layouts.app')

@section('header')
    @include('layouts.base.header')
@endsection

@section('content')
    @include('layouts.posts.posts-section')
@endsection

@section('footer')
    @include('layouts.base.footer')
@endsection
