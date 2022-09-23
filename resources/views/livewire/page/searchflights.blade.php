<div>
  <div class="w-full">
    <div class="p-2">
          <div class="bg-white border border-gray-300 gap-6 grid grid-cols-1 p-6 rounded-lg shadow-lg">
            <div class="gap-1 grid grid-cols-2">
              <a href="{{url('/samptickets')}}" target="_blank" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full duration-300 hover:bg-blue-700 focus:outline-none focus:shadow-outline text-center">Ticket List</a>
              <a href="{{url('/oneway')}}" target="_blank" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full duration-300 hover:bg-blue-700 focus:outline-none focus:shadow-outline text-center">One Way</a>
            </div>
            <div class="font-mono">
		<!-- Container -->
		<div>
			<div class="flex justify-center">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
					></div>
					<!-- Col -->

					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Generate Flight Ticket!</h3>

            <p class="text-green-500">{{json_encode($layover_namearrive ?? [])}}</p>
						<div class="px-8 pt-6 pb-8 mb-1 bg-white rounded">
							<div class="mb-1 md:flex md:justify-between">
								<div class="mb-1 md:mr-2 md:mb-0 w-full">
									<label class="block mb-1 text-sm font-bold text-gray-700" for="Pnr">
										Pnr Number
									</label>
									<input style="<?php if ($pnr_number): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-2 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="Pnr" type="text" wire:model="pnr_number"/>
								</div>
								<div class="md:ml-2 w-full">
									<label class="block mb-1 text-sm font-bold text-gray-700" for="Reference">
										Booking Reference
									</label>
									<input style="<?php if ($booking_ref): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" class="w-full border-2 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="Reference"type="text" wire:model="booking_ref"
									/>
								</div>
							</div>
              <div class="mb-1 md:flex md:justify-between">
                <div class="mb-1 md:mr-2 md:mb-0 w-full">

                    <label class="block mb-1 text-sm font-bold text-gray-700" for="Adult">
                      Number of people
                    </label>
                  <select id="Adult" wire:model="adult" style="<?php if ($adult): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>"  class="w-full border-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                  </select>
                </div>
                <div class="md:ml-2 w-full">
                  <label class="block mb-1 text-sm font-bold text-gray-700" for="Reference">
                    Trip ID
                  </label>
                  <input  style="<?php if ($trip_id): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" class="w-full border-2 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="Reference" type="text" wire:model="trip_id"/>
                </div>
              </div>
              <?php for ($i=0;$i<$adult;$i++): ?>
                <div class="mb-1">
                  <input  style="<?php if ($fullname): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" class="w-full border-2 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="fullname{{$i}}" placeholder="{{$i}} Mr. Marcc Atayde - Adult" type="text" wire:model="fullname.{{$i}}"/>
                </div>
              <?php endfor; ?>
              <div class="mb-1 md:flex md:justify-between">
                <div class="mb-1 md:mr-2 md:mb-0 grid grid-cols-3 w-full gap-1">
                  <span class="align-middle font-bold text-center text-gray-700 text-sm">Depart</span>
                  <input type="date"   style="<?php if ($date): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" class="border-2 w-full px-3 py-2 col-span-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" wire:model="date" value="{{$date}}" min="{{$mindate}}" />
                </div>
                <div class="md:ml-2 grid grid-cols-3 w-full gap-1">
                  <span class="align-middle font-bold text-center text-gray-700 text-sm">Return</span>
                  <input type="date"   style="<?php if ($returndate): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" class="border-2 w-full px-3 py-2 col-span-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" wire:model="returndate" value="{{$returndate}}" min="{{$date}}" />
                </div>
              </div>
              <div class="mb-1 w-full">
                  <select   style="<?php if ($type): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" wire:model="type" class="w-full border-2 px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    <option value="economy" selected>Economy</option>
                    <option value="business">Business</option>
                  </select>
              </div>
              <div class="mb-1 md:flex md:justify-between">
                <div class="mb-1 md:mr-2 md:mb-0 w-full">
                  <input type="text"  style="<?php if ($from): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" wire:model="from" placeholder="ICAO Airport Code" class="w-full border-2 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" wire:model="date" value="{{$date}}" min="{{$mindate}}" />
                </div>
                <div class="md:ml-2 w-full ">
                  <input type="text"  style="<?php if ($to): ?>border-color: green;<?php else: ?>  border-color: crimson;  <?php endif; ?>" wire:model="to" placeholder="ICAO Airport Code" class="w-full border-2 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" wire:model="returndate" value="{{$returndate}}" min="{{$date}}" />
                </div>
              </div>
							<div class="mb-6 text-center">
								<button wire:loading.remove wire:click="searchflights()" wire:loading.class.remove="bg-blue-500" wire:loading.class="bg-green-500"  class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button">Search flight</button>
                  <button type="button" wire:loading.class.remove="bg-gray-800" wire:loading.class="bg-green-800"  class="p-2 border w-1/4 rounded-md bg-gray-800 text-white" wire:click="addPost">Generate</button>
							</div>
							<hr class="mb-6 border-t" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
          </div>
      </div>
          </div>
  <!-- start of looping result here -->

<p class="text-xl text-gray-900 font-bold">Departure Ticket</p>
  <div x-data="{flightsss: true;}">
  <div x-show="flightsss">
<?php foreach (json_decode($response)->results ?? [] as $resp): ?>

  <div class="p-10">
  <div class="max-w-full  bg-white flex flex-col rounded overflow-hidden shadow-lg">
    <div class="flex flex-row items-baseline flex-nowrap bg-gray-100 p-2">
      <svg viewBox="0 0 64 64" data-testid="tripDetails-bound-plane-icon" pointer-events="all" aria-hidden="true" class="mt-2 mr-1" role="presentation" style="fill: rgb(102, 102, 102); height: 0.9rem; width: 0.9rem;">
        <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
      </svg>
      <h1 class="ml-2 uppercase font-bold text-gray-500">Departure <?php if ($resp->path[1] ?? null) { echo ' - stop flight to '.substr($resp->path[1] ?? '',0,2);}  ?></h1>
    </div>
    <div class="mt-2 flex justify-start bg-white p-2">
      <div class="flex mx-2 ml-6 h8 px-2 flex-row items-baseline rounded-full bg-gray-100 p-1">
        <svg viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-jbc4oa" role="presentation" style="fill: rgb(102, 102, 102); height: 12px; width: 12px;">
          <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
        </svg>
        <p class="font-normal text-sm ml-1 text-gray-500">{{$resp->cabinType}}</p>
      </div>
    </div>
    <div class="mt-2 flex sm:flex-row mx-6 sm:justify-between flex-wrap ">
      <div class="flex flex-row place-items-center p-2">
        <img class="w-10 h-10" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{$resp->careerCode}}" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
        <div class="flex flex-col ml-2">
          <p class="text-xs text-gray-500 font-bold">{{$resp->flight_name}}</p>
          <p class="text-xs text-gray-500">{{$resp->flight_code}}</p>
          <div class="text-xs text-gray-500">{{$resp->baggage->cabin->qty}}*{{$resp->baggage->cabin->text}}</div>
        </div>
      </div>

      <div class="flex flex-col p-2">
        <p class="font-bold">{{$resp->departureAirport->time}}</p>
        <p class="text-gray-500"><span class="font-bold">{{$resp->departureAirport->code}}</span> {{$resp->departureAirport->tz}}</p>
        <p class="text-gray-500">{{$resp->departureAirport->label}}</p>
      </div>
      <div class="flex flex-col flex-wrap p-2">
        <p class="font-bold">{{$resp->arrivalAirport->time}}</p>
        <p class="text-gray-500"><span class="font-bold">{{$resp->arrivalAirport->code}}</span> {{$resp->arrivalAirport->tz}}</p>
        <p class="text-gray-500">{{$resp->arrivalAirport->label}}</p>
      </div>
    </div>
    <div class="mt-4 bg-gray-100 flex flex-row flex-wrap md:flex-nowrap justify-between items-baseline">
      <div class="flex mx-6 py-4 flex-row flex-wrap">
        <svg class="w-12 h-10 p-2 mx-2 self-center bg-gray-400 rounded-full fill-current text-white" viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" role="presentation"><path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path></svg>
        <div class="text-sm mx-2 flex flex-col">
          <p class="">Standard Ticket</p>
        </div>
        <button class="w-32 h-11 rounded flex border-solid border bg-white mx-2 justify-center place-items-center"><div class="">Book</div></button>
      </div>
      <div class="md:border-l-2 mx-6 md:border-dotted flex flex-row py-4 mr-6 flex-wrap">
        <svg class="w-12 h-10 p-2 mx-2 self-center bg-green-800 rounded-full fill-current text-white" viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-ecvhkc" role="presentation" style="fill: rgb(255, 255, 255);"><path d="M62.917 38.962C59.376 53.71 47.207 64 31.833 64a31.93 31.93 0 01-21.915-8.832l-5.376 5.376a2.65 2.65 0 01-1.874.789A2.685 2.685 0 010 58.668V40a2.687 2.687 0 012.667-2.667h18.666A2.687 2.687 0 0124 40a2.645 2.645 0 01-.793 1.877L17.5 47.58a21.244 21.244 0 0032.665-4.414 33.706 33.706 0 002.208-4.873 1.292 1.292 0 011.25-.96h8a1.342 1.342 0 011.333 1.337.738.738 0 01-.041.293M64 24a2.687 2.687 0 01-2.667 2.668H42.667A2.687 2.687 0 0140 24a2.654 2.654 0 01.793-1.877l5.749-5.746a21.336 21.336 0 00-32.706 4.457 33.224 33.224 0 00-2.208 4.873 1.293 1.293 0 01-1.25.96H2.085A1.342 1.342 0 01.752 25.33v-.293C4.334 10.247 16.626 0 32 0a32.355 32.355 0 0122.041 8.832l5.419-5.376a2.644 2.644 0 011.872-.789A2.685 2.685 0 0164 5.333z"></path></svg>
        <div class="text-sm mx-2 flex flex-col">
          <p>Ticket</p>
          <p class="font-bold">Tax: {{$resp->totals->tax}}</p>
          <p class="font-bold">Base: {{$resp->totals->base}}</p>
          <p class="text-xs text-red-500">Departure Total: {{$resp->totals->total}}</p>
        </div>
        <label class="w-32 h-11 rounded flex border-solid border text-white bg-green-800 mx-2 justify-center place-items-center">
      <?php if ($resp->stops == '1 Stop'): ?>
        <?php foreach ($resp->stopSummary ?? [] as $airport): ?>
          <input type="radio" @click="flightsss = false" wire:model="depart_info" wire:click="layoverdepart('{{$airport->airport ?? ''}}','<?php echo substr($resp->path[1] ?? '',0,2) ?>')" value="{{json_encode($resp)}}">
          {{$resp->flight_name}} 1 Stop
        <?php endforeach; ?>
      <?php elseif($resp->stops ?? [] == 'Direct'): ?>
        <input type="radio" @click="flightsss = false" wire:model="depart_info" value="{{json_encode($resp)}}">
        {{$resp->flight_name}} Direct
      <?php endif; ?>

        </label>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>
</div>

<p class="text-xl text-gray-200 bold">Return Ticket</p>

  <?php foreach (json_decode($returnresponse)->results ?? [] as $resp): ?>
    <div class="p-10">
    <div class="max-w-full  bg-white flex flex-col rounded overflow-hidden shadow-lg">
      <div class="flex flex-row items-baseline flex-nowrap bg-gray-100 p-2">
        <svg viewBox="0 0 64 64" data-testid="tripDetails-bound-plane-icon" pointer-events="all" aria-hidden="true" class="mt-2 mr-1" role="presentation" style="fill: rgb(102, 102, 102); height: 0.9rem; width: 0.9rem;">
          <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
        </svg>
        <h1 class="ml-2 uppercase font-bold text-gray-500">Return <?php if ($resp->path[1] ?? null) { echo ' - stop flight to '.substr($resp->path[1] ?? '',0,2); }  ?></h1>

      </div>
      <div class="mt-2 flex justify-start bg-white p-2">
        <div class="flex mx-2 ml-6 h8 px-2 flex-row items-baseline rounded-full bg-gray-100 p-1">
          <svg viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-jbc4oa" role="presentation" style="fill: rgb(102, 102, 102); height: 12px; width: 12px;">
            <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
          </svg>
          <p class="font-normal text-sm ml-1 text-gray-500">{{$resp->cabinType}}</p>
        </div>
      </div>
      <div class="mt-2 flex sm:flex-row mx-6 sm:justify-between flex-wrap ">
        <div class="flex flex-row place-items-center p-2">
          <img class="w-10 h-10" src="https://daisycon.io/images/airline/?width=300&height=150&color=ffffff&iata={{$resp->careerCode}}" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
          <div class="flex flex-col ml-2">
            <p class="text-xs text-gray-500 font-bold">{{$resp->flight_name}}</p>
            <p class="text-xs text-gray-500">{{$resp->flight_code}}</p>
            <div class="text-xs text-gray-500">{{$resp->baggage->cabin->qty}}*{{$resp->baggage->cabin->text}}</div>
          </div>
        </div>

        <div class="flex flex-col p-2">
          <p class="font-bold">{{$resp->departureAirport->time}}</p>
          <p class="text-gray-500"><span class="font-bold">{{$resp->departureAirport->code}}</span> {{$resp->departureAirport->tz}}</p>
          <p class="text-gray-500">{{$resp->departureAirport->label}}</p>
        </div>
        <div class="flex flex-col flex-wrap p-2">
          <p class="font-bold">{{$resp->arrivalAirport->time}}</p>
          <p class="text-gray-500"><span class="font-bold">{{$resp->arrivalAirport->code}}</span> {{$resp->arrivalAirport->tz}}</p>
          <p class="text-gray-500">{{$resp->arrivalAirport->label}}</p>
        </div>
      </div>
      <div class="mt-4 bg-gray-100 flex flex-row flex-wrap md:flex-nowrap justify-between items-baseline">
        <div class="flex mx-6 py-4 flex-row flex-wrap">
          <svg class="w-12 h-10 p-2 mx-2 self-center bg-gray-400 rounded-full fill-current text-white" viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" role="presentation"><path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path></svg>
          <div class="text-sm mx-2 flex flex-col">
            <p class="">Standard Ticket</p>
          </div>
          <button class="w-32 h-11 rounded flex border-solid border bg-white mx-2 justify-center place-items-center"><div>Book</div></button>
        </div>
        <div class="md:border-l-2 mx-6 md:border-dotted flex flex-row py-4 mr-6 flex-wrap">
          <svg class="w-12 h-10 p-2 mx-2 self-center bg-green-800 rounded-full fill-current text-white" viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-ecvhkc" role="presentation" style="fill: rgb(255, 255, 255);"><path d="M62.917 38.962C59.376 53.71 47.207 64 31.833 64a31.93 31.93 0 01-21.915-8.832l-5.376 5.376a2.65 2.65 0 01-1.874.789A2.685 2.685 0 010 58.668V40a2.687 2.687 0 012.667-2.667h18.666A2.687 2.687 0 0124 40a2.645 2.645 0 01-.793 1.877L17.5 47.58a21.244 21.244 0 0032.665-4.414 33.706 33.706 0 002.208-4.873 1.292 1.292 0 011.25-.96h8a1.342 1.342 0 011.333 1.337.738.738 0 01-.041.293M64 24a2.687 2.687 0 01-2.667 2.668H42.667A2.687 2.687 0 0140 24a2.654 2.654 0 01.793-1.877l5.749-5.746a21.336 21.336 0 00-32.706 4.457 33.224 33.224 0 00-2.208 4.873 1.293 1.293 0 01-1.25.96H2.085A1.342 1.342 0 01.752 25.33v-.293C4.334 10.247 16.626 0 32 0a32.355 32.355 0 0122.041 8.832l5.419-5.376a2.644 2.644 0 011.872-.789A2.685 2.685 0 0164 5.333z"></path></svg>
          <div class="text-sm mx-2 flex flex-col">
            <p>Ticket</p>
            <p class="font-bold">Tax: {{$resp->totals->tax}}</p>
            <p class="font-bold">Base: {{$resp->totals->base}}</p>
            <p class="text-red-500">Departure Total: {{$resp->totals->total}}</p>
          </div>
          <label class="w-32 h-11 rounded flex border-solid border text-white bg-green-800 mx-2 justify-center place-items-center">

          <?php if ($resp->stops == '1 Stop'): ?>
            <?php foreach ($resp->stopSummary ?? [] as $airport): ?>
              <input type="radio" @click="flightsss = false" wire:model="arrive_info" wire:click="layoverarrive('{{$airport->airport ?? ''}}','<?php echo substr($resp->path[1] ?? '',0,2) ?>')" value="{{json_encode($resp)}}">
              {{$resp->flight_name}} 1 Stop
            <?php endforeach; ?>
          <?php elseif($resp->stops == 'Direct'): ?>
            <input type="radio" @click="flightsss = false" wire:model="arrive_info" wire:click="layoverarrive('{{$airport->airport ?? ''}}','none')" value="{{json_encode($resp)}}">
              {{$resp->flight_name}} Direct
          <?php endif; ?>
        </label>
        </div>
      </div>
    </div>
  </div>

  <?php endforeach; ?>
  </div>

          <!-- End Result here -->
</div>
