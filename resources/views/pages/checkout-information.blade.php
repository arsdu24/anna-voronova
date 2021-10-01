@extends('layouts.App')
@section('title', 'Checkout')

@section('shopify-section-main')

<header class="banner" data-header role="banner">
<div class="wrap">
<h1 class="visually-hidden">
Information
</h1>
</div>
</header>
@if($cart->items()->count()!=0)
<aside role="complementary">
<button class="order-summary-toggle order-summary-toggle--show shown-if-js" aria-expanded="false" aria-controls="order-summary" data-drawer-toggle="[data-order-summary]">
<span class="wrap">
<span class="order-summary-toggle__inner">
<span class="order-summary-toggle__icon-wrapper">
  <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__icon">
    <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" />
  </svg>
</span>
<span class="order-summary-toggle__text order-summary-toggle__text--show">
  <span>Show order summary</span>
  <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z" /></svg>
</span>
<span class="order-summary-toggle__text order-summary-toggle__text--hide">
  <span>Hide order summary</span>
  <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z" /></svg>
</span>
<dl class="order-summary-toggle__total-recap total-recap" data-order-summary-section="toggle-total-recap">
  <dt class="visually-hidden"><span>Sale price</span></dt>
  <dd>
    <span class="order-summary__emphasis total-recap__final-price skeleton-while-loading" data-checkout-payment-due-target="68962">$689.62</span>
    </dd>
</dl>
</button>
</aside>



<div class="content">
  <div class="wrap">
<div class="main">
  <header class="main__header" role="banner">
      
<a class="logo logo--left" href="/"><img alt="velademo-rubix" class="logo__image logo__image--medium" src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/logo.png?5223" /></a>

<h1 class="visually-hidden">
Information
</h1>


          <nav aria-label="Breadcrumb">
<ol class="breadcrumb " role="list">
<li class="breadcrumb__item breadcrumb__item--completed">
  <a class="breadcrumb__link" href="/cart">Cart</a>
  
</li>
<li class="breadcrumb__item breadcrumb__item--current" aria-current="step">
  <span class="breadcrumb__text">Checkout</span>
</li>
</ol>
</nav>
        <div class="shown-if-js" data-alternative-payments>
</div>
  </header>
  <main class="main__content" role="main">

<iframe srcdoc="<script>(function() {
Shopify = window.Shopify || {};
Shopify.Checkout = window.Shopify.Checkout || {};
Shopify.Checkout.whitelistedUrls = [&quot;https:\/\/velademo-rubix.myshopify.com&quot;,&quot;https:\/\/checkout.shopify.com&quot;];
Shopify.Checkout.whitelistedHostSuffixes = [&quot;.shopifypreview.com&quot;];
})();
</script>

<script src="https://checkout.shopify.com/37694406700/sandbox/google_analytics_iframe" onload="this.setAttribute(&#39;data-loaded&#39;, true)" sandbox="allow-scripts allow-same-origin" id="google-analytics-sandbox" tabIndex="-1" class="visually-hidden" style="display:none" aria-hidden="true"></iframe>




<div class="step" >
<form class="edit_checkout"  action="{{route('create_order')}}" accept-charset="UTF-8" method="POST">
  @csrf
<div class="step__sections">
<div class="section section--contact-information">
<div class="section__header">
<div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
<h2 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header" tabindex="-1">
Contact information
</h2>
@if($user->role == 3)  
<p class="layout-flex__item">
  <span aria-hidden="true">Already have an account?</span>
  <a href="/login">
    <span class="visually-hidden">Already have an account?</span>
    Log in
</a>        </p>
@endif
</div>
</div>
<div class="section__content" data-section="customer-information" data-shopify-pay-validate-on-load="false">
<div class="fieldset">
  <div data-email-or-phone-input-wrapper="true" data-shopify-pay-email-flow="false" class="field field--email_or_phone">
    <label class="field__label" for="checkout_email_or_phone">Email </label>
    <div class="field__input-wrapper">
      @if($user->role != 3)<input value="{{$user->email}}" placeholder="Email " autocapitalize="off" spellcheck="false" data-email-or-phone-input="true" data-phone-flag-input="true" data-phone-flag-input-default-country="Moldova, Republic of" data-autofocus="true" data-backup="email_or_phone" data-address-type="shipping" data-most-popular-countries="[&quot;India&quot;,&quot;Slovakia&quot;,&quot;Netherlands&quot;,&quot;France&quot;]" required data-phone-flag-label="Country/Region code" aria-describedby="checkout-context-step-one" aria-required="true" class="field__input" size="30" type="email" name="checkout[email_or_phone]" id="checkout_email_or_phone" />
      @else <input placeholder="Email " autocapitalize="off" spellcheck="false" data-email-or-phone-input="true" data-phone-flag-input="true" data-phone-flag-input-default-country="Moldova, Republic of" data-autofocus="true" data-backup="email_or_phone" data-address-type="shipping" data-most-popular-countries="[&quot;India&quot;,&quot;Slovakia&quot;,&quot;Netherlands&quot;,&quot;France&quot;]" data-phone-flag-label="Country/Region code" required aria-describedby="checkout-context-step-one" aria-required="true" class="field__input" size="30" type="email" name="checkout[email_or_phone]" id="checkout_email_or_phone" />
      @endif
    </div>
</div>        </div>

<div class="fieldset-description" data-buyer-accepts-marketing>
  <div class="section__content">
    <div class="checkbox-wrapper">
<div class="checkbox__input">
<input name="checkout[buyer_accepts_marketing]" type="hidden" value="0" />
<input class="input-checkbox" data-backup="buyer_accepts_marketing" type="checkbox" value="1" name="checkout[buyer_accepts_marketing]" id="checkout_buyer_accepts_marketing" />
</div>
<label class="checkbox__label" for="checkout_buyer_accepts_marketing">
Keep me up to date on news and offers
</label></div>

  </div>
</div>
</div> 
</div> 

<div class="section section--shipping-address" data-shipping-address>
<div class="section__header">
<h2 class="section__title" id="section-delivery-title">
  Shipping &#38; Billing information
</h2>
</div>


<div class="section__content">
<div class="fieldset">
<div class="address-fields" data-address-fields>
<input class="visually-hidden" autocomplete="shipping given-name" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="first_name" data-honeypot="true" size="30" type="text" name="checkout[shipping_address][first_name]" />
<input class="visually-hidden" autocomplete="shipping family-name" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="last_name" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][last_name]" />
<input class="visually-hidden" autocomplete="shipping address-line1" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="address1" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][address1]" />
<input class="visually-hidden" autocomplete="shipping address-line2" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="address2" data-honeypot="true" size="30" type="text" name="checkout[shipping_address][address2]" />
<input class="visually-hidden" autocomplete="shipping address-level2" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="city" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][city]" />
<input class="visually-hidden" autocomplete="shipping country" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="country" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][country]" />
<input class="visually-hidden" autocomplete="shipping address-level1" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="province" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][province]" />
<input class="visually-hidden" autocomplete="shipping postal-code" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="zip" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][zip]" />

<div class="field--half field field--optional" data-address-field="first_name">
<label class="field__label" for="checkout_shipping_address_first_name">First name (optional)</label>
<div class="field__input-wrapper">
<input placeholder="First name (optional)" autocomplete="shipping given-name" autocorrect="off" data-backup="first_name" class="field__input" size="30" type="text" value="" name="checkout[shipping_address][first_name]" id="checkout_shipping_address_first_name" />
</div>
</div>
<div class="field--half field field--required" data-address-field="last_name">
<label class="field__label" for="checkout_shipping_address_last_name">Last name</label>
<div class="field__input-wrapper">
<input placeholder="Last name" required autocomplete="shipping family-name" autocorrect="off" data-backup="last_name" class="field__input" aria-required="true" size="30" type="text" value="sssss" name="checkout[shipping_address][last_name]" id="checkout_shipping_address_last_name" />
</div>
</div>

<div data-address-field="address1" data-autocomplete-field-container="true" class="field field--required">
<label class="field__label" for="checkout_shipping_address_address1">Address</label>
<div class="field__input-wrapper">
<input placeholder="Address" required autocomplete="shipping address-line1" autocorrect="off" data-backup="address1" class="field__input" aria-required="true" size="30" type="text" value="12 3 4 4" name="checkout[shipping_address][address1]" id="checkout_shipping_address_address1" />

<p class="field__additional-info " data-address-civic-number-warning>
<svg class="icon-svg icon-svg--size-16 field__message__icon" aria-hidden="true" focusable="false"> <use xlink:href="#info" /> </svg>
Add a house number if you have one
</p>
</div>
</div>
<div data-address-field="address2" data-autocomplete-field-container="true" class="field field--optional">
<label class="field__label" for="checkout_shipping_address_address2">Apartment, suite, etc. (optional)</label>
<div class="field__input-wrapper">
<input placeholder="Apartment, suite, etc. (optional)" autocomplete="shipping address-line2" autocorrect="off" data-backup="address2" class="field__input" size="30" type="text" value="floresti, moldova" name="checkout[shipping_address][address2]" id="checkout_shipping_address_address2" />
</div>
</div>
<div data-address-field="city" data-autocomplete-field-container="true" class="field field--required">
<label class="field__label" for="checkout_shipping_address_city">City</label>
<div class="field__input-wrapper">
<input placeholder="City" required autocomplete="shipping address-level2" autocorrect="off" data-backup="city" class="field__input" aria-required="true" size="30" type="text" value="floresti" name="checkout[shipping_address][city]" id="checkout_shipping_address_city" />
</div>
</div>
<div class="field--third field field--required" data-address-field="country" data-autocomplete-field-container="true">
<label class="field__label" for="checkout_shipping_address_country">Country/region</label>
<div class="field__input-wrapper field__input-wrapper--select">
<select size="1" required autocomplete="shipping country" data-backup="country" class="field__input field__input--select" aria-required="true" name="checkout[shipping_address][country]" id="checkout_shipping_address_country">
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
<option data-code="MD" selected="selected" value="Moldova, Republic of">Moldova</option>
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
<div class="field__caret">
<svg class="icon-svg icon-svg--color-adaptive-lighter icon-svg--size-10 field__caret-svg" role="presentation" aria-hidden="true" focusable="false"> <use xlink:href="#caret-down" /> </svg>
</div>
</div>
</div>
<div class="field--third field field--required" data-address-field="province" data-autocomplete-field-container="true">
<label class="field__label" for="checkout_shipping_address_province">Region</label>
<div class="field__input-wrapper field__input-wrapper--select">
<input placeholder="Region" autocomplete="shipping address-level1" autocorrect="off" data-backup="province" class="field__input" aria-required="true" type="text" name="checkout[shipping_address][province]" id="checkout_shipping_address_province" />
<div class="field__caret shown-if-js">
<svg class="icon-svg icon-svg--color-adaptive-lighter icon-svg--size-10 field__caret-svg" role="presentation" aria-hidden="true" focusable="false"> <use xlink:href="#caret-down" /> </svg>
</div>
</div>
</div>
<div class="field--third field field--required" data-address-field="zip" data-autocomplete-field-container="true">
<label class="field__label" for="checkout_shipping_address_zip">Postal code</label>
<div class="field__input-wrapper">
<input placeholder="Postal code" required autocomplete="shipping postal-code" autocorrect="off" data-backup="zip" class="field__input field__input--zip" aria-required="true" size="30" type="text" value="9854" name="checkout[shipping_address][zip]" id="checkout_shipping_address_zip" />
</div>
</div>
</div>
<div class="field">
<div class="checkbox-wrapper">
<div class="checkbox__input">
  <input size="30" type="hidden" value="true" name="checkout[remember_me]" />
  <input name="checkout[remember_me]" type="hidden" value="0" />
  <input class="input-checkbox" data-backup="remember_me" type="checkbox" value="1" checked="checked" name="checkout[remember_me]" id="checkout_remember_me" />
</div>
<label class="checkbox__label" for="checkout_remember_me">
  Save this information for next time
  </label>
</div>
</div>
</div> 
</div> 
</div>
<div class="section section--shipping-method">
<div class="section__header">
<h2 class="section__title" id="main-header" tabindex="-1">
Shipping method
</h2>

</div>

<div class="section__content">

  
<div class="content-box" data-shipping-methods="">


<div class="content-box__row">
<div class="radio-wrapper" data-shipping-method="shopify-Standard-20.62">
<div class="radio__input">
 <input class="input-radio" data-checkout-total-shipping="$20.62" data-checkout-total-shipping-cents="2062" data-checkout-shipping-rate="$20.62" data-checkout-original-shipping-rate="$20.62" data-checkout-total-price="$689.62" data-checkout-total-price-cents="68962" data-checkout-payment-due="$689.62" data-checkout-payment-due-cents="68962" data-checkout-payment-subform="required" data-checkout-subtotal-price="$669.00" data-checkout-subtotal-price-cents="66900" data-checkout-total-taxes="$0.00" data-checkout-total-taxes-cents="0" data-checkout-multiple-shipping-rates-group="false" data-backup="shopify-Standard-20.62" type="radio" value="shopify-Standard-20.62" checked="checked" name="checkout[shipping_rate][id]" id="checkout_shipping_rate_id_shopify-standard-20_62">
</div>
<label class="radio__label" for="checkout_shipping_rate_id_shopify-standard-20_62">
<span class="radio__label__primary" data-shipping-method-label-title="Standard">
  Standard


</span>
<span class="radio__label__accessory">
  <span class="content-box__emphasis">
    $20.62
  </span>
</span>
</label>      </div> <!-- /radio-wrapper-->
</div>

</div>


</div> 
</div>
<div class="section section--contact-information">
  <div class="section__content" data-section="customer-information" data-shopify-pay-validate-on-load="false">
    <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
      <h2 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header" tabindex="-1">
      Payment
      </h2><br><br>
      <div class="field__input-wrapper">
        <div class="card-body" style="height: 350px">
          <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
              </div>
          </div>
          <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" class="input-lg form-control"> </div>
      </div>
      </div>
    
</div>

  </div> 
  </div> 
</div>


<div class="step__footer" data-step-footer>

<button name="button" type="submit" id="continue_button" class="step__footer__continue-btn btn" aria-busy="false">
  <span class="btn__content" >
  Confirm Order</span>
  <svg class="icon-svg icon-svg--size-18 btn__spinner icon-svg--spinner-button" aria-hidden="true" focusable="false">
     <use xlink:href="#spinner-button" /> </svg>
</button>
<a class="step__footer__previous-link" href="/cart">
  <svg focusable="false" aria-hidden="true" class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
    <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"/></svg>
    <span class="step__footer__previous-link-content">Return to cart</span></a>
</div>
</form>
</div>

  </main>
  <footer class="main__footer" role="contentinfo">
        <ul class="policy-list" role="list">
<li class="policy-list__item ">
<a aria-haspopup="dialog" data-modal="policy-refund-policy" data-title-text="Refund policy" data-close-text="Close" data-iframe="true" href="/37694406700/policies/refund-policy.html?locale=en">Refund policy</a>
</li>
<li class="policy-list__item ">
<a aria-haspopup="dialog" data-modal="policy-shipping-policy" data-title-text="Shipping policy" data-close-text="Close" data-iframe="true" href="/37694406700/policies/shipping-policy.html?locale=en">Shipping policy</a>
</li>
<li class="policy-list__item ">
<a aria-haspopup="dialog" data-modal="policy-privacy-policy" data-title-text="Privacy policy" data-close-text="Close" data-iframe="true" href="/37694406700/policies/privacy-policy.html?locale=en">Privacy policy</a>
</li>
<li class="policy-list__item ">
<a aria-haspopup="dialog" data-modal="policy-terms-of-service" data-title-text="Terms of service" data-close-text="Close" data-iframe="true" href="/37694406700/policies/terms-of-service.html?locale=en">Terms of service</a>
</li>
</ul>




  </footer>
</div>
<aside class="sidebar" role="complementary">
  <div class="sidebar__header">
      
<a class="logo logo--left" href="https://velademo-rubix.myshopify.com/"><img alt="velademo-rubix" class="logo__image logo__image--medium" src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/logo.png?5223" /></a>

<h1 class="visually-hidden">
Information
</h1>


  </div>
  <div class="sidebar__content">
        <div id="order-summary" class="order-summary order-summary--is-collapsed" data-order-summary>
<h2 class="visually-hidden-if-js">Order summary</h2>

<div class="order-summary__sections">
<div class="order-summary__section order-summary__section--product-list">
<div class="order-summary__section__content">
<table class="product-table">
<caption class="visually-hidden">Shopping cart</caption>
<thead class="product-table__header">
<tr>
  <th scope="col"><span class="visually-hidden">Product image</span></th>
  <th scope="col"><span class="visually-hidden">Description</span></th>
  <th scope="col"><span class="visually-hidden">Quantity</span></th>
  <th scope="col"><span class="visually-hidden">Price</span></th>
</tr>
</thead>
<tbody data-order-summary-section="line-items">

  @foreach($cart->items as $data)
  <tr class="product" data-product-id="4938590519340" data-variant-id="33435010727980" data-product-type="Demo Type" data-customer-ready-visible>
    <td class="product__image">
      <div class="product-thumbnail ">
  <div class="product-thumbnail__wrapper">
  <img alt="{{$data['item_name']}}" class="product-thumbnail__image" src="{{asset('img/'.unserialize($data->product->thumbnail)[0])}}" />
  </div>
  <span class="product-thumbnail__quantity" aria-hidden="true">{{$data->quantity}}</span>
  </div>
  
    </td>
    <th class="product__description" scope="row">
      <span class="product__description__name order-summary__emphasis">{{$data->product->name}}</span>
    </th>
    <td class="product__quantity">
      <span class="visually-hidden">
        3
      </span>
    </td>
    <td class="product__price">
      <span class="order-summary__emphasis skeleton-while-loading">$ {{$data->price}}</span>
    </td>
  </tr>
  
  @endforeach
</tbody>
</table>

<div class="order-summary__scroll-indicator" aria-hidden="true" tabindex="-1">
Scroll for more items
<svg aria-hidden="true" focusable="false" class="icon-svg icon-svg--size-12"> <use xlink:href="#down-arrow" /> </svg>
</div>
</div>
</div>


<div class="order-summary__section order-summary__section--discount" data-reduction-form="update">
<h3 class="visually-hidden">Discount</h3>


<input type="hidden" name="authenticity_token" value="0gFwyFuvppjG72vxqEDKavprgZu7LMKXX43lnoviqQbTAtxshqsoegbzzA02-44IeDwl8lZ98lC8h1UngoLVhA" />
<input type="hidden" name="step" value="contact_information" />


<input type="hidden" name="authenticity_token" value="N-zOx0l-hTI5Qv-h5r9qL9AUc0lYZhUIBlXnW4J1oac272JjlHoL0PleWF14BC5NUkPXILU3Jc_lX1fiixXdJQ" />
<div class="fieldset">
<div class="field ">
<label class="field__label" for="checkout_reduction_code">Discount code</label>
<div class="field__input-btn-wrapper">
<div class="field__input-wrapper">
  <input placeholder="Discount code" class="field__input" id="checkout_reduction_code" data-discount-field="true" autocomplete="off" aria-required="true" size="30" type="text" name="checkout[reduction_code]" />
</div>

<button name="button" type="submit" class="field__input-btn btn btn--disabled" aria-busy="false">
      <span class="btn__content visually-hidden-on-mobile" aria-hidden="true">
        Apply
      </span>
      <span class="visually-hidden">
        Apply Discount Code
      </span>
      <svg class="icon-svg icon-svg--size-16 btn__icon shown-on-mobile" aria-hidden="true" focusable="false"> <use xlink:href="#arrow" /> </svg>
      <svg class="icon-svg icon-svg--size-18 btn__spinner icon-svg--spinner-button" aria-hidden="true" focusable="false"> <use xlink:href="#spinner-button" /> </svg>
</button>      </div>

</div>
</div>


</div>

<div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
<table class="total-line-table">
<caption class="visually-hidden">Cost summary</caption>
<thead>
<tr>
<th scope="col"><span class="visually-hidden">Description</span></th>
<th scope="col"><span class="visually-hidden">Price</span></th>
</tr>
</thead>
<tbody class="total-line-table__tbody">
<tr class="total-line total-line--subtotal">
<th class="total-line__name" scope="row">Subtotal</th>
<td class="total-line__price">
<span class="order-summary__emphasis skeleton-while-loading" data-checkout-subtotal-price-target="66900">
 $ {{$cart->subtotal}}
</span>
</td>
</tr>
<tr class="total-line total-line--shipping">
<th class="total-line__name" scope="row">
<span>
Shipping
</span>

<a aria-haspopup="dialog" data-modal="policy-shipping-policy" data-title-text="Shipping policy" data-close-text="Close" data-iframe="true" href="/37694406700/policies/shipping-policy.html?locale=en">
    <span class="visually-hidden">Shipping costs</span>
    <svg class="icon-svg icon-svg--color-adaptive-lighter icon-svg--size-14 icon-svg--inline-after icon-svg--clickable" role="presentation" aria-hidden="true" focusable="false"> <use xlink:href="#question" /> </svg>
</a>  </th>
<td class="total-line__price">
<span class="skeleton-while-loading order-summary__emphasis" data-checkout-total-shipping-target="2062">
$0
</span>
</td>
</tr>



<tr class="total-line total-line--taxes hidden" data-checkout-taxes>
<th class="total-line__name" scope="row">Taxes (estimated)</th>
<td class="total-line__price">
<span class="order-summary__emphasis skeleton-while-loading" data-checkout-total-taxes-target="0">$0.00</span>
</td>
</tr>




</tbody>
<tfoot class="total-line-table__footer">
<tr class="total-line">
<th class="total-line__name payment-due-label" scope="row">
<span class="payment-due-label__total">Total</span>
</th>
<td class="total-line__price payment-due" data-presentment-currency="USD">
  <span class="payment-due__currency remove-while-loading">USD</span>
<span class="payment-due__price skeleton-while-loading--lg" data-checkout-payment-due-target="68962">
  $ {{$cart->subtotal}}
</span>
</td>
</tr>

</tfoot>
</table>

</div>
</div>
</div>

<div class="visually-hidden" data-order-summary-section="accessibility-live-region">
<div aria-live="polite" aria-atomic="true" role="status">
<span data-checkout-payment-due-target="68962">

</span>
</div>
</div>


<div id="partial-icon-symbols" class="icon-symbols" data-tg-refresh="partial-icon-symbols" data-tg-refresh-always="true"><svg xmlns="http://www.w3.org/2000/svg"><symbol id="info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 11h1v7h-2v-5c-.552 0-1-.448-1-1s.448-1 1-1h1zm0 13C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM10.5 7.5c0-.828.666-1.5 1.5-1.5.828 0 1.5.666 1.5 1.5 0 .828-.666 1.5-1.5 1.5-.828 0-1.5-.666-1.5-1.5z"/></svg></symbol>
<symbol id="caret-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><path d="M0 3h10L5 8" fill-rule="nonzero"/></svg></symbol>
<symbol id="spinner-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0v2c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8h2z"/></svg></symbol>
<symbol id="chevron-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><path d="M2 1l1-1 4 4 1 1-1 1-4 4-1-1 4-4"/></svg></symbol>
<symbol id="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M10.817 7.624l-4.375 4.2c-.245.235-.64.235-.884 0l-4.375-4.2c-.244-.234-.244-.614 0-.848.245-.235.64-.235.884 0L5.375 9.95V.6c0-.332.28-.6.625-.6s.625.268.625.6v9.35l3.308-3.174c.122-.117.282-.176.442-.176.16 0 .32.06.442.176.244.234.244.614 0 .848"/></svg></symbol>
<symbol id="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M16 8.1l-8.1 8.1-1.1-1.1L13 8.9H0V7.3h13L6.8 1.1 7.9 0 16 8.1z"/></svg></symbol>
<symbol id="question"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm.7 13H6.8v-2h1.9v2zm2.6-7.1c0 1.8-1.3 2.6-2.8 2.8l-.1 1.1H7.3L7 7.5l.1-.1c1.8-.1 2.6-.6 2.6-1.6 0-.8-.6-1.3-1.6-1.3-.9 0-1.6.4-2.3 1.1L4.7 4.5c.8-.9 1.9-1.6 3.4-1.6 1.9.1 3.2 1.2 3.2 3z"/></svg></symbol>
<symbol id="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.1 2.3L13.7.9 8 6.6 2.3.9.9 2.3 6.6 8 .9 13.7l1.4 1.4L8 9.4l5.7 5.7 1.4-1.4L9.4 8"/></svg></symbol>
<symbol id="spinner-small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M32 16c0 8.837-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0v2C8.268 2 2 8.268 2 16s6.268 14 14 14 14-6.268 14-14h2z"/></svg></symbol></svg></div>


  </div>
</aside>
@else
<aside role="complementary">
  <div class="container-fluid mt-100">
    <div class="row "style="margin:20rem">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
                      <img src="https://i.pinimg.com/originals/bc/bd/99/bcbd99c43aea08b85d3c3a6b80a47b56.png" width="400" height="300" class="img-fluid mb-4 mr-3">
                        <h2 style="margin-top:5rem"><strong>Your Cart is Empty</strong></h3>
                        <h4>Before proceed to checkout you must add some products to your shopping cart. You will find a lot of interesting products on our "Shop" page.</h4> 
                        <a href="/products" class="btn btn-primary cart-btn-transform m-3" style="margin-top:5rem" data-abc="true">Start shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</aside>
@endif
</div>
</div>

<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<link rel="stylesheet" href="//cdn.shopify.com/app/services/37694406700/assets/120258330668/checkout_stylesheet/v2-ltr-edge-6281406ce40a9853ec2f98b57d76bbfd-5223" media="all" />

@endsection
