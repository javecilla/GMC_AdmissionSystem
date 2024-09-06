<div {{ $attributes->merge([
		'class' => 'form-step',
		'id' => 'stepOne',
		'data-step' => '1',
		'data-mode' => 'applying-for',
		'style' => ''
	]) }}>
   {{ $slot }}
</div>