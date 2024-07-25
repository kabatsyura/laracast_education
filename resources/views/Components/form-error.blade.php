@props(['name'])
@error($name)
  <p class="mt-2 italic text-xs text-red-600 font-semibold">{{ $message }}</p>
@enderror
