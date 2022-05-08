<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Order;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::get();
        $availableRooms = Room::where('status', 0)->get();
        return view('index', compact('rooms', 'availableRooms'));
    }

    public function about()
    {
        $rooms = Room::get();
        $availableRooms = Room::where('status', 0)->get();
        return view('about', compact('rooms', 'availableRooms'));
    }

    public function contact()
    {
        $rooms = Room::get();
        $availableRooms = Room::where('status', 0)->get();
        return view('contact', compact('rooms', 'availableRooms'));
    }

    public function events()
    {
        $rooms = Room::get();
        $availableRooms = Room::where('status', 0)->get();
        return view('events', compact('rooms', 'availableRooms'));
    }

    /**
     * Order room.
     *
     */
    public function createOrder(Request $request)
    {
        $rooms = Room::get();
        if ($request->has('roomId')) {
            $roomOrder = Room::whereId($request->get('roomId'))->first();
        }

        return view('order-room', compact('roomOrder', 'rooms'));
    }

    /**
     * Store order room.
     *
     */
    public function storeOrder(Request $request)
    {
        $rooms = Room::get();
        $availableRooms = Room::where('status', 0)->get();
        Order::create([
            'room_id' => $request->get('id'),
            'name_customer' => $request->get('name'),
            'phone' => $request->get('phone'),
            'time_order' => $request->get('time'),
            'total_price' => $request->get('total')
        ]);

        return view('index', compact('rooms', 'availableRooms'));
    }
}
