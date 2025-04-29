<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Price;

class HomeController extends Controller
{
    public function index()
    {
		$advertisements = DB::table('advertisements')->select( 'advertisement_id', 'advertisement_name', 'advertisement_image', 'advertisement_description')->get();
		return view('index',compact("advertisements"));
    }

    public function suggestAddresses(Request $request)
{
    $term = $request->input('term');

    if (!$term) {
        return response()->json([]);
    }

    $results = Station::whereNotNull('geolocation')
        ->where(function ($query) use ($term) {
            $query->where('street_address', 'LIKE', '%' . $term . '%')
                  ->orWhere('city', 'LIKE', '%' . $term . '%')
                  ->orWhere('state', 'LIKE', '%' . $term . '%');
        })
        ->limit(10)
        ->pluck('street_address'); // You can also return city/state

    return response()->json($results);
}

    // Add this method to handle AJAX requests for stations
    // public function findStations(Request $request)
    // {
    //     $search = $request->input('q');
    //     $stations = Station::query();
    //     if ($search) {
    //         $stations = $stations->where(strtolower('station_name'), 'LIKE', '%' . strtolower($search). '%')
    //             ->orWhere(strtolower('city'), 'LIKE', '%' . strtolower($search) . '%')
    //             ->orWhere(strtolower('state'), 'LIKE', '%' . strtolower($search) . '%');
    //     }

    //     $stations = $stations->limit(20)->get();

    //     $formattedStations = [];

    //     foreach ($stations as $station) {
    //         $formattedStations[] = [
    //             'id' => $station->station_id,
    //             'text' => $station->station_name . ' - ' . $station->city,
    //         ];
    //     }

    //     return response()->json($formattedStations);
    // }
   
   
   
   public function getStations(Request $request){
       
        $searchAddress = $request->input('searchadd');
        $latestPricesSubquery = Price::latestApprovedPricePerStation();

        // Main query: Join stations with the latest prices and eager load feedbacks
        $stationsQuery = Station::where('geolocation','!=',null)->with('feedbacks') // Eager load feedbacks for optimization
            ->from('stations as s') // Alias for stations table
            ->leftJoinSub($latestPricesSubquery, 'lp', function ($join) {
                $join->on('s.station_id', '=', 'lp.station_id');
            })
            ->leftJoin('prices as p', function ($join) {
                $join->on('s.station_id', '=', 'p.station_id')
                    ->on('p.system_date', '=', 'lp.latest_price_date');
            })
            ->select('s.*', 'p.fuel_type', 'p.price', 'p.phone_no');
        
        // Filter by search address if provided
        if ($searchAddress) {
            $stationsQuery->where(strtolower('s.street_address'), 'LIKE', '%'.trim(strtolower($searchAddress)).'%')
			->orWhere(strtolower('s.city'), 'LIKE', '%'.trim(strtolower($searchAddress)).'%')
			->orWhere(strtolower('s.state'), 'LIKE', '%'.trim(strtolower($searchAddress)).'%');
        }
		
		// Execute the query and get results
        $stations = $stationsQuery->get();
		
        // Transform the data to return stations with their latest approved price
        $data = $stations->map(function ($station) {
            return [
                'id' => $station->id,
                'station_id' => $station->station_id,
                'station_name' => $station->station_name,
                'street_address' => $station->street_address,
                'geolocation' => $station->geolocation,
                'phone_no' => $station->phone_no,
                'fuel_type' => $station->fuel_type,
                'before6amprice' => $station->price,
                'after6amprice' => $station->price,
                'feedbackCount' => $station->feedback_count ?? 0, // Using the accessor method from the Station model
                'averageRating' => $station->average_rating ?? 0, // Using the accessor method from the Station model
				'approver'	=> $station->approver
			];
        });

        
    
       return response()->json($data);
   }

    public function findStations(Request $request)
    {
        $search = $request->input('q');
        $stations = Station::query();

        if ($search) {
            $search = strtolower($search);
            $stations = $stations->where(function ($query) use ($search) {
                $query->where(DB::raw('LOWER(station_name)'), 'LIKE', "%$search%")
                    ->orWhere(DB::raw('LOWER(city)'), 'LIKE', "%$search%")
                    ->orWhere(DB::raw('LOWER(state)'), 'LIKE', "%$search%");
            });
        }

        $stations = $stations->limit(20)->get();

        $formattedStations = [];

        foreach ($stations as $station) {
            $formattedStations[] = [
                'id' => $station->station_id,
                'text' => $station->station_name . ' - ' . $station->city,
            ];
        }

        return response()->json($formattedStations);
    }


    function about_us()
    {
        return view('about-us');
    }
}
