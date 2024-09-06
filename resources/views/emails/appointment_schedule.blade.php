<x-mail::message>

<label><small>{{ __('Good day!') }}</small></label><br/>

<p>
	<small>
		{{ __('Dear') }}
		@if($data['gender'] === 'M')
			{{ __('Mr.') }}
		@else
			{{ __('Ms.') }}
		@endif
		<strong>{{ $data['learners_name'] }}</strong>
	</small>
</p>

<p>
	<small>
		{{ __('This is to inform you that we have received your online application to') }}
		<strong>{{ str_replace(', Bulacan, Inc.', '', $data['school']) }} {{ __('Campus.') }}</strong>
	</small>
</p>

<p>
	<small>
		{{ __('Your appointment schedule for the submission of the required documents will be on') }}
	    <strong>{{ $data['schedule'] }}</strong> {{ __('in') }}
	    @if(str_contains($data['school'], 'Sta. Maria'))
	        <strong>{{ __('2nd Floor Mega Mart Building Bypass Rd, Sta. Maria.') }} </strong>
	    @else
	        <strong>{{ __('2nd Floor D&A Building Mc Hi-way, Balagtas.') }}</strong>
	    @endif
    </small>
</p>

<p>
	<strong><small>{{ __('Documents to be submitted:') }}</small></strong><br/>
	<ol>
        <li>{{ __('Form 137 or Grade 10 report card and copy of certificate of Grade 10 completion.') }}</li>
        <li>{{ __('Original PSA-issued Birth Certificate.') }}</li>
        <li>{{ __('Certificate of good moral character from previous school.') }} </li>
        <li>{{ __('2 pcs. 2×2 picture.') }}</li>
        <li>{{ __('1 long brown envelope.') }}</li>
        <li>{{ __('A Certified True Copy of Certification / Membership Certification / Barangay-issued Certificate / ID (if applicable) of the following:') }}
            <ul>
                <li>{{ __('Student with Special Needs (SSN) and other types of disabilities.') }}</li>
                <li>{{ __('Graduate of Alternative Learning System (ALS) (Accreditation &, Equivalency Assessment and Certification).') }}</li>
            </ul>
        </li>
    </ol>
</p>

<p>
	<strong><small>{{ __('Grounds for Disqualification of Application:') }}</small></strong><br/>
	<ol>
        <li>{{ __('Misrepresentation of the information entered in any of the submitted forms (including but not limited to the application portal).') }} </li>
        <li>{{ __('Violation of the application instructions.') }}</li>
        <li>{{ __('Non-submission of documents as schedule.') }}</li>
    </ol>
</p>

<p>
	<small>
		<strong>{{ __('REMINDER:') }}</strong><br/>
		{{ __('Successful Applicants must submit the complete required documents on the exact date of their Appointment. A face-to-face Admission Assessment will be administered by the GMC Admissions and Orientation Services office. Kindly check your Email regularly (inbox and spam/junk folder).') }}
		<br/>
	</small>
</p>

</x-mail::message>
