<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $choice = $this->app->old('choice');
        $computer = $this->app->old('computer');
        $tie = $this->app->old('tie');
        $win = $this->app->old('win');
        
        return $this->app->view('index',['choice'=>$choice, 'computer'=>$computer, 'tie'=>$tie, 'win'=>$win]);
    }

    public function process()
    {
        
       $choice = $this->app->input('choice');
        
       $computer = ['rock','paper','scissors'][rand(0,2)];

       $tie = $choice == $computer;
       
       $win = ($choice == 'rock' && $computer == 'scissors') || ($choice == 'scissors' && $computer == 'paper') || ($choice == 'paper' && $computer == 'rock');
       
       // TODO: persist round details to the database
       return $this->app->redirect('/',['choice'=>$choice, 'computer'=>$computer, 'tie'=>$tie, 'win'=>$win]);

    }
}