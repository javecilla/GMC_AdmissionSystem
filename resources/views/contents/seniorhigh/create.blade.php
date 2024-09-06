<x-app-layout title="Admission - SHS">
  <x-slot name="description">
  	{{ __('GMC Senior High School effectively equips students with above level skills.
  	Seize your future! Enroll now at GMC Senior High. Dream big, aim higher. New students and transferees are welcome at all levels. Your journey starts here!') }}
  </x-slot>
  <x-section class="bg-white mb-3 ">
	  <img src="{{ asset('/global/assets/images/header6.PNG') }}"
	  	class="card-img-top" alt="header" loading="lazy"/>
	</x-section>
  <x-section>
  	<x-app-container class="mb-5">
  		{{-- Note Alert --}}
			<div class="alert alert-warning alert-dismissible fade show d-flex align-items-center rounded-4">
				<div>
					<p><i class="fa-solid fa-circle-info bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i><strong>{{ __('Important Notice:') }}</strong></p>
					<span class="alert_description">
						{{ __('The submission of inaccurate or falsified information will result in disqualification of the applicant from admission to Golden Minds Colleges. Please be advised that all fields marked with "*" are mandatory, and providing truthful and accurate information is crucial for a successful application process.')
						}}
					</span>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
			{{-- Form Card--}}
			<x-card class="form_card border-0">
				{{-- Form Content --}}
				<x-form method="POST" action="{{ route('application.store') }}" id="seniorHighForm">
					{{-- Progess Bar --}}
          <ul id="progressbar">
            <li class="active" id="applyingFor"><strong>{{ __('Applying For') }}</strong></li>
            <li id="personalInformation"><strong>{{ __('Personal Information') }}</strong></li>
           	<li id="addressDetails"><strong>{{ __('Address and Contact Details') }}</strong></li>
            <li id="finishRegistration"><strong>{{ __('Finalize Application Form') }}</strong></li>
          </ul>

					<x-step-one> {{-- step 1 --}}
						<fieldset>
							{{-- Grade Level --}}
							<div class="row mb-3">
							  <label for="gradeLevel" class="col-sm-2 col-form-label">
							    {{ __('Grade Level') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10">
							    <select name="gradeLevel" id="gradeLevel" class="form-select gradeLevel">
							      <option value="" selected>{{ __('-- SELECT --') }}</option>
							      <option value="Grade 11">{{ __('Grade 11') }}</option>
							      <option value="Grade 12">{{ __('Grade 12') }}</option>
							    </select>
							    <div class="invalid-feedback gradeLevelInvalid"></div>
							  </div>
							</div>
							{{-- School Year --}}
							<div class="row mb-3">
							  <label for="schoolYear" class="col-sm-2 col-form-label">
							   	{{ __('School Year') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 schoolYearField">
							    {{-- data fetch via loop --}}
							  </div>
							</div>
							{{-- Semester --}}
							<div class="row mb-3">
							  <label for="semester" class="col-sm-2 col-form-label">
							   	{{ __('Semester') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10">
							    <select name="semester" id="semester" class="form-select semester">
							     	<option value="" selected>{{ __('-- SELECT --') }}</option>
							      <option value="1st Semester">{{ __('1st Semester') }}</option>
							     	<option value="2nd Semester">{{ __('2nd Semester') }}</option>
							    </select>
							  	<div class="invalid-feedback semesterInvalid"></div>
								</div>
							</div>
							{{-- School Branch/Campus --}}
							<div class="row mb-3">
							  <label for="branchCampus" class="col-sm-2 col-form-label">
							    {{ __('School Branch/Campus') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10">
							    <small class="text-muted">
							    	{{ __('Select your preferred Golden Minds Branch/Campus.') }}
							    </small>
							    <select name="branchCampus" id="branchCampus" class="form-select branchCampus">
							     	<option value="" selected>{{ __('-- SELECT --') }}</option>
							      <option value="Golden Minds Colleges of Balagtas, Bulacan, Inc.">
							      	{{ __('Golden Minds Colleges of Balagtas, Bulacan, Inc.') }}
							      </option>
							      <option value="Golden Minds Colleges of Sta. Maria, Bulacan, Inc.">
							      	{{ __('Golden Minds Colleges of Sta. Maria, Bulacan, Inc.') }}
							      </option>
							      <option value="Golden Minds Colleges of Pandi, Bulacan, Inc.">
							      	{{ __('Golden Minds Colleges of Pandi, Bulacan, Inc.') }}
							      </option>
							    </select>
							    <div class="invalid-feedback branchCampusInvalid"></div>
							  </div>
							</div>
							{{-- Track/Strand--}}
							<div class="row mb-3">
							  <label for="strandList" class="col-sm-2 col-form-label">
							   	{{ __('Track/Strand') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 trackOrStrandsField">
							   	{{-- data fetch via loop --}}
							  </div>
							</div>
							{{-- LRN --}}
							<div class="row mb-3">
							  <label for="LRN" class="col-sm-2 col-form-label">
							   	{{ __('LRN') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10">
							    <input type="number" class="form-control LRN" id="LRN" placeholder="Enter your LRN..."/>
							    <div class="invalid-feedback LRNInvalid"></div>
							  </div>
							</div>
							<hr class="text-muted" />{{-- Button next --}}
							<div class="d-flex justify-content-center align-items-center">
								<div class="buttons">
									<a href="{{ route('application.index') }}" class="btn btn-light back_button">
							  		{{ __('Back') }}
			 						</a>
								 	<button type="button" class="btn btn-light next_button" id="firstStepBtn">
								  	{{ __('Next') }}
				 						<i class="fa-solid fa-arrow-right"></i>
				 					</button>
								</div>
							</div>
						</fieldset>
					</x-step-one>

					<x-step-two> {{-- step 2 --}}
						<fieldset>
						  {{-- Full Name --}}
							<div class="row mb-3">
							  <label for="Full Name" class="col-sm-2 col-form-label">
							    {{ __('Full Name') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10">
							    <small class="text-muted">
							    	{{ __('Your complete name based on your PSA birth certificate.') }}
							   	</small>
							    <div class="row">
							    	<div class="col-md-6 ">
							    		<input type="text" class="form-control mb-2 lastName" id="lastName"
							    			placeholder="Last Name"
							    		/>
							    		<div class="invalid-feedback lastNameInvalid mb-2"></div>

							    		<input type="text" class="form-control mb-2 firstName" id="firstName"
							      		placeholder="First Name"
							      	/>
							      	<div class="invalid-feedback firstNameInvalid mb-2"></div>
							    	</div>
							    	<div class="col-md-6">
							    		<input type="text" class="form-control mb-2" id="extensionName"
							      		placeholder="Ext. Name (Optional)"
							      	/>
							      	<input type="text" class="form-control mb-2" id="middleName"
							      		placeholder="Middle Name (Optional)"
							      	/>
							    	</div>
							    </div>
							  </div>
							</div>
							{{-- Gender --}}
							<div class="row mb-3">
							  <label for="Gender" class="col-sm-2 col-form-label">
							    {{ __('Gender') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 ">
							    <div class="form-control gender">
									  <label><input type="radio" class="genderRadio" name="gender" value="M"/> {{ __('Male') }}</label>&nbsp;
									  <label><input type="radio" class="genderRadio" name="gender" value="F"/> {{ __('Female') }}</label>
									  <input type="hidden" id="genderSelected"/>
								  </div>
								  <div class="invalid-feedback genderInvalid"></div>
							  </div>
							</div>
							{{-- Birthday --}}
							<div class="row mb-3">
							  <label for="birthday" class="col-sm-2 col-form-label">
							    {{ __('Birthday') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 ">
							  	<small class="text-muted">
							    	{{ __('Type or select your bithday with following format: mm/dd/yyyy e.g., 03/24/2004') }}
							    </small>
							   	<div class="input-group">
	  								<input type="date" id="birthday" class="form-control birthday"/>
	  								<div class="invalid-feedback birthdayInvalid"></div>
										<div class="input-group-text ageGroup">{{ __('Age:') }}
											<span class="age" id="age">0</span>
										</div>
									</div>
							  </div>
							</div>
							{{-- Place of Birth --}}
							<div class="row mb-3">
							  <label for="Place of Birth" class="col-sm-2 col-form-label">
							   	{{ __('Place of Birth') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 ">
							    <small class="text-muted">
							    	{{ __('Your complete place of birth based on your PSA birth certificate.') }}
							    </small>
							    <input type="text" id="placeOfBirth" class="form-control placeOfBirth"
							    	placeholder="Your place of birth"
							    />
							    <div class="invalid-feedback placeOfBirthInvalid"></div>
							  </div>
							</div>
							{{-- Nationality --}}
							<div class="row mb-3">
							  <label for="Nationality" class="col-sm-2 col-form-label">
							   	{{ __('Nationality') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 ">
							   	<input type="text" id="nationality" class="form-control nationality"
							   		placeholder="Your nationality"
							   	/>
							   	<div class="invalid-feedback nationalityInvalid"></div>
							  </div>
							</div>
							{{-- Religion --}}
							<div class="row mb-3">
							  <label for="Religion" class="col-sm-2 col-form-label">
							   	{{ __('Religion') }} <span class="text-danger">*</span>
							  </label>
							  <div class="col-sm-10 ">
							    <input type="text" id="religion" class="form-control religion"
							    	placeholder="Your religion"
							    />
							    <div class="invalid-feedback religionInvalid"></div>
							  </div>
							</div>
						 	<hr class="text-muted" /> {{--buttons--}}
						 	<div class="d-flex justify-content-center align-items-center">
								<div class="buttons">
								  <button type="button" class="btn btn-light back_button" id="backToFirstStepBtn">
								  	{{ __('Previous') }}
				 					</button>
								  <button type="button" class="btn btn-light next_button" id="secondStepBtn">
								  	{{ __('Next') }}
				 						<i class="fa-solid fa-arrow-right"></i>
				 					</button>
								</div>
							</div>
						</fieldset>
				 	</x-step-two>

				 	<x-step-three> 	{{-- step 3 --}}
				 		<fieldset>
						  {{-- Address --}}
						  <div class="row mb-3">
						    <label for="address" class="col-sm-2 col-form-label">
						    	{{ __('Address') }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10 ">
						    	<input type="text" id="address" class="form-control address"
						    		placeholder="e.g., 0324 Ginhawa St."
						    	/>
						    	<div class="invalid-feedback addressInvalid"></div>
						    </div>
						  </div>
						  {{-- Baranggay --}}
						  <div class="row mb-3">
						    <label for="baranggay" class="col-sm-2 col-form-label">
						    	{{ __('Baranggay') }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10 ">
						    	<input type="text" id="baranggay" class="form-control baranggay"
						    		placeholder="e.g., Brgy. San Gabriel"
						    	/>
						    	<div class="invalid-feedback baranggayInvalid"></div>
						    </div>
						  </div>
						  {{-- City / Municipality --}}
						  <div class="row mb-3">
						    <label for="Municipality" class="col-sm-2 col-form-label">
						    	{{ __('City/Municipality') }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10 ">
						    	<input type="text" id="municipality" class="form-control municipality"
						    		placeholder="e.g., Malolos City"
						    	/>
						    	<div class="invalid-feedback municipalityInvalid"></div>
						    </div>
						  </div>
						  {{-- Province / Region --}}
						  <div class="row mb-3">
						    <label for="region" class="col-sm-2 col-form-label">
						    	{{ __('Province/Region') }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10 ">
						    	<input type="text" id="region" class="form-control region"
						    		placeholder="e.g., Bulacan"
						    	/>
						    	<div class="invalid-feedback regionInvalid"></div>
						    </div>
						  </div>
						  {{-- Contact no. --}}
						  <div class="row mb-3">
						    <label for="contactno" class="col-sm-2 col-form-label">
						    	{{ __('Contact No.') }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10 ">
						    	<small class="text-muted">
										{{ __('Enter your active phone number.') }}
						    	</small>
						    	<input type="number" id="contactno" class="form-control contactno"
						    		placeholder="09#######33"
						    	/>
						    	<div class="invalid-feedback contactnoInvalid"></div>
						    </div>
						  </div>
						  {{-- Email address. --}}
						  <div class="row mb-3">
						    <label for="email" class="col-sm-2 col-form-label">
						    	{{ __('Email Address.') }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10 ">
						    	<small class="text-muted">
										{{ __('Enter your active email that your currently used.') }}
						    	</small>
						    	<input type="text" id="email" class="form-control email"
						    		placeholder="sample@gmail.com"
						    	/>
						    	<div class="invalid-feedback emailInvalid"></div>
						    </div>
						  </div>
						  {{--  Parents's Information --}}
						  <div class="row mb-3">
						    <label for="parentsInformation" class="col-sm-2 col-form-label">
						    	{{ __("Parents's Information") }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10">
						    	<div class="row">
						    		<div class="col-md-6">
						    			<input type="text" id="fathersFullName" class="form-control mb-2 fathersFullName"
								      	placeholder="Father's full name (L.N, F.N, M.N)"
								      />
								      <div class="invalid-feedback fathersFullNameInvalid mb-2"></div>
								      <small class=text-muted>{{ __('Leave it blank if not applicable to you.') }}</small>
								      <input type="text" id="fathersOccupation" class="form-control mb-2"
								      	placeholder="Occupation"
								      />
						    		</div>
						    		<div class="col-md-6">
						    			<input type="text" id="mothersFullName" class="form-control mb-2 mothersFullName"
								      	placeholder="Mother's full name (L.N, F.N, M.N)"
								      />
								      <div class="invalid-feedback mothersFullNameInvalid mb-2"></div>
								      <small class=text-muted>{{ __('Leave it blank if not applicable to you.') }}</small>
								      <input type="text" id="mothersOccupation" class="form-control mb-2"
								      	placeholder="Occupation"
								      />
						    		</div>
						    	</div>
						    </div>
						  </div>
						  {{--  Guardian's Information --}}
						  <div class="row mb-3">
						    <label for="guardiansInformation" class="col-sm-2 col-form-label">
						    	{{ __("Guardian's Information") }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10">
						    	<div class="row">
						    		<div class="col-md-6">
						    			<input type="text" id="guardiansFullName" class="form-control mb-2 guardiansFullName"
								      	placeholder="Guardian's full name (L.N, F.N, M.N)"
								      />
								      <div class="invalid-feedback guardiansFullNameInvalid mb-2"></div>
								      <small class=text-muted>{{ __('Leave it blank if not applicable to you.') }}</small>
								      <input type="text" id="guardiansOccupation" class="form-control mb-2"
								      	placeholder="Occupation"
								      />
						    		</div>
						    		<div class="col-md-6">
						    			<input type="number" id="guardiansContactNo" class="form-control mb-2 guardiansContactNo"
								      	placeholder="09#######33"
								      />
								      <div class="invalid-feedback guardiansContactNoInvalid mb-2"></div>
								      <small class="text-muted">
						    				{{ __('Please specify your relationship to your guardian.') }}
						    			</small>
								    	<input type="text" id="guardiansRelationship" class="form-control mb-2 guardiansRelationship"
										    placeholder="Relationship" list="relationship"
										 	/>
										 	<div class="invalid-feedback guardiansRelationshipInvalid mb-2"></div>
						    		</div>
						    	</div>
						    	<small class="text-muted">
						    		{{ __('Complete address of your guardian.') }}
						    	</small>
						    	<input type="text" id="guardiansAddress" class="form-control mb-2 guardiansAddress"
								    placeholder="e.g., 0324 Ginhawa St. Brgy. San Gabriel, Malolos, Bulacan"
								  />
								 	<datalist id="relationship">
									  <option value="Father"/>
									  <option value="Mother"/>
									  <option value="Brother"/>
									  <option value="Sister"/>
									  <option value="Aunt"/>
									</datalist>
									<div class="invalid-feedback guardiansAddressInvalid mb-2"></div>
						    </div>
						  </div>
						  <hr class="text-muted"/>
						  {{--  Referral's Information --}}
						  <div class="row mb-3">
						  	<label for="referralsInformation" class="col-sm-2 col-form-label">
						    	{{ __("Referral's Information") }}
						    </label>
						    <div class="col-sm-10">
						    	<small class="text-muted">
						    		{{ __('Note: Enter your referral information thus Leave it blank if not applicable to you.') }}
						    	</small>
						    	<div class="row">
						    		<div class="col-md-6">
						    			<input type="text" id="referralFullName" class="form-control mb-2"
								      	placeholder="Referral's full name (L.N, F.N, M.N)"
								      />
						    		</div>
						    		<div class="col-md-6">
						    			<input type="number" id="referralContactNo" class="form-control mb-2 referralContactNo"
								      	placeholder="09#######33"
								      />
								      <div class="invalid-feedback referralContactNoInvalid mb-2"></div>
						    		</div>
						    	</div>
						    </div>
						  </div>
					  	<hr class="text-muted" />
					  	<div class="d-flex justify-content-center align-items-center">
							  <div class="buttons">
							  	<button type="button" class="btn btn-light back_button" id="backToSecondStep">
							  		{{ __('Previous') }}
			 						</button>
							  	<button type="button" class="btn btn-light next_button" id="thirdStepBtn">
							  		{{ __('Next') }}
			 							<i class="fa-solid fa-arrow-right"></i>
			 						</button>
							  </div>
							</div>
						</fieldset>
				  </x-step-three>

				  <x-step-four> {{-- step 4 --}}
				  	<fieldset>
						  {{--  Last school attended Information --}}
						  <div class="row mb-3">
						    <label for="lastschoolInformation" class="col-sm-2 col-form-label">
						    	{{ __("Student Last School Attended") }} <span class="text-danger">*</span>
						    </label>
						    <div class="col-sm-10">
						    	<div class="row">
						    		<div class="col-md-6">
						    			<small class="text-muted">Completion Date</small>
						    			<input type="date" id="completionDate" class="form-control mb-2 completionDate" />
						    			<div class="invalid-feedback completionDateInvalid mb-2"></div>
						    			<small class="text-muted">Former School Name</small>
						    			<input type="text" id="formerSchoolName" class="form-control mb-2 formerSchoolName"
						    				placeholder="Last school attended"
						    			/>
						    			<div class="invalid-feedback formerSchoolNameInvalid mb-2"></div>
						    		</div>
						    		<div class="col-md-6">
						    			<small class="text-muted">Completer As</small>
						    			<input type="text" id="completerAs" list="completerList"
						    			  class="form-control mb-2 completerAs"
						    				placeholder="Please specify what type of completer are you"
						    			/>
						    			<datalist id="completerList">
						    				<option value="High School Completer"/>
						    				<option value="Junior High School Completer"/>
						    				<option value="ALS A&E Passer"/>
						    				<option value="Other"/>
						    			</datalist>
						    			<div class="invalid-feedback completerAsInvalid mb-2"></div>
						    			<small class="text-muted">Former School Address</small>
						    			<input type="text" id="formerSchoolAddress" class="form-control mb-2 formerSchoolAddress"
						    				placeholder="Last school address"
						    			/>
						    			<div class="invalid-feedback formerSchoolAddressInvalid mb-2"></div>
						    		</div>
						    	</div>
						    	<small class="text-muted mt-1">
						    		{{ __('Enter name of your former grade 10 teacher and section (For graduate High School and Junior High School). Leave it blank if not applicable to you.') }}
						    	</small>
						    	<div class="row">
						    		<div class="col-md-6">
						    			<input type="text" id="formerAdviserName" class="form-control mb-2"
								      	placeholder="Grade 10 Adviser"
								      />
						    		</div>
						    		<div class="col-md-6">
						    			<input type="text" id="formerSection" class="form-control mb-2"
								      	placeholder="Grade 10 Section"
								      />
						    		</div>
						    	</div>
						    </div>
						  </div>
						  {{--  Documents --}}
						  <div class="row mb-3">
						    <label for="documentsInformation" class="col-sm-2 col-form-label">
						    	{{ __("Documents") }}
						    </label>
						    <div class="col-sm-10">
						    	<small class="text-muted">
									  {{ __('Kindly review the following list of documents. Please mark the checkbox corresponding to the documents you possess, thus leave it unchecked if you do not have them.') }}
									</small>
									<div class="row mt-3">
										<div class="col-md-6 mb-3">
						          <div class="input-group has-validation">
				                <span class="input-group-text">{{ __("PSA") }}</span>
				                <input list="psaCopyList" id="psa" class="form-control"
				                	placeholder="Please specify your psa submitted"
				                />
                				<datalist id="psaCopyList">
							    				<option value="Original"/>
							    				<option value="Photocopy"/>
							    				<option value="Xerox"/>
							    			</datalist>
              				</div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentForm137" data-target="form137" value="Ok" />
						            <label class="form-check-label" for="documentForm137">{{ __("Form 137") }}</label>
						            <input type="hidden" id="form137" class="documentsChecked" />
						          </div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentCard" data-target="card"/>
						            <label class="form-check-label" for="documentCard">{{ __("Card") }}</label>
						            <input type="hidden" id="card" class="documentsChecked"/>
						          </div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentGoodMoral" data-target="goodMoral"/>
						            <label class="form-check-label" for="documentGoodMoral">{{ __("Good Moral") }}</label>
						            <input type="hidden" id="goodMoral" />
						          </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-1">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentID" data-target="Id"/>
						            <label class="form-check-label" for="documentID">{{ __("ID") }}</label>
						            <input type="hidden" id="Id"/>
						          </div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentPEshirt" data-target="peShirt"/>
						            <label class="form-check-label" for="documentPEshirt">{{ __("PE Shirt") }}</label>
						            <input type="hidden" id="peShirt"/>
						          </div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentWaiver" data-target="waiver"/>
						            <label class="form-check-label" for="documentWaiver">{{ __("Waiver") }}</label>
						            <input type="hidden" id="waiver" />
						          </div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentUniform" data-target="uniform"/>
						            <label class="form-check-label" for="documentUniform">{{ __("Uniform") }}</label>
						            <input type="hidden" id="uniform"/>
						          </div>
										</div>
										<div class="col-md-2">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentAllowance" data-target="allowance"/>
						            <label class="form-check-label" for="documentAllowance">{{ __("Allowance") }}</label>
						            <input type="hidden" id="allowance" />
						          </div>
										</div>
										<div class="col-md-3">
											<div class="form-check">
						            <input type="checkbox" class="form-check-input document-checkbox"
						            	id="documentDocumentFiled" data-target="documentFiled"/>
						            <label class="form-check-label" for="documentDocumentFiled">{{ __("Document Filed") }}</label>
						            <input type="hidden" id="documentFiled" />
						          </div>
										</div>
									</div>
						    </div>
						  </div>
					  	<hr class="text-muted" />
					  	<div class="d-flex justify-content-center align-items-center ">
					  		{{-- reCAPTCHA Widgets --}}
								<div class="g-recaptcha-widgets mb-3">
								  <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="{{ env('GOOGLE_RECAPTCHA_CLIENT_KEY') }}"></div>
								</div>
					  	</div>
					  	<div class="d-flex justify-content-center align-items-center">
					  		{{-- Button Actions--}}
								<div class="buttons">
								 	<button type="button" class="btn btn-light back_button" id="backToThirdStep">
								  	{{ __('Previous') }}
				 					</button>
								 	<button type="submit" name="submit" class="btn btn-light next_button" id="submitApplicationFormBtn">
								  	{{ __('Submit Application') }}
				 						<i class="fa-solid fa-arrow-right"></i>
				 					</button>
								</div>
					  	</div>
						</fieldset>
				  </x-step-four>
				</x-form>
			</x-card>
    </x-app-container>
  </x-section>
</x-app-layout>
{{-- Custom Scripts --}}
<script src="{{ asset('/global/assets/custom/scripts/helper.js?v=1.2.1') }}"></script>
<script src="{{ asset('/global/assets/custom/scripts/formValidations.js?v=1.2.1') }}"></script>
<script src="{{ asset('/global/assets/custom/scripts/app.js?v=1.2.1') }}"></script>