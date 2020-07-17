<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * @var \App\Models\Study
     */

    protected $study;

    public function __construct(Study $study)
    {
        $this->middleware('auth');
        $this->study = $study;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(\Correios::cep('18013-000'));

        $estudosAtrasados = $this->study->estudosAtrasados();
        $estudosAndamento = $this->study->estudosAndamento();
        $estudosConcluidos = $this->study->estudosConcluidos();

        return view('home', compact('estudosAtrasados', 'estudosAndamento', 'estudosConcluidos'));
    }
}
