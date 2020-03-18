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

/*Route::get('/', function () {
    return view('home');
});
*/
//route for pages
Route::get('/', 'HomeController@index');
Route::get('/mens-wear', 'HomeController@mens_wear');
Route::get('/womens-wear', 'HomeController@womens_wear');
Route::get('/electronics', 'HomeController@electronics');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact-message', 'contactController@message_store');

//route for admin
Route::get('/admin', 'AdminController@index');
Route::post('/admin-login-check', 'AdminController@adminLoginCheck');
Route::get('/deshboard', 'SuperAdminController@index');
Route::get('/logout', 'SuperAdminController@logout');
//
Route::any('settings/general', 'SettingController@general');

//route for  category
/*Route::get('/add-category', 'SuperAdminController@add_category');
Route::post('/save-category', 'SuperAdminController@save_category');
Route::get('/manage-category', 'SuperAdminController@manage_category');
Route::get('/unpublish-category/{id}', 'SuperAdminController@unpublish_category');
Route::get('/publish-category/{id}', 'SuperAdminController@publish_category');
Route::get('/delete-category/{id}', 'SuperAdminController@delete_category');
Route::get('/edit-category/{id}', 'SuperAdminController@edit_category');
Route::post('/update-category/', 'SuperAdminController@update_category');*/

    //route for Men's  category

Route::get('/add-mens-category', 'CategoryController@add_mens_category');
Route::post('/save-mens-category', 'CategoryController@save_mens_category');
Route::get('/manage-mens-category', 'CategoryController@manage_mens_category');
Route::get('/unpublish-mens-category/{id}', 'CategoryController@unpublish_mens_category');
Route::get('/publish-mens-category/{id}', 'CategoryController@publish_mens_category');
Route::get('/delete-mens-category/{id}', 'CategoryController@delete_mens_category');
Route::get('/edit-mens-category/{id}', 'CategoryController@edit_mens_category');
Route::post('/update-mens-category/', 'CategoryController@update_mens_category');
Route::get('/mens-category/{id}', 'CategoryController@show_mcategory');

    //route for womens category

Route::get('/add-womens-category', 'CategoryController@add_womens_category');
Route::post('/save-womens-category', 'CategoryController@save_womens_category');
Route::get('/manage-womens-category', 'CategoryController@manage_womens_category');
Route::get('/unpublish-womens-category/{id}', 'CategoryController@unpublish_womens_category');
Route::get('/publish-womens-category/{id}', 'CategoryController@publish_womens_category');
Route::get('/delete-womens-category/{id}', 'CategoryController@delete_womens_category');
Route::get('/edit-womens-category/{id}', 'CategoryController@edit_womens_category');
Route::post('/update-womens-category/', 'CategoryController@update_womens_category');
Route::get('/womens-category/{id}', 'CategoryController@show_wcategory');


    //route for  manufacturer
/*Route::get('/add-manufacturer', 'Manufacturer@add_manufacturer');
Route::post('/save-manufacturer', 'Manufacturer@save_manufacturer');
Route::get('/manage-manufacturer', 'Manufacturer@manage_manufacturer');
Route::get('/unpublish-manufacturer/{id}', 'Manufacturer@unpublish_manufacturer');
Route::get('/publish-manufacturer/{id}', 'Manufacturer@publish_manufacturer');
Route::get('/delete-manufacturer/{id}', 'Manufacturer@delete_manufacturer');
Route::get('/edit-manufacturer/{id}', 'Manufacturer@edit_manufacturer');
Route::post('/update-manufactuer/', 'Manufacturer@update_manufacturer');*/

     //route for  product
Route::get('/add-product', 'Product@add_product');
Route::post('/save-product', 'Product@save_product');
Route::get('/manage-product', 'Product@manage_product');
Route::get('/unpublish-product/{id}', 'Product@unpublish_product');
Route::get('/publish-product/{id}', 'Product@publish_product');
Route::get('/delete-product/{id}', 'Product@delete_product');
Route::get('/edit-product/{id}', 'Product@edit_product');
Route::post('/update-product/', 'Product@update_product');
Route::get('product-details/{id}', 'Product@product_details');
Route::post('/search-product', 'Product@search_product');

    //route for mens produce
Route::get('/add-mens-product', 'Product@add_mens_product');
Route::post('/save-mens-product', 'Product@save_mens_product');
Route::get('/manage-mens-product', 'Product@manage_mens_product');
Route::get('/unpublish-mens-product/{id}', 'Product@unpublish_mens_product');
Route::get('/publish-mens-product/{id}', 'Product@publish_mens_product');
Route::get('/delete-mens-product/{id}', 'Product@delete_mens_product');
Route::get('/edit-mens-product/{id}', 'Product@edit_mens_product');
Route::post('/update-mens-product/', 'Product@update_mens_product');
Route::get('product-mens-details/{id}', 'Product@product_mens_details');
Route::get('/add-to-mcart/{id}', 'CheckoutController@add_to_mcart');
Route::post('/search-mproduct', 'Product@search_mproduct');

    //route for womens produce

Route::get('/add-womens-product', 'Product@add_womens_product');
Route::post('/save-womens-product', 'Product@save_womens_product');
Route::get('/manage-womens-product', 'Product@manage_womens_product');
Route::get('/unpublish-womens-product/{id}', 'Product@unpublish_womens_product');
Route::get('/publish-womens-product/{id}', 'Product@publish_womens_product');
Route::get('/delete-womens-product/{id}', 'Product@delete_womens_product');
Route::get('/edit-womens-product/{id}', 'Product@edit_womens_product');
Route::post('/update-womens-product/', 'Product@update_womens_product');
Route::get('product-womens-details/{id}', 'Product@product_womens_details');
Route::get('/add-to-wcart/{id}', 'CheckoutController@add_to_wcart');
Route::post('/search-wproduct', 'Product@search_wproduct');

    //route for electronic

Route::get('/add-e-product', 'Product@add_e_product');
Route::post('/save-e-product', 'Product@save_e_product');
Route::get('/manage-e-product', 'Product@manage_e_product');
Route::get('/unpublish-e-product/{id}', 'Product@unpublish_e_product');
Route::get('/publish-e-product/{id}', 'Product@publish_e_product');
Route::get('/delete-e-product/{id}', 'Product@delete_e_product');
Route::get('/edit-e-product/{id}', 'Product@edit_e_product');
Route::post('/update-e-product/', 'Product@update_e_product');
Route::get('product-e-details/{id}', 'Product@peoduct_e_details');
Route::get('/add-to-ecart/{id}', 'CheckoutController@add_to_ecart');
Route::post('/search-eproduct', 'Product@search_eproduct');


    //route for customer
Route::get('/view-customer', 'CustomerController@view_customer');
Route::get('/customer-profile', 'CustomerController@customer_profile');
Route::get('/edit-profile', 'CustomerController@edit_profile');
Route::post('/update-profile', 'CustomerController@update_profile');
Route::get('/delete-customer/{id}', 'CustomerController@delete_customer');
Route::get('/dynamic_pdf/pdf', 'CustomerController@pdf');

    //foute for cart
Route::get('show-cart', 'CheckoutController@show_cart');
Route::get('/add-to-cart/{id}', 'CheckoutController@add_to_cart');
Route::get('/remove-to-cart/{id}', 'CheckoutController@remove_to_cart');
Route::post('/update-cart-qty', 'CheckoutController@update_cart_qty');
Route::get('/empty-cart', 'CheckoutController@empty_cart');

     //route for checkout
Route::get('/login', 'CheckoutController@login');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/register-customer', 'CheckoutController@register_customer');
Route::get('/registretion', 'CheckoutController@registration');
Route::post('/save-registretion', 'CheckoutController@save_registretion');
Route::post('/customer-login', 'CheckoutController@customer_login');
Route::post('/customer-logins', 'CheckoutController@customer_logins');
Route::get('/customer-logout', 'CheckoutController@customer_logout');

//route for payment
Route::get('/information', 'CheckoutController@billing_info');
Route::post('/information', 'CheckoutController@update_billing');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/payment_with_card', 'CheckoutController@payment_with_card');
Route::post('/saveorder', 'CheckoutController@save_order');
Route::get('/send-mail', 'CheckoutController@send_mail');

Route::resource('orders', 'OrderController');

Route::get('orders/status/{status}/{id}', 'OrderController@status');
Route::get('orders/export/{type}', 'OrderController@export');
Route::resource('admin/languages', 'LanguageController');
Route::get('admin/languages/set/{id}', 'LanguageController@set');
Route::get('admin/languages/destroy/{id}', 'LanguageController@destroy');

