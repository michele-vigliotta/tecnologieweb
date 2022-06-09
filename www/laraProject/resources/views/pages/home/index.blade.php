@extends('layouts.default')

@section('content1')
    @include('includes.slider')
@stop


@section('content2')
    @include('contentSections.home.about')
    @include('contentSections.home.saleSection')
    @include('contentSections.home.whyUs')

@stop

