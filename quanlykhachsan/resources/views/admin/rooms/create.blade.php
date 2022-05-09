@extends('admin.layouts.layout')

@section('title')
Tạo Mới Phòng
@stop

@section('content_header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Tạo Mới Phòng</h1>
</div>
@stop

@section('contents')
<div class="col-md-2"></div>
<div class="col-md-8">
    @include('admin.layouts.alert')
    <form action="{{ route('admin.room.store') }}" method="post" enctype='multipart/form-data'>
        @csrf
        @include('admin.rooms.form')
    </form>
</div>
@stop