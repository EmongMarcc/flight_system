
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{asset('flight/download.png')}}"/><div class="c x1 y1 w2 h2"><div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Booking Reference</div><div class="t m0 x3 h4 y3 ff2 fs1 fc1 sc0 ls0 ws0">Order Details</div><div class="t m0 x3 h3 y4 ff1 fs0 fc1 sc0 ls0 ws0"> </div>
<div class="t m0 x3 h3 y5 ff1 fs0 fc1 sc0 ls0 ws0"> </div>
<div class="t m0 x4 h5 y6 ff2 fs2 fc0 sc0 ls0 ws0">T<span class="_ _0"></span>ravel Itinerary</div>
<div class="t m0 x4 h3 y7 ff1 fs0 fc1 sc0 ls0 ws0"> </div>
<div class="t m0 x5 h3 y8 ff1 fs0 fc1 sc0 ls0 ws0">  </div>
<div class="t m0 x6 h4 y9 ff2 fs1 fc2 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->departureAirport->city}}</div>
<div class="t m0 x7 h3 y8 ff1 fs0 fc1 sc0 ls0 ws0"> <span class="_ _1"> </span> </div>
<div class="t m0 x8 h4 y9 ff2 fs1 fc2 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->arrivalAirport->city}}</div>
<div class="t m0 x9 h3 ya ff1 fs0 fc3 sc0 ls0 ws0">T<span class="_ _2"></span>rip ID <span class="ff2 fc2">{{$dummy[0]->trip_id}}</span>
</div><div class="t m0 xa h3 yb ff1 fs0 fc2 sc0 ls0 ws0"> Departures</div>
<div class="t m0 xb h6 yc ff3 fs3 fc1 sc0 ls0 ws0">Flight<span class="_ _3"> </span>Departs<span class="_ _4">
</span>Arrives</div>{{json_decode($dummy[0]->depart_info)->departureAirport->city}}
<div class="t m0 xc h6 yd ff3 fs3 fc1 sc0 ls0 ws0">T<span class="_ _5"></span>otal</div>
<div class="t m0 xd h6 ye ff3 fs3 fc1 sc0 ls0 ws0">Duration</div>
<div class="t m0 xe h6 yc ff3 fs3 fc1 sc0 ls0 ws0">Layover</div>
<img class="t m0 x14 y10 ff4 fs3 fc1 sc0 ls0 ws0" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{json_decode($dummy[0]->depart_info)->careerCode}}"  width="230px">
<div class="t m0 xf h7 yf ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->flight_name}}</div>
<div class="t m0 xf h7 y10 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->cabinType}} Class</div>

<div class="t m0 x10 h7 yf ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->departureAirport->city}}({{json_decode($dummy[0]->depart_info)->departureAirport->code}})</div>
<div class="t m0 x10 h7 y11 ff4 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->depart_info)->departureAirport->label}}</div>
<div class="t m0 x11 h7 yf ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->arrivalAirport->city}}({{json_decode($dummy[0]->depart_info)->arrivalAirport->code}})</div>
<div class="t m0 x11 h7 y10 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->arrivalAirport->time}}</div>
<div class="t m0 x11 h7 y11 ff4 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->depart_info)->arrivalAirport->label}}</div>
<div class="t m0 x12 h7 yf ff4 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->depart_info)->duration->text}}</div>
<div class="t m0 x12 h7 y10 ff4 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->depart_info)->stops}}</div>
<?php if (json_decode($dummy[0]->depart_info)->stops === "Direct"): ?>
<?php else: ?>
  <?php foreach (json_decode($dummy[0]->depart_info)->stopSummary as $stopSummary): ?>
    <div class="t m0 xlay h7 {{$dataplace[$j]}} ff4 fs3 fc1 sc0 ls0 ws0">{{$stopSummary->airport}} ({{json_decode($dummy[0]->depart_info)->path[$j]}})</div>
    <div class="t m0 xlay h7 {{$datatime[$j]}} ff4 fs3 fc1 sc0 ls0 ws0"><?php echo floor($stopSummary->stopDuration/60)." hr ".($stopSummary->stopDuration%60)." min"; ?> </div>
    <?php $j++; ?>
  <?php endforeach; ?>
<?php endif; ?>
<div class="t m0 xa h3 y14 ff1 fs0 fc2 sc0 ls0 ws0"> <span class="_ _5"></span>Arrival</div>
<div class="t m0 xb h6 y15 ff3 fs3 fc1 sc0 ls0 ws0">Flight<span class="_ _8">
</span>Departs<span class="_ _9"> </span>Arrives</div>
<div class="t m0 xc h6 y16 ff3 fs3 fc1 sc0 ls0 ws0">T<span class="_ _5"></span>otal</div>
<div class="t m0 xd h6 y17 ff3 fs3 fc1 sc0 ls0 ws0">Duration</div>
<div class="t m0 xe h6 y15 ff3 fs3 fc1 sc0 ls0 ws0">Layover</div>
<img class="t m0 x14 y19 ff4 fs3 fc1 sc0 ls0 ws0" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{json_decode($dummy[0]->arrive_info)->careerCode}}" width="230px">
<div class="t m0 xf h7 y18 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->flight_name}}</div>
<div class="t m0 xf h7 y19 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->cabinType}} Class</div>

<div class="t m0 h7 y1a ff4 fs3 fc1 sc0 ls0 ws0 x10" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->arrive_info)->departureAirport->label}}</div>
<div class="t m0 x11 h7 y18 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->city}}({{json_decode($dummy[0]->arrive_info)->arrivalAirport->code}})</div>
<div class="t m0 x11 h7 y19 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->time}}</div>
<div class="t m0 x11 h7 y1a ff4 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->label}}</div>
<div class="t m0 x12 h7 y18 ff4 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->arrive_info)->duration->text}}</div>
<div class="t m0 x12 h7 y19 ff4 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->arrive_info)->stops}}</div>
<?php if (json_decode($dummy[0]->arrive_info)->stops === "Direct"): ?>
<?php else: ?>
  <?php foreach (json_decode($dummy[0]->arrive_info)->stopSummary as $stopSummary): ?>
    <div class="t m0 xlay h7 {{$dataplacea[$p]}} ff4 fs3 fc1 sc0 ls0 ws0">{{$stopSummary->airport}} ({{json_decode($dummy[0]->arrive_info)->path[$p]}})</div>
    <div class="t m0 xlay h7 {{$datatimea[$p]}} ff4 fs3 fc1 sc0 ls0 ws0"><?php echo floor($stopSummary->stopDuration/60)." hr ".($stopSummary->stopDuration%60)." min"; ?> </div>
    <?php $p++; ?>
  <?php endforeach; ?>
<?php endif; ?>
<div class="t m0 x3 h3 y1e ff1 fs0 fc1 sc0 ls0 ws0"> </div>
<div class="t m0 xa h4 y1f ff2 fs1 fc2 sc0 ls0 ws0">  Passenger Details</div>
<div class="t m0 x13 h3 y20 ff1 fs0 fc1 sc0 ls0 ws0"> </div>
<div class="t m0 x14 h8 y21 ff2 fs4 fc2 sc0 ls0 ws0"> </div>
<div class="t m0 x15 h3 y22 ff1 fs0 fc2 sc0 ls0 ws0">  Departures</div>
</div>
<div class="t m0 x16 h7 y23 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->departureAirport->time}} </div>
<div class="t m0 x16 h7 y24 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->departureAirport->city}}({{json_decode($dummy[0]->arrive_info)->departureAirport->code}})</div>
<div class="t m0 x16 h7 y25 ff4 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->departureAirport->time}}</div>
<div class="t m0 xe h3 y26 ff1 fs5 fc4 sc0 ls0 ws0">{{$dummy[0]->booking_ref}}</div>
<div class="t m0 x18 h3 y27 ff1 fs5 fc5 sc0 ls0 ws0">Y<span class="_ _5"></span>our<span class="_ _6"></span> Booking ha<span class="_ _5"></span>s<span class="_ _2"></span> be<span class="_ _2"></span>e<span class="_ _2"></span>n confirmed f<span class="_ _6"></span>or<span class="_ _6"></span> GDS PNR<span class="_ _2"></span> num<span class="_ _2"></span>ber<span class="_ _6"></span>:<span class="_ _2"></span> {{$dummy[0]->pnr_number}} </div>
<?php if (json_decode($dummy[0])->fullname[0] ?? null): ?><div class="t m0 x19 y28 ff5 fs6 fc6 sc0 ls0 ws0" >1. {{json_decode($dummy[0])->fullname[0]}}<?php if (json_decode($dummy[0])->fullname[2]?? null): ?><br/>3.{{json_decode($dummy[0])->fullname[2]}}<?php endif; ?></div><?php endif; ?>
<?php if (json_decode($dummy[0])->fullname[1] ?? null): ?><div class="t m0 x11 y28 ff5 fs6 fc6 sc0 ls0 ws0" >2. {{json_decode($dummy[0])->fullname[1]}}<?php if (json_decode($dummy[0])->fullname[3] ?? null): ?><br/>4.{{json_decode($dummy[0])->fullname[3]}}<?php endif; ?></div><?php endif; ?>
</div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
</div>
<div id="pf2" class="pf w0 h0" data-page-no="2">
  <div class="pc pc2 w0 h0">
    <img class="bi x0 y0 w1 h1" alt="" src="{{asset('flight/download2.png')}}"/>
    <div class="c x1 y1 w2 h2">
    <div class="t m0 x1a ha y2c ff1 fs7 fc7 sc0 ls0 ws0">Flight</div><div class="t m0 x1b ha y2d ff1 fs7 fc7 sc0 ls0 ws0">number</div>
    <div class="t m0 x1c ha y2e ff1 fs7 fc7 sc0 ls0 ws0">Sector<span class="_ _d"> </span>Date<span class="_ _c"> </span>Class</div>
    <div class="t m0 x1d hb y2f ff1 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->flight_code}}<span class="_ _e"> </span>{{json_decode($dummy[0]->depart_info)->departureAirport->code}} - {{json_decode($dummy[0]->depart_info)->arrivalAirport->code}}<span class="_ _f"> </span>{{json_decode($dummy[0]->depart_info)->cabinType}}</div>
    <div class="t m0 x1e hb y30 ff1 fs3 fc1 sc0 ls0 ws0">Class</div>
    <div class="t m0 x1f hc y31 ff2 fs0 fc1 sc0 ls0 ws0">BAGGAGE</div>
    <div class="t m0 x13 hc y32 ff2 fs0 fc1 sc0 ls0 ws0">DET<span class="_ _6"></span>AILS</div>
    <div class="t m0 x20 hb y33 ff1 fs3 fc1 sc0 ls0 ws0">Cabin</div>
    <div class="t m0 x20 hb y34 ff1 fs3 fc8 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->baggage->cabin->text}}</div>
    <div class="t m0 x21 hb y33 ff1 fs3 fc1 sc0 ls0 ws0">Check In</div>
    <div class="t m0 x21 hb y34 ff1 fs3 fc8 sc0 ls0 ws0">0P</div>
    <div class="t m0 x15 h3 y35 ff1 fs0 fc2 sc0 ls0 ws0">  <span class="_ _5"></span>Arrival</div>
    <div class="t m0 x1a ha y36 ff1 fs7 fc7 sc0 ls0 ws0">Flight</div><div class="t m0 x1b ha y37 ff1 fs7 fc7 sc0 ls0 ws0">number</div>
    <div class="t m0 x1c ha y38 ff1 fs7 fc7 sc0 ls0 ws0">Sector<span class="_ _10"> </span>Date<span class="_ _11"> </span>Class<span class="_ _12"> </span>Meal<span class="_ _13"> </span>Seat</div>
    <div class="t m0 x1d hb y39 ff1 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->flight_code}}<span class="_ _e"> </span>{{json_decode($dummy[0]->arrive_info)->departureAirport->code}} - {{json_decode($dummy[0]->arrive_info)->arrivalAirport->code}}<span class="_ _f"> </span>{{json_decode($dummy[0]->arrive_info)->cabinType}}</div>
    <div class="t m0 x1e hb y3a ff1 fs3 fc1 sc0 ls0 ws0">Class</div>
    <div class="t m0 x1f hc y3b ff2 fs0 fc1 sc0 ls0 ws0">BAGGAGE</div>
    <div class="t m0 x13 hc y3c ff2 fs0 fc1 sc0 ls0 ws0">DET<span class="_ _6"></span>AILS</div>
    <div class="t m0 x20 hb y3d ff1 fs3 fc1 sc0 ls0 ws0">Cabin</div>
    <div class="t m0 x20 hb y3e ff1 fs3 fc8 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->baggage->cabin->text}}</div>
    <div class="t m0 x21 hb y3d ff1 fs3 fc1 sc0 ls0 ws0">Check In</div>
    <div class="t m0 x21 hb y3e ff1 fs3 fc8 sc0 ls0 ws0">0P</div>
    <div class="t m0 x3 h3 y3f ff1 fs0 fc1 sc0 ls0 ws0"> </div>
    <div class="t m0 xa h4 y40 ff2 fs1 fc2 sc0 ls0 ws0"> Far<span class="_ _2"></span>e Details</div>
    <div class="t m0 x1f hd y41 ff1 fs8 fc3 sc0 ls0 ws0">{{json_decode($dummy[0]->general_info)->adult}} Adult,{{json_decode($dummy[0]->general_info)->child}} Child,{{json_decode($dummy[0]->general_info)->infant}} Infant ({{json_decode($dummy[0]->depart_info)->departureAirport->code}} &gt; {{json_decode($dummy[0]->depart_info)->arrivalAirport->code}})</div>
    <div class="t m0 x1f hd y42 ff1 fs8 fc3 sc0 ls0 ws0">Base Fare<span class="_ _15"> </span>AED {{number_format(json_decode($dummy[0]->depart_info)->totals->base + json_decode($dummy[0]->arrive_info)->totals->base,2)}} </div>
    <div class="t m0 x1f hd y43 ff1 fs8 fc3 sc0 ls0 ws0">T<span class="_ _5"></span>axes(+)<span class="_ _16"> </span>AED {{number_format(json_decode($dummy[0]->depart_info)->totals->tax + json_decode($dummy[0]->arrive_info)->totals->tax,2)}}</div>
    <div class="t m0 x1f hd y44 ff1 fs8 fc3 sc0 ls0 ws0">Service Charge(+)<span class="_ _17"> </span>AED 10.00</div>
    <div class="t m0 x1f hd y45 ff1 fs8 fc3 sc0 ls0 ws0">Total<span class="_ _18"> </span>AED {{number_format(json_decode($dummy[0]->depart_info)->totals->total + json_decode($dummy[0]->arrive_info)->totals->total + 10,2)}}</div>
    <div class="t m0 x22 h3 y46 ff1 fs0 fc1 sc0 ls0 ws0">* T<span class="_ _6"></span>otal Price in roundup value.</div>
    <div class="t m0 xa h4 y47 ff2 fs1 fc2 sc0 ls0 ws0"> T<span class="_ _0"></span>erms &amp; Conditions</div>
    <div class="t m0 x23 h3 y48 ff1 fs0 fc1 sc0 ls0 ws0">T<span class="_ _6"></span>erms &amp; Conditions.</div>
  </div>
  <div class="t m0 x16 hb y49 ff1 fs3 fc1 sc0 ls0 ws0"><?php echo substr(json_decode($dummy[0]->depart_info)->departureAirport->time, 0, 10) ?></div>
  <div class="t m0 x16 hb y4a ff1 fs3 fc1 sc0 ls0 ws0"><?php echo substr(json_decode($dummy[0]->arrive_info)->departureAirport->time, 0, 10) ?></div>
</div>
<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
</div>
<div id="pf3" class="pf w0 h0" data-page-no="3"><div class="pc pc3 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{asset('flight/download3.png')}}"/><div class="c x1 y4b w2 he"><div class="t m0 x1f h3 y4c ff1 fs0 fc1 sc0 ls0 ws0">1. Please read the following terms and conditions.Check-in counters open 3 hours prior to departure of flight</div><div class="t m0 x14 h3 y4d ff1 fs0 fc1 sc0 ls0 ws0">and close 1 hour prior to departure of flight,you may be denied boarding if you fail to report on time.</div><div class="t m0 x1f h3 y4e ff1 fs0 fc1 sc0 ls0 ws0">2. Please Re-check the passenger name(s) as per the passport/identity proof, departure, arrival date,time,</div><div class="t m0 x14 h3 y4f ff1 fs0 fc1 sc0 ls0 ws0">flight number<span class="_ _5"></span>, terminal, baggage details etc.</div><div class="t m0 x1f h3 y50 ff1 fs0 fc1 sc0 ls0 ws0">3. In case of International travel, please check your requirements for travel documentation like valid</div><div class="t m0 x14 h3 y51 ff1 fs0 fc1 sc0 ls0 ws0">Passport/visa/Ok to Board/travel and medical insurance with the airline and relevant Embassy or</div><div class="t m0 x14 h3 y52 ff1 fs0 fc1 sc0 ls0 ws0">Consulate before commencing your journey<span class="_ _5"></span>.</div><div class="t m0 x1f h3 y53 ff1 fs0 fc1 sc0 ls0 ws0">4. The local authorities in certain countries may impose additional taxes (V<span class="_ _0"></span>A<span class="_ _6"></span>T<span class="_ _6"></span>, tourist tax etc.), which</div><div class="t m0 x14 h3 y54 ff1 fs0 fc1 sc0 ls0 ws0">generally has to be paid locally<span class="_ _5"></span>.</div><div class="t m0 x1f h3 y55 ff1 fs0 fc1 sc0 ls0 ws0">5. W<span class="_ _6"></span>e are not responsible for any schedule change/flight cancellation by the airline before and after issuance</div><div class="t m0 x14 h3 y56 ff1 fs0 fc1 sc0 ls0 ws0">of the tickets.</div><div class="t m0 x1f h3 y57 ff1 fs0 fc1 sc0 ls0 ws0">6. W<span class="_ _6"></span>e will not be held responsible for any loss or damage to traveler<span class="_ _19"></span>’<span class="_ _5"></span>s and his/her belongings due to any</div><div class="t m0 x14 h3 y58 ff1 fs0 fc1 sc0 ls0 ws0">accident, theft or other Mishap / Unforeseen circumstances)</div><div class="t m0 x1f h3 y59 ff1 fs0 fc1 sc0 ls0 ws0">7. Any amendments of the booking will be as per the airline terms and conditions comprising of penalties,</div><div class="t m0 x14 h3 y5a ff1 fs0 fc1 sc0 ls0 ws0">fare difference which may change upon subject to availability by the airline.</div><div class="t m0 x1f h3 y5b ff1 fs0 fc1 sc0 ls0 ws0">8. Any Cancellation/Refund of booking will be handled from case to case basis depending on the airline and</div><div class="t m0 x14 h3 y5c ff1 fs0 fc1 sc0 ls0 ws0">agency terms and conditions.</div><div class="t m0 x1f h3 y5d ff1 fs0 fc1 sc0 ls0 ws0">9. For any amendments, cancellation or ancillary services etc, you may connect with the agency from where</div><div class="t m0 x14 h3 y5e ff1 fs0 fc1 sc0 ls0 ws0">you had issued the tickets.</div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
</body>
