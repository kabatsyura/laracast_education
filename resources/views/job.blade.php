<x-layout>
    <x-slot:heading>
        Информация о должности
    </x-slot>
    <h1 class="font-bold text-lg">
        {{$job['title']}}
    </h1>
    <p>
        Заработная плата в месяц: {{$job['salary']}}
    </p>
    <a href="/jobs" class="hover:underline">Вернуться к списку должностей</a>
</x-layout>
