<?php

namespace App\Http\Controllers;

use App\Services\BankService;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BankService $service)
    {
        #$this->middleware('auth');
        $this->service = $service;
        $this->label = 'Bancos';
    }
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data = $this->service->all();

        return view('panel.bank.index')
            ->with([
                'data' => $data,
                'label' => $this->label,
            ]);
    }
}
