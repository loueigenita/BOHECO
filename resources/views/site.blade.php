<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">
    
    
    

    
</head>
<body>

  <header class="header" id="intro">
      @include('layouts.nav')
      <div class="hero-div center container">
        <h1 >BOHOL ELECTRIC COOPERATIVE, INC.</h1>
        <p class="animate__animated animate__fadeInUp animate__slow">Cabulijan, Tubigon, Bohol</p>
        <div class="hero-btns animate__animated animate__fadeInUp animate__slow">
          <button type="button" class="btn-trans">SERVICES</button>
          <button href="#" type="button" class="btn-white">QUICK BILL INQUIRY</button>
        </div>
    </div>
  </header>

  <section class = "service" id="services">
    <div class = "container">
      <h1 class="section-title">SERV<span>I</span>CES</h1>
      <div class = "row">
        <div class = "service-item wow animate__animated animate__fadeInLeft animate__slow">
          <div class="icon"><img src="./images/index1.png" /></div>
          <h2>Power Distribution</h2>
          <div class = "line"></div>
          <p class = "text">Maintaining a Consistent Power Distribution for a Better
            Service</p>
        </div>

        <div class = "service-item wow animate__animated animate__fadeInUp animate__slow">
          <div class="icon"><img src="./images/index2.png" /></div>
          <h2>Consumer Satisfaction</h2>
          <div class = "line"></div>
          <p class = "text">Prioritizing Consumer’s Satisfaction</p>
        </div>

        <div class = "service-item wow animate__animated animate__fadeInRight animate__slow">
          <div class="icon"><img src="./images/index3.png" /></div>
          <h2>Total Electrification</h2>
          <div class = "line"></div>
          <p class = "text">100% Sitio Energized</p>
        </div>
      </div>
    </div>
  </section>

  <section class="power">
    <div class="container">
        <div class="card wow animate__animated animate__fadeInUp animate__slow">
            <div class="card-header">
                <h2 class="text-center">POWER SUPPLY OUTLOOK</h2>
                <p class="text-muted text-center">March 2023</p>
            </div>
            <div class="card-body">
                <div class="table-full-width table-responsive">
                <table class="table table-striped shadow text-center table-hover">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th width="200">Capacity (kW)</th>
                            <th width="100">Morning<br>(1:00AM-12:00NN)</th>
                            <th width="100">Afternoon<br>(12:01PM-6:00PM)</th>
                            <th width="100">Evening<br>(6:01PM-12:59PM)</th>
                        </tr>
                    </thead>
                    <tbody>				
                        <tr>
                            <td>Contracted Power Supply (ERC Approved)</td>
                            <th>0</th>
                            <th>1</th>
                            <th> </th>
                        </tr>
                        <tr>
                            <td>System Peak Demand</td>
                            <th> </th>
                            <th>2</th>
                            <th> </th>
                        </tr>
                        <tr>
                            <td>Power Supply Reserve/(Deficit)</td>
                            <th>(0)</th>
                            <th>(1)</th>
                            <th>(0)</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</section>

<section class="power">
  <div class="container-fluid">
    <h1 class="section-title">POWER<span>RATES</span></h1>
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-5">
        <div class="card">
          <div class="card-header">
            <h3>Summary (February 2023)</h3>
          </div>
            <div class="card-body">
              <div class="table-full-width table-responsive">
                <table class="table table-striped table-hover shadow">
                  <thead class="bg-dark text-light">
                    <th>Consumer Class</th>
                    <th></th>
                    <th style="text-align: center;">Rate<br>(PhP/kWh)</th>
                    <th style="text-align: center;">Rate<br>(PhP/kW)</th>
                    <th style="text-align: center;">Fixed Monthly Rate<br>(PhP)</th>
                  </thead>
                  <tbody>
                    <tr class="bg-primary">
                      <th class="text-white">Residential</th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>On-Grid</td>
											<th>16.3144</th>										
											<th></th>
											<th>5.6000</th>
										</tr>
										<tr>
											<td></td>
											<td>Off-Grid (Islands)</td>
											<th>10.4416</th>
											<th></th>
											<th></th>
										</tr>

										<tr class="bg-primary">
											<th class="text-white">Low Voltage</th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>Commercial</td>
											<th>15.3608</th>
											<th></th>
											<th>88.3232</th>
										</tr>
										<tr>
											<td></td>
											<td>Public Building</td>
											<th>15.3608</th>
											<th></th>
											<th>88.3232</th>
										</tr>
										<tr>
											<td></td>
											<td>Street Lights</td>
											<th>15.3608</th>
											<th></th>
											<th>88.3232</th>
										</tr>

										<tr class="bg-primary">
											<th class="text-white">High Voltage</th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>Industrial</td>
											<th>13.8400</th>
											<th>658.7205</th>
											<th>88.3232</th>
										</tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-7 col-lg-7">
        <div class="container-fluid">
          <div class="card mb-2">
            <figure class="wp-block-image size-large"><img src="./images/rate1.jpg" alt="image" style="height: auto" width="auto"></figure>
          </div>
          
          <div class="card mb-2">
            <figure class="wp-block-image size-large"><img src="./images/rate2.jpg" alt="image" style="height: auto" width="auto"></figure>
          </div>
          
          <div class="card">
            <figure class="wp-block-image size-large"><img src="./images/rate3.jpg" alt="image" style="height: auto" width="auto"></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

<!-- ADVISORIES (HEARING, PAHIBALOs, AGMA, etc.) -->
<section class="advisories">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <div class="card mb-2">
        <div class="card-header">
          <h5 class="text-center">ADVISORIES(2)</h5>
        </div>
        <div class="advisory-body">
          <p class="advisory-title text-center">Fri, Mar. 10, 2023</p>
          <p class="advisory-content">
              <p>Alang sa tanang taga Maribojoc nga gusto MAGPA-MIYEMBRO o kadtong gusto MAGPA-USAB sa ngalan sa miyembro sa BOHECO I:<br>Aduna kitay ipahigayon nga <strong>2023 BOHECO I Caravan</strong> karong petsa <strong>10 sa Marso 2023, sa alas otso sa buntag (8am) hangtud sa alas dose sa udto (12nn)</strong>, diha sa <strong>Maribojoc Gymnasium</strong>.<br>Ang tumong niini mao ang mga mosunod:</p>
              <ol>
                <li>Paghatag og higayon sa mga konsumidor nga mamahimong Miyembro-Tag-iya sa BOHECO I.</li>
                <li>Pagpahibalo sa mga bag-ong pulisiya og pamalaod (sama sa gipatas an nga Mortuary Aid) sa BOHECO I</li>
                <li>Paghatag og katin-awan sa mga pangutana sa atong mga Miyembro-Konsumidor-Tag-iya</li>
              </ol>
                <p>Palihug ug dala sa mga mosunod nga dokumento:</p>
                <ol>
                  <li>Valid ID ug P88.72 para sa mga magpa-miyembro</li>
                  <li>Valid ID, Barangay Clearance, Letter of Consent, Death Certificate (if applicable) ug P88.72 para sa magpa-usab sa ngalan sa miyembro (Residential only)Amo kamong giawhag sa pagtambong.</li>
                </ol>
                <p>Aduna usab kitay pagahimuon nga RAFFLE DRAW human sa maong panagtigum.<br>Daghang Salamat!</p>
              </p>	
        </div>
      </div>
      <div class="card mb-2">
        <div class="advisory-body">
          <p class="advisory-title text-center">Wed, Mar. 1, 2023</p>
          <p class="advisory-content">
          <p>Alang sa tanang taga Sagbayan nga gusto MAGPA-MIYEMBRO o kadtong gusto MAGPA-USAB sa ngalan sa miyembro sa BOHECO
            I:<br>Aduna kitay ipahigayon nga <strong>2023 BOHECO I Caravan</strong> karong petsa <strong>1 sa Marso 2023, sa alas
              otso sa buntag (8am) hangtud sa alas dose sa udto (12nn)</strong>, diha sa <strong>Sagbayan
              Gymnasium</strong>.<br>Ang tumong niini mao ang mga mosunod:</p>
          <ol>
            <li>Paghatag og higayon sa mga konsumidor nga mamahimong Miyembro-Tag-iya sa BOHECO I.</li>
            <li>Pagpahibalo sa mga bag-ong pulisiya og pamalaod (sama sa gipatas an nga Mortuary Aid) sa BOHECO I</li>
            <li>Paghatag og katin-awan sa mga pangutana sa atong mga Miyembro-Konsumidor-Tag-iya</li>
          </ol>
          <p>Palihug ug dala sa mga mosunod nga dokumento:</p>
          <ol>
            <li>Valid ID ug P88.72 para sa mga magpa-miyembro</li>
            <li>Valid ID, Barangay Clearance, Letter of Consent, Death Certificate (if applicable) ug P88.72 para sa magpa-usab sa
              ngalan sa miyembro (Residential only) Amo kamong giawhag sa pagtambong.</li>
          </ol>
          <p>Aduna usab kitay pagahimuon nga RAFFLE DRAW human sa maong panagtigum.<br>Daghang Salamat!</p>
          </p>	
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6">
      <div class="card mb-2">
        <div class="card-header">
          <h5 class="text-center">POWER INTERRUPTIONS (3)</h5>
        </div>
        <div class="card-body">
          <h4 class="text-muted text-center">Wed, Mar. 1, 2023</h4>
          <p>
            <p><strong>WHAT:</strong> BOHECO I Scheduled Power Interruption<br><strong>WHEN:</strong> Wednesday, March 1, 2023 from 9:00AM to 4:00PM<br><strong>WHERE:</strong> Sitio Causlan, Cawayan and Napo, Inabanga<br><strong>WHY:</strong> relocation of pole and line clearing activities<br>We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.<br>For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
          </p>
        </div>
      </div>

      <div class="card mb-2">
        <div class="card-body">
          <h4 class="text-muted text-center">Tue, Feb. 28, 2023</h4>
          <p>
            <p><strong>WHAT:</strong> BOHECO I Scheduled Power Interruption<br><strong>WHEN:</strong> Tuesday, February 28, 2023 from 9:00AM to 4:00PM<br><strong>WHERE:</strong> Brgy. Quezon and Upper Cabacnitan, Batuan<br><strong>WHY:</strong> pole relocation and line clearing activities affected by road improvement project of DPWH<br>We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.<br>For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
          </p>
        </div>
      </div>

      <div class="card mb-2">
        <div class="card-body">
          <h4 class="text-muted text-center">Mon, Feb. 27, 2023</h4>
          <p>
            <p><strong>WHAT:</strong> BOHECO I Scheduled Power Interruption<br><strong>WHEN:</strong> Tuesday, February 28, 2023 from 9:00AM to 4:00PM<br><strong>WHERE:</strong> Brgy. Quezon and Upper Cabacnitan, Batuan<br><strong>WHY:</strong> pole relocation and line clearing activities affected by road improvement project of DPWH<br>We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.<br>For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

{{-- Mission Vision --}}


<section class = "mission" id="missionvision">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class = "service-item wow animate__animated animate__fadeInLeft animate__slow">
        <div class="icon"><img src="./images/mission.png" /></div>
        <h1>MISSION</h1>
        <div class = "line"></div>
        <p class = "text">Maintaining a Consistent Power Distribution for a Better
          Service</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class = "service-item wow animate__animated animate__fadeInRight animate__slow">
        <div class="icon"><img src="./images/vision.png" /></div>
        <h1>VISION</h1>
        <div class = "line"></div>
        <p class = "text">Maintaining a Consistent Power Distribution for a Better
          Service</p>
      </div>
    </div>
  </div>
</div>
</section>


@include('layouts.footer')

    <script src = "{{asset('resources/jquery-3.5.1.js')}}"></script>
    <!-- magnific popup -->
    <script src = "{{asset('resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
    <!-- owl carousel -->
    <script src = "{{asset('resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
    <!-- wow js -->
    <script src = "{{asset('resources/WOW-master/dist/wow.js')}}"></script>
    {{-- Custom Js --}}
    <script src = "{{asset('js/script.js')}}">

  </body>
</html>