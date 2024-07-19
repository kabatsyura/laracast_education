<x-layout>
    <x-slot:heading>
        Штат сотрудников
    </x-slot>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
                <strong>{{ $job['title'] }}</strong>: зарабатывает {{ $job['salary'] }}
            </a>
        </li>
    @endforeach
</x-layout>
