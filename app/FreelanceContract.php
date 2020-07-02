<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class freelanceContract extends Model
{
    protected $fillable = ['em_name','ep_name','from','to','wage','pb_periode','place','em_id','job_duty','sig_date_em','sig_date_ep','fixed_period' ,'fixed_period_of' ,'break_partie' ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
