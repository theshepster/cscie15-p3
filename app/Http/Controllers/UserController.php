<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $count = 1;
        $bdays = false;
        return view('pages.users')->with(['count' => $count, 'bdays' => $bdays]);
    }

    public function submit(Request $request)
    {
        # Validate the request data
        $this->validate($request, [
            'count' => 'min:1|max:99'
        ]);

        $count = $request->input('count');
        $showBday = $request->input('birthday');
        $names = generateRandomUsers($count);

        if ($showBday)
        {
            $bdays = generateRandomBirthdays($count);
        }
        else
        {
            $bdays = false;
        }

        return view('pages.users-submit')->with(['names' => $names,
                                                 'bdays' => $bdays,
                                                 'count' => $count,]);
    }
}

function generateRandomUsers($n)
{

    $path = storage_path('usernames.txt');
    $names = file($path);
    if ($n == 1)
    {
        return array(array_rand(array_flip($names), $n));
    }
    return array_rand(array_flip($names), $n);
}

function generateRandomBirthdays($n)
{
    $bdays = array();

    foreach(range(1,$n) as $i)
    {
        $years = range(1923, 2007);
        $yearkey = array_rand($years);
        $year = $years[$yearkey];

        $months = range(1, 12);
        $monthkey = array_rand($months);
        $month = $months[$monthkey];

        $days = range(1,29);
        $daykey = array_rand($days);
        $day = $days[$daykey];

        $bday = "";
        $bday .= $month . "-" . $day . "-" . $year;

        $bdays[]  = $bday;
    }

    return $bdays;
}