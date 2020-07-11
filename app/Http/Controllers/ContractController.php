<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Testcontract;

class ContractController extends Controller
{
    public function getIndex()
    {
        $contracts = Testcontract::all();

        return view('contracts.index')->withContracts($contracts);
    }

    public function getNewcontract()
    {
        return view('contracts.form');
    }

    public function postContract(Request $request)
    {
        $contract = new Testcontract;
            $contract->name = $request->name;
        $contract->save();
        
        return redirect()->route('contract.index');
    }
}
