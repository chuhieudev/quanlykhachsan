<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::get();
        return view('admin.rooms.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('imageFile')) {
            $file = $request->imageFile;
            $fileName = $file->getClientoriginalName();
            $file->move(public_path('images'), $fileName);
        }

        $request->merge(['status' => 0]);
        $request->merge(['image' => $fileName]);
        Room::create($request->all());
        return redirect()->route('admin.room.create')->with('status', 'Tạo Phòng Thành Công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \app\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        if ($request->has('imageFile')) {
            $file = $request->imageFile;
            $fileName = $file->getClientoriginalName();
            $file->move(public_path('images'), $fileName);
        }

        $request->merge(['status' => 0]);
        $request->merge(['image' => $fileName]);
        $room->update($request->all());
        return redirect()->route('admin.roomr.edit', ['room' => $room->id])->with('status', 'Cập Nhật Phòng Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('admin.room.index');
    }
}
