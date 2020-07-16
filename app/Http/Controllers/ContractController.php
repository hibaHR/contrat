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
        return view('contracts.index');
    }

    public function getNewcontract()
    {
        return view('contracts.new');
    }

    public function postContract(Request $request)
    {
        $contract = new Testcontract;
        $contract->name = $request->name;
        $contract->save();
        
        return redirect()->route('contract.index');
    }

    public function operate(Request $request)
    {
        // set dynamic table name according to your requirements
        $table_name = $request->name;
        // set your dynamic fields (you can fetch this data from database this is just an example)
        $fields = [
            ['name' => 'from', 'type' => 'date'],
            ['name' => 'to', 'type' => 'date'],
        ];
        return $this->createTable($table_name, $fields);
    }

    /**
     * Create dynamic table along with dynamic fields
     *
     * @param       $table_name
     * @param array $fields
     *
     * @return \Illuminate\Http\JsonResponse
     */    public function createTable($table_name, $fields = [])
     {
        // check if table is not already exists
        if (!Schema::hasTable($table_name)) {
            Schema::create($table_name, function (Blueprint $table) use ($fields, $table_name) {
                $table->increments('id');
                if (count($fields) > 0) {
                    foreach ($fields as $field) {
                        $table->{$field['type']}($field['name']);
                    }
                }
                $table->timestamps();
            });
            // return response()->json(['message' => 'Given table has been successfully created!'], 200);
            return redirect()->route('contract.index');
        }
        // return response()->json(['message' => 'Given table is already existis.'], 400);
    }
}
