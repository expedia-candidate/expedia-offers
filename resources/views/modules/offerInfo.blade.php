{{--Draw the information of each hotel offer--}}
<row>
    <div class="col-md-auto">

        <div class="col-md-auto card">

            {{--Hotel name, and location--}}
            <p class="card-title">
                <h4>
                    <a href="{{ urldecode($offerInfo['hotelUrls']['hotelSearchResultUrl']) }}" class="card-link">
                        {{ $offerInfo['hotelInfo']['hotelName']}}</a>
                        <div class="float-right"> <b>{{ $offerInfo['hotelInfo']['hotelStarRating'] }}/5</b></div>
                </h4>

                 <div>
                    <b>&nbsp;{{ $offerInfo['destination']['shortName'] }}, {{ $offerInfo['destination']['country'] }}</b>
                </div>
            </p>

            {{--Offer price--}}
            <div class="card-body">

                <div class="float-left">
                    {{--Discount--}}
                    @if($offerInfo['hotelPricingInfo']['percentSavings'] > 0)
                        <h5 style="color: #ff0000">
                            <b>Today {{ $offerInfo['hotelPricingInfo']['percentSavings'] }}% Off</b>
                        </h5>
                    @endif

                    {{--Cross out price--}}
                    <h4 style="text-decoration: line-through;">
                        {{ $offerInfo['hotelPricingInfo']['currency'] }} {{ number_format($offerInfo['hotelPricingInfo']['crossOutPriceValue'], 2) }}
                    </h4>

                    {{--Total price--}}
                    <h4>
                        <b>
                            {{ $offerInfo['hotelPricingInfo']['currency'] }} {{ number_format($offerInfo['hotelPricingInfo']['totalPriceValue'], 2) }}
                            - {{ $offerInfo['offerDateRange']['lengthOfStay'] }} night(s)
                        </b>
                    </h4>
                </div>

                <div class="float-right">
                    {{--Hotel image--}}
                    <p align="center">
                        <a href="{{ urldecode($offerInfo['hotelUrls']['hotelSearchResultUrl']) }}" class="card-link">
                            <img src="{{ $offerInfo['hotelInfo']['hotelImageUrl'] }}" />
                        </a>
                    </p>
                    {{--Get offer button--}}
                    <p>
                        <a href="{{ urldecode($offerInfo['hotelUrls']['hotelInfositeUrl']) }}"
                                class="btn btn-success" type="button">Get this Offer</a>
                    </p>
                </div>
            </div>
        </div>

        {{--Offers separater--}}
        <div class="col-md-auto">
            <hr />
        </div>

    </div>
</row>