<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CleanupController extends Controller
{
    public function deleteAllTestUsers()
    {
        DB::delete("delete from users where email like 'test.email%'");
    }
}
