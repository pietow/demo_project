<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use App\plz;
use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;

class Autodealer extends Model
{
    /**
     * Get the plz coordinates of the car dealer.
     */
   
    public function plz()
    {
        return $this->belongsTo(plz::class);
    }

    public function getFirstNameAttribute($plz_user)
    {
        
        $plz = plz::find($plz_user);
        $ort_user_lat = $plz->Latitude;
        $ort_user_long = $plz->Longitude;
        $ort_user = new LatLong($ort_user_lat, $plz->Longitude);
         
        # SQL query
        $query = DB::table('autodealers')->selectRaw('plzs.Ort, plzs.Latitude, plzs.Longitude, autodealers.Händler, autodealers.plz_id')->join('plzs',
         'plzs.id', '=', 'autodealers.plz_id')->get();

        $dealer_distance = [];
        
        foreach($query as $row){

            if ($plz_user == $row->plz_id){
                array_push($dealer_distance,['distance' => 5, 'dealer' => $row->Händler, 'ort' => $row->Ort]);
            } else {
            # Set our Lat/Long coordinates
            $ort_dealer = new LatLong($row->Latitude, $row->Longitude);

            # You can then compute the distance between dealer and user
            $distanceCalculator = new DistanceCalculator($ort_dealer, $ort_user);
            $distance = $distanceCalculator->get()->asKilometres();

            # formating
            $distance = number_format($distance, 2, '.', '');
            array_push($dealer_distance,['distance' => $distance, 'dealer' => $row->Händler, 'ort' => $row->Ort]);
            }
        }

        # convert  array to collection
        $dealer_distance = collect($dealer_distance);
        return $dealer_distance;
       
    }
}
