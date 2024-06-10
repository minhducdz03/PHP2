<?php

namespace Ductr\Opp\Controllers\Client;

use Ductr\Opp\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Ductr';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
    
}