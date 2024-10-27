<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Language;
use App\Models\ProfileInfo;
use App\Models\Project;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Log;


class frontendController extends Controller
{
    public function index()
    {
        return view('front-end.master');
    }

    // Baisc Information 
    public function info(){
        return view('front-end.cv-content.basic-info');
    }
    // store Baisc Information 

    public function storeBaiscInfo(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',
            'address' => 'required|string',
            'country' => 'required|string',
            'linkedin' => 'nullable|string',
            'github' => 'nullable|string',
            'jobTitle' => 'required|string',

        ]);

        $info = new BasicInfo();
        $info->user_id = Auth::user()->id;
        $info->name = $request->name;
        $info->email = $request->email;
        $info->phoneNumber = $request->phoneNumber;
        $info->address = $request->address;
        $info->country = $request->country;
        $info->linkedin = $request->linkedin;
        $info->github = $request->github;
        $info->jobTitle = $request->jobTitle;
        $info->save();

        return redirect()->route('profilePage')->with('message',__('Basic information has been added successfully.'));
    }

    // Edit Basic Information 
    public function editBasicInfo(){
        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        if($basicInfo){
            return view('front-end.cv-content.edit_basic_info',compact('basicInfo'));
        }
        
        return view('front-end.cv-content.no-data');
    }

    //Update Basic Information
    public function updateBaiscInfo(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',
            'address' => 'required|string',
            'country' => 'required|string',
            'linkedin' => 'nullable|string',
            'github' => 'nullable|string',
            'jobTitle' => 'required|string',
        ]);

        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        if($basicInfo){
            $basicInfo->name = $request->name;
            $basicInfo->email = $request->email;
            $basicInfo->phoneNumber = $request->phoneNumber;
            $basicInfo->address = $request->address;
            $basicInfo->country = $request->country;
            $basicInfo->linkedin = $request->linkedin;
            $basicInfo->github = $request->github;
            $basicInfo->jobTitle = $request->jobTitle;
            $basicInfo->save();

            return redirect()->back()->with('message',__('Basic information has been updated successfully.'));
        }
        return redirect()->back()->with('message',__('No record found to update.'));
    }


    // progile Information Seconde page
    public function profilePage(){
        $profileInfo = ProfileInfo::where('user_id',Auth::user()->id)->first();
            return view('front-end.cv-content.profile_info');
    }

    // Store Profile Information 
    public function storeProfileInfo(Request $request){
        $request->validate([
            'profile'=>'required|string'
        ]);

        $profile = new ProfileInfo();
        $profile->user_id = Auth::user()->id;
        $profile->profile = $request->profile;
        $profile->save();

        return redirect()->route('skills')->with('message',__('Profile information has been added successfully.'));
    }

    //Edit Profile Information
    public function editProfileInfo(){
        $profileInfo = ProfileInfo::where('user_id',Auth::user()->id)->first();
        if($profileInfo){
        return view('front-end.cv-content.edit_profile_info',compact('profileInfo'));  
        }
        return view('front-end.cv-content.no-data');
    }

    //Update Profile Information
    public function updateProfileInfo(Request $request){

        $request->validate([
            'profile'=>'required|string'
        ]);
        $profileInfo = ProfileInfo::where('user_id',Auth::user()->id)->first();

        if($profileInfo){
            $profileInfo->profile = $request->profile;
            $profileInfo->save();
            return redirect()->back()->with('message',__('Profile information has been updated successfully.'));
        }
        return redirect()->back()->with('message',__('No record found to update.'));
    }


    //Skills
    public function skills(){
        return view('front-end.cv-content.skills');
    }

    public function storeSkills(Request $request){
        $request->validate([
            'skills'=>'required'
        ]);

        $skills = new Skills();
        $skills->user_id = Auth::user()->id;
        $skills->skills = $request->skills;
        $skills->save();

        return redirect()->route('education')->with('message',__('Skills have been added successfully.'));
 
    }

    //Edit Skills
    public function editSkills(){
        $skills = Skills::where('user_id',Auth::user()->id)->first();
        if($skills){
            return view('front-end.cv-content.edit_skills',compact('skills')); 
        }
        return view('front-end.cv-content.no-data');
 
    }

    //Update Skills
    public function updateSkills(Request $request){
        $request->validate([
            'skills'=>'required'
        ]);

        $skills = Skills::where('user_id',Auth::user()->id)->first();
        if($skills){
            $skills->update([
            'skills'=>$request->skills,
        ]);
        $skills->save();
        return redirect()->back()->with('message',__('Skills have been updated successfully.'));
        }
        return redirect()->back()->with('message',__('No record found to update.'));

    }

    //Education
    public function education(){ 
        return view('front-end.cv-content.education');
    }

    //Store Education
    public function storeEducation(Request $request){

        $request->validate([
            'education_level'=>'required|string',
            'startDate'=>'required|date',
            'endDate'=>'required|date',
            'department'=>'required|string',

        ]);
        
        $education = new Education();
        $education->user_id = Auth::user()->id;
        $education->education_level = $request->education_level;
        $education->startDate = $request->startDate;
        $education->endDate  = $request->endDate;
        $education->department = $request->department;
        $education->save();

        return redirect()->back()->with('message',__('Education details have been added successfully.'));
    }

    //Edit Education
    public function editEducation(){
        $education = Education::where('user_id',Auth::user()->id)->get();
        if(!$education->isEmpty()){
           return view('front-end.cv-content.edit_education',compact('education')); 
        }
        return view('front-end.cv-content.no-data');
    }

    //Update Education
    public function updateEducation(Request $request){
        
        $education = Education::where('user_id',Auth::user()->id)->get();

        if($education->isNotEmpty()){
            foreach($education as $edu){
              if(isset($request->education[$edu->id])){
                $edu->update([
                    'education_level' => $request->education[$edu->id]['education_level'],
                    'startDate' => $request->education[$edu->id]['startDate'],
                    'endDate' => $request->education[$edu->id]['endDate'],
                    'department' => $request->education[$edu->id]['department'],
                ]);
              }  
            }
            return redirect()->back()->with('message', __('Education details have been updated successfully.'));
        }
        return redirect()->back()->with('message', 'No record found to update.');

    }
    
    //delete educations
    public function deleteEducations()
    {
        // جلب الخبرات التي تخص المستخدم الحالي
        $educations = Education::where('user_id', Auth::user()->id)->get();
        return view('front-end.cv-content.remove_education', compact('educations'));
    }

    public function destroyEducation($id)
    {
        // العثور على الخبرة بحسب الـ ID
        $education = Education::find($id);
        
        if ($education) {
            // حذف الخبرة
            $education->delete();
            return redirect()->back()->with('message', __('Education details has been deleted successfully.'));
        }

        return redirect()->back()->with('error', __('No record found to update.'));
    }

    //Language 
    public function language(){
        return view('front-end.cv-content.language');
    }
    //Store Language
    public function storeLanguage(Request $request){
        // $request->validate([
        //     'language'=>'required'
        // ]);

        $language = new Language();
        $language->user_id = Auth::user()->id;
        $language->language = $request->language;
        $language->save();

        return redirect()->route('experience')->with('message',__('Language has been added successfully.'));
 
    }

    //Edit Skills
    public function editLanguage(){
        $language = Language::where('user_id',Auth::user()->id)->first();
        if($language){
            return view('front-end.cv-content.edit_language',compact('language')); 
        }
        return view('front-end.cv-content.no-data');
 
    }

    //Update Language
    public function updateLanguage(Request $request){
        $request->validate([
            'language'=>'required',
        ]);

        $language = Language::where('user_id',Auth::user()->id)->first();
        if($language){
            $language->update([
            'language'=>$request->language,
        ]);
        $language->save();
        return redirect()->back()->with('message',__('Language has been updated successfully.'));
        }
        return redirect()->back()->with('message','No record found to update.');

    }


    // //Image upload
    // public function uploadImage(){
    //     return view('front-end.cv-content.image');
    // }
    
    // // Image store
    // public function storeImage(Request $request) {
    //     $file = $request->file('image');  // استلام الصورة من الطلب
        
    //     // إنشاء اسم فريد للملف مع التاريخ
    //     $fileName = date('YmdHi') . '.' . $file->extension();

    //     // تخزين الصورة في مجلد storage/app/public/upload_image
    //     $path = $file->storeAs('public/upload_image', $fileName);

    //     // حفظ المسار في قاعدة البيانات مع تجاهل 'public/'
    //     $image = new Image();
    //     $image->user_id = Auth::user()->id;
    //     $image->image = 'upload_image/' . $fileName;  // تخزين المسار بدون 'public/'
    //     $image->save();

    //     return redirect()->route('experience')->with('message', 'The image has been updated successfully.');
    // }


    // //Edit Image
    // public function editImage(){
    //     $image = Image::where('user_id',Auth::user()->id)->first();
    //     if($image){
    //         return view('front-end.cv-content.edit_image');
    //     }
    //     return view('front-end.cv-content.no-data');
    // }

    // // Update Image
    // public function updateImage(Request $request) {
    //     $image = Image::where('user_id', Auth::user()->id)->first();

    //     if ($request->hasFile('image')) {
    //         // حذف الصورة القديمة إذا كانت موجودة
    //         if ($image && Storage::exists('public/' . $image->image)) {
    //             Storage::delete('public/' . $image->image);
    //         }

    //         // استلام الملف الجديد من الطلب
    //         $file = $request->file('image');
    //         $fileName = date('YmdHi') . '.' . $file->extension();

    //         // تخزين الصورة الجديدة في storage/app/public/upload_image
    //         $path = $file->storeAs('public/upload_image', $fileName);

    //         // تحديث المسار في قاعدة البيانات
    //         if ($image) {
    //             $image->image = 'upload_image/' . $fileName;  // تخزين المسار الجديد بدون 'public/'
    //             $image->save();
    //         } else {
    //             $newImage = new Image();
    //             $newImage->user_id = Auth::user()->id;
    //             $newImage->image = 'upload_image/' . $fileName;
    //             $newImage->save();
    //         }

    //         return redirect()->back()->with('message', 'The image has been updated successfully.');
    //     }

    //     return redirect()->back()->with('error', 'No image was uploaded.');
    // }

    

    //Experiences 
    public function experience()
    {
        return view('front-end.cv-content.experiences');
    }

    // تجربة التخزين
    public function experienceStore(Request $request)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'company_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'startDate' => 'required|date',
            'endDate' => 'nullable|date',
            'stillWorking' => 'nullable|boolean', // خيار "لا يزال يعمل هنا"
            'description' => 'required|string',
        ]);

        // إنشاء سجل جديد
        $experience = new Experience();
        $experience->user_id = Auth::user()->id;
        $experience->company_name = $request->company_name;
        $experience->position = $request->position;
        $experience->startDate = $request->startDate;

        // التعامل مع خيار "لا يزال يعمل هنا"
        $experience->endDate = $request->has('stillWorking') ? null : $request->endDate;

        $experience->description = $request->description;
        $experience->save();

        return redirect()->back()->with('message', __('The experience has been successfully entered.'));
    }

    // تحرير تجربة
    public function editExperience()
    {
        $experiences = Experience::where('user_id', Auth::user()->id)->get();
        if (!$experiences->isEmpty()) {
            return view('front-end.cv-content.edit_experiences', compact('experiences'));
        }
        return view('front-end.cv-content.no-data');
    }

    // تحديث تجربة
    public function updateExperience(Request $request)
    {
        $request->validate([
            'experiences' => 'required|array',
        ]);

        $experiences = Experience::where('user_id', Auth::user()->id)->get();

        if ($experiences->isNotEmpty()) {
            foreach ($experiences as $experience) {
                if (isset($request->experiences[$experience->id])) {
                    $stillWorking = isset($request->experiences[$experience->id]['still_working']);
                    
                    $experience->update([
                        'company_name' => $request->experiences[$experience->id]['company_name'],
                        'position' => $request->experiences[$experience->id]['position'],
                        'startDate' => $request->experiences[$experience->id]['startDate'],
                        'endDate' => $stillWorking ? null : $request->experiences[$experience->id]['endDate'],
                        'description' => $request->experiences[$experience->id]['description'],
                    ]);
                }
            }
            return redirect()->back()->with('message', __('The experiences details have been updated successfully.'));
        }

        return redirect()->back()->with('message', 'The record to update could not be found.');
    }

    // حذف الخبرات
    public function deleteExperiences()
    {
        $experiences = Experience::where('user_id', Auth::user()->id)->get();
        return view('front-end.cv-content.remove_experience', compact('experiences'));
    }

    public function destroyExperience($id)
    {
        $experience = Experience::find($id);
        
        if ($experience) {
            $experience->delete();
            return redirect()->back()->with('message', __('Experience deleted successfully.'));
        }

        return redirect()->back()->with('error', __('Experience not found.'));
    }

    // المشاريع
    public function projects()
    {
        return view('front-end.cv-content.projects');
    }

    // تخزين المشاريع
    public function projectsStore(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string',
            'Technologies' => 'required|string',
            'description' => 'required|string',
        ]);

        $projects = new Project();
        $projects->user_id = Auth::user()->id;
        $projects->project_name = $request->project_name;
        $projects->Technologies = $request->Technologies;
        $projects->description = $request->description;
        $projects->save();

        return redirect()->back()->with('message', __('The project has been successfully entered.'));
    }

    // تحرير المشاريع
    public function editProjects()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();
        if (!$projects->isEmpty()) {
            return view('front-end.cv-content.edit_projects', compact('projects'));
        }
        return view('front-end.cv-content.no-data');
    }

    // تحديث المشاريع
    public function updateProjects(Request $request)
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();

        if ($projects->isNotEmpty()) {
            foreach ($projects as $project) {
                if (isset($request->projects[$project->id])) {
                    $project->update([
                        'project_name' => $request->projects[$project->id]['project_name'],
                        'Technologies' => $request->projects[$project->id]['Technologies'],
                        'description' => $request->projects[$project->id]['description'],
                    ]);
                }
            }
            return redirect()->back()->with('message', __('The projects details have been updated successfully.'));
        }

        return redirect()->back()->with('message', __('The record to update could not be found.'));
    }

    // حذف المشاريع
    public function deleteProjects()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();
        return view('front-end.cv-content.remove_project', compact('projects'));
    }

    public function destroyProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('message', __('Project deleted successfully'));
    }

    // الشهادات
    public function Certificates()
    {
        return view('front-end.cv-content.Certificates');
    }

    // تخزين الشهادات
    public function CertificateStore(Request $request)
    {
        $request->validate([
            'certificates_name' => 'required|string',
            'description' => 'required|string',
        ]);

        $Certificate = new Certificate();
        $Certificate->user_id = Auth::user()->id;
        $Certificate->certificates_name = $request->certificates_name;
        $Certificate->description = $request->description;
        $Certificate->save();

        return redirect()->back()->with('message', __('The Certificates have been successfully entered.'));
    }

    // تحرير الشهادات
    public function CertificatesEdit()
    {
        $certificates = Certificate::where('user_id', Auth::user()->id)->get();
        if (!$certificates->isEmpty()) {
        return view('front-end.cv-content.edit_certificates', compact('certificates')); 
        }
        return view('front-end.cv-content.no-data');
    }

    // تحديث الشهادات
    public function CertificatesUpdate(Request $request)
    {
        $certificates = Certificate::where('user_id', Auth::user()->id)->get();
        if ($certificates->isNotEmpty()) {
            foreach ($certificates as $certificate) {
                if (isset($request->certificates[$certificate->id])) {
                    $certificate->update([
                        'certificates_name' => $request->certificates[$certificate->id]['certificates_name'],
                        'description' => $request->certificates[$certificate->id]['description'],
                    ]);
                }
            }
            return redirect()->back()->with('message', __('The certificates details have been updated successfully.'));
        }

        return redirect()->back()->with('message', 'The record to update could not be found.');
    }

    // حذف الشهادات
    public function deleteCertification()
    {
        $certificates = Certificate::where('user_id', Auth::user()->id)->get();
        return view('front-end.cv-content.remove_certification', compact('certificates'));
    }

    public function destroyCertificatio($id)
    {
        $Certificatio = Certificate::find($id);
        if ($Certificatio) {
            $Certificatio->delete();
            return redirect()->back()->with('message', __('Certificate deleted successfully'));
        }
    }
    }