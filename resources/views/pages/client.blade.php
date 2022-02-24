

@extends('layouts.App')
@section('title', 'Account')

    @section('shopify-section-main')
       <main class="mainContent" role="main">
            <section id="pageContent">
    <div class="container">
        <div id="velaAccount" class="velaAccountContainer">
            <div class="velaPageAccount">
                <h1 class="velaAccountTitle">
                    <span>My Account</span>
                </h1>
                <div class="pageAccountContent">
                    <div class="rowFlex rowFlexMargin">
                        <div class="col-xs-12 col-sm-6">
                            <div class="boxAccount accountInfo">
                                <h4 class="accountHeading">Account Details</h4>
                                <div class="accountContent">
                                    @if($user->role==2)
                                        <h5 class="customerName">{{$user->name}}</h5>
                                        <div class="customerEmail">{{$user->email}}</div>
                                        <div class="formAccountRecover">
                                            <a class="btnRecoverPassword" href="{{route('password.request')}}">Reset your password</a>
                                        </div>
                                    @else
                                        <h5 class="customerName">You are not logged in, to see the account details please log in.</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="boxAccount accountAddress">
                                <h4 class="accountHeading">Your Addresses</h4>
                                <div class="accountContent">
                                    <h5 class="customerName">{{$user->name}}</h5>
                                        <div class="noAccountInfo">
                                            <div class="accountButton">
                                                <a href="#" data-toggle="modal" data-target="#AddAddress">Add address</a>
                                            </div>
                                            @if($user->addresses->count()==0)
                                            <p>There are no addresses in your address book</p>
                                            </div>
                                            @else
                                            </div>
                                            @foreach($user->addresses as $address)
                                            <div class="card addressbox ">
                                                <div class="card-body col-sm-8">
                                                    <div >
                                                        <address><strong>{{ $address->first_name}} {{ $address->last_name}}</strong><br>{{ $address->address1}}<br>{{ $address->address2}} {{ $address->city}}, {{ $address->country}}<br> {{ $address->zip}}<br></address>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end col-4 align-items-center">
                                                    <a href="#" title="Delete" class="btn-danger" onclick="event.preventDefault();
                                                        document.getElementById('{{$address->id}}').submit();">
                                                          <i class="fas fa-trash"></i>
                                                          Delete
                                                        </a>
                                                        <form id="{{$address->id}}" action="{{route('DeleteAddress',['address'=>$address->id])}}" method="POST" style="display: none;">
                                                          @csrf</form>
                                                </div>
                                              </div>
                                            @endforeach
                                        @endif
                                </div>
                                        </div></div>
                            </div>
                        </div>
                    </div>

                    <div class="accountOrderBox">
                        <h4 class="accountHeading">Order History</h4>
                        <div class="orderBoxContent">
                                      @foreach($orders as $order)
                                                        @php
                                                            $address = unserialize($order->address);
                                                        @endphp
                                                <div class="accountOrderBox">
                                                    <div class="orderBoxContent" style="display:flex;flex-direction:row; justify-content: space-between; flex-wrap: wrap;">
                                                     <div style="display:flex;flex-direction:row; align-items:flex-stat; ">
                                                            <div><h5>Address :</h5></div>
                                                            <div style="display:flex;flex-direction:column; align-items:flex-stat">
                                                                <div style="margin: 11.5px;">
                                                                <div><strong>{{ $address['first_name'] }} {{ $address['last_name']}}</strong></div>
                                                                <div>{{ $order->contact }}</div>
                                                                <div>{{ $address['address2']}} |{{ $address['city']}},</div>
                                                                <div> {{ $address['country']}} </div>
                                                                <div>{{ $address['zip']}}{{ $order->phone_number }}</div>
                                                            </div></div></div>
                                                     <div class="d-flex flex-row " ><div><h5>Amount :</h5></div><div style="padding:10px 0 0 10px">{{count($order->items)}} </div></div>
                                                     <div  class="d-flex flex-row"><div><h5>Date :</h5></div><div style="padding:10px 0 0 10px">{{$order->created_at->format('d-m-y, H:i')}} </div></div>
                                                     <div  class="d-flex flex-row"><div><h5>Status :</h5></div><div style="padding:10px 0 0 10px">{{$order->status}}</div></div>
                                                     <div  class="d-flex flex-row"><div><h5>Number :</h5></div><div style="padding:10px 0 0 10px">{{$order->serial_number}}</div></div>
                                                     </div>
                                                     <div><h5>Items :</h5></div>
                                                     <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                  <th scope="col">Product</th>
                                                                  <th scope="col">Name</th>
                                                                  <th scope="col">Price</th>
                                                                  <th scope="col">Quantity</th>
                                                                  <th scope="col">Subtotal</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>

                                                         @foreach($order->items as $item)
                                                            <tr>
                                                                <td>
                                                                    <a href="/products/{{$item->product->id}}">
                                                                    <div class="product-card__image" style="padding-top:25%;">
                                                                        <img class="product-card__img lazyload"
                                                                            scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                            data-src="{{asset('img/'.unserialize($item->product->thumbnail)[0])}}"
                                                                            data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]"
                                                                            data-aspectratio="0.8048289738430584"
                                                                            data-ratio="0.8048289738430584"
                                                                            data-sizes="auto"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    </a>
                                                                </td>
                                                                <td> <a href="/products/{{$item->product->id}}">{{$item->product->name}}</a></td>
                                                                <td>{{$item->price}}</td>
                                                                <td>{{$item->quantity}}</td>
                                                                <td>{{$item->price * $item->quantity}} $</td>
                                                                </a>
                                                            </tr>
                                                         @endforeach
                                                        </table>
                                                     </div>
                                                     <div style="display:flex;flex-direction:row; justify-content:flex-end"><div><h5>Total :</h5></div><div style="padding:10px 0 0 10px">{{$order->subtotal}} $</div></div>
                                                </div>
                                    @endforeach
                                    @if($orders ==null){
                                    <div class="noAccountInfo">
                                        <p>You haven&#39;t placed any orders yet.</p>
                                    </div>
                                    }
                                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="AddAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add address</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="step" >
          <form method="POST" class="edit_checkout" action="{{route('CreateAddress')}}" accept-charset="UTF-8" id="AddAddressForm">
             @csrf
             <div class="step__sections">
                    <div class="section section--contact-information">
                    <div class="section__header">
                    <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                        <div class="section section--shipping-address" data-shipping-address>
             <div class="section__content">
                <div class="fieldset">
                <div class="address-fields" data-address-fields>

                <div class="field--half field field--optional" data-address-field="first_name">
                <label class="field__label" for="checkout_shipping_address_first_name">First name (optional)</label>
                <div class="field__input-wrapper">
                <input placeholder="First name (optional)" maxlength="250" autocomplete="shipping given-name" autocorrect="off" class="field__input" size="30" type="text" value="" name="first_name" id="checkout_shipping_address_first_name" />
                </div>
                </div>
                <div class="field--half field field--required" data-address-field="last_name">
                <label class="field__label" for="checkout_shipping_address_last_name">Last name</label>
                <div class="field__input-wrapper">
                <input placeholder="Last name" maxlength="250" required autocomplete="shipping family-name" autocorrect="off"  class="field__input" aria-required="true" size="30" type="text" value="" name="last_name" id="checkout_shipping_address_last_name" />
                </div>
                </div>

                <div data-address-field="address1" data-autocomplete-field-container="true" class="field field--required">
                <label class="field__label" for="checkout_shipping_address_address1">Address</label>
                <div class="field__input-wrapper">
                <input placeholder="Address" maxlength="250" required autocomplete="shipping address-line1" autocorrect="off" class="field__input" aria-required="true" size="30" type="text" value="" name="address1" id="checkout_shipping_address_address1" />

                <p class="field__additional-info " data-address-civic-number-warning>
                   Add a house number if you have one
                </p>
                </div>
                </div>
                <div data-address-field="address2" data-autocomplete-field-container="true" class="field field--optional">
                <label class="field__label" for="checkout_shipping_address_address2">Apartment, suite, etc. (optional)</label>
                <div class="field__input-wrapper">
                <input placeholder="Apartment, suite, etc. (optional)" maxlength="250" autocomplete="shipping address-line2" autocorrect="off" class="field__input" size="30" type="text" value="" name="address2" id="checkout_shipping_address_address2" />
                </div>
                </div>
                <div data-address-field="city" data-autocomplete-field-container="true" class="field field--required">
                <label class="field__label" for="checkout_shipping_address_city">City</label>
                <div class="field__input-wrapper">
                <input placeholder="City" maxlength="250" required autocomplete="shipping address-level2" autocorrect="off" class="field__input" aria-required="true" size="30" type="text" value="" name="city" id="checkout_shipping_address_city" />
                </div>
                </div>
                <div class="field--third field field--required" data-address-field="country" data-autocomplete-field-container="true">
                <label class="field__label" for="checkout_shipping_address_country">Country/region</label>
                <div class="field__input-wrapper field__input-wrapper--select">
                <select size="1" required autocomplete="shipping country" data-backup="country" class="field__input field__input--select" aria-required="true" name="country" id="checkout_shipping_address_country">
                <option data-code="IN" value="India">India</option>
                <option data-code="SK" value="Slovakia">Slovakia</option>
                <option data-code="NL" value="Netherlands">Netherlands</option>
                <option data-code="FR" value="France">France</option>
                <option disabled="disabled" value="---">---</option>
                <option data-code="AF" value="Afghanistan">Afghanistan</option>
                <option data-code="AX" value="Aland Islands">Åland Islands</option>
                <option data-code="AL" value="Albania">Albania</option>
                <option data-code="DZ" value="Algeria">Algeria</option>
                <option data-code="AD" value="Andorra">Andorra</option>
                <option data-code="AO" value="Angola">Angola</option>
                <option data-code="AI" value="Anguilla">Anguilla</option>
                <option data-code="AG" value="Antigua And Barbuda">Antigua &amp; Barbuda</option>
                <option data-code="AR" value="Argentina">Argentina</option>
                <option data-code="AM" value="Armenia">Armenia</option>
                <option data-code="AW" value="Aruba">Aruba</option>
                <option data-code="AC" value="Ascension Island">Ascension Island</option>
                <option data-code="AU" value="Australia">Australia</option>
                <option data-code="AT" value="Austria">Austria</option>
                <option data-code="AZ" value="Azerbaijan">Azerbaijan</option>
                <option data-code="BS" value="Bahamas">Bahamas</option>
                <option data-code="BH" value="Bahrain">Bahrain</option>
                <option data-code="BD" value="Bangladesh">Bangladesh</option>
                <option data-code="BB" value="Barbados">Barbados</option>
                <option data-code="BY" value="Belarus">Belarus</option>
                <option data-code="BE" value="Belgium">Belgium</option>
                <option data-code="BZ" value="Belize">Belize</option>
                <option data-code="BJ" value="Benin">Benin</option>
                <option data-code="BM" value="Bermuda">Bermuda</option>
                <option data-code="BT" value="Bhutan">Bhutan</option>
                <option data-code="BO" value="Bolivia">Bolivia</option>
                <option data-code="BA" value="Bosnia And Herzegovina">Bosnia &amp; Herzegovina</option>
                <option data-code="BW" value="Botswana">Botswana</option>
                <option data-code="BR" value="Brazil">Brazil</option>
                <option data-code="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option data-code="VG" value="Virgin Islands, British">British Virgin Islands</option>
                <option data-code="BN" value="Brunei">Brunei</option>
                <option data-code="BG" value="Bulgaria">Bulgaria</option>
                <option data-code="BF" value="Burkina Faso">Burkina Faso</option>
                <option data-code="BI" value="Burundi">Burundi</option>
                <option data-code="KH" value="Cambodia">Cambodia</option>
                <option data-code="CM" value="Republic of Cameroon">Cameroon</option>
                <option data-code="CA" value="Canada">Canada</option>
                <option data-code="CV" value="Cape Verde">Cape Verde</option>
                <option data-code="BQ" value="Caribbean Netherlands">Caribbean Netherlands</option>
                <option data-code="KY" value="Cayman Islands">Cayman Islands</option>
                <option data-code="CF" value="Central African Republic">Central African Republic</option>
                <option data-code="TD" value="Chad">Chad</option>
                <option data-code="CL" value="Chile">Chile</option>
                <option data-code="CN" value="China">China</option>
                <option data-code="CX" value="Christmas Island">Christmas Island</option>
                <option data-code="CC" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option data-code="CO" value="Colombia">Colombia</option>
                <option data-code="KM" value="Comoros">Comoros</option>
                <option data-code="CG" value="Congo">Congo - Brazzaville</option>
                <option data-code="CD" value="Congo, The Democratic Republic Of The">Congo - Kinshasa</option>
                <option data-code="CK" value="Cook Islands">Cook Islands</option>
                <option data-code="CR" value="Costa Rica">Costa Rica</option>
                <option data-code="HR" value="Croatia">Croatia</option>
                <option data-code="CW" value="Curaçao">Curaçao</option>
                <option data-code="CY" value="Cyprus">Cyprus</option>
                <option data-code="CZ" value="Czech Republic">Czechia</option>
                <option data-code="CI" value="Côte d&#39;Ivoire">Côte d’Ivoire</option>
                <option data-code="DK" value="Denmark">Denmark</option>
                <option data-code="DJ" value="Djibouti">Djibouti</option>
                <option data-code="DM" value="Dominica">Dominica</option>
                <option data-code="DO" value="Dominican Republic">Dominican Republic</option>
                <option data-code="EC" value="Ecuador">Ecuador</option>
                <option data-code="EG" value="Egypt">Egypt</option>
                <option data-code="SV" value="El Salvador">El Salvador</option>
                <option data-code="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
                <option data-code="ER" value="Eritrea">Eritrea</option>
                <option data-code="EE" value="Estonia">Estonia</option>
                <option data-code="SZ" value="Eswatini">Eswatini</option>
                <option data-code="ET" value="Ethiopia">Ethiopia</option>
                <option data-code="FK" value="Falkland Islands (Malvinas)">Falkland Islands</option>
                <option data-code="FO" value="Faroe Islands">Faroe Islands</option>
                <option data-code="FJ" value="Fiji">Fiji</option>
                <option data-code="FI" value="Finland">Finland</option>
                <option data-code="FR" value="France">France</option>
                <option data-code="GF" value="French Guiana">French Guiana</option>
                <option data-code="PF" value="French Polynesia">French Polynesia</option>
                <option data-code="TF" value="French Southern Territories">French Southern Territories</option>
                <option data-code="GA" value="Gabon">Gabon</option>
                <option data-code="GM" value="Gambia">Gambia</option>
                <option data-code="GE" value="Georgia">Georgia</option>
                <option data-code="DE" value="Germany">Germany</option>
                <option data-code="GH" value="Ghana">Ghana</option>
                <option data-code="GI" value="Gibraltar">Gibraltar</option>
                <option data-code="GR" value="Greece">Greece</option>
                <option data-code="GL" value="Greenland">Greenland</option>
                <option data-code="GD" value="Grenada">Grenada</option>
                <option data-code="GP" value="Guadeloupe">Guadeloupe</option>
                <option data-code="GT" value="Guatemala">Guatemala</option>
                <option data-code="GG" value="Guernsey">Guernsey</option>
                <option data-code="GN" value="Guinea">Guinea</option>
                <option data-code="GW" value="Guinea Bissau">Guinea-Bissau</option>
                <option data-code="GY" value="Guyana">Guyana</option>
                <option data-code="HT" value="Haiti">Haiti</option>
                <option data-code="HN" value="Honduras">Honduras</option>
                <option data-code="HK" value="Hong Kong">Hong Kong SAR</option>
                <option data-code="HU" value="Hungary">Hungary</option>
                <option data-code="IS" value="Iceland">Iceland</option>
                <option data-code="IN" value="India">India</option>
                <option data-code="ID" value="Indonesia">Indonesia</option>
                <option data-code="IQ" value="Iraq">Iraq</option>
                <option data-code="IE" value="Ireland">Ireland</option>
                <option data-code="IM" value="Isle Of Man">Isle of Man</option>
                <option data-code="IL" value="Israel">Israel</option>
                <option data-code="IT" value="Italy">Italy</option>
                <option data-code="JM" value="Jamaica">Jamaica</option>
                <option data-code="JP" value="Japan">Japan</option>
                <option data-code="JE" value="Jersey">Jersey</option>
                <option data-code="JO" value="Jordan">Jordan</option>
                <option data-code="KZ" value="Kazakhstan">Kazakhstan</option>
                <option data-code="KE" value="Kenya">Kenya</option>
                <option data-code="KI" value="Kiribati">Kiribati</option>
                <option data-code="XK" value="Kosovo">Kosovo</option>
                <option data-code="KW" value="Kuwait">Kuwait</option>
                <option data-code="KG" value="Kyrgyzstan">Kyrgyzstan</option>
                <option data-code="LA" value="Lao People&#39;s Democratic Republic">Laos</option>
                <option data-code="LV" value="Latvia">Latvia</option>
                <option data-code="LB" value="Lebanon">Lebanon</option>
                <option data-code="LS" value="Lesotho">Lesotho</option>
                <option data-code="LR" value="Liberia">Liberia</option>
                <option data-code="LY" value="Libyan Arab Jamahiriya">Libya</option>
                <option data-code="LI" value="Liechtenstein">Liechtenstein</option>
                <option data-code="LT" value="Lithuania">Lithuania</option>
                <option data-code="LU" value="Luxembourg">Luxembourg</option>
                <option data-code="MO" value="Macao">Macao SAR</option>
                <option data-code="MG" value="Madagascar">Madagascar</option>
                <option data-code="MW" value="Malawi">Malawi</option>
                <option data-code="MY" value="Malaysia">Malaysia</option>
                <option data-code="MV" value="Maldives">Maldives</option>
                <option data-code="ML" value="Mali">Mali</option>
                <option data-code="MT" value="Malta">Malta</option>
                <option data-code="MQ" value="Martinique">Martinique</option>
                <option data-code="MR" value="Mauritania">Mauritania</option>
                <option data-code="MU" value="Mauritius">Mauritius</option>
                <option data-code="YT" value="Mayotte">Mayotte</option>
                <option data-code="MX" value="Mexico">Mexico</option>
                <option data-code="MD" value="Moldova, Republic of">Moldova</option>
                <option data-code="MC" value="Monaco">Monaco</option>
                <option data-code="MN" value="Mongolia">Mongolia</option>
                <option data-code="ME" value="Montenegro">Montenegro</option>
                <option data-code="MS" value="Montserrat">Montserrat</option>
                <option data-code="MA" value="Morocco">Morocco</option>
                <option data-code="MZ" value="Mozambique">Mozambique</option>
                <option data-code="MM" value="Myanmar">Myanmar (Burma)</option>
                <option data-code="NA" value="Namibia">Namibia</option>
                <option data-code="NR" value="Nauru">Nauru</option>
                <option data-code="NP" value="Nepal">Nepal</option>
                <option data-code="NL" value="Netherlands">Netherlands</option>
                <option data-code="NC" value="New Caledonia">New Caledonia</option>
                <option data-code="NZ" value="New Zealand">New Zealand</option>
                <option data-code="NI" value="Nicaragua">Nicaragua</option>
                <option data-code="NE" value="Niger">Niger</option>
                <option data-code="NG" value="Nigeria">Nigeria</option>
                <option data-code="NU" value="Niue">Niue</option>
                <option data-code="NF" value="Norfolk Island">Norfolk Island</option>
                <option data-code="MK" value="North Macedonia">North Macedonia</option>
                <option data-code="NO" value="Norway">Norway</option>
                <option data-code="OM" value="Oman">Oman</option>
                <option data-code="PK" value="Pakistan">Pakistan</option>
                <option data-code="PS" value="Palestinian Territory, Occupied">Palestinian Territories</option>
                <option data-code="PA" value="Panama">Panama</option>
                <option data-code="PG" value="Papua New Guinea">Papua New Guinea</option>
                <option data-code="PY" value="Paraguay">Paraguay</option>
                <option data-code="PE" value="Peru">Peru</option>
                <option data-code="PH" value="Philippines">Philippines</option>
                <option data-code="PN" value="Pitcairn">Pitcairn Islands</option>
                <option data-code="PL" value="Poland">Poland</option>
                <option data-code="PT" value="Portugal">Portugal</option>
                <option data-code="QA" value="Qatar">Qatar</option>
                <option data-code="RE" value="Reunion">Réunion</option>
                <option data-code="RO" value="Romania">Romania</option>
                <option data-code="RU" value="Russia">Russia</option>
                <option data-code="RW" value="Rwanda">Rwanda</option>
                <option data-code="WS" value="Samoa">Samoa</option>
                <option data-code="SM" value="San Marino">San Marino</option>
                <option data-code="ST" value="Sao Tome And Principe">São Tomé &amp; Príncipe</option>
                <option data-code="SA" value="Saudi Arabia">Saudi Arabia</option>
                <option data-code="SN" value="Senegal">Senegal</option>
                <option data-code="RS" value="Serbia">Serbia</option>
                <option data-code="SC" value="Seychelles">Seychelles</option>
                <option data-code="SL" value="Sierra Leone">Sierra Leone</option>
                <option data-code="SG" value="Singapore">Singapore</option>
                <option data-code="SX" value="Sint Maarten">Sint Maarten</option>
                <option data-code="SK" value="Slovakia">Slovakia</option>
                <option data-code="SI" value="Slovenia">Slovenia</option>
                <option data-code="SB" value="Solomon Islands">Solomon Islands</option>
                <option data-code="SO" value="Somalia">Somalia</option>
                <option data-code="ZA" value="South Africa">South Africa</option>
                <option data-code="GS" value="South Georgia And The South Sandwich Islands">South Georgia &amp; South Sandwich Islands</option>
                <option data-code="KR" value="South Korea">South Korea</option>
                <option data-code="SS" value="South Sudan">South Sudan</option>
                <option data-code="ES" value="Spain">Spain</option>
                <option data-code="LK" value="Sri Lanka">Sri Lanka</option>
                <option data-code="BL" value="Saint Barthélemy">St. Barthélemy</option>
                <option data-code="SH" value="Saint Helena">St. Helena</option>
                <option data-code="KN" value="Saint Kitts And Nevis">St. Kitts &amp; Nevis</option>
                <option data-code="LC" value="Saint Lucia">St. Lucia</option>
                <option data-code="MF" value="Saint Martin">St. Martin</option>
                <option data-code="PM" value="Saint Pierre And Miquelon">St. Pierre &amp; Miquelon</option>
                <option data-code="VC" value="St. Vincent">St. Vincent &amp; Grenadines</option>
                <option data-code="SD" value="Sudan">Sudan</option>
                <option data-code="SR" value="Suriname">Suriname</option>
                <option data-code="SJ" value="Svalbard And Jan Mayen">Svalbard &amp; Jan Mayen</option>
                <option data-code="SE" value="Sweden">Sweden</option>
                <option data-code="CH" value="Switzerland">Switzerland</option>
                <option data-code="TW" value="Taiwan">Taiwan</option>
                <option data-code="TJ" value="Tajikistan">Tajikistan</option>
                <option data-code="TZ" value="Tanzania, United Republic Of">Tanzania</option>
                <option data-code="TH" value="Thailand">Thailand</option>
                <option data-code="TL" value="Timor Leste">Timor-Leste</option>
                <option data-code="TG" value="Togo">Togo</option>
                <option data-code="TK" value="Tokelau">Tokelau</option>
                <option data-code="TO" value="Tonga">Tonga</option>
                <option data-code="TT" value="Trinidad and Tobago">Trinidad &amp; Tobago</option>
                <option data-code="TA" value="Tristan da Cunha">Tristan da Cunha</option>
                <option data-code="TN" value="Tunisia">Tunisia</option>
                <option data-code="TR" value="Turkey">Turkey</option>
                <option data-code="TM" value="Turkmenistan">Turkmenistan</option>
                <option data-code="TC" value="Turks and Caicos Islands">Turks &amp; Caicos Islands</option>
                <option data-code="TV" value="Tuvalu">Tuvalu</option>
                <option data-code="UM" value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                <option data-code="UG" value="Uganda">Uganda</option>
                <option data-code="UA" value="Ukraine">Ukraine</option>
                <option data-code="AE" value="United Arab Emirates">United Arab Emirates</option>
                <option data-code="GB" value="United Kingdom">United Kingdom</option>
                <option data-code="US" value="United States">United States</option>
                <option data-code="UY" value="Uruguay">Uruguay</option>
                <option data-code="UZ" value="Uzbekistan">Uzbekistan</option>
                <option data-code="VU" value="Vanuatu">Vanuatu</option>
                <option data-code="VA" value="Holy See (Vatican City State)">Vatican City</option>
                <option data-code="VE" value="Venezuela">Venezuela</option>
                <option data-code="VN" value="Vietnam">Vietnam</option>
                <option data-code="WF" value="Wallis And Futuna">Wallis &amp; Futuna</option>
                <option data-code="EH" value="Western Sahara">Western Sahara</option>
                <option data-code="YE" value="Yemen">Yemen</option>
                <option data-code="ZM" value="Zambia">Zambia</option>
                <option data-code="ZW" value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                </div>
                <div class="field--third field field--required" data-address-field="province" data-autocomplete-field-container="true">
                <label class="field__label" for="checkout_shipping_address_province">Region</label>
                <div class="field__input-wrapper field__input-wrapper--select">
                <input placeholder="Region" maxlength="250" autocomplete="shipping address-level1" autocorrect="off" data-backup="province" class="field__input" aria-required="true" type="text" name="province" id="checkout_shipping_address_province" />
                </div>
                </div>
                <div class="field--third field field--required" data-address-field="zip" data-autocomplete-field-container="true">
                <label class="field__label" for="checkout_shipping_address_zip">Postal code</label>
                <div class="field__input-wrapper">
                <input placeholder="Postal code" maxlength="10" required autocomplete="shipping postal-code" autocorrect="off" data-backup="zip" class="field__input field__input--zip" aria-required="true" size="30" type="text" value="" name="zip" id="checkout_shipping_address_zip" />
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
                </div>

        </div>
        </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
</div>
</div>
        </main>
        <style>
            #AddAddressForm input,#AddAddressForm select{
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                -webkit-text-size-adjust: 100%;
                word-wrap: break-word;
                touch-action: manipulation;
                font: inherit;
                margin: 0;
                appearance: none;
                -webkit-font-smoothing: inherit;
                background: transparent;
                border: 1px transparent solid;
                background-clip: padding-box;
                border-radius: 5px;
                display: block;
                box-sizing: border-box;
                width: 100%;
                padding: 0.9285714286em 0.7857142857em;
                word-break: normal;
                line-height: inherit;
                background-color: white;
                color: #333333;
                border-color: #d9d9d9;
            }
            .addressbox{
                -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    text-align: left;
    font-family: red Hat Display, Helvetica, Arial, sans-serif;
    color: #444444;
    font-weight: 400;
    font-size: 15px;
    line-height: 20px;
    box-sizing: border-box;
    position: relative;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #dee2e6!important;
    border-radius: .25rem!important;
    display: flex!important;
    flex-direction: row!important;
    justify-content: space-between;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    margin: 1.5rem!important;
    padding: .5rem!important;
            }
        .btn-danger{
    font-family: red Hat Display, Helvetica, Arial, sans-serif;
    word-wrap: break-word;
    box-sizing: border-box;
    text-decoration: none;
    position: relative;
    width: 100%;
    font-weight: 400;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    color: rgb(173, 43, 43);
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 9px 20px;
    font-size: 16px;
    line-height: 1.45;
    border-radius: 4px;
    user-select: none;
    cursor: pointer;
        }
        </style>
    @endsection
