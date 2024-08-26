<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function search(Request $request)
    {
        $query = Property::query();
        
        // Search across multiple fields (property_name, description, location)
        if ($request->filled('query')) {
            $searchTerm = '%' . $request->input('query') . '%';
            $query->where(function($q) use ($searchTerm) {
                $q->where('property_name', 'like', $searchTerm)
                  ->orWhere('description', 'like', $searchTerm)
                  ->orWhere('location', 'like', $searchTerm);
            });
        }
    
        // Filter by specific location if provided
        if ($request->filled('location')) {
            $query->where('location', $request->input('location'));
        }
    
        // Filter by minimum price if provided
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }
    
        // Filter by maximum price if provided
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }
    
        // Filter by rooms
        if ($request->filled('rooms')) {
            $query->where('rooms', $request->input('rooms'));
        }
    
        // Filter by bathrooms
        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', $request->input('bathrooms'));
        }
    
        // Filter by property size area range
        if ($request->filled('area')) {
            [$min, $max] = explode('-', $request->input('area'));
            $query->whereBetween('property_size', [(int) $min, (int) $max]);
        }
    
        // Sorting
        if ($request->filled('sort_by')) {
            $sortBy = $request->input('sort_by');
            switch ($sortBy) {
                case 'price_low_high':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_high_low':
                    $query->orderBy('price', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }
    
        // Execute the query and paginate the results
        $properties = $query->paginate(10);
    
        return view('listing6', compact('properties'));
    }
    
    
    
  public function listing(Request $request)
{
    $query = Property::query();

    // Apply filters based on the request
    if ($request->has('city')) {
        $query->where('location', $request->input('city'));
    }

    if ($request->has('status')) {
        $query->where('availability', $request->input('status'));
    }

    if ($request->has('min_price') && $request->has('max_price')) {
        $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
    }

    $properties = $query->paginate(10); // Use pagination

    return view('listing6', compact('properties')); // Correct view file name
}


    public function index()
    {
        $properties = Property::latest()->take(3)->get();

        // Pass the properties to the view
        return view('home', compact('properties'));
    }
    /**
     * Store a newly created property in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'property_name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'property_size' => 'required|numeric|min:0',
                'garage_size' => 'nullable|numeric|min:0',
                'rooms' => 'required|integer|min:0',
                'bathrooms' => 'required|integer|min:0',
                'availability' => 'required|string|in:available,not available',
                'description' => 'nullable|string',
                'location' => 'required|string|max:255',
                'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image6' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Set a default renter_id for testing if it's not provided
            if (empty($validatedData['renter_id'])) {
                $validatedData['renter_id'] = 1; // Assuming 1 is a valid renter_id in your renters table
            }

            // Handle file uploads
            foreach (['image1', 'image2', 'image3', 'image4', 'image5', 'image6'] as $imageField) {
                if ($request->hasFile($imageField)) {
                    $validatedData[$imageField] = $request->file($imageField)->store('public/properties');
                }
            }

            // Create the property with the validated data
            $property = Property::create($validatedData);

            return response()->json(['data' => $property, 'message' => 'Property created successfully'], 201);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Validation Error', 'messages' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create property', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified property in storage.
     */
    public function update(Request $request, Property $property)
    {
        try {
            $validatedData = $request->validate([
                'property_name' => 'sometimes|string|max:255',
                'price' => 'sometimes|numeric|min:0',
                'property_size' => 'sometimes|numeric|min:0',
                'garage_size' => 'nullable|numeric|min:0',
                'rooms' => 'sometimes|integer|min:0',
                'bathrooms' => 'sometimes|integer|min:0',
                'availability' => 'sometimes|string|in:available,not available',
                'description' => 'nullable|string',
                'location' => 'sometimes|string|max:255',
                'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image6' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Handle file uploads and optionally delete old images
            foreach (['image1', 'image2', 'image3', 'image4', 'image5', 'image6'] as $imageField) {
                if ($request->hasFile($imageField)) {
                    // Delete the old image if it exists
                    if ($property->$imageField) {
                        Storage::delete($property->$imageField);
                    }

                    // Store the new image
                    $validatedData[$imageField] = $request->file($imageField)->store('public/properties');
                }
            }

            // Update the property with the validated data
            $property->update($validatedData);

            return response()->json(['data' => $property, 'message' => 'Property updated successfully'], 200);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Validation Error', 'messages' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update property', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified property from storage.
     */
    public function destroy(Property $property)
    {
        try {
            // Delete associated images
            foreach (['image1', 'image2', 'image3', 'image4', 'image5', 'image6'] as $imageField) {
                if ($property->$imageField) {
                    Storage::delete($property->$imageField);
                }
            }

            // Delete the property
            $property->delete();

            return response()->json(['message' => 'Property deleted successfully'], 204);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete property', 'message' => $e->getMessage()], 500);
        }
    }
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('listing-single', compact('property'));
    }
    
}
