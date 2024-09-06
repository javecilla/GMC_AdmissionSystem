<x-app-layout title="Admission">
  <x-slot name="description">
  	{{ __('Embrace your future! Enroll today at Golden Minds Bulacan, open to students from elementary to senior high school. Dream big, aim higher. We welcome new students and transferees at all levels. Your educational journey begins here!') }}
  </x-slot>
  {{-- Hero card --}}
	<x-section class="bg-white mb-3 ">
	  <img src="{{ asset('/global/assets/images/index_banner.PNG') }}"
	  	class="card-img-top" alt="header" loading="lazy"/>
	</x-section>
  <x-section>
  	<x-app-container class="mb-5">
  		<div class="row flex-lg-row-reverse">
  			{{-- Senior High School --}}
  			<div class="col-md-6 mb-3">
  				<x-card class="card_box border-0 rounded-4">
  					<img src="{{ asset('/global/assets/images/shs_card.PNG') }}"
  						class="card-img-top moving_image" alt="shs" loading="lazy"/>
  					<div class="card-body" style="margin-top: -30px;">
					    <p class="card-text p-3 text-center">
					    	{{ __('Prepare for college with comprehensive knowledge, training, and the skills needed to pursue higher education, launch a business, or secure employment opportunities.') }}
					    </p>
					    <div class="d-flex justify-content-center align-items-center">
								<div class="buttons text-center">
									<a href="https://goldenmindsbulacan.com/academics/senior-high-school"
									target="_blank" title="Read more information about GMC-SHS" class="btn btn-light back_button mt-2">
							  		{{ __('Read More Info') }}
			 						</a>
								 	<a href="{{ route('application.form') }}?step=1&form_mode=applying-for" class="btn btn-light next_button mt-2">
								  	{{ __('Proceed to enrollment') }}
				 						<i class="fa-solid fa-arrow-right"></i>
				 					</a>
								</div>
							</div>
					  </div>
  				</x-card>
  			</div>
  			{{-- Basic Education --}}
  			<div class="col-md-6">
  				<x-card class="card_box border-0 rounded-4">
  					<img src="{{ asset('/global/assets/images/maintenance_card.PNG') }}"
  						class="card-img-top moving_image" alt="maintenance" loading="lazy"/>
  					<div class="card-body" style="margin-top: -30px;">
					    <p class="card-text p-3 text-center" >
					    	{{ __('Explore academic excellence at Golden Minds Academy Elementary and Junior High School. Embrace growth, and thrive in a supportive environment for success.') }}
					    </p>
					    <div class="d-flex justify-content-center align-items-center">
								<div class="buttons text-center">
									<a href="https://goldenmindsbulacan.com/academics/basic-education" title="Read more information about GMA-BE"
										target="_blank" class="btn btn-light back_button mt-2">
							  		{{ __('Read More Info') }}
			 						</a>
								 	<a href="javascript:void(0)" class="btn btn-light next_button mt-2">
								  	{{ __('Proceed to enrollment') }}
				 						<i class="fa-solid fa-arrow-right"></i>
				 					</a>
								</div>
							</div>
					  </div>
  				</x-card>
  			</div>
  		</div>
    </x-app-container>
  </x-section>
</x-app-layout>