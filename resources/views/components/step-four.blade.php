<div {{ $attributes->merge([
		'class' => 'form-step',
		'id' => 'stepFour',
		'data-step' => '4',
		'data-mode' => 'final-step-registration',
		'style' => 'display: none;'
	]) }}>
   {{ $slot }}
</div>