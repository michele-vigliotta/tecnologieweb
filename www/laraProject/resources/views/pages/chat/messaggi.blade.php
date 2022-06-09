@extends('layouts.default')
@section('optionalStyle')
    <link rel="stylesheet" type="text/css" href="{{ URL('css/chatstyle.css') }}">
@stop
@section('content1')
    @include('contentSections.chat.messageView')
@stop
