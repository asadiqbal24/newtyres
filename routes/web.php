<?php
/*___________________________              
|                            |
|        ROUTES              | 
|                            | 
|____________________________*/


/*
|    
| Routes of Login & Membership
| 
*/

Route::get('test_email',[
       'uses' => 'HomeController@test_email',
       'as' => 'test_email'
  ]);

Route::get('order_test',[
       'uses' => 'HomeController@order_test',
       'as' => 'order_test'
  ]);

  Route::get('',[
       'uses' => 'LoginController@login',
       'as' => 'home'
  ]);

  Route::get('/',[
       'uses' => 'LoginController@login',
       'as' => 'home'
  ]);


Route::get('page/{slug}',[
       'uses' => 'HomeController@single_page',
       'as' => 'page'
  ]);



Route::get('get_postal_code',[
       'uses' => 'HomeController@get_postal_code',
       'as' => 'get_postal_code'
  ]);


Route::get('offers-mobile-fitment',[
       'uses' => 'HomeController@single_page',
       'as' => 'offers-mobile-fitment'
  ]);

Route::get('customer-service-price-match-guarantee',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-price-match-guarantee'
  ]);

Route::get('customer-service-same-day-next-day-offers',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-same-day-next-day-offers'
  ]);

Route::get('whybuyonline',[
       'uses' => 'HomeController@single_page',
       'as' => 'whybuyonline'
  ]);


Route::get('customer-service',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service'
  ]);


Route::get('customer-service-fitting-and-balancing',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-fitting-and-balancing'
  ]);

Route::get('purchasing-tyres-delivery-information',[
       'uses' => 'HomeController@single_page',
       'as' => 'purchasing-tyres-delivery-information'
  ]);


Route::get('customer-service-tyre-roadside-assist',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-tyre-roadside-assist'
  ]);

Route::get('customer-service-warranty',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-warranty'
  ]);


Route::get('customer-service-promotions',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-promotions'
  ]);


Route::get('customer-service-lowest-price-guarantee',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-lowest-price-guarantee'
  ]);


Route::get('customer-service-zipmoney',[
       'uses' => 'HomeController@single_page',
       'as' => 'customer-service-zipmoney'
  ]);


Route::get('help-faq',[
       'uses' => 'HomeController@single_page',
       'as' => 'help-faq'
  ]);


Route::get('help-tyre-buying-guide',[
       'uses' => 'HomeController@single_page',
       'as' => 'help-tyre-buying-guide'
  ]); 


Route::get('purchasing-tyres-tyre-size-guide',[
       'uses' => 'HomeController@single_page',
       'as' => 'purchasing-tyres-tyre-size-guide'
  ]); 


 Route::get('home',[
       'uses' => 'HomeController@home',
       'as' => 'home'
  ]);

  Route::get('login',[
       'uses' => 'LoginController@login',
       'as' => 'login'
  ]);

  Route::get('login_here',[
       'uses' => 'LoginController@login',
       'as' => 'login_here'
  ]);

Route::post('login.post',[
       'uses' => 'LoginController@post_login',
       'as' => 'login.post'
  ]);

  Route::get('register',[
       'uses' => 'HomeController@register',
       'as' => 'register'
  ]);


  Route::post('post',[
       'uses' => 'LoginController@register_post',
       'as' => 'register.post'
  ]);  

Route::get('logout',[
   'uses' => 'LoginController@logout',
   'as' => 'logout'
]);

Route::get('account.verify/{uid}',[
   'uses' => 'LoginController@account_verify',
   'as' => 'account.verify'
]);

Route::get('forgot_password',[
   'uses' => 'ForgotPasswordController@forgot_password',
   'as' => 'forgot_password'
]);


Route::post('submit.forgot_password',[
   'uses' => 'ForgotPasswordController@send_reset_mail',
   'as' => 'submit.forgot_password'
]);

Route::get('reset_password/{uid}/{token}/{email}',[
   'uses' => 'ForgotPasswordController@reset_password',
   'as' => 'reset_password'
]);


  Route::get('test_email',[
       'uses' => 'HomeController@test_email',
       'as' => 'test_email'
  ]);

Route::get('tyre/size', [
   'uses'   =>  'TyresController@by_tyre_size',
   'as'     =>  'tyre/size'
]);


Route::get('brand/size', [
   'uses'   =>  'TyresController@by_brand_size',
   'as'     =>  'brand/size'
]);

Route::get('tyre/size/view/{slug}', [
   'uses'   =>  'TyresController@tyre_details',
   'as'     =>  'tyre/size/view'
]);

Route::get('tyres', [
   'uses'   =>  'TyresController@by_tyre_brand',
   'as'     =>  'tyres'
]);

Route::get('tyres/brand/pattern', [
   'uses'   =>  'TyresController@by_tyre_brand_pattern',
   'as'     =>  'tyres/brand/pattern'
]);


Route::get('vehicles', [
   'uses'   =>  'TyresController@by_vehicles',
   'as'     =>  'vehicles'
]);

Route::get('truck', [
   'uses'   =>  'TyresController@by_truck',
   'as'     =>  'truck'
]);


Route::get('truck/size/{slug}', [
   'uses'   =>  'TyresController@by_truck_size',
   'as'     =>  'truck/size'
]);


Route::get('otr', [
   'uses'   =>  'TyresController@by_otr',
   'as'     =>  'otr'
]);


Route::get('otr/size/{slug}', [
   'uses'   =>  'TyresController@by_otr_size',
   'as'     =>  'otr/size'
]);

Route::get('customer-service/zipmoney', [
   'uses'   =>  'TyresController@customer_service_zipmoney',
   'as'     =>  'customer-service/zipmoney'
]);

Route::get('offers/current-promotions', [
   'uses'   =>  'TyresController@offers_current_promotions',
   'as'     =>  'offers/current-promotions'
]);

Route::get('customer-service/tyre-roadside-assist', [
   'uses'   =>  'TyresController@tyre_roadside_assist',
   'as'     =>  'customer-service/tyre-roadside-assist'
]);


Route::get('offers/mobile-fitment', [
   'uses'   =>  'TyresController@offers_mobile_fitment',
   'as'     =>  'offers/mobile-fitment'
]);


Route::get('fitment-centres', [
   'uses'   =>  'TyresController@find_fitment_centres',
   'as'     =>  'fitment-centres'
]);

Route::get('customer-service/same-day-next-day-offers', [
   'uses'   =>  'TyresController@day_offers',
   'as'     =>  'customer-service/same-day-next-day-offers'
]);

Route::get('customer-service/price-match-guarantee', [
   'uses'   =>  'TyresController@price_match_guarantee',
   'as'     =>  'customer-service/price-match-guarantee'
]);


Route::get('search', [
   'uses'   =>  'HomeController@search',
   'as'     =>  'search'
]);

Route::post('get_width_profile', [
   'uses'   =>  'HomeController@get_width_profile',
   'as'     =>  'get_width_profile'
]);


Route::post('get_brands_patterns', [
   'uses'   =>  'HomeController@get_brands_patterns',
   'as'     =>  'get_brands_patterns'
]);

Route::post('get_brands_patterns_list', [
   'uses'   =>  'HomeController@get_brands_patterns_list',
   'as'     =>  'get_brands_patterns_list'
]);


Route::post('get_brands_patterns_list_by_id', [
   'uses'   =>  'HomeController@get_brands_patterns_list_by_id',
   'as'     =>  'get_brands_patterns_list_by_id'
]);




Route::post('get_profile_rim', [
   'uses'   =>  'HomeController@get_profile_rim',
   'as'     =>  'get_profile_rim'
]);


Route::post('get_tra_code', [
   'uses'   =>  'HomeController@get_tra_code',
   'as'     =>  'get_tra_code'
]);

Route::get('buy', [
   'uses'   =>  'HomeController@buy',
   'as'     =>  'buy'
]);

Route::get('buy/tyre/{brand}/{pattern}/{tyre}/{id}', [
   'uses'   =>  'HomeController@buy',
   'as'     =>  'buy/tyre'
]);


Route::any('checkout/{token}', [
   'uses'   =>  'HomeController@checkout',
   'as'     =>  'checkout'
]);

Route::post('home-delivery-save', [
   'uses'   =>  'HomeController@home_delivery_save',
   'as'     =>  'home-delivery-save'
]);

Route::post('customer-details-save', [
   'uses'   =>  'HomeController@customer_details_save',
   'as'     =>  'customer-details-save'
]);


Route::post('get_model_details', [
   'uses'   =>  'TyresController@get_model_details',
   'as'     =>  'get_model_details'
]);


Route::post('get_vehicle_model_details', [
   'uses'   =>  'TyresController@get_vehicle_model_details',
   'as'     =>  'get_vehicle_model_details'
]);



Route::post('get_vehicle_model_series', [
   'uses'   =>  'TyresController@get_vehicle_model_series',
   'as'     =>  'get_vehicle_model_series'
]);


Route::get('vehicle/search', [
   'uses'   =>  'TyresController@vehicle_search',
   'as'     =>  'vehicle/search'
]);


Route::get('search/brand', [
   'uses'   =>  'TyresController@brand_search',
   'as'     =>  'search/brand'
]);



Route::get('otr/search', [
   'uses'   =>  'TyresController@otr_search',
   'as'     =>  'otr/search'
]);


Route::get('truck/search', [
   'uses'   =>  'TyresController@truck_search',
   'as'     =>  'truck/search'
]);



Route::get('vehicles/make/{slug}', [
   'uses'   =>  'TyresController@vehicles_make',
   'as'     =>  'vehicles/make'
]);

Route::get('vehicle/{make}/{model}', [
   'uses'   =>  'TyresController@model_tyres',
   'as'     =>  'vehicle'
]);


Route::get('runflat', [
   'uses'   =>  'TyresController@runflat',
   'as'     =>  'runflat'
]);


Route::get('tyres/runflat/{slug}', [
   'uses'   =>  'TyresController@tyres_runflat',
   'as'     =>  'tyres/runflat'
]);


Route::get('tyres/runflat/tyre/{brand}', [
   'uses'   =>  'TyresController@tyres_runflat',
   'as'     =>  'tyres/runflat'
]);


Route::post('help-tyre-not-found', [
   'uses'   =>  'CustomerTyreNotFoundController@save_not_found',
   'as'     =>  'help-tyre-not-found'
]);


Route::post('ordersummary', [
   'uses'   =>  'CheckoutCartController@ordersummary',
   'as'     =>  'ordersummary'
]);


Route::get('dealer-signup', [
   'uses'   =>  'HomeController@dealer_signup',
   'as'     =>  'dealer-signup'
]);

Route::post('dealer-signup-post', [
   'uses'   =>  'HomeController@dealer_signup_post',
   'as'     =>  'dealer-signup-post'
]);


Route::get('fitment-locations', [
   'uses'   =>  'FitmentLocationsController@fitment_locations',
   'as'     =>  'fitment-locations'
]);

Route::get('fitment-centers/{state}/{slug}', [
   'uses'   =>  'FitmentLocationsController@fitment_locations_areas',
   'as'     =>  'fitment-centers'
]);

Route::get('fitment-area-centers/{state}/{slug}/{area_slug}', [
   'uses'   =>  'FitmentLocationsController@fitment_locations_areas_center',
   'as'     =>  'fitment-area-centers'
]);


Route::get('paywithpaypal/{session}', 'PayPalController@paywithpaypal')->name('paywithpaypal');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('paypal-success', 'PayPalController@success')->name('paypal-success');


Route::post('check-promocode', [
   'uses'   =>  'PromoCodesController@check_code',
   'as'     =>  'check-promocode'
]);


Route::get('/facebookredirect', 'SocialAuthFacebookController@redirect')->name('facebookredirect');
Route::get('/facebookcallback', 'SocialAuthFacebookController@callback')->name('facebookcallback');



Route::get('/googleredirect', 'GoogleAuthController@redirectToProvider')->name('googleredirect');;
Route::get('/googlecallback', 'GoogleAuthController@handleProviderCallback')->name('googlecallback');;


Route::get('contact-us', [
   'uses'   =>  'ContactUsController@contact_us',
   'as'     =>  'contact-us'
]);


Route::post('contact-request-save', [
   'uses'   =>  'ContactUsController@post_contact_us',
   'as'     =>  'contact-request-save'
]);


Route::get('faqs', [
   'uses'   =>  'FaqsController@faqs',
   'as'     =>  'faqs'
]);

Route::get('help/faqs/section', [
   'uses'   =>  'FaqsController@faqs_section',
   'as'     =>  'help/faqs/section'
]);


Route::get('help/faqs/section/article/{url}', [
   'uses'   =>  'FaqsController@faqs_section_article',
   'as'     =>  'help/faqs/section/article'
]);

Route::post('help/search', [
   'uses'   =>  'FaqsController@help_search',
   'as'     =>  'help/search'
]);


Route::get('tyre/suv', [
   'uses'   =>  'TyresController@tyres_suv',
   'as'     =>  'tyre/suv'
]);

Route::get('tyres/suv/{url}', [
   'uses'   =>  'TyresController@tyres_suv_brand',
   'as'     =>  'tyres/suv'
]);

Route::get('runflat/view/tyre/{url}', [
   'uses'   =>  'TyresController@run_flat_tyre_view',
   'as'     =>  'runflat/view/tyre'
]);

Route::get('suv/view/tyre/{url}', [
   'uses'   =>  'TyresController@suv_tyre_view',
   'as'     =>  'suv/view/tyre'
]);

Route::get('tyres/fuelefficient', [
   'uses'   =>  'TyresController@fuelefficient',
   'as'     =>  'tyres/fuelefficient'
]);

Route::get('fuel-efficient/view/tyre/{url}', [
   'uses'   =>  'TyresController@fuelefficient_view_tyre',
   'as'     =>  'fuel-efficient/view/tyre'
]);

Route::post('find-fitment-center', [
   'uses'   =>  'FitmentLocationsController@find_fitment_center',
   'as'     =>  'find-fitment-center'
]);

Route::post('select-fitment-center', [
   'uses'   =>  'SelectedFitmentCenterController@select_fitment_center',
   'as'     =>  'select-fitment-center'
]);


Route::post('save_appoinment_time', [
   'uses'   =>  'SelectedFitmentCenterController@save_appoinment_time',
   'as'     =>  'save_appoinment_time'
]);

Route::post('get-fitment-center', [
   'uses'   =>  'SelectedFitmentCenterController@get_fitment_center',
   'as'     =>  'get-fitment-center'
]);


Route::post('find-fitment-centers', [
   'uses'   =>  'SelectedFitmentCenterController@find_fitment_centers',
   'as'     =>  'find-fitment-centers'
]);


Route::get('help-ask-an-expert', [
   'uses'   =>  'HomeController@help_ask_an_expert',
   'as'     =>  'help-ask-an-expert'
]);


Route::post('post.inquery', [
   'uses'   =>  'InqueryController@post_inquery',
   'as'     =>  'post.inquery'
]);






Route::group(['prefix'=>'/admin'],function(){
Route::get('dashboard',[
'uses' => 'AdminController@dashboard',
'as' => 'admin.dashboard',
'middleware' => 'can:admin'
]);

Route::get('database-backup',[
'uses' => 'AdminController@database_backup',
'as' => 'database.backup',
'middleware' => 'can:admin'
]);


Route::get('edit-profile',[
'uses' => 'AdminController@edit_profile',
'as' => 'admin/edit-profile',
'middleware' => 'can:admin'
]);

Route::post('save-profile',[
'uses' => 'AdminController@save_profile',
'as' => 'admin/save-profile',
'middleware' => 'can:admin'
]);

Route::get('users-list',[
'uses' => 'AdminController@users_list',
'as' => 'admin/users-list',
'middleware' => 'can:admin'
]);


Route::get('user-delete/{id}',[
'uses' => 'AdminController@delete_user',
'as' => 'admin.user-delete',
'middleware' => 'can:admin'
]);


Route::get('settings/{id}',[
'uses' => 'SettingsController@index',
'as' => 'admin.settings',
'middleware' => 'can:admin'
]);

Route::post('settings.save',[
'uses' => 'SettingsController@update',
'as' => 'admin.settings.save',
'middleware' => 'can:admin'
]);

Route::get('sections.settings/{id}',[
'uses' => 'SettingsController@section_index',
'as' => 'admin.sections.settings',
'middleware' => 'can:admin'
]);

Route::post('sections.settings.save',[
'uses' => 'SettingsController@sections_update',
'as' => 'admin.sections.settings.save',
'middleware' => 'can:admin'
]);

Route::get('about_us',[
'uses' => 'AboutUsController@about_us',
'as' => 'admin.about_us',
'middleware' => 'can:admin'
]);

Route::get('add-about-us/{id}',[
'uses' => 'AboutUsController@add_about_us',
'as' => 'admin.add-about-us',
'middleware' => 'can:admin'
]);

Route::post('about_us.save',[
'uses' => 'AboutUsController@about_us_update',
'as' => 'admin.about_us.save',
'middleware' => 'can:admin'
]);


Route::get('area',[
'uses' => 'AreaController@area',
'as' => 'admin.area',
'middleware' => 'can:admin'
]);

Route::get('add_area',[
'uses' => 'AreaController@add_area',
'as' => 'admin.add_area',
'middleware' => 'can:admin'
]);


Route::post('area.save',[
'uses' => 'AreaController@save_area',
'as' => 'admin.area.save',
'middleware' => 'can:admin'
]);

Route::post('area.update',[
'uses' => 'AreaController@update_area',
'as' => 'admin.area.update',
'middleware' => 'can:admin'
]);

Route::get('area-active/{id}',[
'uses' => 'AreaController@area_active',
'as' => 'admin.area-active',
'middleware' => 'can:admin'
]);



Route::post('area.copy',[
'uses' => 'AreaController@copy_area',
'as' => 'admin.area.copy',
'middleware' => 'can:admin'
]);


Route::get('faqs',[
'uses' => 'FaqsController@admin_faqs',
'as' => 'admin.faqs',
'middleware' => 'can:admin'
]);

Route::get('add_faqs',[
'uses' => 'FaqsController@add_faqs',
'as' => 'admin.add_faqs',
'middleware' => 'can:admin'
]);

Route::post('faq.save',[
'uses' => 'FaqsController@save_faq',
'as' => 'admin.faq.save',
'middleware' => 'can:admin'
]);


Route::get('sliders',[
'uses' => 'SlidersController@admin_sliders',
'as' => 'admin.sliders',
'middleware' => 'can:admin'
]);

Route::get('add_sliders',[
'uses' => 'SlidersController@add_sliders',
'as' => 'admin.add_sliders',
'middleware' => 'can:admin'
]);


Route::post('slider.save',[
'uses' => 'SlidersController@slider_save',
'as' => 'admin.slider.save',
'middleware' => 'can:admin'
]);


Route::get('slider.delete.image/{id}',[
'uses' => 'SlidersController@slider_delete_image',
'as' => 'admin.slider.delete.image',
'middleware' => 'can:admin'
]);

Route::post('update.slider.image',[
'uses' => 'SlidersController@slider_update',
'as' => 'admin.update.slider.image',
'middleware' => 'can:admin'
]);


Route::get('countries',[
'uses' => 'CountryController@countries',
'as' => 'admin.countries',
'middleware' => 'can:admin'
]);

Route::get('add_countries',[
'uses' => 'CountryController@add_countries',
'as' => 'admin.add_countries',
'middleware' => 'can:admin'
]);


Route::post('countries.save',[
'uses' => 'CountryController@save_countries',
'as' => 'admin.countries.save',
'middleware' => 'can:admin'
]);

Route::post('countries.update',[
'uses' => 'CountryController@update_countries',
'as' => 'admin.countries.update',
'middleware' => 'can:admin'
]);

Route::get('countries-active/{id}',[
'uses' => 'CountryController@countries_active',
'as' => 'admin.countries-active',
'middleware' => 'can:admin'
]);

Route::get('country-delete/{id}',[
'uses' => 'CountryController@country_delete',
'as' => 'admin.country-delete',
'middleware' => 'can:admin'
]);

Route::get('view-region-areas/{id}',[
'uses' => 'AreaController@view_region_areas',
'as' => 'admin.view-region-areas',
'middleware' => 'can:admin'
]);



Route::post('region.update',[
'uses' => 'RegionsController@region_update',
'as' => 'admin.region.update',
'middleware' => 'can:admin'
]);

Route::get('region-delete/{id}',[
'uses' => 'RegionsController@region_delete',
'as' => 'admin.region-delete',
'middleware' => 'can:admin'
]);

Route::get('queries',[
'uses' => 'ContactUsController@queries',
'as' => 'admin.queries',
'middleware' => 'can:admin'
]);

Route::post('save_query_reply',[
'uses' => 'ContactUsController@save_query_reply',
'as' => 'admin.save_query_reply',
'middleware' => 'can:admin'
]);

Route::get('regions',[
'uses' => 'RegionsController@regions',
'as' => 'admin.regions',
'middleware' => 'can:admin'
]);


Route::post('region.save',[
'uses' => 'RegionsController@region_save',
'as' => 'admin.region.save',
'middleware' => 'can:admin'
]);

Route::get('region-active/{id}',[
'uses' => 'RegionsController@region_active',
'as' => 'admin.region-active',
'middleware' => 'can:admin'
]);

Route::get('categories',[
'uses' => 'CategoriesController@categories',
'as' => 'admin.categories',
'middleware' => 'can:admin'
]);


Route::post('category.save',[
'uses' => 'CategoriesController@category_save',
'as' => 'admin.category.save',
'middleware' => 'can:admin'
]);


Route::get('vehicle_categories',[
'uses' => 'CategoriesController@vehicle_categories',
'as' => 'admin.vehicle_categories',
'middleware' => 'can:admin'
]);


Route::post('vehicle_categories.save',[
'uses' => 'CategoriesController@vehicle_categories_save',
'as' => 'admin.vehicle_categories.save',
'middleware' => 'can:admin'
]);



Route::get('tyres-brands',[
'uses' => 'TyresBrandsController@brands',
'as' => 'admin.tyres-brands',
'middleware' => 'can:admin'
]);

Route::post('tyre_brand.save',[
'uses' => 'TyresBrandsController@brands_save',
'as' => 'admin.tyre_brand.save',
'middleware' => 'can:admin'
]);

Route::post('tyre_brand.update',[
'uses' => 'TyresBrandsController@brands_update',
'as' => 'admin.tyre_brand.update',
'middleware' => 'can:admin'
]);

Route::get('brands-delete/{id}',[
'uses' => 'TyresBrandsController@delete_brand',
'as' => 'admin.brands-delete',
'middleware' => 'can:admin'
]);

Route::get('brands-delete/{id}',[
'uses' => 'TyresBrandsController@delete_brand',
'as' => 'admin.brands-delete',
'middleware' => 'can:admin'
]);


Route::get('brands-patterns/{id}',[
'uses' => 'TyresBrandsController@brands_patterns',
'as' => 'admin.brands-patterns',
'middleware' => 'can:admin'
]);


Route::post('tyre_brand_pattern.save',[
'uses' => 'TyresBrandsPatternsController@tyre_brand_pattern_save',
'as' => 'admin.tyre_brand_pattern.save',
'middleware' => 'can:admin'
]);


Route::get('brands-patterns-delete/{id}',[
'uses' => 'TyresBrandsPatternsController@delete_brand_pattern',
'as' => 'admin.brands-patterns-delete',
'middleware' => 'can:admin'
]);

Route::post('tyre_brand_pattern.update',[
'uses' => 'TyresBrandsPatternsController@tyre_brand_pattern_update',
'as' => 'admin.tyre_brand_pattern.update',
'middleware' => 'can:admin'
]);



Route::get('tyres-categories',[
'uses' => 'TyresCategoriesController@tyres_categories',
'as' => 'admin.tyres-categories',
'middleware' => 'can:admin'
]);

Route::post('tyre.category.save',[
'uses' => 'TyresCategoriesController@tyre_category_save',
'as' => 'admin.tyre.category.save',
'middleware' => 'can:admin'
]);


Route::post('tyre.category.update',[
'uses' => 'TyresCategoriesController@tyre_category_update',
'as' => 'admin.tyre.category.update',
'middleware' => 'can:admin'
]);


Route::get('tyres',[
'uses' => 'TyresController@admin_tyres',
'as' => 'admin.tyres',
'middleware' => 'can:admin'
]);

Route::get('add.tyre',[
'uses' => 'TyresController@admin_add_tyres',
'as' => 'admin.add.tyre',
'middleware' => 'can:admin'
]);

Route::post('tyre.save',[
'uses' => 'TyresController@admin_tyres_save',
'as' => 'admin.tyre.save',
'middleware' => 'can:admin'
]);


Route::get('tyre.edit/{id}',[
'uses' => 'TyresController@admin_tyres_edit',
'as' => 'admin.tyre.edit',
'middleware' => 'can:admin'
]);

Route::post('tyre.update',[
'uses' => 'TyresController@admin_tyres_update',
'as' => 'admin.tyre.update',
'middleware' => 'can:admin'
]);

Route::get('pages',[
'uses' => 'PagesController@admin_pages',
'as' => 'admin.pages',
'middleware' => 'can:admin'
]);

Route::get('pages-delete/{id}',[
'uses' => 'PagesController@admin_pages_delete',
'as' => 'admin.pages-delete',
'middleware' => 'can:admin'
]);

Route::get('pages-data/{id}',[
'uses' => 'PagesController@pages_data',
'as' => 'admin.pages-data',
'middleware' => 'can:admin'
]);

Route::post('page-content.save',[
'uses' => 'PagesController@page_content_save',
'as' => 'admin.page-content.save',
'middleware' => 'can:admin'
]);


Route::get('tyres-attributes',[
'uses' => 'TyreAttributesController@tyres_attributes',
'as' => 'admin.tyres-attributes',
'middleware' => 'can:admin'
]);

Route::post('tyres_attributes.save',[
'uses' => 'TyreAttributesController@tyres_attributes_save',
'as' => 'admin.tyres_attributes.save',
'middleware' => 'can:admin'
]);

Route::get('tyres_attributes-delete/{id}',[
'uses' => 'TyreAttributesController@delete_attribute',
'as' => 'admin.tyres_attributes-delete',
'middleware' => 'can:admin'
]);


Route::post('tyres_attributes.update',[
'uses' => 'TyreAttributesController@tyres_attributes_update',
'as' => 'admin.tyres_attributes.update',
'middleware' => 'can:admin'
]);


Route::get('tyres-delete/{id}',[
'uses' => 'TyresController@tyres_delete',
'as' => 'admin.tyres-delete',
'middleware' => 'can:admin'
]);


Route::get('vehicles',[
'uses' => 'VehiclesController@vehicles',
'as' => 'admin.vehicles',
'middleware' => 'can:admin'
]);


Route::get('vehicles.list',[
'uses' => 'VehiclesController@vehicles',
'as' => 'admin.vehicles.list',
'middleware' => 'can:admin'
]);


Route::post('vehicle.save',[
'uses' => 'VehiclesController@vehicles_save',
'as' => 'admin.vehicle.save',
'middleware' => 'can:admin'
]);


Route::post('vehicle.update',[
'uses' => 'VehiclesController@vehicles_update',
'as' => 'admin.vehicle.update',
'middleware' => 'can:admin'
]);

Route::get('vehicles.model',[
'uses' => 'VehiclesController@vehicles_model',
'as' => 'admin.vehicles.model',
'middleware' => 'can:admin'
]);

Route::post('vehicle.model.save',[
'uses' => 'VehiclesController@vehicles_model_save',
'as' => 'admin.vehicle.model.save',
'middleware' => 'can:admin'
]);

Route::post('vehicle.model.update',[
'uses' => 'VehiclesController@vehicles_model_update',
'as' => 'admin.vehicle.model.update',
'middleware' => 'can:admin'
]);


Route::get('vehicles.model.series',[
'uses' => 'VehiclesController@vehicles_model_series',
'as' => 'admin.vehicles.model.series',
'middleware' => 'can:admin'
]);

Route::post('vehicle.model.series.save',[
'uses' => 'VehiclesController@vehicles_model_series_save',
'as' => 'admin.vehicle.model.series.save',
'middleware' => 'can:admin'
]);


Route::get('tyre-not-found',[
'uses' => 'CustomerTyreNotFoundController@tyre_not_found',
'as' => 'admin.tyre-not-found',
'middleware' => 'can:admin'
]);

Route::get('tyres-not-found-delete/{id}',[
'uses' => 'CustomerTyreNotFoundController@delete_tyre_not_found',
'as' => 'admin.tyres-not-found-delete',
'middleware' => 'can:admin'
]);


Route::get('tyres-not-found-reply/{id}',[
'uses' => 'CustomerTyreNotFoundController@reply_tyre_not_found',
'as' => 'admin.tyres-not-found-reply',
'middleware' => 'can:admin'
]);





Route::get('bank',[
'uses' => 'BanksController@banks',
'as' => 'admin.bank',
'middleware' => 'can:admin'
]);


Route::post('add_bank',[
'uses' => 'BanksController@add_bank',
'as' => 'admin.add_bank',
'middleware' => 'can:admin'
]);


Route::post('edit_bank',[
'uses' => 'BanksController@edit_bank',
'as' => 'admin.edit_bank',
'middleware' => 'can:admin'
]);


Route::get('bank/view_balance_sheet/{id}',[
'uses' => 'BanksController@view_balance_sheet',
'as' => 'admin.bank/view_balance_sheet',
'middleware' => 'can:admin'
]);


Route::get('bank-delete/{id}',[
'uses' => 'BanksController@bank_delete',
'as' => 'admin.bank-delete',
'middleware' => 'can:admin'
]);

Route::get('bank-default/{id}',[
'uses' => 'BanksController@bank_default',
'as' => 'admin.bank-default',
'middleware' => 'can:admin'
]);




Route::get('promotions',[
'uses' => 'PromotionsController@admin_promotions',
'as' => 'admin.promotions',
'middleware' => 'can:admin'
]);

Route::get('promotions-add',[
'uses' => 'PromotionsController@admin_promotions_add',
'as' => 'admin.promotions-add',
'middleware' => 'can:admin'
]);

Route::get('promotions-delete/{id}',[
'uses' => 'PromotionsController@admin_promotions_delete',
'as' => 'admin.promotions-delete',
'middleware' => 'can:admin'
]);

Route::get('promotions-edit/{id}',[
'uses' => 'PromotionsController@admin_promotions_edit',
'as' => 'admin.promotions-edit',
'middleware' => 'can:admin'
]);



Route::post('promotion.save',[
'uses' => 'PromotionsController@admin_promotions_save',
'as' => 'admin.promotion.save',
'middleware' => 'can:admin'
]);


Route::post('promotion.update',[
'uses' => 'PromotionsController@admin_promotions_update',
'as' => 'admin.promotion.update',
'middleware' => 'can:admin'
]);


Route::get('fitment.centers',[
'uses' => 'FitmentLocationsController@admin_fitment_centers',
'as' => 'admin.fitment.centers',
'middleware' => 'can:admin'
]);


Route::get('fitment.area/{slug}',[
'uses' => 'FitmentLocationsController@admin_fitment_area',
'as' => 'admin.fitment.area',
'middleware' => 'can:admin'
]);

Route::get('fitment.center/{slug}/{url}',[
'uses' => 'FitmentLocationsController@admin_fitment_center',
'as' => 'admin.fitment.center',
'middleware' => 'can:admin'
]);

Route::get('fitments.center/{area_slug}/{slug}/{url}',[
'uses' => 'FitmentLocationsController@admin_fitments_center',
'as' => 'admin.fitments.center',
'middleware' => 'can:admin'
]);

Route::post('fitment_location.save',[
'uses' => 'FitmentLocationsController@admin_fitment_loc_save',
'as' => 'admin.fitment_location.save',
'middleware' => 'can:admin'
]);

Route::post('fitment_location.update',[
'uses' => 'FitmentLocationsController@admin_fitment_loc_update',
'as' => 'admin.fitment_location.update',
'middleware' => 'can:admin'
]);


Route::get('fitment-location.delete/{id}',[
'uses' => 'FitmentLocationsController@admin_fitment_loc_delete',
'as' => 'admin.fitment-location.delete',
'middleware' => 'can:admin'
]);


Route::post('fitment_area.save',[
'uses' => 'FitmentLocationsController@fitment_area_save',
'as' => 'admin.fitment_area.save',
'middleware' => 'can:admin'
]);

Route::post('fitment_area.update',[
'uses' => 'FitmentLocationsController@fitment_area_update',
'as' => 'admin.fitment_area.update',
'middleware' => 'can:admin'
]);

Route::get('fitment-area.delete/{id}',[
'uses' => 'FitmentLocationsController@fitment_area_delete',
'as' => 'admin.fitment-area.delete',
'middleware' => 'can:admin'
]);



Route::post('fitment_center.save',[
'uses' => 'FitmentLocationsController@fitment_center_save',
'as' => 'admin.fitment_center.save',
'middleware' => 'can:admin'
]);

Route::get('edit.fitment.center/{id}',[
'uses' => 'FitmentLocationsController@fitment_center_edit',
'as' => 'admin.edit.fitment.center',
'middleware' => 'can:admin'
]);

Route::post('fitment_center.update',[
'uses' => 'FitmentLocationsController@fitment_center_update',
'as' => 'admin.fitment_center.update',
'middleware' => 'can:admin'
]);


Route::get('fitment-area_center.delete/{id}',[
'uses' => 'FitmentLocationsController@fitment_center_delete',
'as' => 'admin.fitment-area_center.delete',
'middleware' => 'can:admin'
]);


Route::get('promo.codes',[
'uses' => 'PromoCodesController@admin_promo_codes',
'as' => 'admin.promo.codes',
'middleware' => 'can:admin'
]);

Route::get('promo-codes-add',[
'uses' => 'PromoCodesController@admin_add_promo_codes',
'as' => 'admin.promo-codes-add',
'middleware' => 'can:admin'
]);


Route::post('promo-code.save',[
'uses' => 'PromoCodesController@promo_code_save',
'as' => 'admin.promo-code.save',
'middleware' => 'can:admin'
]);

Route::post('promo-code.update',[
'uses' => 'PromoCodesController@promo_code_update',
'as' => 'admin.promo-code.update',
'middleware' => 'can:admin'
]);

Route::get('promocode-edit/{id}',[
'uses' => 'PromoCodesController@admin_edit_promo_codes',
'as' => 'admin.promocode-edit',
'middleware' => 'can:admin'
]);

Route::get('promocode-delete/{id}',[
'uses' => 'PromoCodesController@admin_delete_promo',
'as' => 'admin.promocode-delete',
'middleware' => 'can:admin'
]);

Route::get('vehicles-delete/{id}',[
'uses' => 'VehiclesController@admin_vehicle_delete',
'as' => 'admin.vehicles-delete',
'middleware' => 'can:admin'
]);


Route::get('vehicle-series-delete/{id}',[
'uses' => 'VehiclesController@admin_vehicle_series_delete',
'as' => 'admin.vehicle-series-delete',
'middleware' => 'can:admin'
]);


Route::post('vehicle.model.series.update',[
'uses' => 'VehiclesController@vehicles_model_series_update',
'as' => 'admin.vehicle.model.series.update',
'middleware' => 'can:admin'
]);


Route::get('get_vehicle_model',[
'uses' => 'VehiclesController@get_vehicle_model',
'as' => 'admin.get_vehicle_model',
'middleware' => 'can:admin'
]);

Route::get('dealer.signup',[
'uses' => 'DealerSignupController@admin_dealer_signup',
'as' => 'admin.dealer.signup',
'middleware' => 'can:admin'
]);




Route::get('tyres-sizes',[
'uses' => 'TyreSizeController@tyres_size',
'as' => 'admin.tyres-sizes',
'middleware' => 'can:admin'
]);

Route::post('tyre.size.save',[
'uses' => 'TyreSizeController@tyre_size_save',
'as' => 'admin.tyre.size.save',
'middleware' => 'can:admin'
]);


Route::post('tyre.size.update',[
'uses' => 'TyreSizeController@tyre_size_update',
'as' => 'admin.tyre.size.update',
'middleware' => 'can:admin'
]);


Route::get('finance.provider',[
'uses' => 'FinanceProviderController@finance_provider',
'as' => 'admin.finance.provider',
'middleware' => 'can:admin'
]);

Route::post('finance.provider.save',[
'uses' => 'FinanceProviderController@finance_provider_save',
'as' => 'admin.finance.provider.save',
'middleware' => 'can:admin'
]);


Route::get('provider-delete/{id}',[
'uses' => 'FinanceProviderController@finance_provider_delete',
'as' => 'admin.provider-delete',
'middleware' => 'can:admin'
]);

Route::post('finance.provider.update',[
'uses' => 'FinanceProviderController@finance_provider_update',
'as' => 'admin.finance.provider.update',
'middleware' => 'can:admin'
]);


Route::get('promocode-send/{id}',[
'uses' => 'PromoCodesController@promocode_send',
'as' => 'admin.promocode-send',
'middleware' => 'can:admin'
]);


Route::post('send-promocode',[
'uses' => 'PromoCodesController@send_promocode',
'as' => 'admin.send-promocode',
'middleware' => 'can:admin'
]);


Route::get('shipping.address',[
'uses' => 'ShippingAddressController@shipping_address',
'as' => 'admin.shipping.address',
'middleware' => 'can:admin'
]);

Route::post('shipping.address.save',[
'uses' => 'ShippingAddressController@shipping_address_address',
'as' => 'admin.shipping.address.save',
'middleware' => 'can:admin'
]);

Route::get('shipping.methods',[
'uses' => 'ShippingMethodsController@shipping_methods',
'as' => 'admin.shipping.methods',
'middleware' => 'can:admin'
]);

Route::get('add_shipment_methods',[
'uses' => 'ShippingMethodsController@add_shipping_methods',
'as' => 'admin.add_shipment_methods',
'middleware' => 'can:admin'
]);


Route::post('shipping.method.save',[
'uses' => 'ShippingMethodsController@shipping_method_save',
'as' => 'admin.shipping.method.save',
'middleware' => 'can:admin'
]);


Route::get('shipping.method-delete/{id}',[
'uses' => 'ShippingMethodsController@shipping_address_delete',
'as' => 'admin.shipping.method-delete',
'middleware' => 'can:admin'
]);


Route::get('shipping.method.edit/{id}',[
'uses' => 'ShippingMethodsController@shipping_address_edit',
'as' => 'admin.shipping.method.edit',
'middleware' => 'can:admin'
]);


Route::post('shipping.method.update',[
'uses' => 'ShippingMethodsController@shipping_method_update',
'as' => 'admin.shipping.method.update',
'middleware' => 'can:admin'
]);






Route::get('extra.order.items',[
'uses' => 'ExtraOrderItemsController@extra_order_items',
'as' => 'admin.extra.order.items',
'middleware' => 'can:admin'
]);

Route::get('add_extra.order.items',[
'uses' => 'ExtraOrderItemsController@add_extra_order_items',
'as' => 'admin.add_extra.order.items',
'middleware' => 'can:admin'
]);


Route::post('extra.order.items.save',[
'uses' => 'ExtraOrderItemsController@extra_order_items_save',
'as' => 'admin.extra.order.items.save',
'middleware' => 'can:admin'
]);


Route::get('extra.order.items-delete/{id}',[
'uses' => 'ExtraOrderItemsController@extra_order_items_delete',
'as' => 'admin.extra.order.items-delete',
'middleware' => 'can:admin'
]);


Route::get('extra.order.items.edit/{id}',[
'uses' => 'ExtraOrderItemsController@extra_order_items_edit',
'as' => 'admin.extra.order.items.edit',
'middleware' => 'can:admin'
]);


Route::post('extra.order.items.update',[
'uses' => 'ExtraOrderItemsController@extra_order_items_update',
'as' => 'admin.extra.order.items.update',
'middleware' => 'can:admin'
]);



Route::post('upload_tyre_file',[
'uses' => 'TyresController@upload_tyre_file',
'as' => 'admin.upload_tyre_file',
'middleware' => 'can:admin'
]);

Route::get('inqueries',[
'uses' => 'InqueryController@admin_inqueries',
'as' => 'admin.inqueries',
'middleware' => 'can:admin'
]);

Route::get('inquery-reply/{id}',[
'uses' => 'InqueryController@inquery_reply',
'as' => 'admin.inquery-reply',
'middleware' => 'can:admin'
]);


Route::get('inquery-delete/{id}',[
'uses' => 'InqueryController@inquery_delete',
'as' => 'admin.inquery-delete',
'middleware' => 'can:admin'
]);


Route::get('site.discount',[
'uses' => 'TyresDiscountsController@site_discounts',
'as' => 'admin.site.discount',
'middleware' => 'can:admin'
]);


Route::post('save.site.discount',[
'uses' => 'TyresDiscountsController@savesite_discounts',
'as' => 'admin.save.site.discount',
'middleware' => 'can:admin'
]);


Route::get('order.view/{id}',[
'uses' => 'OrderSummaryController@admin_view_order',
'as' => 'admin.order.view',
'middleware' => 'can:admin'
]);

Route::get('order.completed/{id}',[
'uses' => 'OrderSummaryController@admin_completed_order',
'as' => 'admin.order.completed',
'middleware' => 'can:admin'
]);


Route::get('contact_us',[
'uses' => 'ContactUsController@admin_contact_us',
'as' => 'admin.contact_us',
'middleware' => 'can:admin'
]);

Route::get('contactus-reply/{id}',[
'uses' => 'ContactUsController@admin_contact_us_reply',
'as' => 'admin.contactus-reply',
'middleware' => 'can:admin'
]);

Route::post('contact-us-reply',[
'uses' => 'ContactUsController@save_query_reply',
'as' => 'admin.contact-us-reply',
'middleware' => 'can:admin'
]);


Route::get('category.delete/{id}',[
'uses' => 'CategoriesController@admin_delete',
'as' => 'admin.category.delete',
'middleware' => 'can:admin'
]);

Route::get('vehicle.category.delete/{id}',[
'uses' => 'VehicleCategoriesController@admin_delete',
'as' => 'admin.vehicle.category.delete',
'middleware' => 'can:admin'
]);

Route::get('seo_tools',[
'uses' => 'SeoToolsController@seo_tools',
'as' => 'admin.seo_tools',
'middleware' => 'can:admin'
]);


Route::get('seo-data',[
'uses' => 'SeoToolsController@seo_data',
'as' => 'admin.seo-data',
'middleware' => 'can:admin'
]);


Route::post('seo_data.post',[
'uses' => 'SeoToolsController@seo_data_post',
'as' => 'admin.seo_data.post',
'middleware' => 'can:admin'
]);


Route::get('add.categories',[
'uses' => 'CategoriesController@add_categories',
'as' => 'admin.add.categories',
'middleware' => 'can:admin'
]);

Route::get('edit.category/{id}',[
'uses' => 'CategoriesController@edit_categories',
'as' => 'admin.edit.category',
'middleware' => 'can:admin'
]);


Route::get('update.category',[
'uses' => 'CategoriesController@update_categories',
'as' => 'admin.update.category',
'middleware' => 'can:admin'
]);

Route::post('category.update',[
'uses' => 'CategoriesController@save_update_categories',
'as' => 'admin.category.update',
'middleware' => 'can:admin'
]);


Route::get('edit.subcategory/{id}',[
'uses' => 'CategoriesController@edit_subcategory',
'as' => 'admin.edit.subcategory',
'middleware' => 'can:admin'
]);


Route::get('calender',[
'uses' => 'CalenderController@index',
'as' => 'admin.calender',
'middleware' => 'can:admin'
]);

Route::post('calender_save_notes',[
'uses' => 'CalenderController@calender_save_notes',
'as' => 'calender_save_notes',
'middleware' => 'can:admin'
]);




Route::get('calender/list',[
'uses' => 'CalenderController@calender_list',
'as' => 'admin.calender/list',
'middleware' => 'can:admin'
]);


Route::get('calender/week',[
'uses' => 'CalenderController@calender_week',
'as' => 'admin.calender/week',
'middleware' => 'can:admin'
]);


Route::get('calender/monthly',[
'uses' => 'CalenderController@calender_monthly',
'as' => 'admin.calender/monthly',
'middleware' => 'can:admin'
]);



// edit appointment
Route::get('edit-appointment',[
'uses' => 'CalenderController@edit_appointment',
'as' => 'admin.edit.appointment',
'middleware' => 'can:admin'
]);

Route::get('estimates',[
'uses' => 'EstimatesController@index',
'as' => 'admin.estimates',
'middleware' => 'can:admin'
]);


Route::get('admin.delete-department{id}',[
   'uses' => 'EstimatesController@delete_department',
   'as' => 'admin.delete-department',
   'middleware' => 'can:admin'
   ]);

   Route::get('admin.edit-department{id}',[
      'uses' => 'EstimatesController@edit_department',
      'as' => 'admin.edit-department',
      'middleware' => 'can:admin'
      ]);

      Route::get('admin.save-edit-department{id}',[
         'uses' => 'EstimatesController@save_edit_department',
         'as' => 'admin.save-edit-department',
         'middleware' => 'can:admin'
         ]);

         Route::get('admin.doc.template.customstatusoptions',[
            'uses' => 'EstimatesController@customstatusoptions',
            'as' => 'admin.doc.template.customstatusoptions',
            'middleware' => 'can:admin'
            ]);



         Route::post('admin-document-template-setting-save',[
            'uses' => 'EstimatesController@admin_document_template_setting_save',
            'as' => 'admin-document-template-setting-save',
            'middleware' => 'can:admin'
            ]);






Route::get('admin-document-template-delete/{id}',[
'uses' => 'EstimatesController@admin_document_template_delete',
'as' => 'admin-document-template-delete',
'middleware' => 'can:admin'
]);


         

      
         



Route::get('save-starting-no/{type}',[
'uses' => 'EstimatesController@save_starting_no',
'as' => 'admin.save-starting-no',
'middleware' => 'can:admin'
]);

Route::get('admin.save-department',[
   'uses' => 'EstimatesController@save_department',
   'as' => 'admin.save-department',
   'middleware' => 'can:admin'
   ]);

Route::get('add-new-estimate',[
'uses' => 'EstimatesController@add_new_estimate',
'as' => 'admin.add-new-estimate',
'middleware' => 'can:admin'
]);


Route::get('get_estimate_details',[
'uses' => 'EstimatesController@get_estimate_details',
'as' => 'get_estimate_details',
'middleware' => 'can:admin'
]);



Route::get('invoices',[
'uses' => 'InvoicesController@index',
'as' => 'admin.invoices',
'middleware' => 'can:admin'
]);


Route::get('add-new-invoice',[
'uses' => 'InvoicesController@add_new_invoice',
'as' => 'admin.add-new-invoice',
'middleware' => 'can:admin'
]);


Route::get('unpaid',[
'uses' => 'UnpaidController@index',
'as' => 'admin.unpaid',
'middleware' => 'can:admin'
]);


Route::get('add-new-unpaid',[
'uses' => 'UnpaidController@add_new_unpaid',
'as' => 'admin.add-new-unpaid',
'middleware' => 'can:admin'
]);


Route::get('unpaid.account.manager',[
'uses' => 'UnpaidController@unpaid_account_manager',
'as' => 'admin.unpaid.account.manager',
'middleware' => 'can:admin'
]);


Route::get('add.new.customer',[
'uses' => 'CustomerDetailController@add_new_customer',
'as' => 'admin.add.new.customer',
'middleware' => 'can:admin'
]);


Route::get('archives',[
'uses' => 'ArchivesController@index',
'as' => 'admin.archives',
'middleware' => 'can:admin'
]);


Route::get('customers',[
'uses' => 'CustomerDetailController@customer_index',
'as' => 'admin.customers',
'middleware' => 'can:admin'
]);


Route::get('advanced_search',[
'uses' => 'CustomerDetailController@advanced_search',
'as' => 'admin.advanced_search',
'middleware' => 'can:admin'
]);


Route::get('vehicles',[
'uses' => 'VehiclesController@index',
'as' => 'admin.vehicles',
'middleware' => 'can:admin'
]);


Route::get('account.manager',[
'uses' => 'CustomerDetailController@admin_account_number',
'as' => 'admin.account.manager',
'middleware' => 'can:admin'
]);


Route::get('expense.manager',[
'uses' => 'ExpensesController@admin_expense_manager',
'as' => 'admin.expense.manager',
'middleware' => 'can:admin'
]);

Route::get('new.invoice',[
'uses' => 'InvoicesController@invoice_new',
'as' => 'admin.new.invoice',
'middleware' => 'can:admin'
]);


Route::get('new.credit_expense',[
'uses' => 'InvoicesController@new_credit_expense',
'as' => 'admin.new.credit_expense',
'middleware' => 'can:admin'
]);

Route::get('expense.archive',[
'uses' => 'InvoicesController@expense_archive',
'as' => 'admin.expense.archive',
'middleware' => 'can:admin'
]);



Route::get('business.report',[
'uses' => 'BusinessReportsController@business_report',
'as' => 'admin.business.report',
'middleware' => 'can:admin'
]);

Route::get('business.charts',[
'uses' => 'BusinessReportsController@business_chart',
'as' => 'admin.business.charts',
'middleware' => 'can:admin'
]);

Route::get('bank.reconcile',[
'uses' => 'BanksController@bank_reconcile',
'as' => 'admin.bank.reconcile',
'middleware' => 'can:admin'
]);



Route::get('accounts.csv',[
'uses' => 'AccountsCsvController@accounts_csv',
'as' => 'admin.accounts.csv',
'middleware' => 'can:admin'
]);


Route::get('general.csv',[
'uses' => 'AccountsCsvController@general_csv',
'as' => 'admin.general.csv',
'middleware' => 'can:admin'
]);


Route::get('technicians',[
'uses' => 'TechnicianController@technicians',
'as' => 'admin.technicians',
'middleware' => 'can:admin'
]);


Route::get('user.preferences',[
'uses' => 'AdminController@user_preferences',
'as' => 'admin.user.preferences',
'middleware' => 'can:admin'
]);


Route::post('save-user-preferences',[
'uses' => 'AdminController@save_user_preferences',
'as' => 'admin.save-user-preferences',
'middleware' => 'can:admin'
]);

Route::post('save-authentication',[
'uses' => 'AdminController@save_authentication',
'as' => 'admin.save-authentication',
'middleware' => 'can:admin'
]);






Route::get('doc.template.settings',[
'uses' => 'DocTemplateSettingsController@index',
'as' => 'admin.doc.template.settings',
'middleware' => 'can:admin'
]);

Route::get('doc.template.departmentlists',[
   'uses' => 'DocTemplateSettingsController@departmentlists',
   'as' => 'admin.doc.template.departmentlists',
   'middleware' => 'can:admin'
   ]);

  
Route::get('doc.template.referal_adevertising',[
      'uses' => 'DocTemplateSettingsController@referal_adevertising',
      'as' => 'admin.doc.template.referal_adevertising',
      'middleware' => 'can:admin'
]);

Route::get('doc.template.referal_adevertising_create',[
   'uses' => 'DocTemplateSettingsController@referal_adevertising_create',
   'as' => 'admin.doc.template.referal_adevertising_create',
   'middleware' => 'can:admin'
]);
   
Route::get('doc.template.referal_adevertising_delete/{id}',[
   'uses' => 'DocTemplateSettingsController@referal_adevertising_delete',
   'as' => 'admin.doc.template.referal_adevertising_delete',
   'middleware' => 'can:admin'
]);
   

Route::get('doc.template.edit_referal_adevertising/{id}',[
   'uses' => 'DocTemplateSettingsController@edit_referal_adevertising',
   'as' => 'admin.doc.template.edit_referal_adevertising',
   'middleware' => 'can:admin'
]);



Route::get('doc.template.save_edit_referal_adevertising/{id}',[
   'uses' => 'DocTemplateSettingsController@save_edit_referal_adevertising',
   'as' => 'admin.doc.template.save_edit_referal_adevertising',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.technicians',[
   'uses' => 'DocTemplateSettingsController@technicians',
   'as' => 'admin.doc.template.technicians',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.technicians_create',[
   'uses' => 'DocTemplateSettingsController@technicians_create',
   'as' => 'admin.doc.template.technicians_create',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.technicians_delete/{id}',[
   'uses' => 'DocTemplateSettingsController@technicians_delete',
   'as' => 'admin.doc.template.technicians_delete',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.technicians_edit/{id}',[
   'uses' => 'DocTemplateSettingsController@technicians_edit',
   'as' => 'admin.doc.template.technicians_edit',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.technicians_edit_save/{id}',[
   'uses' => 'DocTemplateSettingsController@technicians_edit_save',
   'as' => 'admin.doc.template.technicians_edit_save',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.correspondance_template',[
   'uses' => 'DocTemplateSettingsController@correspondance_template',
   'as' => 'admin.doc.template.correspondance_template',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.correspondance_template_create',[
   'uses' => 'DocTemplateSettingsController@correspondance_template_create',
   'as' => 'admin.doc.template.correspondance_template_create',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.correspondance_template_delete/{id}',[
   'uses' => 'DocTemplateSettingsController@correspondance_template_delete',
   'as' => 'admin.doc.template.correspondance_template_delete',
   'middleware' => 'can:admin'
]);

Route::get('admin.doc.template.correspondance_template_edit/{id}',[
   'uses' => 'DocTemplateSettingsController@correspondance_template_edit',
   'as' => 'admin.doc.template.correspondance_template_edit',
   'middleware' => 'can:admin'
]);

Route::get('admin.doc.template.correspondance_template_edit_save/{id}',[
   'uses' => 'DocTemplateSettingsController@correspondance_template_edit_save',
   'as' => 'admin.doc.template.correspondance_template_edit_save',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.work_description',[
   'uses' => 'DocTemplateSettingsController@work_description',
   'as' => 'admin.doc.template.work_description',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.work_description_create',[
   'uses' => 'DocTemplateSettingsController@work_description_create',
   'as' => 'admin.doc.template.work_description_create',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.work_description_delete/{id}',[
   'uses' => 'DocTemplateSettingsController@work_description_delete',
   'as' => 'admin.doc.template.work_description_delete',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.work_description_edit/{id}',[
   'uses' => 'DocTemplateSettingsController@work_description_edit',
   'as' => 'admin.doc.template.work_description_edit',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.work_description_edit_save/{id}',[
   'uses' => 'DocTemplateSettingsController@work_description_edit_save',
   'as' => 'admin.doc.template.work_description_edit_save',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.predefine_advisories',[
   'uses' => 'DocTemplateSettingsController@predefine_advisories',
   'as' => 'admin.doc.template.predefine_advisories',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.predefine_advisories_create',[
   'uses' => 'DocTemplateSettingsController@predefine_advisories_create',
   'as' => 'admin.doc.template.predefine_advisories_create',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.predefine_advisories_delete/{id}',[
   'uses' => 'DocTemplateSettingsController@predefine_advisories_delete',
   'as' => 'admin.doc.template.predefine_advisories_delete',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.predefine_advisories_edit/{id}',[
   'uses' => 'DocTemplateSettingsController@predefine_advisories_edit',
   'as' => 'admin.doc.template.predefine_advisories_edit',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.predefine_advisories_edit_save/{id}',[
   'uses' => 'DocTemplateSettingsController@predefine_advisories_edit_save',
   'as' => 'admin.doc.template.predefine_advisories_edit_save',
   'middleware' => 'can:admin'
]);



Route::get('doc.template.termandcontion',[
   'uses' => 'DocTemplateSettingsController@termandcontion',
   'as' => 'admin.doc.template.termandcontion',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.termandcontion_create',[
   'uses' => 'DocTemplateSettingsController@termandcontion_create',
   'as' => 'admin.doc.template.termandcontion_create',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.termandcontion_delete/{id}',[
   'uses' => 'DocTemplateSettingsController@termandcontion_delete',
   'as' => 'admin.doc.template.termandcontion_delete',
   'middleware' => 'can:admin'
]);

Route::get('doc.template.termandcontion_edit/{id}',[
   'uses' => 'DocTemplateSettingsController@termandcontion_edit',
   'as' => 'admin.doc.template.termandcontion_edit',
   'middleware' => 'can:admin'
]);

Route::get('admin.doc.template.termandcontion_edit_save/{id}',[
   'uses' => 'DocTemplateSettingsController@termandcontion_edit_save',
   'as' => 'admin.doc.template.termandcontion_edit_save',
   'middleware' => 'can:admin'
]);


Route::get('doc.template.vehiclesmakeandmodel',[
   'uses' => 'DocTemplateSettingsController@vehiclesmakeandmodel',
   'as' => 'admin.doc.template.vehiclesmakeandmodel',
   'middleware' => 'can:admin'
]);

Route::post('admin.doc.template.vehiclesmakeandmodel_create',[
   'uses' => 'DocTemplateSettingsController@vehiclesmakeandmodel_create',
   'as' => 'admin.doc.template.vehiclesmakeandmodel_create',
   'middleware' => 'can:admin'
]);

Route::get('admin.doc.template.vehiclesmakeandmodel_delete/{id}/{type}',[
   'uses' => 'DocTemplateSettingsController@vehiclesmakeandmodel_delete',
   'as' => 'admin.doc.template.vehiclesmakeandmodel_delete',
   'middleware' => 'can:admin'
]);

Route::get('admin.doc.template.vehiclesmakeandmodel_edit/{id}',[
   'uses' => 'DocTemplateSettingsController@vehiclesmakeandmodel_edit',
   'as' => 'admin.doc.template.vehiclesmakeandmodel_edit',
   'middleware' => 'can:admin'
]);


Route::post('admin.doc.template.vehiclesmakeandmodel_edit_save',[
   'uses' => 'DocTemplateSettingsController@vehiclesmakeandmodel_edit_save',
   'as' => 'admin.doc.template.vehiclesmakeandmodel_edit_save',
   'middleware' => 'can:admin'
]);

Route::get('admin.doc.template.predefinedjobs',[
   'uses' => 'DocTemplateSettingsController@predefinedjobs',
   'as' => 'admin.doc.template.predefinedjobs',
   'middleware' => 'can:admin'
]);


Route::get('admin.doc.template.predefinedjobs_form',[
   'uses' => 'DocTemplateSettingsController@predefinedjobs_form',
   'as' => 'admin.doc.template.predefinedjobs_form',
   'middleware' => 'can:admin'
]);












  

Route::get('custom_color_options',[
'uses' => 'CustomColorOptionsController@custom_color_options',
'as' => 'admin.custom_color_options',
'middleware' => 'can:admin'
]);


Route::get('refferal.lists',[
'uses' => 'RefferalController@refferal_lists',
'as' => 'admin.refferal.lists',
'middleware' => 'can:admin'
]);


Route::get('technicians.lists',[
'uses' => 'TechnicianController@technicians_lists',
'as' => 'admin.technicians.lists',
'middleware' => 'can:admin'
]);


Route::get('reminder.templates',[
'uses' => 'ReminderTemplatesController@reminder_templates',
'as' => 'admin.reminder.templates',
'middleware' => 'can:admin'
]);


Route::get('user.accounts',[
'uses' => 'UserController@user_accounts',
'as' => 'admin.user.accounts',
'middleware' => 'can:admin'
]);


Route::get('labour.rates',[
'uses' => 'LabourRatesController@labour_rates',
'as' => 'admin.labour.rates',
'middleware' => 'can:admin'
]);



Route::get('mot.rates',[
'uses' => 'MotRatesController@mot_rates',
'as' => 'admin.mot.rates',
'middleware' => 'can:admin'
]);



Route::get('tax.rates',[
'uses' => 'TaxRatesController@tax_rates',
'as' => 'admin.tax.rates',
'middleware' => 'can:admin'
]);

Route::get('sales.nominals',[
'uses' => 'SalesNominalController@sales_nominals',
'as' => 'admin.sales.nominals',
'middleware' => 'can:admin'
]);

Route::get('expense.nominals',[
'uses' => 'ExpensesController@expense_nominals',
'as' => 'admin.expense.nominals',
'middleware' => 'can:admin'
]);



Route::post('save.new.customer',[
'uses' => 'CustomerDetailController@save_new_customer',
'as' => 'admin.save.new.customer',
'middleware' => 'can:admin'
]);


Route::get('admin/edit/customer/{id}',[
'uses' => 'CustomerDetailController@admin_edit_customer',
'as' => 'admin.edit.customer',
'middleware' => 'can:admin'
]);


Route::get('admin/supplier',[
'uses' => 'SuppliersController@supplier',
'as' => 'admin.supplier',
'middleware' => 'can:admin'
]);


Route::get('add.new.supplier',[
'uses' => 'SuppliersController@add_new_supplier',
'as' => 'admin.add.new.supplier',
'middleware' => 'can:admin'
]);

Route::get('edit.supplier/{id}',[
'uses' => 'SuppliersController@edit_supplier',
'as' => 'admin.edit.supplier',
'middleware' => 'can:admin'
]);


Route::post('save.supplier',[
'uses' => 'SuppliersController@save_supplier',
'as' => 'admin.save.supplier',
'middleware' => 'can:admin'
]);


Route::get('get_supplier_details',[
'uses' => 'SuppliersController@get_supplier_details',
'as' => 'get_supplier_details',
'middleware' => 'can:admin'
]);


Route::get('new.expense.invoice',[
'uses' => 'ExpensesController@new_expense_invoice',
'as' => 'admin.new.expense.invoice',
'middleware' => 'can:admin'
]);

Route::post('save.invoice',[
'uses' => 'InvoicesController@save_invoice',
'as' => 'admin.save.invoice',
'middleware' => 'can:admin'
]);

Route::get('add.new.credit',[
'uses' => 'InvoicesController@new_credit',
'as' => 'admin.add.new.credit',
'middleware' => 'can:admin'
]);

Route::post('save.new.estimate',[
'uses' => 'EstimatesController@save_new_estimate',
'as' => 'admin.save.new.estimate',
'middleware' => 'can:admin'
]);


Route::get('estimates.view/{id}',[
'uses' => 'EstimatesController@estimate_view',
'as' => 'admin.estimates.view',
'middleware' => 'can:admin'
]);


Route::get('jobsheets',[
'uses' => 'JobSheetsController@index',
'as' => 'admin.jobsheets',
'middleware' => 'can:admin'
]);

Route::get('add.jobsheets',[
'uses' => 'JobSheetsController@create',
'as' => 'admin.add.jobsheets',
'middleware' => 'can:admin'
]);


Route::post('save.new.jobsheet',[
'uses' => 'JobSheetsController@store',
'as' => 'admin.save.new.jobsheet',
'middleware' => 'can:admin'
]);


Route::get('jobsheet.view/{id}',[
'uses' => 'JobSheetsController@jobsheet_view',
'as' => 'admin.jobsheet.view',
'middleware' => 'can:admin'
]);


Route::get('get_jobsheet_details',[
'uses' => 'JobSheetsController@get_jobsheet_details',
'as' => 'get_jobsheet_details',
'middleware' => 'can:admin'
]);


Route::post('save.new.invoice',[
'uses' => 'InvoicesController@store',
'as' => 'admin.save.new.invoice',
'middleware' => 'can:admin'
]);

Route::get('add.new.vehicle',[
'uses' => 'VehiclesController@add_new_vehicle',
'as' => 'admin.add.new.vehicle',
'middleware' => 'can:admin'
]);


Route::post('admin.save.new.vehicle',[
'uses' => 'VehiclesController@store',
'as' => 'admin.save.new.vehicle',
'middleware' => 'can:admin'
]);

Route::get('edit-vehicle/{id}',[
'uses' => 'VehiclesController@edit_vehicle',
'as' => 'admin.edit-vehicle',
'middleware' => 'can:admin'
]);


Route::get('stock',[
'uses' => 'StockController@index',
'as' => 'admin.stock',
'middleware' => 'can:admin'
]);


Route::get('add.new.stock',[
'uses' => 'StockController@create',
'as' => 'admin.add.new.stock',
'middleware' => 'can:admin'
]);


Route::get('generate_barcode',[
'uses' => 'HomeController@generate_barcode',
'as' => 'admin.generate_barcode',
'middleware' => 'can:admin'
]);


Route::post('save.new.stock',[
'uses' => 'StockController@store',
'as' => 'admin.save.new.stock',
'middleware' => 'can:admin'
]);

Route::get('edit.stock/{id}',[
'uses' => 'StockController@edit',
'as' => 'admin.edit.stock',
'middleware' => 'can:admin'
]);



Route::get('orders',[
'uses' => 'OrderController@index',
'as' => 'admin.orders',
'middleware' => 'can:admin'
]);

Route::get('new.order',[
'uses' => 'OrderController@create',
'as' => 'admin.new.order',
'middleware' => 'can:admin'
]);


Route::get('new.return',[
'uses' => 'OrderController@new_return',
'as' => 'admin.new.return',
'middleware' => 'can:admin'
]);


Route::get('new.appointment',[
'uses' => 'CalenderController@new_appointment',
'as' => 'admin.new.appointment',
'middleware' => 'can:admin'
]);


Route::post('save-new-appointment',[
'uses' => 'CalenderController@save_new_appointment',
'as' => 'admin.save-new-appointment',
'middleware' => 'can:admin'
]);

Route::post('update-new-appointment',[
'uses' => 'CalenderController@update_new_appointment',
'as' => 'admin.update-new-appointment',
'middleware' => 'can:admin'
]);



Route::get('get_customer_details',[
'uses' => 'CalenderController@get_customer_details',
'as' => 'get_customer_details',
'middleware' => 'can:admin'
]);



Route::get('change_status',[
'uses' => 'HomeController@change_status',
'as' => 'change_status',
'middleware' => 'can:admin'
]);



Route::get('document/archive',[
'uses' => 'DocumentsController@document_archive',
'as' => 'admin.document.archive',
'middleware' => 'can:admin'
]);

Route::get('invoice.view/{id}',[
'uses' => 'InvoicesController@invoice_open',
'as' => 'admin.invoice.view',
'middleware' => 'can:admin'
]);



Route::get('get_invoice_details',[
'uses' => 'InvoicesController@get_invoice_details',
'as' => 'get_invoice_details',
'middleware' => 'can:admin'
]);



Route::get('get_vehicle_make',[
'uses' => 'HomeController@get_vehicle_make',
'as' => 'get_vehicle_make',
'middleware' => 'can:admin'
]);


Route::get('manage.receipts',[
'uses' => 'CustomerDetailController@manage_receipts',
'as' => 'admin.manage.receipts',
'middleware' => 'can:admin'
]);


Route::post('save.payment',[
'uses' => 'PaymentController@save_payment',
'as' => 'admin.save.payment',
'middleware' => 'can:admin'
]);


Route::get('delete.payment',[
'uses' => 'PaymentController@delete_payment',
'as' => 'admin.delete.payment',
'middleware' => 'can:admin'
]);


Route::get('reminders',[
'uses' => 'ReminderTemplatesController@reminders',
'as' => 'admin.reminder',
'middleware' => 'can:admin'
]);


Route::get('all_reminders',[
'uses' => 'ReminderTemplatesController@all_reminders',
'as' => 'admin.all_reminders',
'middleware' => 'can:admin'
]);


Route::get('get_account_details',[
'uses' => 'UserController@get_account_details',
'as' => 'admin.get_account_details',
'middleware' => 'can:admin'
]);




Route::get('attachments-lists',[
'uses' => 'VehiclesController@attachments_lists',
'as' => 'admin.attachments-lists',
'middleware' => 'can:admin'
]);

Route::post('admin_attach_documents',[
'uses' => 'VehiclesController@admin_attach_documents',
'as' => 'admin.attach-documents',
'middleware' => 'can:admin'
]);



Route::get('admin.invoice.view-detail/{id}',[
'uses' => 'InvoicesController@admin_invoice_view_detail',
'as' => 'admin.invoice.view-detail',
'middleware' => 'can:admin'
]);




Route::post('admin.save.invoice.update',[
'uses' => 'InvoicesController@admin_save_invoice_update',
'as' => 'admin-save-invoice-update',
'middleware' => 'can:admin'
]);

Route::post('admin-vechile-upate',[
'uses' => 'VehiclesController@store',
'as' => 'admin-vechile-upate',
'middleware' => 'can:admin'
]);

Route::get('export-sales',[
'uses' => 'AccountsCsvController@export_sales',
'as' => 'export-sales',
'middleware' => 'can:admin'
]);

Route::get('export-expense',[
'uses' => 'AccountsCsvController@export_expense',
'as' => 'export-expense',
'middleware' => 'can:admin'
]);



Route::get('customer_vehicles',[
'uses' => 'CustomerVehiclesController@customer_vehicles',
'as' => 'admin.customer_vehicles',
'middleware' => 'can:admin'
]);




Route::get('manage-receipt-new/{id}',[
'uses' => 'CustomerDetailController@new_manage_receipt',
'as' => 'admin-manage-receipt-new',
'middleware' => 'can:admin'
]);


Route::post('payment-save',[
'uses' => 'CustomerDetailController@payment_save',
'as' => 'admin-payment-save',
'middleware' => 'can:admin'
]);




Route::post('payment-update',[
'uses' => 'CustomerDetailController@payment_update',
'as' => 'admin-payment-update',
'middleware' => 'can:admin'
]);



Route::get('admin-customer-edit/{id}',[
'uses' => 'CustomerDetailController@admin_customer_edit',
'as' => 'admin-customer-edit',
'middleware' => 'can:admin'
]);


Route::post('admin-customer-update',[
'uses' => 'CustomerDetailController@admin_customer_update',
'as' => 'admin-customer-update',
'middleware' => 'can:admin'
]);




Route::post('new-employee-save',[
'uses' => 'BusinessReportsController@new_employee_save',
'as' => 'new-employee-save',
'middleware' => 'can:admin'
]);



Route::get('admin-add-labour-rates',[
'uses' => 'EstimatesController@admin_add_labour_rates',
'as' => 'admin-add-labour-rates',
'middleware' => 'can:admin'
]);






Route::post('admin-labour-rate-save',[
'uses' => 'EstimatesController@admin_labour_rate_save',
'as' => 'admin-labour-rate-save',
'middleware' => 'can:admin'
]);




Route::get('admin-labour-edit/{id}',[
'uses' => 'EstimatesController@admin_labour_edit',
'as' => 'admin-labour-edit',
'middleware' => 'can:admin'
]);





Route::post('labour-update',[
'uses' => 'EstimatesController@labour_update',
'as' => 'labour-update',
'middleware' => 'can:admin'
]);



Route::get('admin-add-part-rates',[
'uses' => 'EstimatesController@admin_add_part_rates',
'as' => 'admin-add-part-rates',
'middleware' => 'can:admin'
]);




Route::post('admin-part-rate-save',[
'uses' => 'EstimatesController@admin_part_rate_save',
'as' => 'admin-part-rate-save',
'middleware' => 'can:admin'
]);




Route::get('admin-part-edit/{id}',[
'uses' => 'EstimatesController@admin_part_edit',
'as' => 'admin-part-edit',
'middleware' => 'can:admin'
]);






Route::post('admin-part-update',[
'uses' => 'EstimatesController@admin_part_update',
'as' => 'admin-part-update',
'middleware' => 'can:admin'
]);




Route::get('admin-add-advisories',[
'uses' => 'EstimatesController@admin_add_advisories',
'as' => 'admin-add-advisories',
'middleware' => 'can:admin'
]);



Route::post('admin-advisory-save',[
'uses' => 'EstimatesController@admin_advisory_save',
'as' => 'admin-advisory-save',
'middleware' => 'can:admin'
]);



Route::get('admin-adivsory-edit/{id}',[
'uses' => 'EstimatesController@admin_adivsory_edit',
'as' => 'admin-adivsory-edit',
'middleware' => 'can:admin'
]);



Route::post('admin-advisory-update',[
'uses' => 'EstimatesController@admin_advisory_update',
'as' => 'admin-advisory-update',
'middleware' => 'can:admin'
]);




Route::get('admin-description-list',[
'uses' => 'EstimatesController@admin_description_list',
'as' => 'admin-description-list',
'middleware' => 'can:admin'
]);




Route::get('admin-work-description',[
'uses' => 'EstimatesController@admin_work_description',
'as' => 'admin-work-description',
'middleware' => 'can:admin'
]);



Route::post('admin-work-description-save',[
'uses' => 'EstimatesController@admin_work_description_save',
'as' => 'admin-work-description-save',
'middleware' => 'can:admin'
]);




Route::get('admin-work-description-edit/{id}',[
'uses' => 'EstimatesController@admin_work_description_edit',
'as' => 'admin-work-description-edit',
'middleware' => 'can:admin'
]);




Route::post('admin-work-description-update',[
'uses' => 'EstimatesController@admin_work_description_update',
'as' => 'admin-work-description-update',
'middleware' => 'can:admin'
]);



Route::get('admin-new-predefined',[
'uses' => 'DocTemplateSettingsController@admin_new_predefined',
'as' => 'admin-new-predefined',
'middleware' => 'can:admin'
]);





Route::post('admin-new-predefined-save',[
'uses' => 'DocTemplateSettingsController@admin_new_predefined_save',
'as' => 'admin-new-predefined-save',
'middleware' => 'can:admin'
]);




Route::get('admin-edit-predefined/{id}',[
'uses' => 'DocTemplateSettingsController@admin_edit_predefined',
'as' => 'admin-edit-predefined',
'middleware' => 'can:admin'
]);





Route::post('admin-predefined-update',[
'uses' => 'DocTemplateSettingsController@admin_predefined_update',
'as' => 'admin-predefined-update',
'middleware' => 'can:admin'
]);



Route::get('admin-predefined-delete/{id}',[
'uses' => 'DocTemplateSettingsController@admin_predefined_delete',
'as' => 'admin-predefined-delete',
'middleware' => 'can:admin'
]);




Route::post('admin-extra-save',[
'uses' => 'DocTemplateSettingsController@admin_extra_save',
'as' => 'admin-extra-save',
'middleware' => 'can:admin'
]);




Route::post('admin-labour-rate-save',[
'uses' => 'LabourRatesController@admin_labour_rate_save',
'as' => 'admin-labour-rate-save',
'middleware' => 'can:admin'
]);



Route::post('admin-mote-rate-save',[
'uses' => 'MotRatesController@admin_mote_rate_save',
'as' => 'admin-mote-rate-save',
'middleware' => 'can:admin'
]);




Route::post('admin-tax-rates-save',[
'uses' => 'TaxRatesController@admin_tax_rates_save',
'as' => 'admin-tax-rates-save',
'middleware' => 'can:admin'
]);






Route::get('admin-tax-rate-delete/{id}',[
'uses' => 'TaxRatesController@admin_tax_rate_delete',
'as' => 'admin-tax-rate-delete',
'middleware' => 'can:admin'
]);




Route::get('admin-payment-methods',[
'uses' => 'TaxRatesController@admin_payment_methods',
'as' => 'admin-payment-methods',
'middleware' => 'can:admin'
]);





Route::get('admin-add-new-payment',[
'uses' => 'TaxRatesController@admin_add_new_payment',
'as' => 'admin-add-new-payment',
'middleware' => 'can:admin'
]);





Route::post('admin-payment-save',[
'uses' => 'TaxRatesController@admin_payment_save',
'as' => 'admin-payment-save',
'middleware' => 'can:admin'
]);





Route::get('admin-payment-edit/{id}',[
'uses' => 'TaxRatesController@admin_payment_edit',
'as' => 'admin-payment-edit',
'middleware' => 'can:admin'
]);





Route::post('admin-payment-update',[
'uses' => 'TaxRatesController@admin_payment_update',
'as' => 'admin-payment-update',
'middleware' => 'can:admin'
]);







Route::get('admin-payment-delete/{id}',[
'uses' => 'TaxRatesController@admin_payment_delete',
'as' => 'admin-payment-delete',
'middleware' => 'can:admin'
]);





Route::get('stock-control-setting',[
'uses' => 'StockController@stock_control_setting',
'as' => 'stock-control-setting',
'middleware' => 'can:admin'
]);






Route::post('admin-stock-setting-save',[
'uses' => 'StockController@admin_stock_setting_save',
'as' => 'admin-stock-setting-save',
'middleware' => 'can:admin'
]);




Route::get('required-fields',[
'uses' => 'StockController@required_fields',
'as' => 'required-fields',
'middleware' => 'can:admin'
]);






Route::post('admin-required-field-save',[
'uses' => 'StockController@admin_required_field_save',
'as' => 'admin-required-field-save',
'middleware' => 'can:admin'
]);



Route::get('miscellaneous-settings',[
'uses' => 'StockController@miscellaneous_settings',
'as' => 'miscellaneous-settings',
'middleware' => 'can:admin'
]);





Route::post('admin-miscellaneous-setting',[
'uses' => 'StockController@admin_miscellaneous_setting',
'as' => 'admin-miscellaneous-setting',
'middleware' => 'can:admin'
]);



Route::get('admin-cash-drawer',[
'uses' => 'StockController@admin_cash_drawer',
'as' => 'admin-cash-drawer',
'middleware' => 'can:admin'
]);




Route::post('admin-cash-drawer-save',[
'uses' => 'StockController@admin_cash_drawer_save',
'as' => 'admin-cash-drawer-save',
'middleware' => 'can:admin'
]);




Route::get('calender-bays-setting',[
'uses' => 'StockController@calender_bays_setting',
'as' => 'calender-bays-setting',
'middleware' => 'can:admin'
]);






Route::get('admin-new-bay-add',[
'uses' => 'StockController@admin_new_bay_add',
'as' => 'admin-new-bay-add',
'middleware' => 'can:admin'
]);




Route::post('admin-bay-setting-save',[
'uses' => 'StockController@admin_bay_setting_save',
'as' => 'admin-bay-setting-save',
'middleware' => 'can:admin'
]);






Route::get('admin-bay-setting-edit/{id}',[
'uses' => 'StockController@admin_bay_setting_edit',
'as' => 'admin-bay-setting-edit',
'middleware' => 'can:admin'
]);




Route::post('admin-bay-update',[
'uses' => 'StockController@admin_bay_update',
'as' => 'admin-bay-update',
'middleware' => 'can:admin'
]);





Route::get('admin-bay-delete/{id}',[
'uses' => 'StockController@admin_bay_delete',
'as' => 'admin-bay-delete',
'middleware' => 'can:admin'
]);




Route::post('admin-calender-grid-system-save',[
'uses' => 'StockController@admin_calender_grid_system_save',
'as' => 'admin-calender-grid-system-save',
'middleware' => 'can:admin'
]);





Route::get('admin-taxes-rate-edit/{id}',[
'uses' => 'TaxRatesController@admin_taxes_rate_edit',
'as' => 'admin-taxes-rate-edit',
'middleware' => 'can:admin'
]);




Route::post('admin-tax-rate-update',[
'uses' => 'TaxRatesController@admin_tax_rate_update',
'as' => 'admin-tax-rate-update',
'middleware' => 'can:admin'
]);





Route::get('admin-work-description-delete/{id}',[
'uses' => 'EstimatesController@admin_work_description_delete',
'as' => 'admin-work-description-delete',
'middleware' => 'can:admin'
]);




Route::post('global-notes-save',[
'uses' => 'GlobalNotesController@global_notes_save',
'as' => 'admin.global-notes-save',
'middleware' => 'can:admin'
]);


































});




// Route::get('forget-password', 'ForgetPasswordController@showForgetPasswordForm')->name('forget.password.get');

// Route::post('forget-password', 'ForgetPasswordController@submitForgetPasswordForm')->name('forget.password.post');



// Route::get('reset-password/{token}', 'ForgetPasswordController@showResetPasswordForm')->name('reset.password.get');


// Route::post('reset-password', 'ForgetPasswordController@submitResetPasswordForm')->name('reset.password.post');







Route::get('fullcalender', 'CalenderController@index_new')->name('fullcalender');
Route::post('fullcalenderAjax', 'CalenderController@ajax')->name('fullcalenderAjax');