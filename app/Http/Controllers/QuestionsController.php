<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    
    public function forwardQuestionsView(){
        return view("questions.questions");
    }

}
