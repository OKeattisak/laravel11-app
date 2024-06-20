<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $roleAdmin = Role::create(['name' => 'Administrator']);
        // $roleStaff = Role::create(['name' => 'Staff']);
        // $permission = Permission::create(['name' => 'read articles']);
        // $permission = Permission::create(['name' => 'create articles']);
        // $permission = Permission::create(['name' => 'update articles']);
        // $permission = Permission::create(['name' => 'delete articles']);
        $role = Role::with('permissions')->get();
        // $permission = Permission::where('name', 'delete articles')->first();
        // $role->givePermissionTo($permission);
        return response()->json([
            'data' => $role
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
