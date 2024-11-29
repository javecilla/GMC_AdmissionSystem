<x-app-layout title="Online Registration (SHS)">
  <x-slot name="description">
  	Embrace your future! Enroll today at Golden Minds Bulacan, open to students from elementary to senior high school. Dream big, aim higher. We welcome new students and transferees at all levels. Your educational journey begins here!
  </x-slot>

  <x-section class="b_section">
  	<x-app-container class="b_container">
  		<div class="alert alert-warning alert-dismissible fade show d-flex align-items-center rounded-4 mt-3">
				<div>
					<p><i class="fa-solid fa-circle-info bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i><strong>iRegister Notice:</strong></p>
					<span class="alert_description">
						The submission of inaccurate or falsified information will result in disqualification of the applicant from admission to Golden Minds Colleges (Senior High School). Please be advised that all fields marked with "*" are mandatory, and providing truthful and accurate information is crucial for a successful registration process.
					</span>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
	    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-3">
	    	{{-- Introduction/About --}}
	    	<div id="introductionAbout" class="col d-flex flex-column align-items-start gap-2 d-none d-lg-block d-sm-block">
	  			<div class="border-bottom">
	  				<div class="hero-image-container">
		        	<img src="/global/assets/images/hero-new2.png" class="d-block mx-lg-auto img-fluid hero-image" alt="hero" loading="lazy">
		        </div>
		        <h2 class="fw-bold text-body-emphasis">Kickstart Your Senior High School Journey at Golden Minds Colleges.</h2>
		        <p class="text-body-secondary">
							Unlock your potential and prepare for a future full of possibilities. At GMC Senior High, we equip you with the knowledge, skills, and confidence needed to excel in college, launch your own business, or step into the professional world.
		        </p>
	  			</div>
	  			<div class="tracks_strand_offers w-100">
						<h3 class="offer_parent_title hashtag text-body-emphasis">Tracks Offered</h3>
						<div class="academicTrackContainer">
							<div id="academicTrack" class="mb-3">
								<i class="label_strand_category">Academic Track</i>
								<div class="light-accordion accordion accordion-flush mb-2">
									<div id="stemStrand" class="item mt-2">
			              <h2 class="header">
			                <button class="button accordion-button collapsed"
			                	data-bs-toggle="collapse"
			                	data-bs-target="#academic-stem"
			                	type="button"
			                	aria-expanded="false"
			                	aria-controls="academic-stem">
			                  <b>Science, Technology, Engineering, and Mathematics (STEM)</b>
			                </button>
			              </h2>
			              <div id="academic-stem" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
			                <div class="accordion-body">
			                	<div class="row">
			                		<div class="col-md-4">
			                			<div class="float-end header">
			                				<img src="/global/assets/images/strands/stem_logo.png" class="img-fluid image" loading="lazy" alt="image"/>
			                			</div>
			                		</div>
			                		<div class="col-md-8">
			                			<p class="text">
															The STEM strand provides an engaging and comprehensive exploration of Science, Technology, Engineering, and Mathematics, equipping students with the knowledge and skills to excel in future-focused careers. By mastering advanced concepts in mathematics and science, students build a strong foundation for higher education and beyond, preparing them to innovate, solve complex problems, and lead in a rapidly evolving world.
			                  		</p>
			                		</div>
			                	</div>
			                </div>
			              </div>
									</div>
									<div id="abmStrand" class="item mt-2">
			              <h2 class="header">
			                <button class="button accordion-button collapsed"
			                	data-bs-toggle="collapse"
			                	data-bs-target="#academic-abm"
			                	type="button"
			                	aria-expanded="false"
			                	aria-controls="academic-abm">
			                  <b>Accountancy, Business and Management (ABM)</b>
			                </button>
			              </h2>
			              <div id="academic-abm" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
			                <div class="accordion-body">
			                	<div class="row">
			                		<div class="col-md-4">
			                			<div class="float-end header">
			                				<img src="/global/assets/images/strands/abm_logo.png" class="img-fluid image" loading="lazy" alt="image"/>
			                			</div>
			                		</div>
			                		<div class="col-md-8">
			                			<p class="text">
															The ABM strand equips aspiring entrepreneurs and business leaders with essential knowledge in financial management, corporate operations, and strategic planning. Through practical applications and in-depth coursework, students gain skills to excel in commerce, analyze financial data, and craft marketing strategies, preparing them to thrive in the business world.
														</p>
			                		</div>
			                	</div>
			                </div>
			              </div>
									</div>
									<div id="humssStrand" class="item mt-2">
									  <h2 class="header">
									    <button class="button accordion-button collapsed"
									      data-bs-toggle="collapse"
									      data-bs-target="#academic-humss"
									      type="button"
									      aria-expanded="false"
									      aria-controls="academic-humss">
									      <b>Humanities and Social Sciences (HUMSS)</b>
									    </button>
									  </h2>
									  <div id="academic-humss" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
									    <div class="accordion-body">
									      <div class="row">
									        <div class="col-md-4">
									          <div class="float-end header">
									            <img src="/global/assets/images/strands/humss_logo.png" class="img-fluid image" loading="lazy" alt="image"/>
									          </div>
									        </div>
									        <div class="col-md-8">
									          <p class="text">
									            The HUMSS strand focuses on the study of human behavior, culture, and society. It prepares students for careers in education, communication, law, and social sciences by developing critical thinking, empathy, and communication skills. Ideal for those passionate about understanding and influencing people and communities.
									          </p>
									        </div>
									      </div>
									    </div>
									  </div>
									</div>
									<div id="gasStrand" class="item mt-2">
									  <h2 class="header">
									    <button class="button accordion-button collapsed"
									      data-bs-toggle="collapse"
									      data-bs-target="#academic-gas"
									      type="button"
									      aria-expanded="false"
									      aria-controls="academic-gas">
									      <b>General Academic Strand (GAS)</b>
									    </button>
									  </h2>
									  <div id="academic-gas" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
									    <div class="accordion-body">
									      <div class="row">
									        <div class="col-md-4">
									          <div class="float-end header">
									            <img src="/global/assets/images/strands/gas_logo.png" class="img-fluid image" loading="lazy" alt="image"/>
									          </div>
									        </div>
									        <div class="col-md-8">
									          <p class="text">
									            The GAS strand offers flexibility for students with diverse interests, combining elements of all academic tracks. This strand is perfect for those who want to explore various fields and keep their options open, ensuring they are well-prepared for any college program they choose.
									          </p>
									        </div>
									      </div>
									    </div>
									  </div>
									</div>
								</div>
							</div>
							<div id="tvlTrack" class="mb-3">
								<i class="label_strand_category">Technical-Vocational-Livelihood Track</i>
								<div class="light-accordion accordion accordion-flush mb-2">
									<div id="ictStrand" class="item mt-2">
									  <h2 class="header">
									    <button class="button accordion-button collapsed"
									      data-bs-toggle="collapse"
									      data-bs-target="#tech-ict"
									      type="button"
									      aria-expanded="false"
									      aria-controls="tech-ict">
									      <b>Information and Communication Technology (ICT)</b>
									    </button>
									  </h2>
									  <div id="tech-ict" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
									    <div class="accordion-body">
									      <div class="row">
									        <div class="col-md-4">
									          <div class="float-end header">
									            <img src="/global/assets/images/strands/ict_logo.png" class="img-fluid image" loading="lazy" alt="image"/>
									          </div>
									        </div>
									        <div class="col-md-8">
									          <p class="text">
									            The ICT strand prepares students for the digital age, focusing on programming, web design, and networking. It equips learners with hands-on experience in technology, making it ideal for aspiring IT professionals, developers, and digital innovators.
									          </p>
									        </div>
									      </div>
									    </div>
									  </div>
									</div>
									<div id="heStrand" class="item mt-2">
									  <h2 class="header">
									    <button class="button accordion-button collapsed"
									      data-bs-toggle="collapse"
									      data-bs-target="#tech-he"
									      type="button"
									      aria-expanded="false"
									      aria-controls="tech-he">
									      <b>Home Economics (HE)</b>
									    </button>
									  </h2>
									  <div id="tech-he" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
									    <div class="accordion-body">
									      <div class="row">
									        <div class="col-md-4">
									          <div class="float-end header">
									            <img src="/global/assets/images/strands/he_logo.png" class="img-fluid image" loading="lazy" alt="image"/>
									          </div>
									        </div>
									        <div class="col-md-8">
									          <p class="text">
									            The HE strand offers practical skills in hospitality, culinary arts, and entrepreneurship. It prepares students for immediate employment or business ventures, making it ideal for those interested in hands-on, service-oriented professions.
									          </p>
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
				{{-- Registration Form --}}
	      <div class="col">

					<div class="card f_card">
						<div class="card-header">
							<b>Registration Form (2025-2024)</b><span class="float-end"><i class="bi bi-file-earmark-text"></i></span>
						</div>
						<div class="card-body">
							<form action="#" method="POST" id="registrationForm">
								<div id="applyingForContainer">
									<i>Applying For</i><br/>
									<div id="applyingForForm" class="border-top mt-2">
										<div class="mb-2 mt-3">
											<small>School Year <span class="text-danger">*</span></small>
											<div class="schoolYearField">
										    {{-- data fetch via loop --}}
										  </div>
										</div>

										<div class="mb-2">
											<small>Semester <span class="text-danger">*</span></small>
											<div class="semesterField">
										    {{-- data fetch via loop --}}
										  </div>
										</div>

										<div class="mb-2">
											<small>Campus (Select your preferred Golden Minds Campus.)<span class="text-danger">*</span></small>
											<div class="branchField">
										    {{-- data fetch via loop --}}
										  </div>
										</div>

										<div class="mb-2">
											<small>Year Level <span class="text-danger">*</span></small>
											<div class="yearLevelField">
										    {{-- data fetch via loop --}}
										  </div>
										</div>

										<div class="mb-2">
											<small>Strand <span class="text-danger">*</span></small>
											<div class="strandField">
										    {{-- data fetch via loop --}}
										  </div>
										</div>

										<div class="mb-2">
											<small>LRN (Optional)</small>
											<input type="number" class="form-control LRN" id="LRN" placeholder="Learners Referrence Number (LRN)"/>
								    	<div class="invalid-feedback LRNInvalid"></div>
										</div>
									</div>
								</div>

								<div id="previousSchoolAttendedContainer" class="mt-5">
									<i>Previous School Attended</i><br/>
									<div id="previousSchoolAttendedForm" class="border-top mt-2">
										<div class="mb-2 mt-3">
											<small>School Name (Your previous school during your Junior High / Grade 10)<span class="text-danger">*</span></small>
											<input type="text" id="previousSchoolName" class="form-control mb-2 previousSchoolName"
								      	placeholder="Ex. Piltover Academy Inc."
								      />
								      <div class="invalid-feedback previousSchoolNameInvalid mb-2"></div>
										</div>

										<div class="mb-2 ">
											<small>Year Graduated (Optional)</small>
											<input type="date" id="yearGraduated" class="form-control mb-2 yearGraduated" />
										</div>
									</div>
								</div>

								<div id="personalInformationContainer" class="mt-5">
									<i>Personal Information</i><br/>
									<div id="personalInformationForm" class="border-top mt-2">
										<div class="mb-2 mt-3">
											<small>Name (Your complete name based on your PSA birth certificate)</small>
											<div class="row">
							    			<div class="col-md-6 ">
									    		<input type="text" class="form-control mb-2 firstName" id="firstName"
									      		placeholder="First Name"
									      	/>
									      	<div class="invalid-feedback firstNameInvalid mb-2"></div>

													<input type="text" class="form-control mb-2" id="extensionName"
									      		placeholder="Extra Name (Optional)"
									      	/>
							    			</div>
									    	<div class="col-md-6">
									    		<input type="text" class="form-control mb-2 lastName" id="lastName"
									    			placeholder="Last Name"
									    		/>
									    		<div class="invalid-feedback lastNameInvalid mb-2"></div>

									    		<input type="text" class="form-control mb-2" id="middleName"
									      		placeholder="Middle Name (Optional)"
									      	/>
									    	</div>
									    </div>
										</div>
										<div class="mb-2">
											<small>Gender <span class="text-danger">*</span></small>
											<select name="gender" id="gender" class="form-select gender">
									      <option value="" selected>-- SELECT --</option>
									      <option value="M">Male</option>
									      <option value="F">Female</option>
									    </select>
									    <div class="invalid-feedback genderInvalid"></div>
										</div>
										<div class="mb-2">
											<small>Email (Please enter your active email address. We will use it to send your appointment schedule.) <span class="text-danger">*</span></small>
											<input type="text" id="email" class="form-control email"
								    		placeholder="john.doe@mail.net"
								    	/>
								    	<div class="invalid-feedback emailInvalid"></div>
										</div>
										<div class="mb-2">
											<small>Contact Number <span class="text-danger">*</span></small>
											<input type="number" id="contactNo" class="form-control mb-2 contactNo"
								      	placeholder="09#######33"
								      />
								      <div class="invalid-feedback contactNoInvalid mb-2"></div>
										</div>
									</div>
								</div>

								<div class="d-flex justify-content-center align-items-center ">
						  		{{-- reCAPTCHA Widgets --}}
									<div class="g-recaptcha-widgets">
									  <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="{{ env('GOOGLE_RECAPTCHA_CLIENT_KEY') }}"></div>
									</div>
						  	</div>

								<hr class="text-muted" />

								<button type="submit" name="submit" class="btn btn-light w-100 next_button" id="submitRegistrationFormBtn" disabled>
							  	Loading...
			 					</button>
							</form>
						</div>
					</div>
	      </div>
	    </div>
  	</x-app-container>
  </x-section>
</x-app-layout>