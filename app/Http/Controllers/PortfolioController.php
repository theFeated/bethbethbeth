<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use App\Models\Count;
use App\Models\Skill;
use App\Models\Interest;
use App\Models\Goal;
use App\Models\Education;
use App\Models\ProfessionalExperience;
use App\Models\Services;
use App\Models\PortfolioDetails;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $personalDetail = PersonalDetail::first();
        $counts = Count::paginate(10);
        $skills = Skill::paginate(10);
        $interests = Interest::paginate(10);
        $goals = Goal::paginate(10);
        $educations = Education::paginate(10);
        $professionalExperiences = ProfessionalExperience::paginate(10);
        $services = Services::paginate(10);
        $portfolios = PortfolioDetails::paginate(10);

        return view('portfolio.index', compact('personalDetail', 'counts', 'skills', 
        'interests', 'goals', 'educations', 'professionalExperiences', 'services', 'portfolios'));
    }
    
}
