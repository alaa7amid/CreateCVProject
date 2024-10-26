<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class backendController extends Controller
{
 
    public function dashboard(){
        $users = User::all();
        $num_users = $this->num_user();
        return view('backend.dashboard.dashboard',compact('users','num_users'));
    }

    public function num_user(){
        $users = User::all()->count();
        return $users;
    }

    public function admins(){
        $users = User::all();
        return view('backend.dashboard.admins',compact('users'));
    }

    public function admin_page(){
        return view('backend.dashboard.add');
    }

    public function add_admin(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password =Hash::make($request->password);
        $admin->save();

        return redirect()->route('dashboard.admins')->with('success', 'Admin added successfully!');
    }

    public function edit_admin($id){
        $admin = User::find($id);
        return view('backend.dashboard.edit',compact('admin'));
    }

    public function update_admin(Request $request, $id)
    {
        // تحقق من صحة المدخلات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8', // اجعل كلمة المرور اختيارية
        ]);

        $admin = User::find($id);

        // تحديث الحقول الأخرى
        $admin->name = $request->name;
        $admin->email = $request->email;

        // تحديث كلمة المرور فقط إذا تم إدخالها
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }

        // حفظ التعديلات
        $admin->save();

        return redirect()->back()->with('message', __('Admin updated successfully!'));
    }

    public function delete_admin($id){
        $admin = User::find($id); 
        $admin->delete();
        return redirect()->back();
    }
}