@extends('layouts.default')

@section('content1')
    @include('includes.slider')
@stop


@section('content2')
    @include('contentSections.general.about')
    @include('contentSections.general.saleSection')
    @include('contentSections.general.whyUs')

@stop

