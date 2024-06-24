<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = request()->getHost(); 
        $secure = false;
        $httpOnly = true;

        return response()
            ->json($data, 200)
            ->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}