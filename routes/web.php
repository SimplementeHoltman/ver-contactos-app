<?php

use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
