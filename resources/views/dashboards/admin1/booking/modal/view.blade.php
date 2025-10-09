
<div class="container">

    {{-- <h5>Name: {{$result->name}}</h5> --}}
    <h3><span class="text text-danger">Booking Code: </span> <strong> {{ $result->code }}</strong></h3>


    <div class="col-lg-12">
        {{-- <p><span class="text text-danger">Booking Code:</span> </p> --}}
        <p>Checkin: {{ $result->checkin }}</p>
        <p>Checkout: {{ $result->checkout }}</p>
        <p>Total Price: {{ money_local_format($result->total_price) }}</p>
        <p>Attended By: {{ $result->user->name }}</p>
    </div>



</div>