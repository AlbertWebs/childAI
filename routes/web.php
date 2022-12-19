<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//HomeRoutes
Route::get('/','App\Http\Controllers\HomeController@soon');
Route::get('/home','App\Http\Controllers\HomeController@index1');
Route::get('/contact-us','App\Http\Controllers\HomeController@contact');
Route::get('/about-us','App\Http\Controllers\HomeController@about');
Route::get('/get-involved','App\Http\Controllers\HomeController@get_invloved');
Route::get('/what-we-do','App\Http\Controllers\HomeController@what_we_do');
Route::get('/reports','App\Http\Controllers\HomeController@reports');
Route::get('/donate-now','App\Http\Controllers\HomeController@donate');
Route::get('/donate','App\Http\Controllers\HomeController@donate');
Route::get('/thankyou','App\Http\Controllers\HomeController@thankyou');
Route::get('/notifypayment','App\Http\Controllers\HomeController@notifypayment');
Route::get('/donate/volunteer','App\Http\Controllers\HomeController@volunteer');
Route::get('/region/{slung}','App\Http\Controllers\HomeController@regions');
Route::get('/our-gallery','App\Http\Controllers\HomeController@gallery');
Route::get('/make-donation','App\Http\Controllers\HomeController@donate');
Route::get('/get-involved','App\Http\Controllers\HomeController@get_invloved');
Route::get('/our-work','App\Http\Controllers\HomeController@portfolio');
Route::get('/our-projects/{title}','App\Http\Controllers\HomeController@portfolio_single');
Route::get('/our-projects','App\Http\Controllers\HomeController@portfolio');
// Route::get('/what-we-do','App\Http\Controllers\HomeController@who');
Route::get('/terms-and-conditions','App\Http\Controllers\HomeController@terms');
Route::get('/privacy-policy','App\Http\Controllers\HomeController@privacy');
Route::get('/copyright','App\Http\Controllers\HomeController@copyright');
Route::get('/commingsoon','App\Http\Controllers\HomeController@commingsoon');
Route::post('/submitMessage','App\Http\Controllers\HomeController@submitMessage');

Route::get('/board-of-directors','App\Http\Controllers\HomeController@board_of_directors');
Route::get('/management','App\Http\Controllers\HomeController@management');
Route::get('/volunteer-coordinators','App\Http\Controllers\HomeController@volunteer_coordinators');



// Version Control
Route::get('/version_control', 'App\Http\Controllers\HomeController@version');
//Check If Mail Exists
Route::post('/checkemail','App\Http\Controllers\HomeController@checkEmail');
//Subscribers
Route::post('/subscribe','App\Http\Controllers\HomeController@subscribe');
//Subscribers
Route::post('/regisrations','App\Http\Controllers\HomeController@regisrations');

Route::get('/add_to_cart/{id}','CartController@add_to_cart');



//BlogRoutes
Route::get('/blog','BlogController@index');
Route::get('/blog/videos','BlogController@videos');
Route::get('/blog/events','BlogController@events');
Route::get('/blog/events/{title}','BlogController@event');
Route::get('/blog/publications','BlogController@publications');
Route::get('/blog/{title}','BlogController@blog');
Route::get('/blog/cat/{cat}','BlogController@blogCat');
Route::post('/blog/search','BlogController@search_blog');
Route::get('/blog/tag/{tag}','BlogController@tag');
Route::post('/blog/comment','BlogController@add_comment');



Auth::routes();

Route::group(['prefix'=>'admin'], function(){


//Login route

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminsController@index')->name('admin.index');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//reset password
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//Testimonial
Route::get('/addTestimonial', 'AdminsController@addTestimonial');
Route::post('/add_Testimonial', 'AdminsController@add_Testimonial');
Route::get('/testimonials','AdminsController@testimonials');
Route::get('/editTestimonial/{id}', 'AdminsController@editTestimonial');
Route::get('/deleteTestimonial/{id}', 'AdminsController@deleteTestimonial');
Route::post('/edit_Testimonial/{id}', 'AdminsController@edit_Testimonial');

//Terms Privacy copyright
//copyright
Route::get('/copyright','AdminsController@copyright');
Route::post('/edit_copyright', 'AdminsController@edit_copyright');
//Privacy
Route::get('/privacy','AdminsController@privacy');
Route::get('/addPrivacy', 'AdminsController@addPrivacy');
Route::get('/editPrivacy/{id}', 'AdminsController@editPrivacy');
Route::post('/add_privacy', 'AdminsController@add_privacy');
Route::get('/delete_privacy/{id}','AdminsController@delete_privacy');
Route::post('/edit_privacy/{id}', 'AdminsController@edit_privacy');
//values
Route::get('/values','AdminsController@values');
Route::get('/addValues', 'AdminsController@addValues');
Route::get('/editValues/{id}', 'AdminsController@editValues');
Route::post('/add_values', 'AdminsController@add_values');
Route::get('/delete_values/{id}','AdminsController@delete_values');
Route::post('/edit_values/{id}', 'AdminsController@edit_values');

//Who
Route::get('/who','AdminsController@who');
Route::get('/editWho/{id}', 'AdminsController@editWho');
Route::get('/delete_who/{id}','AdminsController@delete_who');
Route::post('/edit_who/{id}', 'AdminsController@edit_who');

//Board
Route::get('/board','AdminsController@board');
Route::get('/editBoard/{id}', 'AdminsController@editBoard');
Route::get('/delete_board/{id}','AdminsController@delete_board');
Route::post('/edit_board/{id}', 'AdminsController@edit_board');

//Terms
Route::get('/terms','AdminsController@terms');
Route::get('/addTerms', 'AdminsController@addTerms');
Route::get('/editTerm/{id}', 'AdminsController@editTerm');
Route::post('/add_term', 'AdminsController@add_term');
Route::post('/edit_term/{id}', 'AdminsController@edit_term');
Route::get('/delete_term/{id}','AdminsController@delete_term');
//About
Route::get('/about','AdminsController@about');
Route::post('/about_save', 'AdminsController@about_save');
//Services
Route::get('/services','AdminsController@services');
Route::get('/deleteService/{id}','AdminsController@deleteService');
Route::post('/edit_Services/{id}', 'AdminsController@edit_Services');
Route::get('/editServices/{id}', 'AdminsController@editServices');
Route::get('/addService', 'AdminsController@addService');
Route::post('/add_Service', 'AdminsController@add_Service');


//Pricing
Route::get('/pricing','AdminsController@pricing');
Route::get('/deletePricing/{id}','AdminsController@deletePricing');
Route::post('/edit_Pricing/{id}', 'AdminsController@edit_Pricing');
Route::get('/editPricing/{id}', 'AdminsController@editPricing');
Route::get('/addPricing', 'AdminsController@addPricing');
Route::post('/add_Pricing', 'AdminsController@add_Pricing');

//Video
Route::get('/videos','AdminsController@videos');
Route::get('/deleteVideo/{id}','AdminsController@deleteVideo');
Route::post('/edit_Video/{id}', 'AdminsController@edit_Video');
Route::get('/editVideo/{id}', 'AdminsController@editVideo');
Route::get('/addVideo', 'AdminsController@addVideo');
Route::post('/add_Video', 'AdminsController@add_Video');

//Porfolio
Route::get('/portfolio','AdminsController@portfolio');
Route::get('/deletePortfolio/{id}','AdminsController@deletePortfolio');
Route::post('/edit_Portfolio/{id}', 'AdminsController@edit_Portfolio');
Route::get('/editPortfolio/{id}', 'AdminsController@editPortfolio');
Route::get('/addPortfolio', 'AdminsController@addPortfolio');
Route::post('/add_Portfolio', 'AdminsController@add_Portfolio');

//Region
Route::get('/regions','AdminsController@regions');
Route::get('/deleteRegion/{id}','AdminsController@deleteRegion');
Route::post('/edit_Region/{id}', 'AdminsController@edit_Region');
Route::get('/editRegion/{id}', 'AdminsController@editRegion');
Route::get('/addRegion', 'AdminsController@addRegion');
Route::post('/add_Region', 'AdminsController@add_Region');

//How It Works
Route::get('/how','AdminsController@how');
Route::get('/deleteHow/{id}','AdminsController@deleteHow');
Route::post('/edit_How/{id}', 'AdminsController@edit_How');
Route::get('/editHow/{id}', 'AdminsController@editHow');
Route::get('/addHow', 'AdminsController@addHow');
Route::post('/add_How', 'AdminsController@add_How');

//Gallery
Route::get('/gallery','AdminsController@gallery');
Route::get('/editGallery/{id}','AdminsController@editGallery');
Route::get('/deleteGallery/{id}','AdminsController@deleteGallery');
Route::post('/save_gallery/{id}', 'AdminsController@save_gallery');
Route::get('/addGallery', 'AdminsController@addGallery');
Route::get('/galleryList', 'AdminsController@galleryList');
Route::post('/add_Gallery', 'AdminsController@add_Gallery');

//Publications
Route::get('/publications','AdminsController@publications');
Route::get('/editPublication/{id}','AdminsController@editPublication');
Route::get('/delete_Publication/{id}','AdminsController@delete_Publication');
Route::post('/edit_Publication/{id}', 'AdminsController@edit_Publication');
Route::get('/addPublication', 'AdminsController@addPublication');
Route::post('/add_Publication', 'AdminsController@add_Publication');



//Slider
Route::get('/slider','AdminsController@slider');
Route::get('/editSlider/{id}','AdminsController@editSlider');
Route::get('/deleteSlider/{id}','AdminsController@deleteSlider');
Route::post('/edit_Slider/{id}', 'AdminsController@edit_Slider');
Route::get('/addSlider', 'AdminsController@addSlider');
Route::post('/add_Slider', 'AdminsController@add_Slider');

//Banner
Route::get('/banner','AdminsController@banners');
Route::get('/editBanner/{id}','AdminsController@editBanner');
Route::post('/edit_Banner/{id}', 'AdminsController@edit_Banner');

//Clients
Route::get('/addClient', 'AdminsController@addClient');
Route::post('/add_Client', 'AdminsController@add_Client');
Route::get('/clients','AdminsController@clients');
Route::get('/editClient/{id}', 'AdminsController@editClient');
Route::get('/deleteClient/{id}', 'AdminsController@deleteClient');
Route::post('/edit_Client/{id}', 'AdminsController@edit_Client');

//Partner
Route::get('/addPartner', 'AdminsController@addPartner');
Route::post('/add_Partner', 'AdminsController@add_Partner');
Route::get('/partners','AdminsController@partners');
Route::get('/editpartner/{id}', 'AdminsController@editpartner');
Route::get('/deletePartner/{id}', 'AdminsController@deletePartner');
Route::post('/edit_Partner/{id}', 'AdminsController@edit_Partner');

//Statisctics
Route::get('/stats','AdminsController@stats');
Route::get('/editStats/{id}', 'AdminsController@editStats');
Route::get('/deleteStats/{id}', 'AdminsController@deleteStats');
Route::post('/edit_Stats/{id}', 'AdminsController@edit_Stats');

//Pages
Route::get('/pages','AdminsController@pages');
Route::get('/editPage/{id}','AdminsController@editPage');
Route::get('/deletePage/{id}','AdminsController@deletePage');
Route::post('/edit_Page/{id}', 'AdminsController@edit_Page');
Route::get('/addPage', 'AdminsController@addPage');
Route::post('/add_Page', 'AdminsController@add_Page');
Route::post('/set_Page/{name}', 'AdminsController@set_Page');
Route::get('/setPage/{name}', 'AdminsController@setPage');


//Priducts
Route::get('/products','AdminsController@products');
Route::get('/editProduct/{id}','AdminsController@editProduct');
Route::get('/deleteProduct/{id}','AdminsController@deleteProduct');
Route::post('/edit_Product/{id}', 'AdminsController@edit_Product');
Route::get('/addProduct', 'AdminsController@addProduct');
Route::post('/add_Product', 'AdminsController@add_Product');


//Admin
Route::get('/admins','AdminsController@admins');
Route::get('/editAdmin/{id}','AdminsController@editAdmin');
Route::get('/deleteAdmin/{id}','AdminsController@deleteAdmin');
Route::post('/edit_Admin/{id}', 'AdminsController@edit_Admin');
Route::get('/addAdmin', 'AdminsController@addAdmin');
Route::post('/add_Admin', 'AdminsController@add_Admin');

//Registrations
Route::get('/registrations','AdminsController@registration');
Route::get('/swap_registration/{id}','AdminsController@swap_registration');
Route::get('/delete_Registration/{id}','AdminsController@delete_Registration');

//Orders
Route::get('/orders','AdminsController@orders');
Route::get('/editOrders/{id}','AdminsController@editOrders');
Route::get('/deleteOrders/{id}','AdminsController@deleteOrders');
Route::get('/confrimOrder/{id}','AdminsController@confrimOrder');
Route::post('/edit_Orders/{id}', 'AdminsController@edit_Orders');
Route::get('/addOrder', 'AdminsController@addOrder');
Route::post('/add_Order', 'AdminsController@add_Order');

//User
Route::get('/users','AdminsController@users');
Route::get('/editUser/{id}','AdminsController@editUser');
Route::get('/deleteUser/{id}','AdminsController@deleteUser');
Route::post('/edit_User/{id}', 'AdminsController@edit_User');
Route::get('/addUser', 'AdminsController@addUser');
Route::post('/add_User', 'AdminsController@add_User');

//Team
Route::get('/team','AdminsController@team');
Route::get('/editTeam/{id}','AdminsController@editTeam');
Route::get('/deleteTeam/{id}','AdminsController@deleteTeam');
Route::post('/edit_Team/{id}', 'AdminsController@edit_Team');
Route::get('/addTeam', 'AdminsController@addTeam');
Route::post('/add_Team', 'AdminsController@add_Team');

//Blog Controls
Route::get('/blog','AdminsController@blog');
Route::get('/editBlog/{id}','AdminsController@editBlog');
Route::get('/delete_Blog/{id}','AdminsController@delete_Blog');
Route::post('/edit_Blog/{id}', 'AdminsController@edit_Blog');
Route::get('/addBlog', 'AdminsController@addBlog');
Route::post('/add_blog', 'AdminsController@add_Blog');

//Events Controls
Route::get('/events','AdminsController@events');
Route::get('/editEvent/{id}','AdminsController@editEvent');
Route::get('/delete_Event/{id}','AdminsController@delete_Event');
Route::post('/edit_Event/{id}', 'AdminsController@edit_Event');
Route::get('/addEvent', 'AdminsController@addEvent');
Route::post('/add_Event', 'AdminsController@add_Event');
Route::get('/swapevent/{id}', 'AdminsController@swapevent');




//Trainings Controls
Route::get('/trainings','AdminsController@trainings');
Route::get('/editTraining/{id}','AdminsController@editTraining');
Route::get('/editTraining/prospects/{id}','AdminsController@prospects');
Route::get('/editTraining/objectives/{id}','AdminsController@objectives');
Route::post('/save_objectives', 'AdminsController@save_objectives');
Route::post('/save_prospects', 'AdminsController@save_prospects');
Route::get('/delete_Training/{id}','AdminsController@delete_Training');
Route::post('/edit_Training/{id}', 'AdminsController@edit_Training');
Route::get('/addTraining', 'AdminsController@addTraining');
Route::post('/add_Training', 'AdminsController@add_Training');
Route::get('/editTrainingDetail/{id}', 'AdminsController@editTrainingDetail');
Route::post('/edit_training_details/{id}', 'AdminsController@edit_training_details');



//Categories Control
Route::get('/categories','AdminsController@categories');
Route::get('/editCategories/{id}','AdminsController@editCategories');
Route::get('/deleteCategory/{id}','AdminsController@deleteCategory');
Route::post('/edit_Category/{id}', 'AdminsController@edit_Category');
Route::get('/addCategory', 'AdminsController@addCategory');
Route::post('/add_Category', 'AdminsController@add_Category');

//Service Renreded Control
Route::get('/service_rendered','AdminsController@service_rendered');
Route::get('/editService_rendered/{id}','AdminsController@editService_rendered');
Route::get('/deleteService_rendered/{id}','AdminsController@deleteService_rendered');
Route::post('/edit_Service_rendered/{id}', 'AdminsController@edit_Service_rendered');
Route::get('/addService_rendered', 'AdminsController@addService_rendered');
Route::post('/add_Service_rendered', 'AdminsController@add_Service_rendered');

//Daily
Route::get('/daily','AdminsController@daily');
Route::get('/editDaily/{id}','AdminsController@editDaily');
Route::get('/deleteDaily/{id}','AdminsController@deleteDaily');
Route::post('/edit_Daily/{id}', 'AdminsController@edit_Daily');
Route::get('/addDaily', 'AdminsController@addDaily');
Route::post('/add_Daily', 'AdminsController@add_Daily');


//Sub Categories
Route::get('/subCategories','AdminsController@subCategories');
Route::get('/editSubCategories/{id}','AdminsController@editSubCategories');
Route::get('/deleteSubCategory/{id}','AdminsController@deleteSubCategory');
Route::post('/edit_SubCategory/{id}', 'AdminsController@edit_SubCategory');
Route::get('/addSubCategory', 'AdminsController@addSubCategory');
Route::post('/add_SubCategory', 'AdminsController@add_SubCategory');


Route::get('/reasons','AdminsController@reasons');
Route::get('/editReason/{id}','AdminsController@editReason');
Route::get('/deleteReason/{id}','AdminsController@deleteReason');
Route::post('/edit_Reason/{id}', 'AdminsController@edit_Reason');
Route::get('/addReason', 'AdminsController@addReason');
Route::post('/add_Reason', 'AdminsController@add_Reason');


//Active Services
Route::get('/traceServices','AdminsController@traceServices');
Route::get('/editTraceServices/{id}','AdminsController@editTraceServices');
Route::get('/deleteTraceServices/{id}','AdminsController@deleteTraceServices');
Route::post('/edit_TraceServices/{id}', 'AdminsController@edit_TraceServices');
Route::get('/addTraceServices', 'AdminsController@addTraceServices');
Route::post('/add_TraceServices', 'AdminsController@add_TraceServices');

// Generic Routes
Route::get('/form','AdminsController@form');
Route::get('/list','AdminsController@list');
Route::get('/formfile','AdminsController@formfile');
Route::get('/formfiletext','AdminsController@formfiletext');

//Payments
Route::get('/payments','AdminsController@payments');

//Notifications
Route::get('/notifications','AdminsController@notifications');
Route::get('/notification/{id}','AdminsController@notification');
Route::get('/deleteNotification/{id}','AdminsController@deleteNotification');

//Service Requests
Route::get('/requests','AdminsController@quoterequeste');
Route::get('/markRequest/{id}/{status}/{type}','AdminsController@markRequest');

//Comments
Route::get('/comments','AdminsController@comments');
Route::get('/approve/{id}','AdminsController@approve');
Route::get('/decline/{id}','AdminsController@decline');

// Error Pages
Route::get('/403','AdminsController@error403');
Route::get('/404','AdminsController@error404');
Route::get('/405','AdminsController@error405');
Route::get('/500','AdminsController@error500');
Route::get('/503','AdminsController@error503');

// Subscribers Mail
Route::post('/updatemail','AdminsController@updatemail');


//Updates
Route::get('/updates','AdminsController@updates');
Route::get('/update/{id}','AdminsController@update');
Route::get('/mark/{id}','AdminsController@mark');

//profile
Route::get('/profile','AdminsController@profile');
Route::post('/profile_save/{id}','AdminsController@profile_save');
Route::get('/editFile/{id}','AdminsController@editFile');
Route::post('/edit_File/{id}','AdminsController@edit_File');

//Files
Route::get('/report','AdminsController@report');
Route::post('/add_Report','AdminsController@add_Report');
Route::get('/addReport','AdminsController@addReport');
Route::get('/editReport/{id}','AdminsController@editReport');
Route::post('/edit_Report/{id}','AdminsController@edit_Report');
Route::get('/deleteFile/{id}','AdminsController@deleteFile');

// Gallery
Route::get('/gallery','AdminsController@gallery');

//Under Contruction
Route::get('/under_construction','AdminsController@under_construction');

//Wizard
Route::get('/wizard','AdminsController@wizard');

//Maps
Route::get('/maps','AdminsController@maps');
// SiteSettings
Route::get('/sitesettings','AdminsController@sitesettings');
Route::post('/savesitesettings','AdminsController@savesitesettings');
Route::get('/intro','AdminsController@intro');
Route::post('/saveintro','AdminsController@saveintro');


//Messages
Route::get('/allMessages', 'AdminsController@allMessages');
Route::get('/unread', 'AdminsController@unread');
Route::get('/read/{id}', 'AdminsController@read');
Route::post('/reply/{id}', 'AdminsController@reply');
Route::get('/deleteMessage/{id}', 'AdminsController@deleteMessage');

//Subscribers
Route::get('/subscribers', 'AdminsController@subscribers');
Route::get('/mailSubscribers/{email}', 'AdminsController@mailSubscribers');
Route::get('/mailSubscriber/{email}', 'AdminsController@mailSubscriber');
Route::get('/deleteSubscriber/{id}', 'AdminsController@deleteSubscriber');
// Version Control
Route::get('/version', 'AdminsController@version');

// Seo Settings
// SeoSettings
Route::get('/seosettings','AdminsController@seosettings');
Route::post('/saveseosettings','AdminsController@saveseosettings');
});

// Users Routes
Auth::routes();
Route::group(['prefix'=>'clientarea'], function(){
Route::get('/','ClientController@index');
Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/profile','ClientController@profile');
Route::get('/place','ClientController@place');
Route::post('/save','ClientController@save');
Route::post('/place_order','ClientController@place_order');

Route::get('/pay/{invoice}','PaymentConroller@pay');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
