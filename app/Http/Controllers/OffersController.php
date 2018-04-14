<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\HotelOffers;
use App\Classes\Entities\Cities;
use App\Classes\Entities\TotalRates;

class OffersController extends Controller
{
    public function showOffers(Request $request)
    {
        // Validate the search criteria.
        $this->validateSearchCritera($request);

        // Get the search criteria.
        $destinationName  = $request->input('destinationName')   ?? '';
        $minTripStartDate = $request->input('minTripStartDate')  ?? '';
        $maxTripStartDate = $request->input('maxTripStartDate')  ?? '';
        $lengthOfStay     = $request->input('lengthOfStay')      ?? '';
        $totalRate        = $request->input('totalRate')         ?? '';
        $minStarRating    = $request->input('minStarRating')     ?? '';
        $maxStarRating    = $request->input('maxStarRating')     ?? '';

        $priceRates       = TotalRates::getMinMaxRate($totalRate);
        $minTotalRate     = $priceRates['minTotalRate'];
        $maxTotalRate     = $priceRates['maxTotalRate'];

        // Build the search criteria object.
        $searchCriteria = new HotelOffers();

        $searchCriteria->destinationName  = $destinationName;
        $searchCriteria->minTripStartDate = $minTripStartDate;
        $searchCriteria->maxTripStartDate = $maxTripStartDate;
        $searchCriteria->lengthOfStay     = $lengthOfStay;
        $searchCriteria->minStarRating    = $minStarRating;
        $searchCriteria->maxStarRating    = $maxStarRating;
        $searchCriteria->minTotalRate     = $minTotalRate;
        $searchCriteria->maxTotalRate     = $maxTotalRate;

        $hotelOffers = $searchCriteria->getHotelOffers();

        $hotelOffers = $hotelOffers['offers']['Hotel'] ?? []; //pass only hotel index to view

        // Render hotelOffers view.
        return view('hotelOffers', [
                    'hotelOffers'   => $hotelOffers,
                    'offersCount'   => count($hotelOffers),
                    'cities'        => Cities::getCities(),
                    'totalRates'    => TotalRates::getTotalRates()]
        );
    }

    private function validateSearchCritera($request)
    {
        if ($request->input('minTripStartDate') == null) {
            $maxTripDateValidation = 'after_or_equal:today';
        } else {
            $maxTripDateValidation ='after:' . $request->input('minTripStartDate');
        }
        
        return $this->validate($request, [
                            'destinationName'   => 'nullable|string|in: ' . implode(',', Cities::getCities()),
                            'minTripStartDate'  => 'nullable|date|after_or_equal:today',
                            'maxTripStartDate'  => 'nullable|date|' . $maxTripDateValidation,
                            'lengthOfStay'      => 'nullable|numeric',
                            'totalRate'         => 'nullable|string',
                            'minStarRating'     => 'nullable|numeric|between:1,5',
                            'maxStarRating'     => 'nullable|numeric|between:1,5|min:' . $request->input('minStarRating'),
        ]);
    }
}
