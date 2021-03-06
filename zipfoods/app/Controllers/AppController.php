<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function contact()
    {
        // return $this->app->redirect('/done');
        return $this->app->view('contact', [
            'email' => 'support@zipfoods.com'
        ]);
    }

    public function about()
    {
        return $this->app->view('about', [
            'message' => 'ZipFoods is your one-stop-shop for convenient online grocery shopping in the
            greater Boston area.'
        ]);
    }
    }