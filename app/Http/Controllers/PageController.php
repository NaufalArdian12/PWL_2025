<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return 'Hello My name is Nopal <br> 2341760148';
    }

    public function articles($id) {
        return 'Article Page with ID '.$id;
    }
}
