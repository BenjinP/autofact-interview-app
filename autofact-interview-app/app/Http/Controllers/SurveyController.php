<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SurveyAnswer;

class SurveyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }   


    /**
     * Stores a survey answered by a user.
     */
    public function create(Request $request)
    {        
        return view('surveys.create');
    }


    // public function dashboard()
    // {
    //     dd(dashboardSurveyData());
    // }

    /**
     * Stores a survey answered by a user.
     */
    public function store(Request $request)
    {
        $surveyAnswer = new SurveyAnswer;
        $surveyAnswer->user_id = Auth::id();
        $surveyAnswer->answer_question_1 = $request->input('question1');
        $surveyAnswer->answer_question_2 = $request->input('question2');
        $surveyAnswer->answer_question_3 = $request->input('question3');
        $surveyAnswer->save();
        return view('surveys.create_done');
    }
    

    // private function getSurveyQuestionData($question){
    //     $question_data = DB::table('survey_answers')
    //     ->select($question, DB::raw('count(*) as number_of_users'))
    //     ->groupBy($question)
    //     ->get();

    //     return $question_data;
    // }


    // public function dashboardSurveyData()
    // {
    //     $question_data = getSurveyQuestionData('answer_question_2');
    //     return $question_data;
    // }

}