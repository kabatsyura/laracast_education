<x-layout>
  <x-slot:heading>
      Регистрация пользователя
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
  <form method="POST" action="/register">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="first_name">Имя</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="first_name" id="first_name" required></x-form-input>
              <x-form-error name="first_name"></x-form-error>
            </div>
          </x-form-field>
          
          <x-form-field>
            <x-form-label for="last_name">Фамилия</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="last_name" id="last_name" required></x-form-input>
              <x-form-error name="last_name"></x-form-error>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
              <x-form-input type="email" name="email" id="email" required></x-form-input>
              <x-form-error name="email"></x-form-error>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Пароль</x-form-label>
            <div class="mt-2">
              <x-form-input type="password" name="password" id="password" required></x-form-input>
              <x-form-error name="password"></x-form-error>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password_confirmation">Продублируйте пароль</x-form-label>
            <div class="mt-2">
              <x-form-input type="password" name="password_confirmation" id="password_confirmation" required></x-form-input>
              <x-form-error name="password_confirmation"></x-form-error>
            </div>
          </x-form-field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <div class="flex items-center gap-x-6">
        <a href="/jobs" type="button" class="text-sm font-semibold leading-6 text-gray-900">Отменить</button>
        <x-form-button>Зарегистрироваться</x-form-button>
      </div>
    </div>
  </form>

</x-layout>
