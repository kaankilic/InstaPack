@extends('instapack::layouts.app')

@section('content')
<div class="panel">
	<p class="lead">Please set your User/Company settings on below</p>
	<form action="{{route('instapack::post.user')}}" method="POST" role="form">
		<legend>Create Primary User</legend>
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="Username" class="form-control" id="" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="Password" class="form-control" id="" placeholder="Input field">
		</div>
		<legend>Create Your Company</legend>
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="Title" class="form-control" id="" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Address1</label>
			<input type="text" name="Address1" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Address2</label>
			<input type="text" name="Address2" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">ZipCode</label>
			<input type="text" name="ZipCode" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">City</label>
			<input type="text" name="City" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Country</label>
			<select name="CountryID" class="form-control">
				<option value="1">Afghanistan</option>
				<option value="2">Albania</option>
				<option value="3">Algeria</option>
				<option value="4">American Samoa</option>
				<option value="5">Andorra</option>
				<option value="6">Angola</option>
				<option value="7">Anguilla</option>
				<option value="8">Antigua and Barbuda</option>
				<option value="9">Argentina</option>
				<option value="10">Armenia</option>
				<option value="11">Aruba</option>
				<option value="12">Australia</option>
				<option value="13">Austria</option>
				<option value="14">Azerbaijan</option>
				<option value="15">Bahamas</option>
				<option value="16">Bahrain</option>
				<option value="17">Bangladesh</option>
				<option value="18">Barbados</option>
				<option value="19">Belarus</option>
				<option value="20">Belgium</option>
				<option value="21">Belize</option>
				<option value="22">Benin</option>
				<option value="23">Bermuda</option>
				<option value="24">Bhutan</option>
				<option value="25">Bolivia</option>
				<option value="26">Bosnia and Herzegovina</option>
				<option value="27">Botswana</option>
				<option value="28">Brunei Darussalam</option>
				<option value="29">Bulgaria</option>
				<option value="30">Burkina Faso</option>
				<option value="31">Burundi</option>
				<option value="32">Cambodia</option>
				<option value="33">Cameroon</option>
				<option value="34">Canada</option>
				<option value="35">Cape Verde</option>
				<option value="36">Cayman Islands</option>
				<option value="37">Central African Republic</option>
				<option value="38">Chad</option>
				<option value="39">Chile</option>
				<option value="40">China</option>
				<option value="41">Colombia</option>
				<option value="42">Comoros</option>
				<option value="43">Congo</option>
				<option value="44">Congo, the Democratic Republic of the</option>
				<option value="45">Cook Islands</option>
				<option value="46">Costa Rica</option>
				<option value="47">Cote D\'Ivoire</option>
				<option value="48">Croatia</option>
				<option value="49">Cuba</option>
				<option value="50">Cyprus</option>
				<option value="51">Czech Republic</option>
				<option value="52">Denmark</option>
				<option value="53">Djibouti</option>
				<option value="54">Dominica</option>
				<option value="55">Dominican Republic</option>
				<option value="56">Ecuador</option>
				<option value="57">Egypt</option>
				<option value="58">El Salvador</option>
				<option value="59">Equatorial Guinea</option>
				<option value="60">Eritrea</option>
				<option value="61">Estonia</option>
				<option value="62">Ethiopia</option>
				<option value="63">Falkland Islands (Malvinas)</option>
				<option value="64">Faroe Islands</option>
				<option value="65">Fiji</option>
				<option value="66">Finland</option>
				<option value="67">France</option>
				<option value="68">French Guiana</option>
				<option value="69">French Polynesia</option>
				<option value="70">Gabon</option>
				<option value="71">Gambia</option>
				<option value="72">Georgia</option>
				<option value="73">Germany</option>
				<option value="74">Ghana</option>
				<option value="75">Gibraltar</option>
				<option value="76">Greece</option>
				<option value="77">Greenland</option>
				<option value="78">Grenada</option>
				<option value="79">Guadeloupe</option>
				<option value="80">Guam</option>
				<option value="81">Guatemala</option>
				<option value="82">Guinea</option>
				<option value="83">Guinea-Bissau</option>
				<option value="84">Guyana</option>
				<option value="85">Haiti</option>
				<option value="86">Holy See (Vatican City State)</option>
				<option value="87">Honduras</option>
				<option value="88">Hong Kong</option>
				<option value="89">Hungary</option>
				<option value="90">Iceland</option>
				<option value="91">India</option>
				<option value="92">Indonesia</option>
				<option value="93">Iran, Islamic Republic of</option>
				<option value="94">Iraq</option>
				<option value="95">Ireland</option>
				<option value="96">Israel</option>
				<option value="97">Italy</option>
				<option value="98">Jamaica</option>
				<option value="99">Japan</option>
				<option value="100">Jordan</option>
				<option value="101">Kazakhstan</option>
				<option value="102">Kenya</option>
				<option value="103">Kiribati</option>
				<option value="104">Korea, Democratic People\'s Republic of</option>
				<option value="105">Korea, Republic of</option>
				<option value="106">Kuwait</option>
				<option value="107">Kyrgyzstan</option>
				<option value="108">Lao People\'s Democratic Republic</option>
				<option value="109">Latvia</option>
				<option value="110">Lebanon</option>
				<option value="111">Lesotho</option>
				<option value="112">Liberia</option>
				<option value="113">Libyan Arab Jamahiriya</option>
				<option value="114">Liechtenstein</option>
				<option value="115">Lithuania</option>
				<option value="116">Luxembourg</option>
				<option value="117">Macao</option>
				<option value="118">Macedonia, the Former Yugoslav Republic of</option>
				<option value="119">Madagascar</option>
				<option value="120">Malawi</option>
				<option value="121">Malaysia</option>
				<option value="122">Maldives</option>
				<option value="123">Mali</option>
				<option value="124">Malta</option>
				<option value="125">Marshall Islands</option>
				<option value="126">Martinique</option>
				<option value="127">Mauritania</option>
				<option value="128">Mauritius</option>
				<option value="129">Mexico</option>
				<option value="130">Micronesia, Federated States of</option>
				<option value="131">Moldova, Republic of</option>
				<option value="132">Monaco</option>
				<option value="133">Mongolia</option>
				<option value="134">Montserrat</option>
				<option value="135">Morocco</option>
				<option value="136">Mozambique</option>
				<option value="137">Myanmar</option>
				<option value="138">Namibia</option>
				<option value="139">Nauru</option>
				<option value="140">Nepal</option>
				<option value="141">Netherlands</option>
				<option value="142">Netherlands Antilles</option>
				<option value="143">New Caledonia</option>
				<option value="144">New Zealand</option>
				<option value="145">Nicaragua</option>
				<option value="146">Niger</option>
				<option value="147">Nigeria</option>
				<option value="148">Niue</option>
				<option value="149">Norfolk Island</option>
				<option value="150">Northern Mariana Islands</option>
				<option value="151">Norway</option>
				<option value="152">Oman</option>
				<option value="153">Pakistan</option>
				<option value="154">Palau</option>
				<option value="155">Panama</option>
				<option value="156">Papua New Guinea</option>
				<option value="157">Paraguay</option>
				<option value="158">Peru</option>
				<option value="159">Philippines</option>
				<option value="160">Pitcairn</option>
				<option value="161">Poland</option>
				<option value="162">Portugal</option>
				<option value="163">Puerto Rico</option>
				<option value="164">Qatar</option>
				<option value="165">Reunion</option>
				<option value="166">Romania</option>
				<option value="167">Russian Federation</option>
				<option value="168">Rwanda</option>
				<option value="169">Saint Helena</option>
				<option value="170">Saint Kitts and Nevis</option>
				<option value="171">Saint Lucia</option>
				<option value="172">Saint Pierre and Miquelon</option>
				<option value="173">Saint Vincent and the Grenadines</option>
				<option value="174">Samoa</option>
				<option value="175">San Marino</option>
				<option value="176">Sao Tome and Principe</option>
				<option value="177">Saudi Arabia</option>
				<option value="178">Senegal</option>
				<option value="179">Seychelles</option>
				<option value="180">Sierra Leone</option>
				<option value="181">Singapore</option>
				<option value="182">Slovakia</option>
				<option value="183">Slovenia</option>
				<option value="184">Solomon Islands</option>
				<option value="185">Somalia</option>
				<option value="186">South Africa</option>
				<option value="187">Spain</option>
				<option value="188">Sri Lanka</option>
				<option value="189">Sudan</option>
				<option value="190">Suriname</option>
				<option value="191">Svalbard and Jan Mayen</option>
				<option value="192">Swaziland</option>
				<option value="193">Sweden</option>
				<option value="194">Switzerland</option>
				<option value="195">Syrian Arab Republic</option>
				<option value="196">Taiwan, Province of China</option>
				<option value="197">Tajikistan</option>
				<option value="198">Tanzania, United Republic of</option>
				<option value="199">Thailand</option>
				<option value="200">Togo</option>
				<option value="201">Tokelau</option>
				<option value="202">Tonga</option>
				<option value="203">Trinidad and Tobago</option>
				<option value="204">Tunisia</option>
				<option value="205">Turkey</option>
				<option value="206">Turkmenistan</option>
				<option value="207">Turks and Caicos Islands</option>
				<option value="208">Tuvalu</option>
				<option value="209">Uganda</option>
				<option value="210">Ukraine</option>
				<option value="211">United Arab Emirates</option>
				<option value="212">United Kingdom</option>
				<option value="213">United States</option>
				<option value="214">Uruguay</option>
				<option value="215">Uzbekistan</option>
				<option value="216">Vanuatu</option>
				<option value="217">Venezuela</option>
				<option value="218">Viet Nam</option>
				<option value="219">Virgin Islands, British</option>
				<option value="220">Virgin Islands, U.s.</option>
				<option value="221">Wallis and Futuna</option>
				<option value="222">Western Sahara</option>
				<option value="223">Yemen</option>
				<option value="224">Zambia</option>
				<option value="225">Zimbabwe</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" name="Phone" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="Email" class="form-control" id="" placeholder="Input field">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@stop