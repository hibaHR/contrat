<?php
namespace App\Http\Controllers;
use App\Vehicle;
use PDF;
use Auth;
use Illuminate\Http\Request;
class VehicleController extends Controller


{
    public function  __construct() {
        $this->middleware('auth');
  }
    //
public function index(){
   $contracts = Auth::user()->contracts;
            return \view('VehicleContract.listcontract', ['contracts' => $contracts]);
    }
    public function create()
    {
        return view('VehicleContract.create');
    }
    public function store (Request $request)
    {
        $contracts = new Contract();
            $contracts->reponse1 = $request->input('reponse1');
            $contracts->reponse2 = $request->input('reponse2');
            $contracts->reponse3 = $request->input('reponse3');
            $contracts->reponse4 = $request->input('reponse4');
            $contracts->reponse5 = $request->input('reponse5');
            $contracts->reponse6 = $request->input('reponse6');
            $contracts->reponse7 = $request->input('reponse7');
            $contracts->reponse8 = $request->input('reponse8');
            $contracts->reponse9 = $request->input('reponse9');
            $contracts->user_id = Auth::user()->id;
            $contracts->save();
        return view('home')->with('success', 'Contract saved');
    }
    public function downloadPDF($id) {
        $contract = Contract::find($id);
        $pdf = PDF::loadView('vehiculepdf', compact('contract'));
        return $pdf->download('contract.pdf');
}
}