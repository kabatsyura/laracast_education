<x-layout>
  <x-slot:heading>
      Создать новую должность
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
  <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Создать новую работу</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Заполните информацию о должности.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="title">Название должности</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="title" id="title"  placeholder="Плотник" required></x-form-input>
              <x-form-error name="title"></x-form-error>
            </div>
          </x-form-field>
          
          <x-form-field>
            <x-form-label for="salary">Заработная плата в месяц</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="salary" id="salary"  placeholder="100 000 руб" required></x-form-input>
              <x-form-error name="salary"></x-form-error>
            </div>
          </x-form-field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <div class="flex items-center gap-x-6">
        <a href="/jobs" type="button" class="text-sm font-semibold leading-6 text-gray-900 block mx-3">Отменить</button>
        <x-form-button>Создать</x-form-button>
      </div>
    </div>
  </form>

</x-layout>
