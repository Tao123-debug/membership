<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Livewire\Member;
use App\Livewire\AddMember;
use App\Livewire\EditMember;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', Member::class)->name('members.index');
Route::get('/members/add', AddMember::class)->name('members.add');
// Route::resource('members', MemberController::class)->except(['index']);