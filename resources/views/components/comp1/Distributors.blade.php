
<?php
$distributors = [
    (object)[
        "title" => "Betti Corner Maggi",
        "address" => "Beside Mariam Abacha University, Kano",
        "phone" => "07040009091",
    ],
    (object)[
        "title" => "Bukikatteen",
        "address" => "Kalambina Road, Sokoto",
        "phone" => "07034909591",
    ],
    (object)[
        "title" => "De-media",
        "address" => "Kigbo Road, Kaduna",
        "phone" => "08036029815",
    ],
    (object)[
        "title" => "Hajia Missippi",
        "address" => "No 3 Parana Close off Missippi Street, Abuja",
        "phone" => "08036830402",
    ],
    (object)[
        "title" => "Musaby",
        "address" => "Kubwa FHA, Abuja",
        "phone" => "08033546206",
    ],
    (object)[
        "title" => "Alsima",
        "address" => "Kubwa FHA, Abuja",
        "phone" => "08145364117",
    ],
    (object)[
        "title" => "Jaiz",
        "address" => "Airport Road, Kano",
        "phone" => "08035088920",
    ],
    (object)[
        "title" => "Samtek",
        "address" => "Awaan Road, Uyo",
        "phone" => "08036116220",
    ],
    (object)[
        "title" => "Mall Hassan",
        "address" => "Mararaba Shopping Centre, Abuja",
        "phone" => "08164191155",
    ],
    (object)[
        "title" => "Lamanko",
        "address" => "Central Area, Abuja",
        "phone" => "08032629662",
    ],
    (object)[
        "title" => "Zinaria",
        "address" => "Central Area, Abuja",
        "phone" => "08063135200",
    ],
    (object)[
        "title" => "Amarachi Mrs.",
        "address" => "Okigwe Road, Aba",
        "phone" => "07063227828",
    ],
    (object)[
        "title" => "Zamziba",
        "address" => "Odili Road, P/H",
        "phone" => "08065923436",
    ],
    (object)[
        "title" => "Jeddy Haddy",
        "address" => "P/H Road, Owerri",
        "phone" => "08118555778",
    ],
    (object)[
        "title" => "Mrs. Jatau",
        "address" => "Ajaa, Lagos",
        "phone" => "08037229786",
    ],
    (object)[
        "title" => "Jonnapal",
        "address" => "Opp Fire Service, Minna",
        "phone" => "08065812515",
    ],
    (object)[
        "title" => "Adeniyi Mrs.",
        "address" => "Odogunyo, Ikorodu, Lagos",
        "phone" => "08033310340",
    ],
    (object)[
        "title" => "Sonaj",
        "address" => "Anthony Village, Lagos",
        "phone" => "08033950493",
    ],
    (object)[
        "title" => "Segun",
        "address" => "Anthony Village, Lagos",
        "phone" => "09091067728",
    ],
    (object)[
        "title" => "Ayuba Kosemary",
        "address" => "Anthony Village, Lagos",
        "phone" => "08027900059",
    ],
    (object)[
        "title" => "Pharm Umar",
        "address" => "Old John Holt, Lokoja",
        "phone" => "07034764992",
    ],
    (object)[
        "title" => "Hajja Fatima Abdullahi",
        "address" => "Pwoyi Village, Lugbe, Abuja",
        "phone" => "08033028661",
    ],
    (object)[
        "title" => "Mr. Nonso",
        "address" => "Onitsha Market, Onitsha",
        "phone" => "08073918888, 08036662304",
    ],
    (object)[
        "title" => "John Ahefu",
        "address" => "Odili Road, P/H",
        "phone" => "08036773139",
    ],
    (object)[
        "title" => "Viyak Nig Ent.",
        "address" => "No 6 Joseph Ayodele Street, Lokoja",
        "phone" => "07039835161",
    ],
];
?>





<div class="container my-5">
    <h3 class="text-center mb-4">Nagari Integrated Dairy Farms Limited Distributors</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      @foreach ($distributors as $dist )
        <div class="col">
            <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $dist->title }}</h5>
                <p class="card-text">{{ $dist->address }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $dist->address }}</p>
            </div>
            </div>
        </div>
      @endforeach
      
    </div>
    <div class="mt-3 mb-3 text-center">
        <a 
        href="{{ route('frontend.page', ['pagename' => 'distributor']) }}" 
        class="btn btn-style btn-secondary ml-lg-3">Become A Distributor</a>
      </div>
  </div>
  