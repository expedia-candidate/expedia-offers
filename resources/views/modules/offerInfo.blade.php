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

                {{--Price--}}
                <div class="float-left">
                    {{--Discount--}}
                    <h5 style="color: #ff0000">
                        <b>Today {{ $offerInfo['hotelPricingInfo']['percentSavings'] }}% Off</b>
                    </h5>

                    <h4 style="text-decoration: line-through;">
                        {{ $offerInfo['hotelPricingInfo']['currency'] }} {{ $offerInfo['hotelPricingInfo']['crossOutPriceValue'] }}
                    </h4>

                    <h4>
                        <b>
                            {{ $offerInfo['hotelPricingInfo']['currency'] }} {{ $offerInfo['hotelPricingInfo']['totalPriceValue'] }}
                        </b>
                        for <b>{{ $offerInfo['offerDateRange']['lengthOfStay'] }} nights</b>
                    </h4>
                </div>


                {{--Hotel image--}}
                <div class="float-right">
                    <p align="center">
                        <a href="{{ urldecode($offerInfo['hotelUrls']['hotelSearchResultUrl']) }}" class="card-link">
                            <img src="{{ $offerInfo['hotelInfo']['hotelImageUrl'] }}" />
                        </a>
                    </p>
                    <p>
                        <a href="{{ urldecode($offerInfo['hotelUrls']['hotelInfositeUrl']) }}"
                                class="btn btn-success" type="button">Get this Offer</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-auto">
            <hr />
        </div>

    </div>
</row>