<?php
namespace App\Controllers\Web;

use App\Core\WebController;
use App\Utilities\ApiUtil;


/*
 * Class Name should match this pattern {Controller Name}Controller
 */

class HomeController extends WebController {
    public function Index(){
        return $this->render('default', VIEW_PATH.DS.'Web/Podcast/Search.html');
    }

    public function About(){
        //Set title of About page.
        $this->meta['title'] = 'About · Ciro';
        return $this->render();
    }
}