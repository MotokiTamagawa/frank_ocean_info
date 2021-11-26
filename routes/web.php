<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\SongReviewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\News1Controller;

use App\Http\Controllers\StartController;
use App\Http\Controllers\Thinkin_Bout_YouController;
use App\Http\Controllers\FertilizerController;
use App\Http\Controllers\Sierra_LeoneController;
use App\Http\Controllers\Sweet_LifeController;
use App\Http\Controllers\Not_Just_MoneyController;
use App\Http\Controllers\Super_Rick_KidsController;
use App\Http\Controllers\Pilot_JonesController;
use App\Http\Controllers\Crack_RockController;
use App\Http\Controllers\PyramidsController;
use App\Http\Controllers\LostController;
use App\Http\Controllers\WhiteController;
use App\Http\Controllers\MonksController;
use App\Http\Controllers\Bad_ReligionController;
use App\Http\Controllers\Pink_MatterController;
use App\Http\Controllers\Forrest_GumpController;
use App\Http\Controllers\EndController;

use App\Http\Controllers\NikesController;
use App\Http\Controllers\IvyController;
use App\Http\Controllers\Pink_WhiteController;
use App\Http\Controllers\Be_YourselfController;
use App\Http\Controllers\SoloController;
use App\Http\Controllers\Skyline_ToController;
use App\Http\Controllers\Self_ControlController;
use App\Http\Controllers\Good_GuyController;
use App\Http\Controllers\NightsController;
use App\Http\Controllers\Solo_RepriseController;
use App\Http\Controllers\Pretty_SweetController;
use App\Http\Controllers\Facebook_StoryController;
use App\Http\Controllers\Close_to_YouController;
use App\Http\Controllers\White_FerrariController;
use App\Http\Controllers\SeigfriedController;
use App\Http\Controllers\GodspeedController;
use App\Http\Controllers\Futura_FreeController;
use App\Http\Controllers\Swim_GoodController;
use App\Http\Controllers\ChanelController;
use App\Http\Controllers\BikingController;
use App\Http\Controllers\LensController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\Moon_RiverController;
use App\Http\Controllers\DHLController;
use App\Http\Controllers\In_My_RoomController;
use App\Http\Controllers\Dear_AprilController;
use App\Http\Controllers\CayendoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', [MypageController::class, 'index'])->name('mypage');

Route::get('/song_review', [SongReviewController::class, 'index'])->name('song_review');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/news1', [News1Controller::class, 'index'])->name('news1');

// 随時変更
// Channel Orange
Route::get('/Start', [StartController::class, 'index'])->name('Start');
Route::post('/Start', [StartController::class,'store'])->name('start.store');

Route::get('/Thinkin_Bout_You', [Thinkin_Bout_YouController::class, 'index'])->name('Thinkin_Bout_You');
Route::post('/Thinkin_Bout_You', [Thinkin_Bout_YouController::class,'store'])->name('Thinkin_Bout_You.store');

Route::get('/Fertilizer', [FertilizerController::class, 'index'])->name('Fertilizer');
Route::post('/Fertilizer', [FertilizerController::class,'store'])->name('Fertilizer.store');

Route::get('/Sierra_Leone', [Sierra_LeoneController::class, 'index'])->name('Sierra_Leone');
Route::post('/Sierra_Leone', [Sierra_LeoneController::class,'store'])->name('Sierra_Leone.store');

Route::get('/Sweet_Life', [Sweet_LifeController::class, 'index'])->name('Sweet_Life');
Route::post('/Sweet_Life', [Sweet_LifeController::class,'store'])->name('Sweet_Life.store');

Route::get('/Not_Just_Money', [Not_Just_MoneyController::class, 'index'])->name('Not_Just_Money');
Route::post('/Not_Just_Money', [Not_Just_MoneyController::class,'store'])->name('Not_Just_Money.store');

Route::get('/Super_Rick_Kids', [Super_Rick_KidsController::class, 'index'])->name('Super_Rick_Kids');
Route::post('/Super_Rick_Kids', [Super_Rick_KidsController::class,'store'])->name('Super_Rick_Kids.store');

Route::get('/Pilot_Jones', [Pilot_JonesController::class, 'index'])->name('Pilot_Jones');
Route::post('/Pilot_Jones', [Pilot_JonesController::class,'store'])->name('Pilot_Jones.store');

Route::get('/Crack_Rock', [Crack_RockController::class, 'index'])->name('Crack_Rock');
Route::post('/Crack_Rock', [Crack_RockController::class,'store'])->name('Crack_Rock.store');

Route::get('/Pyramids', [PyramidsController::class, 'index'])->name('Pyramids');
Route::post('/Pyramids', [PyramidsController::class,'store'])->name('Pyramids.store');

Route::get('/Lost', [LostController::class, 'index'])->name('Lost');
Route::post('/Lost', [LostController::class,'store'])->name('Lost.store');

Route::get('/White', [WhiteController::class, 'index'])->name('White');
Route::post('/White', [WhiteController::class,'store'])->name('White.store');

Route::get('/Monks', [MonksController::class, 'index'])->name('Monks');
Route::post('/Monks', [MonksController::class,'store'])->name('Monks.store');

Route::get('/Bad_Religion', [Bad_ReligionController::class, 'index'])->name('Bad_Religion');
Route::post('/Bad_Religion', [Bad_ReligionController::class,'store'])->name('Bad_Religion.store');

Route::get('/Pink_Matter', [Pink_MatterController::class, 'index'])->name('Pink_Matter');
Route::post('/Pink_Matter', [Pink_MatterController::class,'store'])->name('Pink_Matter.store');

Route::get('/Forrest_Gump', [Forrest_GumpController::class, 'index'])->name('Forrest_Gump');
Route::post('/Forrest_Gump', [Forrest_GumpController::class,'store'])->name('Forrest_Gump.store');

Route::get('/End', [EndController::class, 'index'])->name('End');
Route::post('/End', [EndController::class,'store'])->name('End.store');

// Blonde
Route::get('/Nikes', [NikesController::class, 'index'])->name('Nikes');
Route::post('/Nikes', [NikesController::class,'store'])->name('Nikes.store');

Route::get('/Ivy', [IvyController::class, 'index'])->name('Ivy');
Route::post('/Ivy', [IvyController::class,'store'])->name('Ivy.store');

Route::get('/Pink_White', [Pink_WhiteController::class, 'index'])->name('Pink_White');
Route::post('/Pink_White', [Pink_WhiteController::class,'store'])->name('Pink_White.store');

Route::get('/Be_Yourself', [Be_YourselfController::class, 'index'])->name('Be_Yourself');
Route::post('/Be_Yourself', [Be_YourselfController::class,'store'])->name('Be_Yourself.store');

Route::get('/Solo', [SoloController::class, 'index'])->name('Solo');
Route::post('/Solo', [SoloController::class,'store'])->name('Solo.store');

Route::get('/Skyline_To', [Skyline_ToController::class, 'index'])->name('Skyline_To');
Route::post('/Skyline_To', [Skyline_ToController::class,'store'])->name('Skyline_To.store');

Route::get('/Self_Control', [Self_ControlController::class, 'index'])->name('Self_Control');
Route::post('/Self_Control', [Self_ControlController::class,'store'])->name('Self_Control.store');

Route::get('/Good_Guy', [Good_GuyController::class, 'index'])->name('Good_Guy');
Route::post('/Good_Guy', [Good_GuyController::class,'store'])->name('Good_Guy.store');

Route::get('/Nights', [NightsController::class, 'index'])->name('Nights');
Route::post('/Nights', [NightsController::class,'store'])->name('Nights.store');

Route::get('/Solo_Reprise', [Solo_RepriseController::class, 'index'])->name('Solo_Reprise');
Route::post('/Solo_Reprise', [Solo_RepriseController::class,'store'])->name('Solo_Reprise.store');

Route::get('/Pretty_Sweet', [Pretty_SweetController::class, 'index'])->name('Pretty_Sweet');
Route::post('/Pretty_Sweet', [Pretty_SweetController::class,'store'])->name('Pretty_Sweet.store');

Route::get('/Facebook_Story', [Facebook_StoryController::class, 'index'])->name('Facebook_Story');
Route::post('/Facebook_Story', [Facebook_StoryController::class,'store'])->name('Facebook_Story.store');

Route::get('/Close_to_You', [Close_to_YouController::class, 'index'])->name('Close_to_You');
Route::post('/Close_to_You', [Close_to_YouController::class,'store'])->name('Close_to_You.store');

Route::get('/White_Ferrari', [White_FerrariController::class, 'index'])->name('White_Ferrari');
Route::post('/White_Ferrari', [White_FerrariController::class,'store'])->name('White_Ferrari.store');

Route::get('/Seigfried', [SeigfriedController::class, 'index'])->name('Seigfried');
Route::post('/Seigfried', [SeigfriedController::class,'store'])->name('Seigfried.store');

Route::get('/Godspeed', [GodspeedController::class, 'index'])->name('Godspeed');
Route::post('/Godspeed', [GodspeedController::class,'store'])->name('Godspeed.store');

Route::get('/Futura_Free', [Futura_FreeController::class, 'index'])->name('Futura_Free');
Route::post('/Futura_Free', [Futura_FreeController::class,'store'])->name('Futura_Free.store');



Route::get('/Swim_Good', [Swim_GoodController::class, 'index'])->name('Swim_Good');
Route::post('/Swim_Good', [Swim_GoodController::class,'store'])->name('Swim_Good.store');

Route::get('/Chanel', [ChanelController::class, 'index'])->name('Chanel');
Route::post('/Chanel', [ChanelController::class,'store'])->name('Chanel.store');

Route::get('/Biking', [BikingController::class, 'index'])->name('Biking');
Route::post('/Biking', [BikingController::class,'store'])->name('Biking.store');

Route::get('/Lens', [LensController::class, 'index'])->name('Lens');
Route::post('/Lens', [LensController::class,'store'])->name('Lens.store');

Route::get('/Provider', [ProviderController::class, 'index'])->name('Provider');
Route::post('/Provider', [ProviderController::class,'store'])->name('Provider.store');

Route::get('/Moon_River', [Moon_RiverController::class, 'index'])->name('Moon_River');
Route::post('/Moon_River', [Moon_RiverController::class,'store'])->name('Moon_River.store');

Route::get('/DHL', [DHLController::class, 'index'])->name('DHL');
Route::post('/DHL', [DHLController::class,'store'])->name('DHL.store');

Route::get('/In_My_Room', [In_My_RoomController::class, 'index'])->name('In_My_Room');
Route::post('/In_My_Room', [In_My_RoomController::class,'store'])->name('In_My_Room.store');

Route::get('/Dear_April', [Dear_AprilController::class, 'index'])->name('Dear_April');
Route::post('/Dear_April', [Dear_AprilController::class,'store'])->name('Dear_April.store');

Route::get('/Cayendo', [CayendoController::class, 'index'])->name('Cayendo');
Route::post('/Cayendo', [CayendoController::class,'store'])->name('Cayendo.store');


// Route::get('/', [Controller::class, 'index'])->name('');
// Route::post('/', [Controller::class,'store'])->name('.store');

// Route::get('/', [Controller::class, 'index'])->name('');
// Route::post('/', [Controller::class,'store'])->name('.store');

// Route::get('/', [Controller::class, 'index'])->name('');
// Route::post('/', [Controller::class,'store'])->name('.store');