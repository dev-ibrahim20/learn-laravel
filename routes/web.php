<?php

use App\Jobs\processSecondTask;
use App\Jobs\processTask;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Bus;

Route::get("/", function () {
    Bus::batch([
        new processTask(),
        new processSecondTask(),
    ])->dispatch();

    return view("welcome");
});