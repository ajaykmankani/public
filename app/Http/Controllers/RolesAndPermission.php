<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermission extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.rolesPermissions.role', compact('roles'));
    }
    public function role_index()
    {
        return view('admin.rolesPermissions.create_role');
    }

    public function permission_index()
    {
        return view('admin.rolesPermissions.create_permission');
    }

    public function assign_permission_index($id)
    {
        $roles = Role::where('id', $id)->first();
        $permissions = Permission::all();
        return view('admin.rolesPermissions.assign_permissions', compact('roles','permissions'));
    }


    public function create_role(Request $request)
    {
        $role_name = $request->role_name;
        $role = Role::create(['name' => $role_name]);
        if ($role) {
            return redirect()->back()->with('success', 'Role "' . $role_name . '" created successfully');
        }

    }

    public function create_permission(Request $request)
    {
        $permission_name = $request->permission_name;
        $permission = Permission::create(['name' => $permission_name]);
        if ($permission) {
            return redirect()->back()->with('success', 'Permission "' . $permission_name . '" created successfully');
        }

    }

    public function assign_permission(Request $request)
    {

        $roleId = $request->input('role'); // Assuming your select field name is 'role'
        $role = Role::findOrFail($roleId);
        $permissions = $request->input('permissions', []);
        $role->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Permissions assigned successfully');
    }

    public function delete_role($id)
    {
        $role = Role::where('id', $id)->first();
        $role->delete();
        return redirect()->back()->with('deleted', 'Role name "'.$role->name . '" is deleted successfully.');
    }

    public function delete_permission($id)
    {
        $permission = Permission::where('id', $id)->first();
        $permission->delete();
        return redirect()->back()->with('deleted', 'permission name "' . $permission->name . '" is deleted successfully.');
    }
}
