<form {{ $attributes->merge([
		'method' => '',
		'action' => '',
		'id' => '',
		'class' => '',
		'style' => ''
	]) }}>
	@csrf
   {{ $slot }}
</form>