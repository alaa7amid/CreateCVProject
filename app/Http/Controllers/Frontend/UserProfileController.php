<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function profile_page(){
        $user = Auth::user();
        return view('front-end.profile.profile',compact('user'));
    }

    public function update_profile(Request $request) {
        $user = Auth::user();  // جلب المستخدم الحالي
    
        // التحقق من المدخلات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,  // التأكد من فريدة البريد مع استثناء المستخدم الحالي
        ]);
    
        // تحديث البيانات
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();  // حفظ التغييرات
    
        return redirect()->back()->with('message', 'Profile updated successfully!');
    }
    
    public function update_password(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',  // التأكد من أن كلمة المرور الجديدة تم تأكيدها
        ]);
        
        $user = Auth::user();

        if(Hash::check($request->old_password,$user->password)){
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('message', 'Password updated successfully!');
            
        }
        return back()->with('message','uncorracte password');
        
    }
}
