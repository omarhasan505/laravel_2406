<?php

namespace App\Http\Controllers\Backend\RolePermission;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;

use function Laravel\Prompts\alert;

class RolePermissionController extends Controller
{
   public function createUser(){
        return view('pages.rolePermission.rolePermission');
   }

   //* Role list
   public function roleList(){
        $user_role = Role::get();
    return view('pages.rolePermission.roleList' , compact('user_role'));
   }

   //*  Deletting Role
   public function roleListDelet($id){
    Role::find($id)->delete();
    return back();
   }

   //* Creating Role For Users

   public function createRole(){
    return view('pages.rolePermission.createRole');
   }

   //* Store Role
   public function storeRole(Request $request){
    // dd($request->all());

        $role = new Role();
        $role -> name = $request->role_name;
        $role ->guard_name = 'web';
        $role->save();
        return back()->with('success' , 'Role successfully created!');
   }


    //* User Role
    public function userRole($id)
    {
        $users = User::find($id);
        $user_role = Role::get();
        return view('pages.rolePermission.userRoleList', compact('user_role', 'users'));
    }

   //* storing user Role
   public function userRoleStore(Request $request){
        $users = User::find($request->user_id);
        $users->syncRoles($request->roles);
        return back()->with('success' , 'Role assigned sucessfully!');
   }

    //* user role List
    public function userRoleList(){
        $users = Role::latest()->get();
        return view('pages.rolePermission.userRolelist' , compact('users'));
    }


    //* User Permission list
    public function permissionList($id){
        $role = Role::find($id);
        $permissions = Permission::latest()->get();
        return view('pages.rolePermission.permission' , compact('permissions' , 'role') );
    }


    //* Store Permission list
    public function permissionListStore(Request $request){
        // dd($permission);

        $permissions = Role::find($request->role_id);

        $permissions->syncPermissions($request->permission);

        return back()->with('success' , 'Permission granted successfully!');

    }


    //* userlist
    public function listUser (){
        $users = User::latest()->get();
        return view('pages.rolePermission.userList' , compact('users'));
    }

    //*edit user
    public function editUser($id){
      $editUser =  User::find($id);
      return view('pages.rolePermission.editUser' , compact('editUser'));
    }

    //*update user
    public function updateUser( Request $request,  $id){



        $request->validate([

            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required|min:6',
        ]);

        if ($request->user_password != $request->user_confirm_password) {
            return back()->with('pass_error', 'comfirm password not matched');
        }

        if (!Storage::disk('public')->exists('userProfile')) {
            Storage::disk('public')->makeDirectory('userProfile');
        }

        $userInfo =  User::find($id);

        if ($request->hasFile('user_image')) {
            $image = $request->file('user_image');
            $uniName = 'user-profile-' . time() . '-' . $image->getClientOriginalName();
            $image->storeAs('userProfile/', $uniName, 'public');
            $userInfo->userProfile = $uniName;
        }

        $userInfo->name = $request->user_name;
        $userInfo->email = $request->user_email;
        $userInfo->password = Hash::make($request->user_password);
        $userInfo->save();

        return back()->with('success', 'Updated successfully!');


    }

    //* Delet User
    public function deletUser($id){
        User::find($id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }



   //* User Info

    public function storeUser (Request $request){

            $request->validate([

            'user_image' => 'required|image|max:2048|mimes:png,jpg,webp',
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required|min:6',
            ]);

            if($request->user_password != $request->user_confirm_password){
                return back()->with('pass_error' , 'comfirm password not matched');
            }

        if (!Storage::disk('public')->exists('userProfile')) {
            Storage::disk('public')->makeDirectory('userProfile');
        }

            $userInfo = new User();

            if($request->hasFile('user_image')){
                $image = $request->file('user_image');
                $uniName = 'user-profile-' . time() . '-' . $image->getClientOriginalName();
                $image -> storeAs('userProfile/' , $uniName , 'public');
                $userInfo -> userProfile = $uniName;
            }

            $userInfo -> name = $request->user_name;
            $userInfo ->email = $request->user_email;
            $userInfo ->password = Hash::make($request->user_password);
            $userInfo->save();

        return back()->with('success', 'Registered successfully');

}

}
