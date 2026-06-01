<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

class UsersController extends Controller 
{
    /**
     * Display the specified resource.
     */
    public function show() 
    {
        echo __('Get the SQL query of all users in the past year:') . User::ofLastYear()->toRawSql(). PHP_EOL;
    }
}
