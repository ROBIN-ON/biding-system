<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDrawings;
use App\Http\Controllers\ControllerPainting;
use App\Http\Controllers\ControllerPhotograph;
use App\Http\Controllers\ControllerCarving;
use App\Http\Controllers\ControllerSculptures;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drawing', function () {
    return view('drawing');
});

Route::get('/painting', function () {
    return view('painting');
});

Route::get('/photograph', function () {
    return view('photograph');
});

Route::get('/sculptures', function () {
    return view('culptures');
});

Route::get('/carving', function () {
    return view('carving');
});

// Route::get('/admin/admindestination' , [ControllerDestination::class , 'admindestination']);
// Route::get('admin/form/destinationform' , [ControllerDestination::class , 'destinationform'])->name('create.destination');
// Route::post('/admin/form/destinationform' , [ControllerDestination::class , 'postdestination']);
// Route::get('/admin/admindestination' , [ControllerDestination::class , 'viewdestination']);
// Route::get('destination' , [ControllerDestination::class , 'viewdestinationpublic']);

// Route::get('admin/form/destinationform/delete/{destinationid}' , [ControllerDestination::class , 'DestinationDelete'])->name('destination.delete');
// Route::get('admin/form/destinationform/edit/{destinationid}' , [ControllerDestination::class , 'DestinationEdit'])->name('destination.edit');
// Route::post('admin/form/destinationform/update/{destinationid}' , [ControllerDestination::class , 'DestinationUpdate'])->name('destination.update');


// for drawing

Route::get('/admin/admindrawing' , [ControllerDrawings::class , 'viewdrawing']);
Route::get('admin/form/drawingform' , [ControllerDrawings::class , 'drawingform'])->name('create.drawing');
Route::post('/admin/form/drawingform' , [ControllerDrawings::class , 'postdrawing']);
Route::get('/admin/admindrawing' , [ControllerDrawings::class , 'viewdrawingg']);
Route::get('drawing' , [ControllerDrawings::class , 'viewdrawingpublic']);

Route::get('admin/form/drawingform/delete/{drawingid}' , [ControllerDrawings::class , 'DrawingDelete'])->name('drawing.delete');
Route::get('admin/form/drawingform/edit/{drawingid}' , [ControllerDrawings::class , 'DrawingEdit'])->name('drawing.edit');
Route::post('admin/form/drawingform/update/{drawingid}' , [ControllerDrawings::class , 'DrawingUpdate'])->name('drawing.update');


// painting

Route::get('/admin/adminpainting' , [ControllerPainting::class , 'viewpainting']);
Route::get('admin/form/paintingform' , [ControllerPainting::class , 'paintingform'])->name('create.painting');
Route::post('/admin/form/paintingform' , [ControllerPainting::class , 'postpainting']);
Route::get('/admin/adminpainting' , [ControllerPainting::class , 'viewpaintingg']);
Route::get('painting' , [ControllerPainting::class , 'viewpaintingpublic']);

Route::get('admin/form/paintingform/delete/{paintingid}' , [ControllerPainting::class , 'PaintingDelete'])->name('painting.delete');
Route::get('admin/form/paintingform/edit/{paintingid}' , [ControllerPainting::class , 'PaintingEdit'])->name('painting.edit');
Route::post('admin/form/paintingform/update/{paintingid}' , [ControllerPainting::class , 'PaintingUpdate'])->name('painting.update');


// photograph

Route::get('/admin/adminphotograph' , [ControllerPhotograph::class , 'viewphotograph']);
Route::get('admin/form/photographform' , [ControllerPhotograph::class , 'photographform'])->name('create.photograph');
Route::post('/admin/form/photographform' , [ControllerPhotograph::class , 'postphotograph']);
Route::get('/admin/adminphotograph' , [ControllerPhotograph::class , 'viewphotographh']);
Route::get('photograph' , [ControllerPhotograph::class , 'viewphotographpublic']);

Route::get('admin/form/photographform/delete/{photographid}' , [ControllerPhotograph::class , 'PhotographDelete'])->name('photograph.delete');
Route::get('admin/form/photographform/edit/{photographid}' , [ControllerPhotograph::class , 'PhotographEdit'])->name('photograph.edit');
Route::post('admin/form/photographform/update/{photographid}' , [ControllerPhotograph::class , 'PhotographUpdate'])->name('photograph.update');

// carving


Route::get('/admin/admincarving' , [ControllerCarving::class , 'viewcarving']);
Route::get('admin/form/carvingform' , [ControllerCarving::class , 'carvingform'])->name('create.carving');
Route::post('/admin/form/carvingform' , [ControllerCarving::class , 'postcarving']);
Route::get('/admin/admincarving' , [ControllerCarving::class , 'viewcarvingg']);
Route::get('carving' , [ControllerCarving::class , 'viewcarvingpublic']);

Route::get('admin/form/carvingform/delete/{carvingid}' , [ControllerCarving::class , 'CarvingDelete'])->name('carving.delete');
Route::get('admin/form/carvingform/edit/{carvingid}' , [ControllerCarving::class , 'CarvingEdit'])->name('carving.edit');
Route::post('admin/form/carvingform/update/{carvingid}' , [ControllerCarving::class , 'CarvingUpdate'])->name('carving.update');

// sc


Route::get('/admin/adminsculptures' , [ControllerSculptures::class , 'viewsculptures']);
Route::get('admin/form/sculpturesform' , [ControllerSculptures::class , 'sculpturesform'])->name('create.sculptures');
Route::post('/admin/form/sculpturesform' , [ControllerSculptures::class , 'postsculptures']);
Route::get('/admin/adminsculptures' , [ControllerSculptures::class , 'viewsculpturess']);
Route::get('sculptures' , [ControllerSculptures::class , 'viewsculpturespublic']);

Route::get('admin/form/sculpturesform/delete/{sculpturesid}' , [ControllerSculptures::class , 'SculpturesDelete'])->name('sculptures.delete');
Route::get('admin/form/sculpturesform/edit/{sculpturesid}' , [ControllerSculptures::class , 'SculpturesEdit'])->name('sculptures.edit');
Route::post('admin/form/sculpturesform/update/{sculpturesid}' , [ControllerSculptures::class , 'SculpturesUpdate'])->name('sculptures.update');