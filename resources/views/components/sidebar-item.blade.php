@props([
  'icon', 'label', 'route', 'active'=>false, 'highlightedText'=>''
])

<a href="{{ $route }}"
   class="flex items-center gap-3 px-4 py-2 rounded-r-full font-semibold relative
     {{ $active
       ? 'bg-[#D8EFFF] text-[#0C519D] before:content-[\'\'] before:absolute before:-left-2 before:top-0 before:bottom-0 before:w-2 before:bg-red-500 before:rounded-l-full'
       : 'text-gray-600 hover:bg-[#D8EFFF]' }}">
  <i class="fa-solid {{ $icon }} {{ $active ? 'text-[#0C519D]' : '' }}"></i>
  @if($highlightedText)
    <span class="{{ $active ? 'text-[#0C519D]' : '' }}">{{ $label }}</span>
    <span class="{{ $active ? 'text-red-500' : '' }}">{{ $highlightedText }}</span>
  @else
    {{ $label }}
  @endif
</a>
