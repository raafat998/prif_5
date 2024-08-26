<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    /**
     * Display a listing of the bookings.
     */
    public function index()
    {
        try {
            $bookings = Booking::with(['client', 'property'])->get();
            return response()->json(['data' => $bookings], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve bookings', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created booking in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'start_date' => 'required|date|after_or_equal:today',
                'end_date' => 'required|date|after:start_date',
                'total_price' => 'required|numeric|min:0',
                'payment_status' => 'required|string|in:paid,pending',
                'client_id' => 'required|exists:clients,id',
                'property_id' => 'required|exists:properties,id',
            ]);

            $booking = Booking::create($validatedData);

            return response()->json(['data' => $booking, 'message' => 'Booking created successfully'], 201);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Validation Error', 'messages' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create booking', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified booking.
     */
    public function show(Booking $booking)
    {
        try {
            $booking->load(['client', 'property']);
            return response()->json(['data' => $booking], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve booking', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified booking in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        try {
            $validatedData = $request->validate([
                'start_date' => 'sometimes|date|after_or_equal:today',
                'end_date' => 'sometimes|date|after:start_date',
                'total_price' => 'sometimes|numeric|min:0',
                'payment_status' => 'sometimes|string|in:paid,pending',
                'client_id' => 'sometimes|exists:clients,id',
                'property_id' => 'sometimes|exists:properties,id',
            ]);

            $booking->update($validatedData);

            return response()->json(['data' => $booking, 'message' => 'Booking updated successfully'], 200);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Validation Error', 'messages' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update booking', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified booking from storage.
     */
    public function destroy(Booking $booking)
    {
        try {
            $booking->delete();
            return response()->json(['message' => 'Booking deleted successfully'], 204);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete booking', 'message' => $e->getMessage()], 500);
        }
    }
}
