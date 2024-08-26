<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        try {
            $users = User::with('role')->get();
            return response()->json(['data' => $users], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve users', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
                'role_id' => 'required|exists:roles,id',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            $user = User::create($validatedData);

            return response()->json(['data' => $user, 'message' => 'User created successfully'], 201);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Validation Error', 'messages' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create user', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        try {
            $user->load('role');
            return response()->json(['data' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve user', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'sometimes|string|max:255',
                'phone' => 'sometimes|string|max:20',
                'email' => 'sometimes|email|unique:users,email,' . $user->id,
                'password' => 'sometimes|string|min:8',
                'role_id' => 'sometimes|exists:roles,id',
            ]);

            if ($request->has('password')) {
                $validatedData['password'] = Hash::make($validatedData['password']);
            }

            $user->update($validatedData);

            return response()->json(['data' => $user, 'message' => 'User updated successfully'], 200);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Validation Error', 'messages' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update user', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json(['message' => 'User deleted successfully'], 204);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete user', 'message' => $e->getMessage()], 500);
        }
    }
}
