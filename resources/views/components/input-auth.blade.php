@php
switch (session('status')) {
    case 'user-not-found':
        $borderColor = 'border-red';
        break;
    case 'phone-not-found':
        $borderColor = 'border-red';
        break;
    case 'verification-code-error':
        $borderColor = 'border-red';
    default:
        $borderColor = 'border-dark-400';
        break;
}
@endphp

<input {!! $attributes->merge([
    'class' => 'w-full h-12 rounded-xl px-4 bg-light focus:ring-2 focus:ring-primary border ' . $borderColor . ' focus:border-transparent'
]) !!}>