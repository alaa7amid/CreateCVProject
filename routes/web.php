<?php

use App\Http\Controllers\Backend\backendController;
use App\Http\Controllers\Frontend\CvController;
use App\Http\Controllers\Frontend\frontendController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Whoops\Run;

// Route::get('/test', [CvController::class,'downloadCV']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Route::get('/',[frontendController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function(){
    // Route::get('user',[backendController::class,'index']);
    //basic information
    Route::get('user/basicInfo',[frontendController::class,'info'])->name('BaiscInfo');
    Route::post('user/basicInfo/store',[frontendController::class,'storeBaiscInfo'])->name('storeBaiscInfo');
    
    //edit basic information
    Route::get('user/basicInfo/edit',[frontendController::class,'editBasicInfo'])->name('editBasicInfo');
    Route::post('user/basicInfo/update',[frontendController::class,'updateBaiscInfo'])->name('updateBaiscInfo');
    
    //profile information
    Route::get('user/profile',[frontendController::class,'profilePage'])->name('profilePage');
    Route::post('user/profile/store',[frontendController::class,'storeProfileInfo'])->name('storeProfileInfo');

    //edit profile information
    Route::get('user/profile/edit',[frontendController::class,'editProfileInfo'])->name('editProfileInfo');
    route::post('user/profile/update',[frontendController::class,'updateProfileInfo'])->name('updateProfileInfo');

    //skills 
    Route::get('user/skills',[frontendController::class,'skills'])->name('skills');
    Route::post('user/skills/store',[frontendController::class,'storeSkills'])->name('storeSkills');

    //edit skills
    Route::get('user/skills/edit',[frontendController::class,'editSkills'])->name('editSkills');
    Route::post('user/skills/update',[frontendController::class,'updateSkills'])->name('updateSkills');


    //Education
    Route::get('user/education',[frontendController::class,'education'])->name('education');
    Route::post('user/education/store',[frontendController::class,'storeEducation'])->name('storeEducation');

    //edit education
    Route::get('user/education/edit',[frontendController::class,'editEducation'])->name('editEducation');
    Route::post('user/education/update',[frontendController::class,'updateEducation'])->name('updateEducation');

      //remove educations
    Route::get('user/educations/delete', [frontendController::class, 'deleteEducations'])->name('deleteEducations');
    Route::delete('/education/{id}', [frontendController::class, 'destroyEducation'])->name('destroyEducation');

     Route::get('user/experience/delete', [frontendController::class, 'deleteExperiences'])->name('deleteExperiences');
     Route::delete('/experience/{id}', [frontendController::class, 'destroyExperience'])->name('destroyExperience');
 
    //language
    Route::get('user/language',[frontendController::class,'language'])->name('language');
    Route::post('user/language/store',[frontendController::class,'storeLanguage'])->name('storeLanguage');
    
    //edit skills
    Route::get('user/language/edit',[frontendController::class,'editLanguage'])->name('editLanguage');
    Route::post('user/language/update',[frontendController::class,'updateLanguage'])->name('updateLanguage');

    // //image
    // Route::get('user/image',[frontendController::class,'uploadImage'])->name('uploadImage');
    // Route::post('user/image/store',[frontendController::class,'storeImage'])->name('storeImage');

    // //edit image 
    // Route::get('user/image/edit',[frontendController::class,'editImage'])->name('editImage');
    // Route::post('user/image/update',[frontendController::class,'updateImage'])->name('updateImage');

    //experience 
    Route::get('user/experience',[frontendController::class,'experience'])->name('experience');
    Route::post('user/experience/store',[frontendController::class,'experienceStore'])->name('experienceStore');

    //edit experience 
    Route::get('user/experience/edit',[frontendController::class,'editExperience'])->name('editExperience');
    Route::post('user/experience/update',[frontendController::class,'updateExperience'])->name('updateExperience');

     //remove experience
     // لعرض جميع الخبرات للمستخدم
    Route::get('user/experience/delete', [frontendController::class, 'deleteExperiences'])->name('deleteExperiences');
    Route::delete('/experience/{id}', [frontendController::class, 'destroyExperience'])->name('destroyExperience');

    //projects 
    Route::get('user/projects',[frontendController::class,'projects'])->name('projects');
    Route::post('user/projects/store',[frontendController::class,'projectsStore'])->name('projectsStore');

    //edit projects 
    Route::get('user/projects/edit',[frontendController::class,'editProjects'])->name('editProjects');
    Route::post('user/projects/update',[frontendController::class,'updateProjects'])->name('updateProjects');
    
    //remove projects
    Route::get('user/projects/delete',[frontendController::class,'deleteProjects'])->name("deleteProjects");
    Route::delete('/projects/{id}', [frontendController::class, 'destroyProject'])->name('deleteProject');


    //certificates
    Route::get('user/certificates',[frontendController::class,'Certificates'])->name('Certificates');
    Route::post('user/certificates/store',[frontendController::class,'CertificateStore'])->name('CertificateStore');
    
    //edit certificates 
    Route::get('user/certificates/edit',[frontendController::class,'CertificatesEdit'])->name('CertificatesEdit');
    Route::post('user/certificates/update',[frontendController::class,'CertificatesUpdate'])->name('CertificatesUpdate');
   
 


    // create CV
    Route::get('user/create/cv',[CvController::class,'createCv'])->name('createCv');

    //download cv
    Route::get('user/dowmload/cv',[CvController::class,'downloadCV'])->name('downloadCV');
    // Route::get('/download-cv', function() {
    //     $filePath = public_path('front-end/CV/cv-templet.blade.php'); // تأكد من أن المسار صحيح
    //     return response()->download($filePath, 'cv-templet.blade.php');
    // })->name('downloadCV');


    //dashboard
    Route::get('dashboard',[backendController::class,'dashboard'])->name('dashboard.admin')->middleware('admin');
    Route::get('dashboard/admins',[backendController::class,'admins'])->name('dashboard.admins')->middleware('admin');
    Route::get('dashboard/admin',[backendController::class,'admin_page'])->name('admin_page')->middleware('admin');
    Route::post('dashboard/admin/add',[backendController::class,'add_admin'])->name('add_admin')->middleware('admin');
    Route::get('dashboard/admins/edit/{id}',[backendController::class,'edit_admin'])->name('edit_admin')->middleware('admin');
    Route::post('dashboard/admins/update/{id}',[backendController::class,'update_admin'])->name('update_admin')->middleware('admin');
    Route::delete('dashboard/admins/delete/{id}',[backendController::class,'delete_admin'])->name('delete_admin')->middleware('admin');

    //user profile 
    Route::get('/profile',[UserProfileController::class,'profile_page'])->name('profile_page');
    Route::post('/profile/update/{id}',[UserProfileController::class,'update_profile'])->name('update_profile');
    Route::post('/profile/update_password',[UserProfileController::class,'update_password'])->name('update_password');
    
});


Route::get('/',[frontendController::class,'index'])->name('website');


//Translation of website
Route::get('/language/{locale}', function ($lang) {
    // تحقق من أن اللغة صحيحة (مثلاً "en" أو "ar")
    if (! in_array($lang, ['en', 'ar'])) {
        abort(400); // إذا لم تكن اللغة صالحة، عرض خطأ 400
    }

    // تخزين اللغة في الجلسة
    Session::put('locale', $lang);

    // إعادة توجيه المستخدم إلى الصفحة السابقة أو إلى الصفحة الرئيسية
    return redirect()->back();
});

Route::get("/test",function(){
    return view('welcome');
});