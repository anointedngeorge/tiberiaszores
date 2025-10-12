
<div class="container">
    <h5>{{$result->name}}</h5>
    <img class="img-responsive" src="{{ asset('storage/' . $result->featured_image) }}" alt="...">


    <div class="col-lg-12">
        {{ $result->description }}
    </div>



</div>