@extends('layouts.default')
@section('carousel')
    @include('includes.slider')
@stop


@section('content')
    @include('contentSections.general.about')
    @include('contentSections.general.saleSection')
    @include('contentSections.general.whyUs')

@stop

