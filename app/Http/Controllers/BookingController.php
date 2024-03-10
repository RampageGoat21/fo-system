<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomTypes;
use App\Models\Customers;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking.index', [
            'title' => 'Booking',
            'booking' => Booking::with(['room', 'customers'])->orderBy('id', 'desc')->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('booking.create', [
            'title' => 'Booking',
            'rooms' => RoomTypes::all(),
            'customers' => Customers::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // return $request;
        
        $validatedData = $request->validate([
            'customers_id' => 'required',
            'room_id' => 'required',
            'numOfRoom' => 'required',
            'checkIn' => 'required',
            'checkOut' => 'required',
            'priceSum' => 'required',
            'note' => 'nullable'
        ]);

        Booking::create($validatedData);

        // Jika booking ditambahkan, kurangi value room_types.available dengan bookings.numOfRoom 
        // Jika booking ditambahkan, tambahkan value room_types.total dengan bookings.numOfRoom 
        $room = $request->room_id;
        $total = (int)request()->numOfRoom;
        $totalDb = RoomTypes::select('total')->value('total');
        $availDb = RoomTypes::select('available')->value('available');


        RoomTypes::where('id', $room)->update(['total' => $totalDb + $total ]);
        RoomTypes::where('id', $room)->update(['available' => $availDb - $total]);

        return redirect('/booking')->with('success', 'Booking baru berhasil ditambakan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('booking.show', [
            'title' => 'Booking',
            'booking' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('booking.edit', [
            'title' => 'Booking',
            'booking' => $booking
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Booking $booking)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function clickSearch(Customers $customer)
    {
        $value = $_GET["q"];
        $query = $customer->where('id', $value )->first();

        return response()->view('booking.clickSearch', [
             'customers' => $query
         ]);
    }

    public function getPrice(RoomTypes $room)
    {
        $value = $_GET["q"];
        $query = $room->where('id', $value )->first();

        return response()->view('booking.getPrice', [
             'rooms' => $query
         ]);
    }

    public function cancel($id)
    {
        Booking::where('id', $id)->update(['status' => 3]);

        return redirect('/booking')->with('success', 'Status booking berhasil dibatalkan !');
    }
    
    public function done($id)
    {
        Booking::where('id', $id)->update(['status' => 2]);

        return redirect('/booking')->with('success', 'Status booking telah selesai !');
    }
}
