<?php

namespace App\Http\Controllers\Health;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthController extends Controller
{

    public function __invoke(Request $request): string
    {
        return "ok";
    }
}
