
<?php 
  
  $contents = [
      "Senator (Dr.) Abdullahi Adamu, CON, (Turakin Keffi), who is popularly called The Bridge, was born on July 23, 1946 at Keffi.  ",
      "He started his education at the age of 7 in 1953 at Abdu Zanga Primary School, Keffi and completed at the Laminga Senior Primary School, Nasarawa in 1959. From 1960-1962, he attended Government Secondary School, Makurdi then proceeded to Government Technical College Bukuru from 1962-1965. In 1968, he graduated from Kaduna Polytechnic with a National Diploma in Building and Civil Engineering. Between 1987-1992 he enrolled into the pioneer part-time Law degree class of the University of Jos where he graduated with an LLB (Hons).  He enrolled into Nigeria Law School, Lagos, where he obtained his BL and was called to the Nigerian bar in December 1993 as a Solicitor and Advocate of the Supreme Court of Nigeria.",
      "His career in politics began when he was elected into the 1977 Constituent Assembly that drafted the Second Republic Constitution of 1979.  Thereafter, he became a pioneer member of the National Movement which later metamorphosed into the National Party of Nigeria (NPN).  He was the first Plateau State Secretary of the Party from December 1978 and later Chairman of the Party from 1982 up to 1983.",
      "In March 1995, he was appointed a Minister of State in the Ministry of Works and Housing of the Federal Republic of Nigeria where he served up to November 17, 1997.",
      "At the lifting of the ban on politics he became a member of the United Nigeria Congress Party (UNCP) and was one of its leading gubernatorial contenders in Nasarawa Sate.  His efforts did not materialize as the Party, alongside others, was dissolved at the death of General Sani Abacha.",
      "At the onset of the current political dispensation in 1999, he became the Executive Governor of Nasarawa State. At the gubernatorial elections held throughout the country on April 19, 2003 he was elected for a second term of four years as the Chief Steward and Executive Governor of Nasarawa State.  He thus becomes the first person in the history of the State to be elected by popular mandate of the people to serve twice in the exalted position of Governor.",
      "In September 2010, Senator Adamu declared his intention to run for the Nasarawa West senatorial seat. He won the election and was subsequently elected to the upper legislative chamber three times – 2011; 2015 and 2019 under the flag of the All Progressives’ Congress (APC). At the chamber, was revered as a father figure and served as the Chairman of the Senate Committee on Agriculture for almost the entire time he was there.",
      "In the months prior to the 2022 National Convention of the APC, Senator Adamu was called upon by the party to head its National Reconciliation Committee. The appointment afforded him the opportunity to interact with members and structures as well as the issues that could possibly trigger crisis in the Party. Senator Adamu creditably performed the reconciliation assignment and was able, alongside other members, to resolve many of the mis-understandings existing in the party.",
      "Having finished the assignment to the satisfaction of party members, and with the National Convention of the APC only months away, Senator Adamu began to consult widely on his interest to assume the Chairmanship of the Party. He formally declared interest in the office of National Chairman by mid-February, 2022.",
      "At the National Convention of the Party held at the Eagle Square in Abuja on 26 March 2022, Senator Adamu was unanimously elected as the National Chairman of the APC. He held the position of Party Chairman until he voluntarily stepped down from office on 16th July, 2023.",
      "Senator Adamu was at the helm of affairs of the Party when the APC convincingly won the 2023 presidential election that produced His Excellency, Bola Ahmed Tinubu, GCFR, as the President of the Federal Republic of Nigeria.",
      "Just before his formal voluntary retirement from active politics, Senator floated a private University to enable him pursue his lifelong passion for education. The University which is aptly named Phoenix University, Agwada received formal approval and registration of the Nigerian Federal Executive Council on 27th May, 2023 after fulfilling all initial regulatory requirements. The University was subsequently issued with a provisional license for its take-off by the National Universities Commission on Friday, 9th June, 2023. After all preparations and approvals, Phoenix University formally took in its first set of students on 7th October, 2024. ",
      "Senator (Dr.) Abdullahi Adamu is the Visitor to the University as well as the Chairman of its Board of Trustees.",
      "Senator (Dr.) Abdullahi Adamu holds the national honour of Commander of the Order of the Niger (CON) and also the prestigious traditional title of Turakin Keffi. Has been awarded the Honourary Doctorate Degrees of the Rivers State University of Science and Technology, Port-Harcourt; Federal University of Technology Akure; Federal University of Port Harcourt and the Nnamdi Azikiwe University, Awka.",
      "A well-rounded man, Alhaji Abdullahi Adamu, Lawyer, Engineer, Technocrat, Farmer and consummate politician is married and has six children."
  ]
?>

<section class="w3l-grids-3 py-5" id="about">
  <div class="container py-md-5">
    <div class="row bottom-ab-grids align-items-top">
      <div class="col-lg-7 bottom-ab-left pr-lg-5">
        <h6 class="sub-title">About</h6>
        <h3 class="hny-title">CITATION OF SENATOR (DR.) ABDULLAHI ADAMU, CON (Founder)</h3>
        @foreach ($contents as $index => $c)
            <p class="my-3 pr-lg-4 aboutTextarea {{ $index >= 3 ? 'extra-content d-none' : '' }}">
                {{ $c }}
            </p>
        @endforeach
        <button id="readMoreBtn" class="btn btn-primary mt-2">Continue</button>
      </div>
      <div class="col-lg-5 bottom-ab-right mt-lg-0 mt-5">
        <img src="{{ asset('nagari/founder.png') }}" class="img-curve img-fluid" alt="" />
      </div>

    </div>
  </div>
</section>

@include("components.Team")