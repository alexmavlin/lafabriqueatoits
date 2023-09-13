<?php

namespace App\Http\Controllers\ServiceRoutes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ServiceController extends Controller
{
    public function optimize() {
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        dd('Optimized');
    }

    public function migrate() {
        Artisan::call('migrate');
        dd("Migrations completed");
    }

    public function migrate_rollback() {
        Artisan::call('migrate:rollback');
        dd('Last migration rolled back');
    }
}