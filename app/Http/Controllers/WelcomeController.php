<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::find(1);
        
        // User::query()->create([
        //     'name' => 'Endrew',
        //     'email' => 'endrew@email.com',
        //     'password' => 'endrew',
        // ]);

        

        return view('welcome');
        //
    }
}
