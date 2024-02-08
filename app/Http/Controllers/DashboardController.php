<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // database entry
        // $idea = new Idea([
        //     'content' => "hello twitter or is it now known as X 😂"
        // ]);
        // $idea->save();

        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at','DESC')->get()
        ]);
    }
}
