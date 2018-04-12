<?php
/**
 * PriceRates class
 */


namespace App\Classes\Entities;

class PriceRates
{
    public static function getPriceRates() :array
    {
        return [
                '< USD 1,000',
                'USD 1,000 - USD 1,999',
                'USD 2,000 - USD 2,999',
                'USD 3,000 - USD 3,999',
                'USD 4,000 - USD 4,999',
                '>= USD 5,000'];
    }

    public static function getMinMaxPrice($totalRate) :array
    {
        switch ($totalRate) {
            case '< USD 1,000' :
                $minTotalRate =  '';
                $maxTotalRate = 999;
            case 'USD 1,000 - USD 1,999' :
                $minTotalRate = 1000;
                $maxTotalRate = 1999;
            case 'USD 2,000 - USD 2,999' :
                $minTotalRate = 2000;
                $maxTotalRate = 2999;
            case 'USD 3,000 - USD 3,999' :
                $minTotalRate = 3000;
                $maxTotalRate = 3999;
            case 'USD 4,000 - USD 4,999' :
                $minTotalRate = 4000;
                $maxTotalRate = 4999;
            case '>= USD 5,000' :
                $minTotalRate = 5000;
                $maxTotalRate =   '';
            default :
                $minTotalRate = '';
                $maxTotalRate = '';
        }

        return array(
                    'minTotalRate'  => $minTotalRate,
                    'maxTotalRate'  => $maxTotalRate,
        );
    }
}