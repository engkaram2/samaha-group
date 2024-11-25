<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Http\Requests\Front\ContactRequest;
use App\Models\Contact;
use App\Models\JasemSetting;
use App\Models\LegalSetting;
use App\Models\Review;
use App\Models\Service;
use App\Models\Country;
use App\Models\ServiceSetting;
use App\Models\ShabaanSetting;
use App\Models\TranslationSetting;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function legalAboutApp()
    {
        $about_app= 'about_app_'.app()->getLocale();
        $data['about_app'] = LegalSetting::where('key',$about_app)->first()->value;
        $data['reviews'] = Review::where(['type' => 'legal'])->get();
        $data['our_services'] = Service::where(['type' => 'legal'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

        return view('Front.Legal.general.about_app', $data);
    }

    public function translationAboutApp()
    {
        $about_app= 'about_app_'.app()->getLocale();
        $data['about_app'] = TranslationSetting::where('key',$about_app)->first()->value;
        $data['translation_services'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['our_services'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['reviews'] = Review::where(['type' => 'translation'])->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();

        return view('Front.Translation.general.about_app', $data);
    }
    public function legalTerms()
    {
        $terms = 'conditions_terms_' . app()->getLocale();
        $data['terms'] = LegalSetting::where('key',$terms)->first()->value;
        $data['our_services'] = Service::where(['type' => 'legal'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        return view('Front.Legal.general.terms', $data);
    }


    public function translationTerms()
    {
        $terms = 'conditions_terms_' . app()->getLocale();
        $data['terms'] = TranslationSetting::where('key',$terms)->first()->value;
        $data['our_services'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.general.terms', $data);
    }

    public function servicesTerms()
    {
        $terms = 'conditions_terms_' . app()->getLocale();
        $data['terms'] = ServiceSetting::where('key',$terms)->first()->value;
        $data['our_services'] = Service::where(['type' => 'services'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        return view('Front.Services.general.terms', $data);
    }
    public function shaabanTerms()
    {
        $terms = 'conditions_terms_' . app()->getLocale();
        $data['terms'] = ShabaanSetting::where('key',$terms)->first()->value;
        $data['our_services'] = Service::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.general.terms', $data);
    }

    public function jasemTerms()
    {
        $terms = 'conditions_terms_' . app()->getLocale();
        $data['terms'] = JasemSetting::where('key',$terms)->first()->value;
        $data['our_services'] = Service::where(['type' => 'jasem'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        return view('Front.Jasem.general.terms', $data);
    }

    public function servicesAboutApp()
    {
        $about_app= 'about_app_'.app()->getLocale();
        $data['about_app'] = ServiceSetting::where('key',$about_app)->first()->value;
        $data['our_services'] = Service::where(['type' => 'services'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        $data['reviews'] = Review::where(['type' => 'services'])->get();

        return view('Front.Services.general.about_app', $data);
    }


   public function showLegalContactUs()
    {
        $data['mobile'] = LegalSetting::where('key', 'mobile')->first()->value;
        $data['email'] = LegalSetting::where('key', 'email')->first()->value;
        $data['address'] = LegalSetting::where('key', 'address')->first()->value;
        $data['our_services'] = Service::where(['type' => 'legal'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        return view('Front.Legal.general.contact_us',$data);
    }



    public function showTranslationContactUs()
    {
        $data['latitude'] = TranslationSetting::where('key', 'latitude')->first()->value;
        $data['longitude'] = TranslationSetting::where('key', 'longitude')->first()->value;
        $data['our_services'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.general.contact_us',$data);
    }

    public function showServicesContactUs()
    {
        $data['latitude'] = LegalSetting::where('key', 'latitude')->first()->value;
        $data['longitude'] = LegalSetting::where('key', 'longitude')->first()->value;
        $data['our_services'] = Service::where(['type' => 'services'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        return view('Front.Services.general.contact_us',$data);
    }

    public function showShaabanContactUs()
    {
        $data['latitude'] = ShabaanSetting::where('key', 'latitude')->first()->value;
        $data['longitude'] = ShabaanSetting::where('key', 'longitude')->first()->value;
        $data['our_services'] = Service::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.general.contact_us',$data);
    }

    public function showJasemContactUs()
    {
        $data['latitude'] = JasemSetting::where('key', 'latitude')->first()->value;
        $data['longitude'] = JasemSetting::where('key', 'longitude')->first()->value;
        $data['our_services'] = Service::where(['type' => 'jasem'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        return view('Front.Jasem.general.contact_us',$data);
    }

    public function legalContactUs(ContactRequest $request)
    {
         Contact::create($request->all());
        return back()->with('message',trans('back.messages.send_successfully'));

    }

    public function translationContactUs(ContactRequest $request)
    {
         Contact::create($request->all()+['type'=>'translation']);
        return back()->with('message', trans('back.messages.send_successfully'));
    }

    public function servicesContactUs(ContactRequest $request)
    {
         Contact::create($request->all()+['type'=>'services']);
        return back()->with('message', trans('back.messages.send_successfully'));
    }
    public function shaabanContactUs(ContactRequest $request)
    {
         Contact::create($request->all()+['type'=>'shaaban']);
        return back()->with('message', trans('back.messages.send_successfully'));
    }

    public function jasemContactUs(ContactRequest $request)
    {
         Contact::create($request->all()+['type'=>'jasem']);
        return back()->with('message', trans('back.messages.send_successfully'));
    }
}

//
//    public function auth_contact(AuthContactRequest $request)
//    {
//        $contact = Contact::create($request->all()+[
//                'full_name'=>auth()->user()->full_name,
//                'mobile'=>auth()->user()->mobile,
//                'email'=>auth()->user()->email,
//            ]);
//        return back()->with('success', trans('messages.messages.send_successfully'));
//    }
