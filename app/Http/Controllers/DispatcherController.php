<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DispatcherController extends Controller
{
    public function index()
    {
        $dispatchers = User::dispatchers()->get();
        return view('admin.dispatchers.index', compact('dispatchers'));
    }

    public function create()
    {
        return view('admin.dispatchers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => 3, // Set role as dispatcher
        ]);

        return redirect()->route('dispatchers.index')->with('success', 'Dispatcher created successfully.');
    }

    public function edit(User $dispatcher)
    {
        return view('admin.dispatchers.edit', compact('dispatcher'));
    }

    public function update(Request $request, User $dispatcher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $dispatcher->id,
        ]);

        $dispatcher->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $dispatcher->password,
        ]);

        return redirect()->route('dispatchers.index')->with('success', 'Dispatcher updated successfully.');
    }

    public function destroy(User $dispatcher)
    {
        $dispatcher->delete();
        return redirect()->route('dispatchers.index')->with('success', 'Dispatcher deleted successfully.');
    }
}
