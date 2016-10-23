<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {

        return view('pages.users');
    }

    public function submit(Request $request)
    {
        # Validate the request data
        $this->validate($request, [
            'count' => 'min:1|max:99'
        ]);

        $names = generateRandomUsers();

        return view('pages.users-submit')->with('names', $names);
    }
}

function generateRandomUsers()
{
    $names = [
        'Tyisha Rondon',
        'Georgina Klingbeiz',
        'Nigel Krueger',
        'Kami Duty',
        'Oswaldo Coulson',
        'Todd Sweeny',
        'Roselee Robarge',
        'Jeane Cazares',
        'Luna Tobar',
        'Gigi Mirando',
        'Shon Washburn',
        'Diamond Groseclose',
        'Zachery Pomeroy',
        'Larry Lash',
        'Shan Gutirrez',
        'Deidre Holte',
        'Cathi Chasteen',
        'Lilian Mcroy',
        'Julieta Carstensen',
        'George Ivery',
        'Felicia Santillanes',
        'Lavette Almond',
        'Karly Degennaro',
        'Nida Wiggin',
        'Elin Holliday',
        'Myesha Pouliot',
        'Nikia Sabella',
        'Myrtis Batten',
        'Alphonse Ritter',
        'Rico Mcpartland',
        'Harriett Seppala',
        'Stan Sanroman',
        'Mia Antunez',
        'Trina Greenblatt',
        'Danial Laguna',
        'Agripina Ambrose',
        'Nelida Noda',
        'Johnathon Grist',
        'Joni Orenstein',
        'Wade Ellis',
        'Teodora Hemby',
        'Yadira Glaser',
        'Rosella Feeney',
        'David Benningfield',
        'Wen Dowless',
        'Nicola Meldrum',
        'Cher Sloane',
        'Laurine Greenway',
        'Serita Shoaf',
        'Lewis Noyes',
    ];

    return $names;
}