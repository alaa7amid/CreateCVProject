<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BasicInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Language;
use App\Models\ProfileInfo;
use App\Models\Project;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

// use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function createCv(){
        $imageProfile = Image::where('user_id',Auth::user()->id)->first();
        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        $educations = Education::where('user_id',Auth::user()->id)->get();

        
        $languagesList = Language::where('user_id',Auth::user()->id)->first();
        $languages = explode(',',$languagesList->language);

        $profile = ProfileInfo::where('user_id',Auth::user()->id)->first();

        $skiilsList = Skills::where('user_id',Auth::user()->id)->first();
        $skills = explode(',',$skiilsList->skills);

        $experiences = Experience::where('user_id',Auth::user()->id)->get();
        
        $projects = Project::where('user_id',Auth::user()->id)->get();

        return view('front-end.CV.cv-templet',compact('imageProfile','basicInfo','educations',
        'languages','profile','skills','experiences','projects'));
    }


    // //download cv
    // public function downloadCV(){
    //     $pdf = Pdf::loadView('front-end.CV.cv-templet');
    //     return $pdf->download('cv.pdf');
    // }



    public function downloadCV()
    {
        // جلب بيانات الـ CV التي تحتاجها
        $imageProfile = Image::where('user_id',Auth::user()->id)->first();
        $basicInfo = BasicInfo::where('user_id',Auth::user()->id)->first();
        $educations = Education::where('user_id',Auth::user()->id)->get();

        
        $languagesList = Language::where('user_id',Auth::user()->id)->first();
        $languages = explode(',',$languagesList->language);

        $profile = ProfileInfo::where('user_id',Auth::user()->id)->first();

        $skiilsList = Skills::where('user_id',Auth::user()->id)->first();
        $skills = explode(',',$skiilsList->skills);

        $experiences = Experience::where('user_id',Auth::user()->id)->get();
        
        $projects = Project::where('user_id',Auth::user()->id)->get();

        $mpdf = new \Mpdf\Mpdf();

    // عرض السيرة الذاتية
    $html = view('front-end.CV.cv-save', compact('basicInfo', 'profile', 'educations', 'languages', 'skills', 'experiences', 'projects'))->render();

    // كتابة المحتوى إلى PDF
    $mpdf->WriteHTML($html);

    // تنزيل الملف كـ PDF
    return $mpdf->Output('cv.pdf', 'D');
    }


    // public function downloadCV(){

    //     $mpdf = new \Mpdf\Mpdf();
        
    //     $mpdf->autoScriptToLang = true;
    //     $mpdf->autoLangToFont = true;
    //     $mpdf->WriteHTML('<h1>السلام عليكم</h1>');
    //     $mpdf->Output();
    // }
}
