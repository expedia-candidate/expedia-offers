
## Why Laravel?

<p>
    I have a good experience with PHP, but I am new with Laravel, this is my first project on Laravel.
    <br />
    I used this assessment to be a chance for me to learn new technology, and I chose Laravel.
</p>

## Project Assumptions

<p>
    A simple site hosted for free on Heroku that consumes <a href="https://offersvc.expedia.com/offers/v2/getOffers?scenario=deal-finder&page=foo&uid=foo&productType=Hotel">JSON</a> API as a server-side call and displays deals in an appealing manner:
</p>

<ul>
    <li>In the first request, the site retrieves five offers from the JSON API.</li>
    <li>The JSON API doesn't retrieve more than twenty-five offers, so no need for any pagination.</li>
    <li>I have back-end validation on search criteria.</li>
    <li>I don't have JavaScript validation on search critiera.</li>
    <li>I show the offers as I get them from the API without reorder them.</li>
    <li>I don't apply any cluster on the search result.</li>
</ul>

## Search Criteria

<p>I have six search criteria:</p>
<ol>
    <li><b>Destination Name:</b> A look-up list I gathered it from the JSON API.</li>
    <li><b>Min Trip Start Date:</b> A date should be equal or more than today.</li>
    <li><b>Max Trip Start Date:</b> A date should be more than the value of min trip start date, if min date is empty, then it should be equal or more than today.</li>
    <li><b>Length Of Stay:</b> A numberic value.</li>
    <li><b>Total Rate Range:</b> A numberic value.</li>
    <li><b>Min Star Rating:</b> A numeric value between 1 - 5.</li>
    <li><b>Max Star Rating:</b> A numeric value between 1 - 5, if the min rating is not empty, then it should be equal or more than it.</li>               
 </ol> 