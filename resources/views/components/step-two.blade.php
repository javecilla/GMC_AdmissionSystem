<div {{ $attributes->merge([
		'class' => 'form-step',
		'id' => 'stepTwo',
		'data-step' => '2',
		'data-mode' => 'personal-information',
		'style' => 'display: none;'
	]) }}>
   {{ $slot }}
</div>