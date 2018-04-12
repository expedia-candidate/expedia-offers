<?php
/**
 * Search query class
 *
 * A class that generates and executes the search.
 */

namespace App\Classes;

use Ixudra\Curl\Facades\Curl;

class hotelOffers
{
    public function prepareQueryString(): array
    {
        $queryString = array(
                            'scenario'      => 'deal-finder',
                            'page'          => 'foo',
                            'uid'           => 'foo',
                            'productType'   => 'Hotel',
                        );

        // City
        $queryString['destinationName']  = $this->destinationName  ?? '';

        // Check-in
        $queryString['minTripStartDate'] = $this->minTripStartDate ?? '';

        // Check-out
        $queryString['maxTripStartDate'] = $this->maxTripStartDate ?? '';

        // Length of stay
        $queryString['lengthOfStay']     = $this->lengthOfStay  ?? '';

        // Hotel Star Rating
        $queryString['minStarRating']    = $this->minStarRating ?? '';
        $queryString['maxStarRating']    = $this->maxStarRating ?? '';

        // Price
        $queryString['minTotalRate']     = $this->minTotalRate  ?? '';
        $queryString['maxTotalRate']     = $this->maxTotalRate  ?? '';

        // Clean up empty query parameters
        return array_filter($queryString);
    }

    private function getUrl(): string
    {
        return 'https://offersvc.expedia.com/offers/v2/getOffers';
    }

    public function getHotelOffers(): array
    {
        try
        {
            $ExpediaResponse = Curl::to($this->getUrl())
                ->withData($this->prepareQueryString())
                ->get();

            return json_decode($ExpediaResponse, true);
        }
        catch (\Exception $e)
        {
            return [];
        }
    }
}