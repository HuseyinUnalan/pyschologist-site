<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Services;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    //Home Page
    public function index()
    {
        $slideractive = Slider::where('status', 1)->limit(1)->orderBy('desk', 'ASC')->get();
        $sliders = Slider::where('status', 1)->whereBetween('desk', [1, 1000])->orderBy('desk', 'ASC')->get();
        $abouts = About::find(1);
        $services = Services::where('status', 1)->limit(4)->orderBy('desk', 'ASC')->get();
        $blogs = Blog::where('status', 1)->limit(3)->orderBy('desk', 'ASC')->get();
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $teams = Team::where('status', 1)->limit(4)->orderBy('desk', 'ASC')->get();
        $settings = Setting::find(1);
        $testimonialactive = Testimonial::where('status', 1)->limit(1)->orderBy('desk', 'ASC')->get();
        $testimonials = Testimonial::where('status', 1)->whereBetween('desk', [1, 1000])->orderBy('desk', 'ASC')->get();
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.index', compact('sliders', 'abouts', 'services', 'blogs', 'clients', 'teams', 'settings', 'slideractive', 'testimonials', 'testimonialactive', 'socials'));
    }

    //About Page
    public function HomeAbout()
    {
        $abouts = About::find(1);
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $teams = Team::where('status', 1)->orderBy('desk', 'ASC')->get();
        $settings = Setting::find(1);
        $testimonialactive = Testimonial::where('status', 1)->limit(1)->orderBy('desk', 'ASC')->get();
        $testimonials = Testimonial::where('status', 1)->whereBetween('desk', [1, 1000])->orderBy('desk', 'ASC')->get();
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.about_page', compact('abouts', 'clients', 'teams', 'settings', 'testimonials', 'testimonialactive', 'socials'));
    }

    //Blog Page
    public function BlogDetails($id)
    {
        $lastblogs = Blog::where('status', 1)->limit(3)->orderBy('desk', 'ASC')->get();
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.blog_details', compact('blogs', 'lastblogs', 'categories', 'settings', 'socials'));
    }

    public function CategoryBlog($id)
    {
        $blogposts = Blog::where('blog_category_id', $id)->where('status', 1)->orderBy('desk', 'ASC')->get();
        $categoryname = BlogCategory::findOrFail($id);
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $allcategorys = BlogCategory::latest()->get();
        $lastblogs = Blog::where('status', 1)->limit(3)->orderBy('id', 'DESC')->get();
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.category_blog', compact('blogposts', 'categoryname', 'clients', 'settings', 'allcategorys', 'lastblogs', 'socials'));
    }


    public function BlogPage()
    {
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $allblogs = Blog::where('status', 1)->orderBy('desk', 'ASC')->Paginate(3);
        $lastblogs = Blog::where('status', 1)->limit(3)->orderBy('id', 'DESC')->get();
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.all_blog', compact('allblogs', 'categories', 'clients', 'settings', 'lastblogs', 'socials'));
    }

    //Client Section
    public function Client()
    {
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.body.client_section', compact('clients', 'settings', 'socials'));
    }

    //Service Page
    public function ServicePage()
    {
        $allservices = Services::where('status', 1)->orderBy('desk', 'ASC')->get();
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.all_services', compact('allservices', 'clients', 'settings', 'socials'));
    }

    //Service Details Page
    public function ServiceDetails($id)
    {
        $services = Services::findOrFail($id);
        $allservices = Services::where('status', 1)->orderBy('desk', 'ASC')->get();
        $clients = Client::where('status', 1)->orderBy('desk', 'ASC')->get();
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.service_details', compact('services', 'clients', 'settings', 'allservices', 'socials'));
    }

    //Contact Page
    public function ContactPage()
    {
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.contact_page', compact('settings', 'socials'));
    }

    //Contact Page Ask Question Area
    public function StoreMesseage(Request $request)
    {
        Message::insert([

            'name' => $request->name,
            'surname' => $request->surname,
            'mail' => $request->mail,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);



        return redirect()->route('home.contact')->with('success', 'Message Successfully Sent.');
    }


    public function GalleryPage()
    {
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        $gallerys = Gallery::where('status', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.gallery_page', compact('settings', 'socials', 'gallerys'));
    }


    public function FaqPage()
    {
        $settings = Setting::find(1);
        $socials = Social::where('status', 1)->orderBy('desk', 'ASC')->get();
        $leftfaqs = Faq::where('status', 1)->where('location', 0)->orderBy('desk', 'ASC')->get();
        $rightfaqs = Faq::where('status', 1)->where('location', 1)->orderBy('desk', 'ASC')->get();
        return view('frontend.faq_page', compact('settings', 'socials', 'leftfaqs', 'rightfaqs'));
    }
}
