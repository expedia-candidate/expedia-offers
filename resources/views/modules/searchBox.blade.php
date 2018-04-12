<div class="card-header col-md-auto">

    <h3 class="card-title">Find Your Offer!</h3>

    <form id="hotelForm" name="hotelForm" action="/" method="get">
        <div class="form-group">
            <select id="destinationName" class="form-control" name="destinationName">
                <option disabled selected>-Destination Name-</option>
                @foreach ($cities as $city)
                    <option {{ (app('request')->input('destinationName') == $city ? 'selected': '') }}>{{ $city }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input id="minTripStartDate" type="date" class="form-control" name="minTripStartDate" placeholder="-Min Trip Date-"
                   value="{{ app('request')->input('minTripStartDate') }}">
        </div>

        <div class="form-group">
            <input id="maxTripStartDate" type="date" class="form-control" name="maxTripStartDate" placeholder="-Max Trip Date-"
                   value="{{ app('request')->input('maxTripStartDate') }}">
        </div>

        <div class="form-group">
            <input id="lengthOfStay" type="text" class="form-control" name="lengthOfStay" placeholder="-Length of Stay-"
                   value="{{ app('request')->input('lengthOfStay') }}">
        </div>

        <div class="form-group">
            <select id="totalRate" class="form-control" name="totalRate">
                <option disabled selected>-Price Range-</option>
                @foreach ($priceRates as $rate)
                    <option {{ (app('request')->input('totalRate') == $rate ? 'selected': '') }}>{{ $rate }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select name="minStarRating" id="minStarRating" class="form-control-sm">
                <option disabled selected>-Min Rating-</option>
                @for ($min = 1; $min <= 5; $min++)
                    <option {{ (app('request')->input('minStarRating') == $min ? 'selected': '') }}>{{ $min }}</option>
                @endfor
            </select>

            <select name="maxStarRating" id="maxStarRating" class="form-control-sm">
                <option disabled selected>-Max Rating-</option>
                @for ($max = 1; $max <= 5; $max++)
                    <option {{ (app('request')->input('maxStarRating') == $max ? 'selected': '') }}>{{ $max }}</option>
                @endfor
            </select>
        </div>

        <input type="hidden" name="formSubmitted" id="formSubmitted" value="1" />

        <button type="submit" class="btn btn-primary">Get Offers</button>&nbsp;
        <a href="">Reset search criteria</a>
    </form>

</div>