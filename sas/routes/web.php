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
Auth::routes();


// Get Link Pages

Route::get('/','PagesCompanyController@Welcome');
Route::get('/login',function(){
	return 'Login';
});
Route::get('/register',function(){
	return 'Register';
});
Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'PagesAdminController@pagenotfound']);	


Route::group(['middleware' => 'bloklog'], function() {

Route::get('/admin','PagesAdminController@Admin');
Route::post('login-proses', [
	'as'=>'login-proses',
	'uses'=>'LoginAdminController@cekLogin'
	]);

});

Route::group(['middleware' => 'checklogin'], function () {

Route::get('/dashboard', [
	'uses'=>'DashboardController@Dashboard',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);

// Customer

Route::get('/newcustomer', [
	'uses'=>'NewCustomerController@NewCustomer',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/entrydata', [
	'uses'=>'EntryDataController@EntryData',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/listcustomer', [
	'uses'=>'ListCustomerController@ListCustomer',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/insertcordinat', [
	'uses'=>'InsertCordinatController@InsertCordinat',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/listjob', [
	'uses'=>'ListJobController@ListJob',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/addjob', [
	'uses'=>'AddJobController@AddJob',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/historycustomer', [
	'uses'=>'HistoryCustomerController@HistoryCustomer',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);

// Karyawan 

Route::get('/calonkaryawan', [
	'uses'=>'CalonKaryawanController@CalonKaryawan',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/detailkaryawan/{id}', [
	'uses'=>'CalonKaryawanController@DetailCalonKaryawan',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/scheduletest', [
	'uses'=>'ScheduleTestController@ScheduleTest',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/scheduleinterview', [
	'uses'=>'ScheduleInterviewController@ScheduleInterview',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/listkaryawan', [
	'uses'=>'ListKaryawanController@ListKaryawan',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/historykaryawan', [
	'uses'=>'HistoryKaryawanController@HistoryKaryawan',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);

// Company Profile

Route::get('/updateslider', [
	'uses'=>'UpdateSliderController@UpdateSlider',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/DataSlider', [
	'uses'=>'UpdateSliderController@DataSlider',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/InsertSliderProses', [
	'as'=>'InsertSliderProses',
	'uses'=>'UpdateSliderController@InsertSliderProses',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/EditSlider', [
	'as'=>'EditSlider',
	'uses'=>'UpdateSliderController@EditSlider',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('DestroySlider/{id}',[
	'uses' => 'UpdateSliderController@DestroySlider',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
    ]);
Route::get('/updategalery', [
	'uses'=>'UpdateGaleryController@UpdateGalery',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/DataGalery', [
	'uses'=>'UpdateGaleryController@DataGalery',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/InsertGaleryProses', [
	'as'=>'InsertGaleryProses',
	'uses'=>'UpdateGaleryController@InsertGaleryProses',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/EditGalery', [
	'as'=>'EditGalery',
	'uses'=>'UpdateGaleryController@EditGalery',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('DestroyGalery/{id}',[
	'uses' => 'UpdateGaleryController@DestroyGalery',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
    ]);
Route::get('/updateartikel', [
	'uses'=>'UpdateArtikelController@UpdateArtikel',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/DataArtikel', [
	'uses'=>'UpdateArtikelController@DataArtikel',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/InsertArtikelProses', [
	'as'=>'InsertArtikelProses',
	'uses'=>'UpdateArtikelController@InsertArtikelProses',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/EditArtikel', [
	'as'=>'EditArtikel',
	'uses'=>'UpdateArtikelController@EditArtikel',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/DestroyArtikel/{id}', [
	'uses'=>'UpdateArtikelController@DestroyArtikel',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/complain', [
	'uses'=>'ComplainController@Complain',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/listloker', [
	'uses'=>'ListLokerController@ListLoker',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/DataLoker', [
	'uses'=>'ListLokerController@DataLoker',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/InsertLokerProses', [
	'as'=>'InsertLokerProses',
	'uses'=>'ListLokerController@InsertLokerProses',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::post('/UpdateLokerProses', [
	'as'=>'UpdateLokerProses',
	'uses'=>'ListLokerController@UpdateLokerProses',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/DestroyLoker/{id}', [
	'uses'=>'ListLokerController@DestroyLoker',
	'middleware' => 'roles',
    'roles' => ['Admin','HRD']
	]);
Route::get('/addadmin', [
	'uses'=>'AddAdminController@AddAdmin',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::get('/importdatakaryawan', [
	'uses'=>'ImportDataExecelController@importexcel',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);
Route::post('/importdatakaryawan-proses', [
	'uses'=>'ImportDataExecelController@importdataexcel',
	'middleware' => 'roles',
    'roles' => ['Admin']
	]);

Route::get('/logout','LoginAdminController@logout');

});


Route::get('/exect/{id}', function($id) {

    $query ='select * from users inner join user_role on users.id=user_role.user_id where email = ?';

    // results

	$rows = DB::SELECT($query,array($id));
	
	// $result = DB::TABLE('tb_login_karyawan')->insert([
	// 	'no_ktp' => '123',		
	//     'email' => 'taylor@example.com',
	//     'password' => '123'
	// ]);

    return $rows;

});

Route::get('/tables', function () {
        $tables = DB::select('SHOW TABLES');
        // returns an array of stdObjects
    return $tables;
});

