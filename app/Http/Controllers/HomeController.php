<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Message;
use App\Notifications;
use App\Privacy;
use App\Quote;
use App\ReplyMessage;
use App\ServiceRequest;
use App\Models\Services;
use App\Models\Slider;
use App\Subscriber;
use App\Registration;
use App\Downloads;
use App\RFP;
use App\Term;
use App\Testimonial;
use App\Course;
use App\Portfolio;
use Session;
use Vinkla\Instagram\Instagram;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OpenGraph;
use SEOMeta;
use Twitter;
use Captcha;
use DateTime;

class HomeController extends Controller
{

    public function index()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $About = DB::table('about')->get();
            $Slider = Slider::all();
            $Clients =
            $Portfolio = DB::table('portfolio')->get();
            $Services = Services::all();
            $Testimonial =DB:: table('testimonial')->paginate(12);
            $Video = DB::table('videos')->paginate(1);
            $SiteSettings = DB::table('sitesettings')->get();
            $page_name = 'home';
            $page_title= 'home';
            return view('front.index', compact( 'Video', 'About', 'SiteSettings', 'page_title', 'Testimonial', 'Slider', 'Services', 'Portfolio', 'page_name'));
        }
    }

    public function soon(){
        return view('front.soon');
    }

    public function index1()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $About = DB::table('about')->get();
            $Slider = DB::table('slider')->paginate(12);
            $Clients =

            $Portfolio = DB::table('portfolio')->get();
            // $Services = Services::all();
            $Testimonial =DB:: table('testimonial')->paginate(12);
            $page_title = '';
            $Video = DB::table('videos')->paginate(1);
            $SiteSettings = DB::table('sitesettings')->get();
            $page_name = 'home';
            $now = new DateTime();
            return view('front.index1', compact('About', 'SiteSettings', 'page_title', 'Testimonial', 'Slider', 'Portfolio', 'page_name'));
        }
    }

    public function index2()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $About = DB::table('about')->get();
            $Slider = Slider::all();
            $Clients =
            $Blog = DB::table('blog')->paginate(2);
            $Portfolio = DB::table('portfolio')->get();
            $Services = Services::all();
            $Testimonial =DB:: table('testimonial')->paginate(12);
            $Video = DB::table('videos')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $page_name = 'Home2';

            return view('front.index2', compact('Blog', 'Video', 'About', 'SiteSettings', 'page_title', 'Testimonial', 'Slider', 'Services', 'Portfolio', 'page_name'));
        }
    }

    public function contact()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Contact Us | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/contact');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/contact');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'contact';
            $page_title = 'Contact Us';
            $SiteSettings = DB::table('sitesettings')->get();
            $attributes = [
                'data-theme' => 'dark',

            ];


            return view('front.contact', compact('attributes','page_title', 'SiteSettings', 'page_name'));
        }
    }

    public function regions($slung)
    {
        $SEOSettings = DB::table('seosettings')->get();
        $Regions = DB::table('regions')->where('slung',$slung)->get();
        foreach ($Regions as $key => $value) {
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle(' '.$value->title.' | ' . $Settings->sitename . '  ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/contact');

                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '/contact');
                OpenGraph::addProperty('type', 'articles');

                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');
                $page_name = 'regions';
                $page_title = 'Our Regions';


                return view('front.regions', compact('page_title', 'page_name','Regions'));
            }
        }

    }

    public function donate()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Make Donation | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/contact');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/contact');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Make Donation';
            $page_title = 'Make Donation';
            $SiteSettings = DB::table('sitesettings')->get();

            return view('front.donate', compact('page_title', 'SiteSettings', 'page_name'));
        }
    }

    public function thankyou()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Make Donation | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/contact');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/contact');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Make Donation';
            $page_title = 'Make Donation';
            $SiteSettings = DB::table('sitesettings')->get();

            return view('front.thankyou', compact('page_title', 'SiteSettings', 'page_name'));
        }
    }

    public function notifypayment()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Make Donation | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/contact');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/contact');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Make Donation';
            $page_title = 'Make Donation';
            $SiteSettings = DB::table('sitesettings')->get();

            return view('front.notifypayment', compact('page_title', 'SiteSettings', 'page_name'));
        }
    }




    public function volunteer()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Become a Volunteer | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/donate/volunteer');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/donate/volunteer');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Make Donation';
            $page_title = 'Make Donation';
            $SiteSettings = DB::table('sitesettings')->get();

            return view('front.volunteer', compact('page_title', 'SiteSettings', 'page_name'));
        }
    }



    public function about()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('About Us | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $Admin = Admin::all();
            $About = DB::table('about')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $Services = DB::table('services')->inRandomOrder()->paginate(2);
            $page_title = 'About Us';
            $Testimonial = DB::table('testimonial')->inRandomOrder()->paginate(3);
            $page_name = 'About Us';



            return view('front.about', compact('Testimonial','Action', 'page_title', 'page_name', 'Services', 'SiteSettings', 'About', 'Admin'));
        }

    }



    public function what_we_do()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('What We Do | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/what-we-do');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/what-we-do');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $Admin = Admin::all();
            $About = DB::table('about')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $Services = DB::table('services')->inRandomOrder()->paginate(2);
            $page_title = 'About Us';
            $Services = DB::table('services')->paginate(3);
            $page_name = 'About Us';



            return view('front.services', compact('Action', 'page_title', 'page_name', 'Services', 'SiteSettings', 'About', 'Admin'));
        }

    }



    public function  reports()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Reports | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $Admin = Admin::all();
            $About = DB::table('about')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $Reports = DB::table('reports')->paginate(12);
            $page_title = 'About Us';
            $Testimonial = DB::table('testimonial')->inRandomOrder()->paginate(3);
            $page_name = 'About Us';

            return view('front.report', compact('Action', 'page_title', 'page_name', 'Reports', 'SiteSettings', 'About', 'Admin'));
        }

    }


    public function terms()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Terms and Conditions | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/terms');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/terms');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'About Us';
            $Term = Term::all();
            $page_title = 'Terms & Conditions';
            return view('front.terms', compact('page_title', 'Term', 'page_name'));
        }
    }

    public function privacy()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Privacy Policy | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/privacy');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/privacy');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Privacy Policy';
            $Privacy = Privacy::all();
            $page_title = 'Privacy Policy';
            return view('front.privacy', compact('page_title', 'Privacy', 'page_name'));
        }
    }



    public function copyright()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Copyright Statement | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/copyright');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/copyright');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Copyright Statement';
            $Copyright = DB::table('copyright')->get();
            $page_title = 'Copyright Statement';
            return view('front.copyright', compact('page_title', 'Copyright', 'page_name'));
        }
    }

    public function courses()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our Trainings | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/trainings');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/trainings');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'courses';
            $Services = Services::all();
            $page_title = 'Our Services';
            $Courses = DB::table('courses')->paginate(12);

            return view('front.courses', compact('Services','Courses', 'page_title', 'page_name'));
        }
    }

    public function portfolio()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our Work | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/our-work');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/our-work');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Our Work';
            $Work = Portfolio::all();
            $page_title = 'Our Work';



            return view('front.portfolio', compact('Work', 'page_title', 'page_name'));
        }
    }

    public function portfolio_single($title)
    {
        $Portfolio = DB::table('portfolio')->where('slung',$title)->get();
        foreach($Portfolio as $port){
            $SEOSettings = DB::table('seosettings')->get();
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle(' '.$port->title.' | ' . $Settings->sitename . '  ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/our-projects/'.$title.'');
                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '/our-projects/'.$title.'');
                OpenGraph::addProperty('type', 'articles');
                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');
                $page_name = 'course';
                $Services = Services::all();
                $page_title = $title;


                return view('front.portfolio_detail', compact('Services','Portfolio', 'page_title', 'page_name','title'));
            }
        }
    }

    public function course_cat($title)
    {
        $Category = DB::table('category')->where('cat',$title)->get();
        foreach($Category as $theCat){
            $Courses = DB::table('courses')->where('cat',$theCat->id)->paginate(12);
            $SEOSettings = DB::table('seosettings')->get();
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle(' '.$title.' | ' . $Settings->sitename . '  ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/trainings/cat/'.$title.'');
                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '/trainings/cat/'.$title.'');
                OpenGraph::addProperty('type', 'articles');
                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');
                $page_name = 'courses';
                $Services = Services::all();
                $page_title = 'Our Services';


                return view('front.courses', compact('Services','Courses', 'page_title', 'page_name','title'));
            }
        }
    }



    public function subscribe(Request $request)
    {
        $type = 'newsletter';
        $FindMail = DB::table('subscribers')->where('email', $request->email)->get();
        $Countmails = count($FindMail);
        if ($Countmails == 0) {
            $email = $request->email;
            $Subscriber = new Subscriber;
            $Subscriber->email = $email;
            $Subscriber->fname = $request->name;

            $Subscriber->phone = $request->phone;

            $Subscriber->save();
            $results = "You have successfully subscribed to our news letters";
            // ReplyMessage::notifications($email);
            Session::flash('message', "".$results."");
            return Redirect::back();

        } else {
            $results =  "You are already in our Members List thank you for staying with us";
            // ReplyMessage::notifications($request->email);
            Session::flash('message', "".$results."");
            return Redirect::back();

        }


    }
    public function newcourses(Request $request){
        $type = 'newsletter';
        $FindMail = DB::table('subscribers')->where('email', $request->email)->get();
        $Countmails = count($FindMail);
        if ($Countmails == 0) {
            $email = $request->email;
            $Subscriber = new Subscriber;
            $Subscriber->email = $email;
            $Subscriber->type = $type;
            $Subscriber->save();
            $results = "You have successfully subscribed to our news letters";
            ReplyMessage::notifications($email);
            return $results;

        } else {
            $results =  "You are already in our subscribers list thank you for staying with us";

            Session::flash('message', "".$results."");
            return Redirect::back();

        }

    }

    public function subscribe_news_letter(){
        $title = 'Subscribe news Letters';
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Suscribe News Letter '.$title.' | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/subscribe-news-letter/'.$title.'');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/subscribe-news-letter/'.$title.'');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'course';
            $Services = Services::all();
            $page_title = 'Subscribe news Letters';


            return view('front.subscribe_news_letter', compact('Services','Courses','images', 'page_title', 'page_name','title'));
        }
    }
    public function request_quote()
    {
        $page_title = 'Request Quote';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.request_quote', compact('page_title', 'SiteSettings'));
    }
    public function servicerequest($id)
    {
        $page_title = 'Order Service';
        $Pricings = DB::table('pricing')->where('id', $id)->get();
        return view('front.servicerequest', compact('page_title', 'Pricings'));
    }

    public function service_request(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $id = $request->id;
        $service = $request->service;
        $price = $request->price;
        $content = $request->content;
        $budget = $request->budget;

        $ServiceRequest = new ServiceRequest;
        $ServiceRequest->name = $name;
        $ServiceRequest->email = $email;
        $ServiceRequest->serviceID = $id;
        $ServiceRequest->service = $service;
        $ServiceRequest->content = $content;
        $ServiceRequest->price = $price;
        $ServiceRequest->budget = $budget;
        $ServiceRequest->save();
        ReplyMessage::mailrequest($name, $email, $service, $price, $content, $budget);
        return "Your Request Has Been Received,If we dont respond within an hour kindly contact us through our contact form,call us or use the live chat";
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $isExists = \App\User::where('email', $email)->first();
        //Create The Logics To return AJAX
        if (empty($isExists)) {
            return "";
        } else {
            return "The Email Is already in use by another User";
        }
    }

    public function quote_request(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $subject = "Quote Request";
        $content = $request->message;
        $Quote = new Quote;
        $Quote->fname = $fname;
        $Quote->lname = $lname;
        $Quote->email = $email;
        $Quote->phone = $phone;
        $Quote->content = $content;
        $Quote->save();
        //Add Notification

        $Notifications = new Notifications;
        $Notifications->type = 'Quote';
        $Notifications->content = 'You have a new Quote Request';
        $Notifications->save();
        ReplyMessage::mailNotificaton($name, $email, $subject, $content);
        return "Your Request Has Been Received";

    }

    public function searchsite(Request $request)
    {

        if($request->cat == 'all'){
            $Courses = DB::table('courses')->where('title', 'like', '%' . $request->search . '%')->paginate(50);
            $page_title = $request->search;
            $page_name = 'courses';
            return view('front.courses', compact('page_title','page_name', 'Courses'));
        }else{
            $Courses = DB::table('courses')->where('cat',$request->cat)->where('title', 'like', '%' . $request->search . '%')->paginate(50);
            $page_title = $request->search;
            $page_name = 'courses';
            return view('front.courses', compact('page_title','page_name', 'Courses'));
        }

    }

    public function searchsite_category(Request $request)
    {

        $Courses = DB::table('courses')->where('cat',$request->cat)->where('title', 'like', '%' . $request->search . '%')->paginate(50);
        $page_title = $request->search;
        $page_name = 'courses';
        return view('front.courses', compact('page_title','page_name','images', 'Courses', 'SubCategory'));
    }

    public function commingsoon()
    {
        $page_title = 'We will be Back Shortly';
        $page_name = 'We will be Back Shortly';
        return view('front.commingsoon', compact('page_title', 'page_name'));
    }
    public function submitMessage(Request $request)
    {

            $email = $request->email;
            $name = $request->name;
            $message = $request->message;
            $subject = $request->subject;

            $Message = new Message;
            $Message->name = $name;
            $Message->email = $email;
            $Message->subject = $subject;
            $Message->content = $message;

            //Send Mail Notification
            ReplyMessage::mailNotificaton($name, $email, $subject, $message);

            $Message->save();
            $Notifications = new Notifications;
            $Notifications->type = 'Message';
            $Notifications->content = 'You have a new Message';
            $Notifications->save();

            Session::flash('message', "Your Message Has been Sent, We will Get back To You Shortly");
            return Redirect::back();


    }

    public function quote()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Request Quote | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/quote');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/quote');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_title = 'Get Quote';
            $page_name = 'Get a Quote';
            return view('front.quote', compact('page_title', 'page_name'));
        }
    }
    public function who()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'What we do';
        $Action = DB::table('actions')->get();
        $page_title = 'What we do';
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('What we do | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/who');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            return view('front.who', compact('page_title', 'page_name','Action'));
        }
    }

    public function version(){

        return view('version',compact('page_title','page_name'));
    }

    public function rfp(){
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Submit RFP | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/rfp');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/rfp');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_title = 'Submit RFP';
            $page_name = 'Submit RFP';
            return view('front.rfp', compact('page_title', 'page_name'));
        }
    }

    public function post_rfp(Request $request){
        // Get Form Data
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        // Upload
        $path = 'uploads/RFP';
        if(isset($request->file)){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $rfp_file = $filename;
        }else{
            $rfp_file = $request->logo_cheat;
        }

        // Save
        $RFP = new RFP;
        $RFP->fname = $fname;
        $RFP->lname = $lname;
        $RFP->email = $email;
        $RFP->phone = $phone;
        $RFP->message =  $message;
        $RFP->file = $rfp_file;
        // Email Iperformance
        ReplyMessage::sendrfp($fname,$email,$phone,$message,$phone);

        // Redirect
        Session::flash('message', "Your Info Has Been Received");
        return Redirect::back();
    }

    public function gallery(){
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Gallery';
        $page_title = 'Gallery';
        $Gallery = DB::table('gallery')->paginate(12);
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Gallery | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('gallery' . $Settings->url . '/' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/gallery');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');




            return view('front.gallery', compact('page_title', 'page_name','Gallery'));
        }


    }
    public function get_invloved(){
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'about';
        $page_title = 'Get Involved';
        $Gallery = DB::table('gallery')->paginate(12);
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Get Involved | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('Get Involved' . $Settings->url . '/get-involved' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/get-involved');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            return view('front.register', compact('page_title', 'page_name','Gallery'));
        }
    }

    public function register_now($id){
        $SEOSettings = DB::table('seosettings')->get();
        $Course = Course::find($id);
        $page_name = 'about';
        $page_title = 'Register';
        $Gallery = DB::table('gallery')->paginate(12);
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Register Training | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('gallery' . $Settings->url . '/' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/gallery');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            return view('front.register_now', compact('page_title', 'page_name','Course'));
        }
    }



    public function regisrations(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        $sex = $request->sex;
        $location = $request->location;
        $county = $request->county;
        $state = $request->state;

        $Registration = new Registration;
        $Registration->name = $name;
        $Registration->sub_county = $request->sub_county;
        $Registration->email = $email;
        $Registration->phone = $phone;
        $Registration->message = $message;
        $Registration->reason = $request->reason;


        //
        $Registration->sex = $sex;
        $Registration->location = $location;
        $Registration->county = $county;
        $Registration->state = $state;
        //
        $Registration->save();

        // Main Notification
        ReplyMessage::registration($name,$email,$phone,$message);

        Session::flash('message', "Your Request Has Been Received");
        return Redirect::back();

    }

    public function request_link($id){
        $Publication = DB::table('publications')->where('id',$id)->get();

        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'contact';
        foreach($Publication as $publication){
        $page_title = $publication->title;
        $Gallery = DB::table('gallery')->paginate(12);
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Download Publications | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('gallery' . $Settings->url . '/' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/request_link/'.$page_title.'');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            return view('front.request', compact('page_title', 'page_name','Publication'));
        }
    }

    }

    public function request_link_send(Request $request){
         $email = $request->email;
         $file = $request->file;
         $title = $request->title;
        //  Generating a link
        $link = url('/uploads/publications/'.$file.'');
        // mail the Link
        ReplyMessage::getlink($link,$email,$title);
        // Add Downloads to database
        $interests = ' '.$request->check1.','.$request->check2.','.$request->check3.','.$request->check4.','.$request->check5.','.$request->check6.', ';
        $Downloads = new Downloads;
        $Downloads->name = $request->name;
        $Downloads->title = $request->title;
        $Downloads->email = $request->email;
        $Downloads->employee = $request->employees;
        $Downloads->country = $request->country;
        $Downloads->interests = $interests;
        $Downloads->type = 'Publication';
        $Downloads->save();
        ReplyMessage::notification($email,$request->name,$request->country,$request->employees,$interests,$request->title);





        Session::flash('message', "A Download link Has Been Sent to ".$email.", Login to your email and download the publication");
        return Redirect::back();

    }
    public function request_link_send_structure(Request $request){
        $email = $request->email;
        $name = $request->name;
        $country = $request->country;
        $employees = $request->employees;

        $check1 = $request->check1;
        $check2 = $request->check2;
        $check3 = $request->check3;
        $check4 = $request->check4;
        $check5 = $request->check5;
        $check6 = $request->check6;



        $file = $request->file;
        $title = $request->title;
       //  Generating a link
       $link = url('/uploads/structure/'.$file.'');
       // mail the Link
       ReplyMessage::getlink($link,$email,$title);
       // Add Subscriber to database
       $interests = ' '.$request->check1.','.$request->check2.','.$request->check3.','.$request->check4.','.$request->check5.','.$request->check6.', ';
        $Downloads = new Downloads;
        $Downloads->name = $request->name;
        $Downloads->title = $request->title;
        $Downloads->email = $request->email;
        $Downloads->employee = $request->employees;
        $Downloads->country = $request->country;
        $Downloads->interests = $interests;
        $Downloads->type = 'Course Structure';
        $Downloads->save();

        ReplyMessage::notification($email,$request->name,$request->country,$request->employees,$interests,$request->title);


       Session::flash('message', "A Download link Has Been Sent to ".$email.", Login to your email and download the Course Structure");
       return Redirect::back();

   }

    public function register($id){
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Register | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $Course = Course::find($id);
            $page_name = 'register';
            $page_title = 'Register Course';
            return view('front.register', compact('page_title', 'page_name','Course'));

        }
    }

    public function download($id){
        $Courses = DB::table('courses')->where('id',$id)->get();

        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Download Document';
        foreach($Courses as $courses){
        $page_title = $courses->title;

        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Download Course Structure | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('Download Course Structure' . $Settings->url . '/' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/download/'.$page_title.'');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            return view('front.request_course', compact('page_title', 'page_name','Courses'));
        }
    }

    }

    public function board_of_directors(){
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Board Of Directors | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $page_name = 'register';
            $page_title = 'Register Course';
            return view('front.board_of_directors', compact('page_title', 'page_name'));

        }
    }

    public function management(){
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Management Team | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $page_name = 'register';
            $page_title = 'Register Course';
            return view('front.management', compact('page_title', 'page_name'));

        }
    }

    public function volunteer_coordinators(){
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Volunteer Coordinators | ' . $Settings->sitename . '  ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $page_name = 'register';
            $page_title = 'Register Course';
            return view('front.volunteer_coordinators', compact('page_title', 'page_name'));

        }
    }






}
