<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

class UsersController extends Controller 
{
    public function show() 
    {
        $query = User::ofLastYear();
        echo '取得去年的所有使用者的 SQL 語法：' . 
		     vsprintf(str_replace('?', '%s', $query->toSql()), collect($query->getBindings())->map(function ($binding) {
                 $binding = addslashes($binding);
                 return is_numeric($binding) ? $binding : "'{$binding}'";
             })->toArray());
    }
}
