<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\BCGVaccines;
use App\Charts\at6weeks;
use App\Immunization;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function analytics(){
        $bcg_at_birth = Immunization::where('bcg_at_birth', '>', 0)->count();
        $opv_at_birth = Immunization::where('opv_at_birth', '>', 0)->count();

        $opv_at_6_weeks = Immunization::where('opv_at_6_weeks', '>', 0)->count();
        $opv_at_10_weeks = Immunization::where('opv_at_10_weeks', '>', 0)->count();
        $opv_at_14_weeks = Immunization::where('opv_at_14_weeks', '>', 0)->count();

        $dpt_at_6_weeks = Immunization::where('dpt_at_6_weeks', '>', 0)->count();
        $dpt_at_10_weeks = Immunization::where('dpt_at_10_weeks', '>', 0)->count();
        $dpt_at_14_weeks = Immunization::where('dpt_at_14_weeks', '>', 0)->count();

        $pcv_at_6_weeks = Immunization::where('pcv_at_6_weeks', '>', 0)->count();
        $pcv_at_10_weeks = Immunization::where('pcv_at_10_weeks', '>', 0)->count();
        $pcv_at_14_weeks = Immunization::where('pcv_at_14_weeks', '>', 0)->count();
        
        $yellowfever = Immunization::where('yellow_fever_at_9_months', '>', 0)->count();
        $measles = Immunization::where('measles_at_9_months', '>', 0)->count();

        // At Birth Analytics
        $at_birth_chart = new BCGVaccines;

        $at_birth_chart->labels(['BCG', 'POLIO']);
        $at_birth_chart->dataset('Vaccines Given', 'column', [$bcg_at_birth, $opv_at_birth])->options([
            'color' => '#008080',
        ]);

        $at_birth_pie = new BCGVaccines;

        $at_birth_pie->labels(['BCG', 'POLIO']);
        $at_birth_pie->dataset('Vaccines Given', 'pie', [$bcg_at_birth, $opv_at_birth])->options([
            'color' => '#008080',
        ]);

        // At 6 Weeks Analytics
        $at_6_chart = new at6weeks;
        
        $at_6_chart->labels(['POLIO', 'DPT', 'PCV']);
        $at_6_chart->dataset('Vaccines Given', 'column', [$opv_at_6_weeks, $dpt_at_6_weeks, $pcv_at_6_weeks])->options([
            'color' => '#008080',
        ]);

        $at_6_pie = new at6weeks;

        $at_6_pie->labels(['POLIO', 'DPT', 'PCV']);
        $at_6_pie->dataset('Vaccines Given', 'pie', [$opv_at_6_weeks, $dpt_at_6_weeks, $pcv_at_6_weeks])->options([
            'color' => '#008080',
        ]);

        // At 10 weeks Analytics
        $at_10_chart = new at6weeks;

        $at_10_chart->labels(['POLIO', 'DPT', 'PCV']);
        $at_10_chart->dataset('Vaccines Given', 'column', [$opv_at_10_weeks, $dpt_at_10_weeks, $pcv_at_10_weeks])->options([
            'color' => '#008080',
        ]);

        $at_10_pie = new at6weeks;

        $at_10_pie->labels(['POLIO', 'DPT', 'PCV']);
        $at_10_pie->dataset('Vaccines Given', 'pie', [$opv_at_10_weeks, $dpt_at_10_weeks, $pcv_at_10_weeks])->options([
            'color' => '#008080',
        ]);

        // Analytics at 14 Weeks
        $at_14_chart = new at6weeks;
        $at_14_chart->labels(['POLIO', 'DPT', 'PCV']);
        $at_14_chart->dataset('Vaccines Given', 'column', [$opv_at_14_weeks, $dpt_at_14_weeks, $pcv_at_14_weeks])->options([
            'color' => '#008080',
        ]);

        $at_14_pie = new at6weeks;
        $at_14_pie->labels(['POLIO', 'DPT', 'PCV']);
        $at_14_pie->dataset('Vaccines Given', 'pie', [$opv_at_14_weeks, $dpt_at_14_weeks, $pcv_at_14_weeks])->options([
            'color' => '#008080',
        ]);

        // Analytics at 9 Months
        $at_9months_chart = new at6weeks;
        $at_9months_chart->labels(['Yellow Fever', 'Measles']);
        $at_9months_chart->dataset('Vaccines Given', 'column', [$yellowfever, $measles])->options([
            'color' => '#008080',
        ]);

        $at_9months_pie = new at6weeks;
        $at_9months_pie->labels(['Yellow Fever', 'Measles']);
        $at_9months_pie->dataset('Vaccines Given', 'pie', [$yellowfever, $measles])->options([
            'color' => '#008080',
        ]);

        $allVaccines = new at6weeks;
        $allVaccines->labels(['BCG', 'OPV','DPT1','PCV1','OPV1','DPT2','PCV2','OPV2', 'DPT3', 'PCV3', 'OPV3','Measles','Yellow Fever']);
        $allVaccines->dataset('Total Vaccines Given', 'line', [$bcg_at_birth, $opv_at_birth, $dpt_at_6_weeks, $pcv_at_6_weeks, $opv_at_6_weeks, $dpt_at_10_weeks, $pcv_at_10_weeks, $opv_at_10_weeks, $dpt_at_14_weeks, $pcv_at_14_weeks, $opv_at_14_weeks, $measles, $yellowfever])->options([
            'color' => '#008080',
        ]);




        // Rendering of Analytics
        return view('pages.analytics', [
            'chart' => $at_birth_chart,
            'chart0' => $at_birth_pie,
            'chart1' => $at_6_chart,
            'chart2' => $at_10_chart,
            'chart3' => $at_14_chart,
            'chart4' => $at_6_pie,
            'chart5' => $at_10_pie,
            'chart6' => $at_14_pie,
            'chart7' => $at_9months_chart,
            'chart8' => $at_9months_pie,
            'chart9' => $allVaccines,

        ]);
    }
}
