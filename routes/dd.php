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

use Faker\Generator as Faker;

$roleAdm = env('ADMIN_ROLE_CODE');
$rolePost = env('POST_ROLE_CODE');
$roleRpt = env('RPT_ROLE_CODE');

use Arins\Models\Activity;
use Arins\Models\Activitytype;
use Arins\Models\Activitysubtype;
use Arins\Models\Activitystatus;
use Arins\Models\Tasktype;
use Arins\Models\Tasksubtype1;
Route::get('/dd', function () {

    // $data = Tasksubtype1::with('activities', 'activitytype', 'tasktype')->get();
    // $data = Activitystatus::with('activities')->get();
    //$data = Activitysubtype::with('activities', 'activitytype')->get();
    // $data = Activitytype::with(['activities', 'tasktypes'])->get();


    $data = Activity::with([
        'activitytype',
        'activitysubtype',
        'activitystatus',
        'tasktype',
        'tasksubtype1',
        'tasksubtype2'
        ])->get();

    return $data[0]->tasksubtype2;
});

use Arins\Repositories\Activity\ActivityRepository;
use Arins\Repositories\Activitytype\ActivitytypeRepository;
Route::get('dd1', function(){
    
    // $model = new Activity();
    // $data = new ActivityRepository($model);
    $model = new Activitytype();
    $data = new ActivitytypeRepository($model);
    
    //return $data->all();
    return $data->allOrderByIdDesc();

    $hasil = json_decode(json_encode($data), false);
    return strtoupper($hasil->nama);
});

use Arins\Facades\Filex;
Route::get('ddfile', function() {
    $temp = Filex::image('events/event1.png');
    return $temp;
});

Route::get('/ddadminrole', function () {
    $roleAdm = env('ADMIN_ROLE_CODE');

    $data = new \App\User();
    return 'hasil tes';

    return dd($data->getFillable());

    return $roleAdm;
});

Route::get('/ddjson', function () {

    $dataX = [
        'number' => 12,
        'string' => 'stringNama',
        'date' => now(),
    ];

    $dataStringJson = json_encode($dataX);
    $dataObject = json_decode($dataStringJson);
    $data = $dataObject;

    return dd($data->number);
});


use Arins\Facades\Response;
Route::get('/dd/response', function () {

    $data = ['id' => 1, 'username' => 'joko'];

    return dd(Response::viewModel($data));

    return $roleAdm;
});

use Arins\Facades\Formater;
use Arins\Facades\ConvertDate as Convert;
Route::get('/dd/formater', function () {

    //date format for database
    // $tgl = Convert::strDatetimeToDate('15/03/2021 13:00:00');
    // $result = $tgl;
    // return dd($result->toDateTimeString());


    //$initDate = new DateTime;
    //$hh = DateTime::createFromFormat('d M Y', '17 Maret 2019');
    //return (dd($hh));
    //return (dd($hh::getLastErrors()));

    //$dataInit = now();
    //return dd($dataFormated);
    //$dataInit = \Carbon\Carbon::createFromIsoFormat('LLLL', 'Monday 3 March 2019 16:28', null, 'fr');
    //$dataInit = \Carbon\Carbon::createFromIsoFormat('LLL', '17 March 2019 [pukul] 22.15', null, 'id');
    //$strDateTime = '17 March 2019';
    //$strFormat = 'LL';
    //$dataInit = \Carbon\Carbon::createFromIsoFormat($strFormat, $strDateTime, null, 'id');

    //Translate Months
    // $dataInit = \Carbon\Carbon::create(2020,05,05,13,49,15);
    // $dataFormated = Formater::dateMonth($dataInit);

    $strTanggal = '21/12/2020 02:25:47 pm';
    $converter = Convert::strDatetimeAmpmToDate($strTanggal);
    $formater = '21/12/2020 02:25:47 siang';
    $formaterResult = Formater::datetimeAmpm($converter);
    $now = Formater::date(now());
    $hasil = [
        'satu' => 'tunggal',
        'string Tanggal [$strTanggal]' => $strTanggal,
        'Convert To date [$converter]' => $converter,
        'Format date [$formater]' => $formater,
        'Format date result [$formaterResult]' => $formaterResult,
        'Tanggal Hari ini [$now]' => $now];


    return dd($hasil);

    $result = $hasil;
    return $result;
});

Route::get('/ddauth', function () {

    $user = Auth::user();
    $roles = $user->roles;

    return $roles;
});

Route::get('/ddhash', function () {

    $has = Hash::make('123');
    $decrip = Hash::info($has);
    $check = Hash::check('123', $has);

    return $decrip;
});

Route::get('/roleadmin', function() {

    return 'this is for role admin';
})->middleware('check.role:'.$roleAdm.','.$rolePost);

Route::get('/only-admin-user', function() {

    return 'You are admin user';
})->middleware(['auth','is.admin']);


Route::get('/onlyadmin', function() {

    // if (Gate::allows(env('ADMIN_ROLE_CODE'))) {
    //     // The current user can edit settings
    //     return Auth::user()->email.' Behasil!!!';
    // }

    // if (Gate::allows(env('POST_ROLE_CODE'))) {
    //     // The current user can edit settings
    //     return Auth::user()->email.' Behasil!!!';
    // }


    Gate::authorize(env('POST_ROLE_CODE'));
    Gate::authorize(env('ADMIN_ROLE_CODE'));

    // if (Gate::any(['ADMIN_ROLE_CODE', 'POST_ROLE_CODE'])) {
    //     // The user can update or delete the post
    //     return Auth::user()->email.' Behasil!!! BRO';
    // }


    return Auth::user()->email.' this is only for admin';

}); //->middleware('can:'.env('ADMIN_ROLE_CODE'));

