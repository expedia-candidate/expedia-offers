@extends('layouts.app')

{{--Header Section--}}
@section('header')
    @include('templates.header')
@stop

{{--Content Section--}}
@section('content')

    <div class="row row-centered">

        {{--Draw search box Section--}}
        @include('modules.searchBox')

        <div class="col-md-9 col-sm-12 col-xs-12">

            <div class="col-md-auto">
                <h2 class="card-title font-weight-bold">Hotel Offers</h2>
            </div>

            {{--Errors--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    Please revise the following errors(s):
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                @if(app('request')->input('formSubmitted'))
                    @if($offersCount)
                        <div class="alert alert-info">We found <b>{{$offersCount}}</b> offer(s) matching your search criteria.</div>

                        {{--Draw the information of each hotel offer--}}
                        @each('modules.offerInfo', $hotelOffers, 'offerInfo')
                    @else
                        <div class="alert alert-secondary">Sorry, we found no offers matching your search criteria.</div>
                    @endif
                @else
                    @if($offersCount)
                        {{--Draw default hotel offers--}}
                        @each('modules.offerInfo', $hotelOffers, 'offerInfo')
                    @endif
                @endif
            @endif
        </div>
    </div>
@stop


{{--Footer Section--}}
@section('footer')
    @include('templates.footer')
@stop
