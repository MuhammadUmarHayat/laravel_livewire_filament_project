<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;//component
use App\Livewire\ShowServicesPage;
use App\Livewire\ShowService;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowBlog;//BlogDetail
use App\Livewire\BlogDetail;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowPage;
use App\Livewire\ShowContactPage;
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

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicesPage::class)->name('servicesPage');//show all services
Route::get('/service/{id}', ShowService::class)->name('servicePage');
Route::get('/team', ShowTeamPage::class)->name('teamPage');//show all team
Route::get('/blog', ShowBlog::class)->name('blog');//show all Blogs
Route::get('/blog/{id}', BlogDetail::class)->name('blogDetail');//show blog details
Route::get('/faqs', ShowFaqPage::class)->name('faqs');//show all faqs
Route::get('/page/{id}', ShowPage::class)->name('page');//show  page ShowContactPage
Route::get('/contact', ShowContactPage::class)->name('contact');//show  page
