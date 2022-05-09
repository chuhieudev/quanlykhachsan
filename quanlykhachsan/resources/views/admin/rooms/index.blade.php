@extends('admin.layouts.layout')

@section('title')
Quản Lý Phòng
@stop

@section('content_header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Quản Lý Phòng</h1>
</div>
@stop
@section('contents')
<div class="col-md-12 mb-3">
    <a href="{{ route('admin.room.create') }}" class="btn btn-primary">Thêm Phòng</a>
</div>
<div class="col-md-12" id="results" style="padding-top: 30px;">
    <table class="table table-striped table-hover">
        <thead class="table-info">
        <tr>
            <th scope="col">ID Phòng</th>
            <th scope="col">Loại Phòng</th>
            <th scope="col">Image</th>
            <th scope="col">Giá</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Chỉnh sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <th scope="row">{{ $room->id }}</th>
                <td>{{ $room->room_type }}</td>
                <td style="width: 150px"><img src="images/{{$room->image}}" alt="" class="img-fluid"></td>
                <td>{{number_format($room->price)}}</td>
                <td>{{$room->description}}</td>
                <td>{{ $room->status == 1 ? 'Đã Thuê' : 'Chưa Thuê' }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.roomr.edit', ['room' => $room->id]) }}"><i
                            class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{ route('admin.room.destroy', ['room' => $room->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger delete" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop

@push('js')
<script src={{ asset('js/confirm_delete.js') }}></script>
@endpush
