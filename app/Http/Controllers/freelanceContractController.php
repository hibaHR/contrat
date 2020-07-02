<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FreelanceContract;
use PDF;
use Auth;
class freelanceContractController extends Controller
{
    public function  __construct() {
        $this->middleware('auth');
  }
  public function index()
  {
          $freelanceContracts = freelanceContract::where('user_id', Auth::user()->id)->get();
          return view('liste_freelanceContract', compact('freelanceContracts'));
  }
    //
    public function create(){
        return view('form_freelanceContract');
    }
    public function store(Request $request){
        $freelanceContracts = new freelanceContract();
        $freelanceContracts->em_name = $request->input('em_name');
        $freelanceContracts->ep_name = $request->input('ep_name');
        $freelanceContracts->from = $request->input('from');
        $freelanceContracts->to = $request->input('to');
        $freelanceContracts->wage = $request->input('wage');
        $freelanceContracts->pb_periode = $request->input('pb_periode');
        $freelanceContracts->place = $request->input('place');
        $freelanceContracts->em_id = $request->input('em_id');
        $freelanceContracts->job_duty = $request->input('job_duty');
        $freelanceContracts->sig_date_em = $request->input('sig_date_em');
        $freelanceContracts->sig_date_ep = $request->input('sig_date_ep');
        $freelanceContracts->fixed_period = $request->input('fixed_period');
        $freelanceContracts->fixed_period_of = $request->input('fixed_period_of');
        $freelanceContracts->break_partie = $request->input('break_partie');
        $freelanceContracts->user_id = Auth::user()->id;
        $freelanceContracts->save();;
        return redirect('/freelanceContract')->with('success', 'created');
    }
public function downloadPDF($id) {
    $contract = freelanceContract::find($id);
    $pdf = PDF::loadView('freelancepdf', compact('contract'));
    return $pdf->download('contract_freelance_'.$id.'.pdf');
}
}
