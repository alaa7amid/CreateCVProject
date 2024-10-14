<?php

use App\Http\Controllers\Backend\backendController;
use App\Http\Controllers\Frontend\CvController;
use App\Http\Controllers\Frontend\frontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


// Route::get('/test', [CvController::class,'downloadCV']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

    //projects 
    Route::get('user/projects',[frontendController::class,'projects'])->name('projects');
    Route::post('user/projects/store',[frontendController::class,'projectsStore'])->name('projectsStore');

    //edit projects 
    Route::get('user/projects/edit',[frontendController::class,'editProjects'])->name('editProjects');
    Route::post('user/projects/update',[frontendController::class,'updateProjects'])->name('updateProjects');
 


    // create CV
    Route::get('user/create/cv',[CvController::class,'createCv'])->name('createCv');

    //download cv
    Route::get('user/dowmload/cv',[CvController::class,'downloadCV'])->name('downloadCV');
    // Route::get('/download-cv', function() {
    //     $filePath = public_path('front-end/CV/cv-templet.blade.php'); // تأكد من أن المسار صحيح
    //     return response()->download($filePath, 'cv-templet.blade.php');
    // })->name('downloadCV');

    
});



Route::get('/',[frontendController::class,'index'])->name('dashboard');
