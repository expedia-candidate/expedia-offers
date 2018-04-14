<?php
/**
 * TotalRates class
 */


namespace App\Classes\Entities;

class PriceRates
{
    public static function getTotalRates() :array
    {
        return [
                '< 1,000',
                '1,000 - 1,999',
                '2,000 - 2,999',
                '3,000 - 3,999',
                '4,000 - 4,999',
                '>= 5,000'];
    }

    public static function getMinMaxRate($totalRate) :array
    {
        switch ($totalRate) {
            case '< 1,000' :
                $minTotalRate =  '';
                $maxTotalRate = 999;
            case '1,000 - 1,999' :
                $minTotalRate = 1000;
                $maxTotalRate = 1999;
            case '2,000 - 2,999' :
                $minTotalRate = 2000;
                $maxTotalRate = 2999;
            case '3,000 - 3,999' :
                $minTotalRate = 3000;
                $maxTotalRate = 3999;
            case '4,000 - 4,999' :
                $minTotalRate = 4000;
                $maxTotalRate = 4999;
            case '>= 5,000' :
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