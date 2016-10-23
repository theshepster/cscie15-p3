<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function index()
    {
        return view('pages.lorem');
    }

    public function submit(Request $request)
    {
        # Validate the request data
        $this->validate($request, [
            'count' => 'min:1|max:99'
        ]);

        $count = $request->input('count');
        $ipsum = generateIpsum($count);

        return view('pages.lorem-submit')->with(['count' => $count,
                                                 'ipsum' => $ipsum
        ]);
    }
}

function generateIpsumParagraph()
{
    $path = storage_path('applewords.txt');
    $words = file($path);
    return array_rand(array_flip($words), 50);
}

function generateIpsum($n)
{
    $paragraphs = array();

    foreach(range(1,$n) as $i)
    {
        $paragraphs[] = generateIpsumParagraph();
    }

    return $paragraphs;
}
