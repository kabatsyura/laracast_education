<x-layout>
    <x-slot:heading>
        Штат сотрудников
    </x-slot>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div>
                    <strong>{{ $job->employer->title }}</strong>
                </div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: зарабатывает {{ $job['salary'] }}
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
