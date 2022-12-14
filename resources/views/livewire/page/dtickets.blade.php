<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1">
  <div class="pc pc1 w0 h0">
    <?php if (json_decode($dummy[0]->depart_info)->stops === 'Direct'): ?>
      <img class="bi x0 y0 w1 h1" alt="" src="{{asset('flight/dticket1.png')}}"/>
      <?php else: ?>
      <img class="bi x0 y0 w1 h1" alt="" src="{{asset('flight/dticket11.png')}}"/>
    <?php endif; ?>
    <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Booking Reference</div>
    <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">{{$dummy[0]->booking_ref}}</div>
    <div class="t m0 x3 h3 y3 ff2 fs1 fc1 sc0 ls0 ws0">Order Details</div>
    <div class="t m0 x4 h2 y4 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x5 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">Your</div>
    <div class="t m0 x6 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x7 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">Booking</div>
    <div class="t m0 x8 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x9 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">has</div>
    <div class="t m0 xa h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 xb h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">been</div>
    <div class="t m0 xc h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 xd h4 y5 ff3 fs0 fc2 sc0 ls0 ws0">confirmed</div>
    <div class="t m0 xe h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 xf h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">for</div>
    <div class="t m0 x10 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x11 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">GDS</div>
    <div class="t m0 x12 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x13 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">PNR</div>
    <div class="t m0 x14 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x15 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">number</div>
    <div class="t m0 x16 h2 y4 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x17 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0">:</div>
    <div class="t m0 x18 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"> </div>
    <div class="t m0 x19 h5 y5 ff4 fs0 fc3 sc0 ls0 ws0">{{$dummy[0]->pnr_number}}</div>
    <div class="t m0 x1a h6 y7 ff2 fs2 fc0 sc0 ls0 ws0">T<span class="_ _0"></span>ravel Itinerary</div>
    <div class="t m0 x1b h3 y8 ff2 fs1 fc4 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->departureAirport->city}}</div>
    <div class="t m0 x1c h2 y9 ff1 fs0 fc1 sc0 ls0 ws0"> <span class="_ _1"> </span> </div>
    <div class="t m0 x1d h3 y8 ff2 fs1 fc4 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->arrivalAirport->city}}</div>
    <div class="t m0 x1e h2 ya ff1 fs0 fc5 sc0 ls0 ws0">T<span class="_ _2"></span>rip ID <span class="ff2 fc4">{{$dummy[0]->trip_id}}</span></div>
    <?php if (json_decode($dummy[0]->depart_info)->stops === 'Direct'): ?>
    <div class="t m0 x1f h2 yb ff1 fs0 fc4 sc0 ls0 ws0"> Departures</div>
    <div class="t m0 x20 h7 yc ff7 fs3 fc1 sc0 ls0 ws0">Flight<span class="_ _3"> </span>Departs<span class="_ _4"> </span>Arrives</div>
    <div class="t m0 x21 h7 yd ff7 fs3 fc1 sc0 ls0 ws0">T<span class="_ _5"></span>otal</div>
    <div class="t m0 x22 h7 ye ff7 fs3 fc1 sc0 ls0 ws0">Duration</div>
    <div class="t m0 x23 h8 yf ff8 fs4 fc1 sc0 ls0 ws0">Flight No</div>
    <img class="t m0 x3b h9 y14 ff9 fs4 fc1 sc0 ls0 ws0" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{json_decode($dummy[0]->depart_info)->careerCode}}" style="height:fit-content;width:230px;"/>
    <div class="t m0 x24 h9 y10 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->flight_name}}<span class="ffa">  </span></div>
    <div class="t m0 x24 h9 y11 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->cabinType}} Class</div>
    <div class="t m0 x25 h7 y12 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->departureAirport->city}}({{json_decode($dummy[0]->depart_info)->departureAirport->code}})</div>
    <div class="t m0 x25 h7 y13 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->depart_info)->departureAirport->time))}}</div>
    <div class="t m0 x25 h7 y14 ff9 fs3 fc1 sc0 ls0 ws0"  style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->depart_info)->departureAirport->label}}</div>
    <div class="t m0 x27 h7 y18 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->arrivalAirport->city}}({{json_decode($dummy[0]->depart_info)->arrivalAirport->code}})</div>
    <div class="t m0 x27 h7 y19 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->depart_info)->arrivalAirport->time))}}</div>
    <div class="t m0 x27 h7 y1b ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->depart_info)->arrivalAirport->label}}</div>
    <div class="t m0 x29 h7 y1e ff9 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->depart_info)->duration->text}}</div>
    <div class="t m0 x29 h7 y19 ff9 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->depart_info)->stops}}</div>
    <div class="t m0 x2a ha y10 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->flight_code}}</div>
    <div class="t m0 x2b h2 y1f ff1 fs0 fc4 sc0 ls0 ws0"> Arrival</div>
    <div class="t m0 x2c h7 y20 ff7 fs3 fc1 sc0 ls0 ws0">Flight<span class="_ _7"> </span>Departs<span class="_ _8"> </span>Arrives</div>
    <div class="t m0 x21 h7 y21 ff7 fs3 fc1 sc0 ls0 ws0">T<span class="_ _5"></span>otal</div>
    <div class="t m0 x22 h7 y22 ff7 fs3 fc1 sc0 ls0 ws0">Duration</div>
    <div class="t m0 x23 h9 y23 ffd fs4 fc1 sc0 ls0 ws0">Flight No</div>
    <img src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{json_decode($dummy[0]->arrive_info)->careerCode}}"  class="t m0 x3c h9 y2c ff9 fs4 fc1 sc0 ls0 ws0" style="height:fit-content;width:230px;"/>
    <div class="t m0 x2d h9 y27 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->flight_name}}<span class="ffa">  </span></div>
    <div class="t m0 x2d h9 y29 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->cabinType}} Class</div>
    <div class="t m0 x2e h7 y26 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->departureAirport->city}}({{json_decode($dummy[0]->arrive_info)->departureAirport->code}})</div>
    <div class="t m0 x2e h7 y27 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->arrive_info)->departureAirport->time))}}</div>
    <div class="t m0 x2e h7 y29 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->arrive_info)->departureAirport->label}}</div>
    <div class="t m0 x30 h7 y2b ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->city}}({{json_decode($dummy[0]->arrive_info)->arrivalAirport->code}})</div>
    <div class="t m0 x30 h7 y27 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->arrive_info)->arrivalAirport->time))}}</div>
    <div class="t m0 x30 h7 y29 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->label}}</div>
    <div class="t m0 x29 h7 y30 ff9 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->arrive_info)->duration->text}}</div>
    <div class="t m0 x29 h7 y27 ff9 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->arrive_info)->stops}}</div>
    <div class="t m0 x2a ha y31 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->flight_code}}</div>
  <?php else: ?>
    <div class="t m0 x1f h2 ybb ff1 fs0 fc4 sc0 ls0 ws0"> Departures</div>
    <div class="t m0 x20 h7 ycc ff7 fs3 fc1 sc0 ls0 ws0">Flight<span class="_ _3"> </span>Departs<span class="_ _4"> </span>Arrives</div>
    <div class="t m0 x211 h7 ycc ff7 fs3 fc1 sc0 ls0 ws0">Total Duration</div>
    <div class="t m0 x233 h8 ycc ff8 fs4 fc1 sc0 ls0 ws0">Flight No</div>

    <img class="t m0 x3b h9 yddd ff9 fs4 fc1 sc0 ls0 ws0" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{substr(json_decode($dummy[0]->depart_info)->path[0],0,2)}}" style="height:fit-content;width:230px;"/>
    <div class="t m0 x24 h9 y55 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->flight_name}}<span class="ffa">  </span></div>
    <div class="t m0 x24 h9 y555 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->cabinType}} Class</div>
    <div class="t m0 x25 h7 y55 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->departureAirport->city}}({{json_decode($dummy[0]->depart_info)->departureAirport->code}})</div>
    <div class="t m0 x25 h7 y555 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->depart_info)->departureAirport->time))}}</div>
    <div class="t m0 x25 h7 yddd ff9 fs3 fc1 sc0 ls0 ws0"  style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->depart_info)->departureAirport->label}}</div>
    <div class="t m0 x27 h7 y55 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->layover_depart)->country}}({{json_decode($dummy[0]->layover_depart)->iata}})</div>
    <?php foreach (json_decode($dummy[0]->depart_info)->stopSummary as $airport): ?>
      <div class="t m0 x27 h7 y555 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", ((strtotime(json_decode($dummy[0]->depart_info)->arrivalAirport->time) - ((json_decode($dummy[0]->depart_info)->duration->value-$airport->stopDuration)*60))-($airport->stopDuration*60)))}}</div>
      <div class="t m0 x111 h7 y12 ff9 fs3 fc1 sc0 ls0 ws0 fc4" style="inline-size: 630px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->layover_depart)->name}} ({{json_decode($dummy[0]->layover_depart)->iata}}) <?php echo floor($airport->stopDuration/60)." hr ".($airport->stopDuration%60)." min"; ?></div>
    <?php endforeach; ?>
    <div class="t m0 x27 h7 yddd ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->layover_depart)->name}}</div>
    <div class="t m0 x11 h7 y56 ff9 fs3 fc1 sc0 ls0 ws0">Layover:</div>


    <div class="t m0 x11 h7 y644 ff9 fs3 fc1 sc0 ls0 ws0">Layover:</div>
    <?php foreach (json_decode($dummy[0]->arrive_info)->stopSummary as $airport): ?>
      <div class="t m0 x111 h7 y655 ff9 fs3 fc1 sc0 ls0 ws0 fc4" style="inline-size: 630px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->layover_arrive)->name}} ({{json_decode($dummy[0]->layover_arrive)->iata}}) <?php echo floor($airport->stopDuration/60)." hr ".($airport->stopDuration%60)." min"; ?>
      </div>
      <div class="t m0 x211 h7 y55 ff9 fs3 fc1 sc0 ls0 ws0"><?php echo floor((((strtotime(json_decode($dummy[0]->depart_info)->arrivalAirport->time) - ((json_decode($dummy[0]->depart_info)->duration->value-$airport->stopDuration)*60))-($airport->stopDuration*60))-strtotime(json_decode($dummy[0]->depart_info)->departureAirport->time))/3600); ?> hr <?php echo floor((((strtotime(json_decode($dummy[0]->depart_info)->arrivalAirport->time) - ((json_decode($dummy[0]->depart_info)->duration->value-$airport->stopDuration)*60))-($airport->stopDuration*60))-strtotime(json_decode($dummy[0]->depart_info)->departureAirport->time))%3600); ?> min
      </div>
    <?php endforeach; ?>
    <div class="t m0 x233 ha y55 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->path[0]}}</div>
<!-- layover -->
    <img class="t m0 x3b h9 y16 ff9 fs4 fc1 sc0 ls0 ws0" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{substr(json_decode($dummy[0]->depart_info)->path[1],0,2)}}" style="height:fit-content;width:230px;"/>
    <div class="t m0 x24 h9 y14 ff9 fs4 fc1 sc0 ls0 ws0">{{ucwords(strtolower(json_decode($dummy[0]->layover_namedepart)->name))}}<span class="ffa">  </span></div>
    <div class="t m0 x24 h9 y15 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->cabinType}} Class</div>
    <div class="t m0 x25 h7 y14 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->layover_depart)->country}}({{json_decode($dummy[0]->layover_depart)->iata}})</div>
    <div class="t m0 x25 h7 y16 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->layover_depart)->name}}</div>
    <?php foreach (json_decode($dummy[0]->depart_info)->stopSummary as $airport): ?>
      <div class="t m0 x25 h7 y15 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->depart_info)->arrivalAirport->time) - ((json_decode($dummy[0]->depart_info)->duration->value-$airport->stopDuration)*60))}}</div>
    <?php endforeach; ?>
    <div class="t m0 x27 h7 y14 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->arrivalAirport->city}}({{json_decode($dummy[0]->depart_info)->arrivalAirport->code}})</div>
    <div class="t m0 x27 h7 y15 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->depart_info)->arrivalAirport->time))}}</div>
    <div class="t m0 x27 h7 y16 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->depart_info)->arrivalAirport->label}}</div>
    <?php foreach (json_decode($dummy[0]->depart_info)->stopSummary as $airport): ?>
      <div class="t m0 x211 h7 y14 ff9 fs3 fc1 sc0 ls0 ws0"><?php echo floor((json_decode($dummy[0]->depart_info)->duration->value-$airport->stopDuration)/60)." hr ".((json_decode($dummy[0]->depart_info)->duration->value-$airport->stopDuration)%60)." min"; ?></div>
    <?php endforeach; ?>
    <div class="t m0 x233 ha y14 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->depart_info)->path[1]}}</div>

    <div class="t m0 x2b h2 y1ff ff1 fs0 fc4 sc0 ls0 ws0"> Arrival</div>
    <div class="t m0 x2c h7 y200 ff7 fs3 fc1 sc0 ls0 ws0">Flight<span class="_ _7"> </span>Departs<span class="_ _8"> </span>Arrives</div>
    <div class="t m0 x211 h7 y200 ff7 fs3 fc1 sc0 ls0 ws0">TotalDuration</div>
    <div class="t m0 x233 h9 y200 ffd fs4 fc1 sc0 ls0 ws0">Flight No</div>

    <img src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{substr(json_decode($dummy[0]->arrive_info)->path[0],0,2)}}"  class="t m0 x3b h9 y21 ff9 fs4 fc1 sc0 ls0 ws0" style="height:fit-content;width:230px;"/>
    <div class="t m0 x2d h9 y24 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->flight_name}}<span class="ffa">  </span></div>
    <div class="t m0 x2d h9 y25 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->cabinType}} Class</div>
    <div class="t m0 x2e h7 y24 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->departureAirport->city}}({{json_decode($dummy[0]->arrive_info)->departureAirport->code}})</div>
    <div class="t m0 x2e h7 y25 ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->arrive_info)->departureAirport->time))}}</div>
    <div class="t m0 x2e h7 y28 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->arrive_info)->departureAirport->label}}</div>
    <div class="t m0 x30 h7 y24 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->layover_arrive)->country}}({{json_decode($dummy[0]->layover_arrive)->iata}})</div>
    <?php foreach (json_decode($dummy[0]->arrive_info)->stopSummary as $airportt): ?>
      <div class="t m0 x30 h7 y25 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{date("d M - H:i", ((strtotime(json_decode($dummy[0]->arrive_info)->arrivalAirport->time) - ((json_decode($dummy[0]->arrive_info)->duration->value-$airport->stopDuration)*60))-($airport->stopDuration*60)))}}</div>
      <div class="t m0 x211 h7 y24 ff9 fs3 fc1 sc0 ls0 ws0"><?php echo floor((((strtotime(json_decode($dummy[0]->arrive_info)->arrivalAirport->time) - ((json_decode($dummy[0]->arrive_info)->duration->value-$airport->stopDuration)*60))-($airport->stopDuration*60))-strtotime(json_decode($dummy[0]->arrive_info)->departureAirport->time))/3600); ?> hr <?php echo floor((((strtotime(json_decode($dummy[0]->arrive_info)->arrivalAirport->time) - ((json_decode($dummy[0]->arrive_info)->duration->value-$airport->stopDuration)*60))-($airport->stopDuration*60))-strtotime(json_decode($dummy[0]->arrive_info)->departureAirport->time))%3600); ?> min</div>
    <?php endforeach; ?>
    <div class="t m0 x30 h7 y28 ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->layover_arrive)->name}}</div>
    <div class="t m0 x233 ha y24 ffa fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->path[0]}}</div>

    <!-- Layover -->

    <img  class="t m0 x3b h9 y2c ff9 fs4 fc1 sc0 ls0 ws0" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{substr(json_decode($dummy[0]->arrive_info)->path[1],0,2)}}" style="height:fit-content;width:230px;"/>
    <div class="t m0 x2d h9 y29 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->flight_name}}<span class="ffa">  </span></div>
    <div class="t m0 x2d h9 y2a ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->cabinType}} Class</div>
    <div class="t m0 x2e h7 y29 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->layover_arrive)->country}}({{json_decode($dummy[0]->layover_arrive)->iata}})</div>

    <?php foreach (json_decode($dummy[0]->arrive_info)->stopSummary as $airport): ?>
      <div class="t m0 x2e h7 y2a ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->arrive_info)->arrivalAirport->time) - ((json_decode($dummy[0]->arrive_info)->duration->value-$airport->stopDuration)*60))}}</div>
    <?php endforeach; ?>
    <div class="t m0 x2e h7 y2c ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->layover_arrive)->name}}</div>
    <div class="t m0 x30 h7 y29 ff9 fs3 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->city}}({{json_decode($dummy[0]->arrive_info)->arrivalAirport->code}})</div>
    <div class="t m0 x30 h7 y2a ff9 fs3 fc1 sc0 ls0 ws0">{{date("d M - H:i", strtotime(json_decode($dummy[0]->arrive_info)->arrivalAirport->time))}}</div>
    <div class="t m0 x30 h7 y2c ff9 fs3 fc1 sc0 ls0 ws0" style="inline-size: 500px;overflow-wrap: break-word;white-space: break-spaces;">{{json_decode($dummy[0]->arrive_info)->arrivalAirport->label}}</div>
    <?php foreach (json_decode($dummy[0]->arrive_info)->stopSummary as $airport): ?>
      <div class="t m0 x211 h7 y29 ff9 fs3 fc1 sc0 ls0 ws0"><?php echo floor((json_decode($dummy[0]->arrive_info)->duration->value-$airport->stopDuration)/60)." hr ".((json_decode($dummy[0]->arrive_info)->duration->value-$airport->stopDuration)%60)." min"; ?></div>
    <?php endforeach; ?>
    <div class="t m0 x211 h7 y2a ff9 fs3 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;{{json_decode($dummy[0]->arrive_info)->stops}}</div>
    <div class="t m0 x233 ha y29 ff9 fs4 fc1 sc0 ls0 ws0">{{json_decode($dummy[0]->arrive_info)->path[1]}}</div>
<?php endif; ?>
    <div class="t m0 x32 h3 y32 ff2 fs1 fc4 sc0 ls0 ws0"> Passenger Details</div>
    <?php if (json_decode($dummy[0])->fullname[0] ?? null): ?><div class="t m0 x33 hb y33 ff9 fs5 fc4 sc0 ls0 ws0">1. {{json_decode($dummy[0])->fullname[0]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[1] ?? null): ?><div class="t m0 x33 hc y34 ff9 fs5 fc4 sc0 ls0 ws0">2. {{json_decode($dummy[0])->fullname[1]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[2] ?? null): ?><div class="t m0 x33 hc y36 ff9 fs5 fc4 sc0 ls0 ws0">3. {{json_decode($dummy[0])->fullname[2]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[3] ?? null): ?><div class="t m0 x33 hb y38 ff9 fs5 fc4 sc0 ls0 ws0">4. {{json_decode($dummy[0])->fullname[3]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[4] ?? null): ?><div class="t m0 x37 hc y41 ff9 fs5 fc4 sc0 ls0 ws0">5. {{json_decode($dummy[0])->fullname[4]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[5] ?? null): ?><div class="t m0 x37 hc y43 ff9 fs5 fc4 sc0 ls0 ws0">6. {{json_decode($dummy[0])->fullname[5]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[6] ?? null): ?><div class="t m0 x35 hc y39 ff9 fs5 fc4 sc0 ls0 ws0">7. {{json_decode($dummy[0])->fullname[6]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[7] ?? null): ?><div class="t m0 x35 hc y3b ff9 fs5 fc4 sc0 ls0 ws0">8. {{json_decode($dummy[0])->fullname[7]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[8] ?? null): ?><div class="t m0 x35 hc y3d ff9 fs5 fc4 sc0 ls0 ws0">9. {{json_decode($dummy[0])->fullname[8]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[9] ?? null): ?><div class="t m0 x35 hc y3f ff9 fs5 fc4 sc0 ls0 ws0">10. {{json_decode($dummy[0])->fullname[9]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[10] ?? null): ?><div class="t m0 x39 hc y45 ff9 fs5 fc4 sc0 ls0 ws0">11. {{json_decode($dummy[0])->fullname[10]}}</div><?php endif; ?>
    <?php if (json_decode($dummy[0])->fullname[11] ?? null): ?><div class="t m0 x39 hb y47 ff9 fs5 fc4 sc0 ls0 ws0">12. {{json_decode($dummy[0])->fullname[11]}}</div><?php endif; ?>
  </div>
  <div class="pi" data-data='{"ctm":[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}'></div>
</div>
<div id="pf2" class="pf w0 h0" data-page-no="2">
  <div class="pc pc2 w0 h0">
    <img class="bi x0 y0 w1 h1" alt="" src="{{asset('flight/dticket2.png')}}"/>
    <div class="t m0 x3a h3 y48 ff2 fs1 fc4 sc0 ls0 ws0"> Far<span class="_ _2"></span>e Details</div>
    <div class="t m0 x3b hd y49 ff9 fs6 fc5 sc0 ls0 ws0">{{json_decode($dummy[0]->general_info)->adult}} Adult,{{json_decode($dummy[0]->general_info)->child}} Child,{{json_decode($dummy[0]->general_info)->infant}} Infant ({{json_decode($dummy[0]->depart_info)->departureAirport->code}} &gt; {{json_decode($dummy[0]->depart_info)->arrivalAirport->code}})</div>
    <div class="t m0 x3b hd y4b ff9 fs6 fc5 sc0 ls0 ws0">Base Fare</div>
    <div class="t m0 x3d hd y4c ff9 fs6 fc5 sc0 ls0 ws0">AED</div>
    <div class="t m0 x3e hd y4d ff9 fs6 fc5 sc0 ls0 ws0"> {{number_format(json_decode($dummy[0]->depart_info)->totals->base + json_decode($dummy[0]->arrive_info)->totals->base)}}.00</div>
    <div class="t m0 x3b hd y4e ff9 fs6 fc5 sc0 ls0 ws0">T</div>
    <div class="t m0 x3c hd y4f ff9 fs6 fc5 sc0 ls0 ws0">axes(+)</div>
    <div class="t m0 x3f hd y4e ff9 fs6 fc5 sc0 ls0 ws0">AED</div>
    <div class="t m0 x40 hd y50 ff9 fs6 fc5 sc0 ls0 ws0"> {{number_format(json_decode($dummy[0]->depart_info)->totals->tax + json_decode($dummy[0]->arrive_info)->totals->tax,2)}}</div>
    <div class="t m0 x3b hd y51 ff9 fs6 fc5 sc0 ls0 ws0">Service Charge(+)</div>
    <div class="t m0 x2 hd y52 ff9 fs6 fc5 sc0 ls0 ws0">AED 10.00</div>
    <div class="t m0 x3b hd y53 ff9 fs6 fc5 sc0 ls0 ws0">Discount Price(-)</div>
    <div class="t m0 x2 hd y54 ff9 fs6 fc5 sc0 ls0 ws0">AED {{number_format(json_decode($dummy[0]->depart_info)->totals->total + json_decode($dummy[0]->arrive_info)->totals->total + 10)}}.00</div>
    <div class="t m0 x42 he y55 ff1 fs7 fc1 sc0 ls0 ws0">*<span class="_"> </span>T<span class="_ _9"></span><span class="fs0">otal Price in roundup value.</span></div>
    <div class="t m0 x3a h3 y56 ff2 fs1 fc4 sc0 ls0 ws0"> T<span class="_ _0"></span>erms &amp; Conditions</div>
    <div class="t m0 x43 h2 y57 ff1 fs0 fc1 sc0 ls0 ws0">T<span class="_ _9"></span>erms &amp; Conditions.</div>
    <div class="t m0 x3b h2 y58 ff1 fs0 fc1 sc0 ls0 ws0">1</div>
    <div class="t m0 x44 he y59 ff1 fs7 fc1 sc0 ls0 ws0">.<span class="_"> </span><span class="fs0">Please read the following terms and conditions.Check-in counters open 3 hours prior to departure of</span></div>
    <div class="t m0 x45 h2 y5a ff1 fs0 fc1 sc0 ls0 ws0">flight and close 1 hour prior to departure of flight,you may be denied boarding if you fail to report on</div>
    <div class="t m0 x45 h2 y5b ff1 fs0 fc1 sc0 ls0 ws0">time.</div>
    <div class="t m0 x46 he y5c ff1 fs0 fc1 sc0 ls0 ws0">2<span class="fs7">.<span class="_"> </span></span>Please Re-check the passenger name(s) as per the passport/identity proof, departure, arrival date,time,</div>
    <div class="t m0 x47 h2 y5d ff1 fs0 fc1 sc0 ls0 ws0">flight number<span class="_ _5"></span>, terminal, baggage details etc.</div>
    <div class="t m0 x46 h2 y5e ff1 fs0 fc1 sc0 ls0 ws0">3</div>
    <div class="t m0 x48 he y5f ff1 fs7 fc1 sc0 ls0 ws0">.<span class="_"> </span><span class="fs0">In case of International travel, please check your requirements for travel documentation like valid</span></div>
    <div class="t m0 x47 h2 y60 ff1 fs0 fc1 sc0 ls0 ws0">Passport/visa/Ok to Board/travel and medical insurance with the airline and relevant Embassy or</div>
    <div class="t m0 x47 h2 y61 ff1 fs0 fc1 sc0 ls0 ws0">Consulate before commencing your journey<span class="_ _5"></span>.</div>
    <div class="t m0 x46 h2 y62 ff1 fs0 fc1 sc0 ls0 ws0">4</div>
    <div class="t m0 x48 he y63 ff1 fs7 fc1 sc0 ls0 ws0">.<span class="_"> </span><span class="fs0">The local authorities in certain countries may impose additional taxes (V<span class="_ _0"></span>A<span class="_ _9"></span>T<span class="_ _9"></span>, tourist tax etc.), which</span></div>
    <div class="t m0 x47 h2 y64 ff1 fs0 fc1 sc0 ls0 ws0">generally has to be paid locally<span class="_ _5"></span>.</div>
    <div class="t m0 x46 h2 y65 ff1 fs0 fc1 sc0 ls0 ws0">5</div>
    <div class="t m0 x48 he y66 ff1 fs7 fc1 sc0 ls0 ws0">.</div>
    <div class="t m0 x47 h2 y67 ff1 fs0 fc1 sc0 ls0 ws0">W<span class="_ _9"></span>e are not responsible for any schedule change/flight cancellation by the airline before and after</div>
    <div class="t m0 x47 h2 y68 ff1 fs0 fc1 sc0 ls0 ws0">issuance of the tickets.</div>
    <div class="t m0 x46 h2 y69 ff1 fs0 fc1 sc0 ls0 ws0">6</div>
    <div class="t m0 x48 he y6a ff1 fs7 fc1 sc0 ls0 ws0">.<span class="_"> </span><span class="fs0">W<span class="_ _9"></span>e will not be held responsible for any loss or damage to traveler<span class="_ _f"></span>???<span class="_ _5"></span>s and his/her belongings due to any</span></div>
    <div class="t m0 x47 h2 y6b ff1 fs0 fc1 sc0 ls0 ws0">accident, theft or other Mishap / Unforeseen circumstances)</div>
    <div class="t m0 x46 h2 y6c ff1 fs0 fc1 sc0 ls0 ws0">7</div>
    <div class="t m0 x48 he y6d ff1 fs7 fc1 sc0 ls0 ws0">.</div>
    <div class="t m0 x47 h2 y6e ff1 fs0 fc1 sc0 ls0 ws0">Any amendments of the booking will be as per the airline terms and conditions comprising of</div>
    <div class="t m0 x47 h2 y6f ff1 fs0 fc1 sc0 ls0 ws0">penalties, fare difference which may change upon subject to availability by the airline.</div>
    <div class="t m0 x46 h2 y70 ff1 fs0 fc1 sc0 ls0 ws0">8</div>
    <div class="t m0 x48 he y71 ff1 fs7 fc1 sc0 ls0 ws0">.<span class="_"> </span><span class="fs0">Any Cancellation/Refund of booking will be handled from case to case basis depending on the airline</span></div>
    <div class="t m0 x47 h2 y72 ff1 fs0 fc1 sc0 ls0 ws0">and agency terms and conditions.</div>
    <div class="t m0 x46 h2 y73 ff1 fs0 fc1 sc0 ls0 ws0">9</div>
    <div class="t m0 x48 he y74 ff1 fs7 fc1 sc0 ls0 ws0">.</div>
    <div class="t m0 x47 h2 y75 ff1 fs0 fc1 sc0 ls0 ws0">For any amendments, cancellation or ancillary services etc, you may connect with the agency from</div>
    <div class="t m0 x47 h2 y76 ff1 fs0 fc1 sc0 ls0 ws0">where you had issued the tickets.</div>
  </div>
  <div class="pi" data-data='{"ctm":[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}'></div>
</div>
</div>
<div class="loading-indicator">
<img alt="" src="data:image/png;base64,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"/>
</div>
</body>
