@extends('admin.layouts.layout')

@section('title')
Chỉnh Sửa Phòng
@stop

@section('content_header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Chỉnh Sửa Phòng</h1>
</div>
@stop

@section('contents')
<div class="col-md-2"></div>
<div class="col-md-8">
    @include('admin.layouts.alert')
    <form action="{{ route('admin.room.update', ['room' => $room->id]) }}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('PATCH')
        @include('admin.rooms.form')
    </form>
</div>
@stop