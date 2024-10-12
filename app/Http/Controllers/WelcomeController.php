<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        
        return view('livewire.projects.index');

    }

}
