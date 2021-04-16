<?php



Auth::routes();
Route::get('/', 'WebsiteController@websiteIndex');
Route::get('/product', 'WebsiteController@brandPage');
Route::get('/about', 'WebsiteController@aboutPage');
Route::get('/news', 'WebsiteController@specialPage');
Route::get('/technology', 'WebsiteController@technologyPage');
Route::get('/contact', 'WebsiteController@contactPage');

Route::get('/query-request', 'WebsiteController@getQueryMessage');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('user/create', 'HomeController@NewUser');
    Route::post('user/create', 'HomeController@NewUserStore');
    Route::get('user/view', 'HomeController@UserList');
    Route::get('user/edit/{id}', 'HomeController@UserEdit');
    Route::post('user/update', 'HomeController@UserUpdate');
    Route::get('user/delete/{id}', 'HomeController@UserDelete');

    Route::get('admin/profile', 'ProfileController@ProfileInfo');
    Route::post('admin/profile', 'ProfileController@ProfileInfoStore');
    Route::get('admin/query-list', 'ProfileController@QueryList');
    Route::get('admin/slider', 'ProfileController@SliderAdd');
    Route::post('admin/slider', 'ProfileController@SliderStore');
    Route::get('admin/slider-list', 'ProfileController@SliderList');
    Route::get('admin/slider-edit/{id}', 'ProfileController@SliderEdit');
    Route::post('admin/slider-update/{id}', 'ProfileController@SliderUpdate');
    Route::get('admin/slider-delete/{id}', 'ProfileController@SliderDel');
    
    Route::get('admin/about-us', 'ProfileController@AboutUs');
    Route::post('admin/about-us', 'ProfileController@AboutUsStore');

    Route::get('admin/brand', 'ProfileController@BrandAdd');
    Route::post('admin/brand', 'ProfileController@BrandStore');
    Route::get('admin/brand-list', 'ProfileController@BrandList');
    Route::get('admin/brand-edit/{id}', 'ProfileController@BrandEdit');
    Route::post('admin/brand-update/{id}', 'ProfileController@BrandUpdate');
    Route::get('admin/brand-delete/{id}', 'ProfileController@BrandDel');


    Route::get('admin/portfolio', 'PortfolioController@PortfolioAdd');
    Route::post('admin/portfolio', 'PortfolioController@PortfolioStore');
    Route::get('admin/portfolio-list', 'PortfolioController@PortfolioList');
    //Route::get('admin/brand-edit/{id}', 'ProfileController@BrandEdit');
    //Route::post('admin/brand-update/{id}', 'ProfileController@BrandUpdate');
    //Route::get('admin/brand-delete/{id}', 'ProfileController@BrandDel');

    Route::get('admin/team', 'PortfolioController@TeamAdd');
    Route::post('admin/team', 'PortfolioController@TeamStore');
    Route::get('admin/team-list', 'PortfolioController@TeamList');
    //Route::get('admin/brand-edit/{id}', 'ProfileController@BrandEdit');
    //Route::post('admin/brand-update/{id}', 'ProfileController@BrandUpdate');
    //Route::get('admin/brand-delete/{id}', 'ProfileController@BrandDel');

    Route::get('admin/service', 'PortfolioController@ServiceAdd');
    Route::post('admin/service', 'PortfolioController@ServiceStore');
    Route::get('admin/service-list', 'PortfolioController@ServiceList');
    //Route::get('admin/brand-edit/{id}', 'ProfileController@BrandEdit');
    //Route::post('admin/brand-update/{id}', 'ProfileController@BrandUpdate');
    //Route::get('admin/brand-delete/{id}', 'ProfileController@BrandDel');



    Route::get('admin/testimonial', 'ProfileController@TestimonialAdd');
    Route::post('admin/testimonial', 'ProfileController@TestimonialStore');
    Route::get('admin/testimonial-list', 'ProfileController@TestimonialList');
    Route::get('admin/testimonial-edit/{id}', 'ProfileController@TestimonialEdit');
    Route::post('admin/testimonial-update/{id}', 'ProfileController@TestimonialUpdate');
    Route::get('admin/testimonial-delete/{id}', 'ProfileController@TestimonialDel');

    Route::get('admin/menu', 'ProfileController@MenuAdd');
    Route::post('admin/menu', 'ProfileController@MenuStore');
    Route::get('admin/menu-list', 'ProfileController@MenuList');
    Route::get('admin/menu-edit/{id}', 'ProfileController@MenuEdit');
    Route::post('admin/menu-update/{id}', 'ProfileController@MenuUpdate');
    Route::get('admin/menu-delete/{id}', 'ProfileController@MenuDel');


});


