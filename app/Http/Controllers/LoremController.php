<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function index()
    {
        return view('pages.lorem')->with('count', 1);
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
    shuffle($words);
    $out = "";
    $sentenceLength = 16;
    for ($i = 0; $i<3; $i++)
    {
        $out .= implode(" ", array_slice($words, 0 + ($sentenceLength + 1)*$i, $sentenceLength*($i+1))) . ". ";

    }
    return $out;
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
