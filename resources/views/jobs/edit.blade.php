<x-layout>
  <x-slot:heading>
      Отредактировать должность: {{ $job->title }}
  </x-slot>
  <!--
    This example requires some changes to your config:
    
    ```
    // tailwind.config.js
    module.exports = {
      // ...
      plugins: [
        // ...
        require('@tailwindcss/forms'),
      ],
    }
    ```
  -->
  <form method="POST" action="/jobs/ {{ $job->id }}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Наименование должности</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                  type="text" 
                  name="title" 
                  id="title" 
                  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                  value={{ $job->title }} 
                  required
                >
              </div>
              @error('title')
                <p class="mt-2 italic text-xs text-red-600 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>
          
          <div class="sm:col-span-4">
            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Уровень дохода</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                  type="text" 
                  name="salary" 
                  id="salary" 
                  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                  value={{ $job->salary }}
                  required
                >
              </div>
              @error('salary')
                 <p class="mt-2 italic text-xs text-red-600 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        {{-- Ниже пример, как можно отображать все ошибки --}}
        {{-- <div class="mt-5">
          @if($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
                <li class="italic text-red-600">{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </div> --}}
      </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
      <div class="flex items-center">
        <button form="form-delete" class="text-sm text-red-600">Удалить</button>
      </div>
      <div class="flex items-center gap-x-6">
        <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Отменить</a>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Отредактировать</button>
      </div>
    </div>
  </form>
  <form method="POST" action="/jobs/{{ $job->id }}" id="form-delete" class="hidden">
    @csrf
    @method('DELETE')
  </form>
</x-layout>
