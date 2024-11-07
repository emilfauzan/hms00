@props(['active' => 'false'])

<!-- Well begun is half done. - Aristotle -->
<a {{ $attributes }}class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-300 hover:text-gray-900' }} block rounded-md  px-3 py-2 text-base font-medium "
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
