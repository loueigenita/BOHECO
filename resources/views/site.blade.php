@extends('main')

@section('content')

  <section class = "service" id="service">
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

  <section class="power" id="power">
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
      <div class="col-sm-12 col-md-4 col-lg-5 mb-4">
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
        <div class="card-body">
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
<section class="advisories" id="advisories">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <div class="card mb-2">
        <div class="card-header bg-primary">
          <h3 class="text-center text-light">ADVISORIES(2)</h3>
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
        <div class="card-header  bg-primary">
          <h3 class="text-center text-light">POWER INTERRUPTIONS (3)</h3>
        </div>
        <div class="card-body">
          <h4 class="advisory-title text-center">Wed, Mar. 1, 2023</h4>
          <p>
            <p><strong>WHAT:</strong> BOHECO I Scheduled Power Interruption<br><strong>WHEN:</strong> Wednesday, March 1, 2023 from 9:00AM to 4:00PM<br><strong>WHERE:</strong> Sitio Causlan, Cawayan and Napo, Inabanga<br><strong>WHY:</strong> Relocation of pole and line clearing activities<br><br>We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.<br>For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
          </p>
        </div>
      </div>

      <div class="card mb-2">
        <div class="card-body">
          <h4 class="advisory-title text-center">Tue, Feb. 28, 2023</h4>
          <p>
            <p><strong>WHAT:</strong> BOHECO I Scheduled Power Interruption<br><strong>WHEN:</strong> Tuesday, February 28, 2023 from 9:00AM to 4:00PM<br><strong>WHERE:</strong> Brgy. Quezon and Upper Cabacnitan, Batuan<br><strong>WHY:</strong> Pole relocation and line clearing activities affected by road improvement project of DPWH<br><br>We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.<br>For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
          </p>
        </div>
      </div>

      <div class="card mb-2">
        <div class="card-body">
          <h4 class="advisory-title text-center">Mon, Feb. 27, 2023</h4>
          <p>
            <p><strong>WHAT:</strong> BOHECO I Scheduled Power Interruption<br><strong>WHEN:</strong> Tuesday, February 28, 2023 from 9:00AM to 4:00PM<br><strong>WHERE:</strong> Brgy. Quezon and Upper Cabacnitan, Batuan<br><strong>WHY:</strong> pole relocation and line clearing activities affected by road improvement project of DPWH<br><br>We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.<br>For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="news">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-7 col-lg-7">
   
        <div class="card mb-2">
          <div class="card-header bg-primary">
            <h3 class="text-center text-light">NEWS</h3>
          </div>
          
          <figure class="wp-block-image size-large"><img src="http://boheco1.com/wp-content/uploads/2022/09/agma-2022-1024x702.jpg" alt="image" style="height: auto" width="auto"></figure>
          <div class="card-body bg-info">
            <p class="card-title article-title elipsis">42ND AGMA 2022</p>
            <p class="article-subtitle">September 29, 2022  </p>
            <div class="card-text">
              <div class="parent">
                <div class="block-ellipsis">
                  <figure class="wp-block-image size-large"><img src="http://boheco1.com/wp-content/uploads/2022/09/agma-2022-1024x702.jpg" sizes="(max-width: 1024px) 100vw, 1024px" /></figure></div>	
              </div>					
            </div>	
            <br>
            <a href="https://boheco1.com/index.php/2022/09/29/42nd-agma-2022/" class="btn btn-warning btn-sm"><i class="fa fa-share"></i>Read Article</a>

            </div>	
        </div>

        <div class="card mb-2 bg-info">
          <figure class="wp-block-image size-large"><img src="http://boheco1.com/wp-content/uploads/2022/09/september-increase-rate-1024x702.jpg" alt="image" style="height: auto" width="auto"></figure>
          <div class="card-body">
            <p class="card-title article-title elipsis">Power Rate Increase</p>
            <p class="article-subtitle">September 13, 2022  </p>
            <div class="card-text">
              <div class="parent">
                <div class="block-ellipsis">
                  <figure class="wp-block-image size-large"><img src="http://boheco1.com/wp-content/uploads/2022/09/september-increase-rate-1024x702.jpg" sizes="(max-width: 1024px) 100vw, 1024px" /></figure></div>	
              </div>					
            </div>	
            <br>
            <a href="https://boheco1.com/index.php/2022/09/13/power-rate-increase/" class="btn btn-warning btn-sm"><i class="fa fa-share"></i>Read Article</a>
          </div>	
        </div>

        <div class="card mb-2 bg-info">
          <figure class="wp-block-image size-large"><img src="http://boheco1.com/wp-content/uploads/2022/09/Notice-of-Election.jpg" alt="image" style="height: auto" width="auto"></figure>
          <div class="card-body">
            <p class="card-title article-title elipsis">Notice of Election</p>
            <p class="article-subtitle">September 06, 2022  </p>
            <div class="card-text">
              <div class="parent">
                <div class="block-ellipsis">
                  <figure class="wp-block-image size-large"><img src="http://boheco1.com/wp-content/uploads/2022/09/Notice-of-Election.jpg" sizes="(max-width: 1024px) 100vw, 1024px" /></figure></div>	
              </div>					
            </div>	
            <br>
            <a href="https://boheco1.com/index.php/2022/09/06/notice-of-election/" class="btn btn-warning btn-sm"><i class="fa fa-share"></i>Read Article</a>

          </div>	
        </div>
  
  </div>
  <div class="col-sm-12 col-md-5 col-lg-5">
    <div class="card">

      <div class="card-header bg-primary">
        <h3 class="text-light text-center separation-label">COLLECTION DATES</h3>
      </div>

      <div class="card-body">
        <p class="card-content"><p>
        <table id="tablepress-1" class="tablepress tablepress-id-1 ">
          <thead>
          <tr class="row-1 odd">
            <th class="column-1">Municipality</th><th class="column-2">Date</th>
          </tr>
          </thead>
            <tbody class="row-hover">
              <tr class="row-2 even">
                <td class="column-1">Batuan</td><td class="column-2">14</td>
              </tr>
              <tr class="row-3 odd">
                <td class="column-1">Bilar</td><td class="column-2">16</td>
              </tr>
              <tr class="row-4 even">
                <td class="column-1">Catigbian</td><td class="column-2">18</td>
              </tr>
              <tr class="row-5 odd">
                <td class="column-1">San Isidro</td><td class="column-2">17</td>
              </tr>
              <tr class="row-6 even">
                <td class="column-1">Sagbayan</td><td class="column-2">20</td>
              </tr>
              <tr class="row-7 odd">
                <td class="column-1">Clarin</td><td class="column-2">21</td>
              </tr>
              <tr class="row-8 even">
                <td class="column-1">Calape</td><td class="column-2">22 - 24</td>
              </tr>
              <tr class="row-9 odd">
                <td class="column-1">Tubigon</td><td class="column-2">26 - 30</td>
              </tr>
              <tr class="row-10 even">
                <td class="column-1">Loon</td><td class="column-2">4 - 6</td>
              </tr>
              <tr class="row-11 odd">
                <td class="column-1">Balilihan</td><td class="column-2">8</td>
              </tr>
              <tr class="row-12 even">
                <td class="column-1">Inabanga</td><td class="column-2">9 - 10</td>
              </tr>
              <tr class="row-13 odd">
                <td class="column-1">Carmen</td><td class="column-2">11 - 12</td>
              </tr>
              <tr class="row-14 even">
                <td class="column-1">Sevilla</td><td class="column-2">12</td>
              </tr>
              <tr class="row-15 odd">
                <td class="column-1">Lila</td><td class="column-2">15</td>
              </tr>
              <tr class="row-16 even">
                <td class="column-1">Loay</td><td class="column-2">17 - 18</td>
              </tr>
              <tr class="row-17 odd">
                <td class="column-1">Baclayon</td><td class="column-2">20</td>
              </tr>
              <tr class="row-18 even">
                <td class="column-1">Antequera</td><td class="column-2">22</td>
              </tr>
              <tr class="row-19 odd">
                <td class="column-1">Maribojoc</td><td class="column-2">24 - 25</td>
              </tr>
              <tr class="row-20 even">
                <td class="column-1">Dauis</td><td class="column-2">27 - 28</td>
              </tr>
              <tr class="row-21 odd">
                <td class="column-1">Panglao</td><td class="column-2">2 - 3</td>
              </tr>
              <tr class="row-22 even">
                <td class="column-1">Cortes</td><td class="column-2">4</td>
              </tr>
              <tr class="row-23 odd">
                <td class="column-1">Loboc</td><td class="column-2">5</td>
              </tr>
              <tr class="row-24 even">
                <td class="column-1">Dimiao</td><td class="column-2">6</td>
              </tr>
              <tr class="row-25 odd">
                <td class="column-1">Sikatuna</td><td class="column-2">7</td>
              </tr>
              <tr class="row-26 even">
                <td class="column-1">Alburquerque</td><td class="column-2">10</td>
              </tr>
              <tr class="row-27 odd">
                <td class="column-1">Corella</td><td class="column-2">11</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>

    <div class="card mt-5">
      <div class="card-header bg-primary">
        <h3 class="text-light text-center">PAYMENT PARTNERS</h3>
      </div>
    </div>

        <div class="row">
          <div class="col-md-6 mb-2 mt-2">
            <div class="card wow animate__animated animate__fadeInLeft animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/unnamed-300x300.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">Security Bank</p>
          </div>
          </div>	
            <div class="col-md-6 mb-2 mt-2">
            <div class="card wow animate__animated animate__fadeInRight animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/HL2AQ2HH4LMMCDR54FL4-58801188-300x158.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">Union Bank</p>
          </div>
          </div>	
          <div class="col-md-6 mb-2">
            <div class="card wow animate__animated animate__fadeInLeft animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/m-lhuiller-logo-300x120-300x120.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">M Lhuiller</p>
          </div>
          </div>	
          <div class="col-md-6 mb-2">
            <div class="card wow animate__animated animate__fadeInRight animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/20170801115204_palawan-express-palawan-pawnshop-300x200-300x200.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">Palawan Pawnshop</p>
          </div>
          </div>	
          <div class="col-md-6 mb-2">
            <div class="card wow animate__animated animate__fadeInLeft animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/fcb-logo-300x102-300x102.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">FCB</p>
          </div>
          </div>	
            <div class="col-md-6 mb-2">
          <div class="card wow animate__animated animate__fadeInRight animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/Cebuana-Lhuilier-1-300x107-300x107.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">Cebuana Lhuiller</p>
          </div>
          </div>	
          <div class="col-md-6 mb-2">
            <div class="card wow animate__animated animate__fadeInLeft animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/Landbank_Logo-300x143-300x143.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">Landbank</p>
          </div>
          </div>	
          <div class="col-md-6 mb-2">
            <div class="card wow animate__animated animate__fadeInRight animate__slow">
              <img src="http://boheco1.com/wp-content/uploads/2018/06/Bank-of-Commerce.jpg" class="card-img-top partners-img">
              <p style="text-align: center; padding-top: 4px;">Bank of Commerce</p>
          </div>
        </div>	                          
    </div>	
  </div>
</section>
@endsection