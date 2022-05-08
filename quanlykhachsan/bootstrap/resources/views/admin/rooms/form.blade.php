@php
$room = isset($room) ? $room : new App\Models\Room();
@endphp

<div class="form-group">
    <label for="roomtype">Loại Phòng:</label><label style="color: red">(*)</label>
    <input type="text" class="form-control" value="{{ old('room_type', $room->room_type) }}" name="room_type" autocomplete="off" required>
</div>

<div class="form-group">
    <label for="image">Ảnh Hiển Thị:</label><label style="color: red">(*)</label>
    <input type="file" class="form-control" name="imageFile" autocomplete="off" required id="image">
    <img class="img" {{$room->image ?? 'hidden'}} src={{$room->image ? asset("images/$room->image") : ""}} alt="" class="img-fluid" style="width: 150px;">
</div>

<div class="form-group">
    <label for="price">Giá:</label><label style="color: red">(*)</label>
    <input type="number" class="form-control" name="price" value="{{ old('price', $room->price) }}" autocomplete="off" required>
</div>

<div class="form-group">
    <label>Description:</label><label style="color: red">(*)</label>
    <input type="text" class="form-control" name="description" autocomplete="off "value="{{ old('description', $room->description) }}" required>
</div>

<div class="box-footer text-center">
    <a href="{{ route('admin.room.index') }}" class="btn btn-primary">Quay Lại</a>
    <button type="summit" class="btn btn-primary">{{ $room->id ? 'Cập Nhật' : 'Tạo Mới' }}</button>
</div>

@push('js')
<script>
    $('#image').change(function(event) {
        var img = URL.createObjectURL(event.target.files[0]);
        $('.img').attr('src', img);
        $('.img').removeAttr('hidden');
    })
</script>
@endpush