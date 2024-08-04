<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/', [PetController::class, 'index'])->name('pets.index');
Route::post('/pet', [PetController::class, 'submitForm']);
Route::get('/pet', [PetController::class, 'getByid'])->name('pets.id');
Route::post('/status', [PetController::class, 'submitFormAvailable']);
Route::get('/status', [PetController::class, 'status'])->name('pets.status');
Route::post('/image', [PetController::class, 'uploadImage']);
Route::post('/addPet', [PetController::class, 'addPet']);
Route::post('/updatePet', [PetController::class, 'updatePet']);

Route::post('/updatePetById', [PetController::class, '']);
Route::post('/deletePet', [PetController::class, '']);