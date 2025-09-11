<x-layout>
    <ul>
        <x-slot:heading>Jobs page</x-slot:heading>
        @foreach ($jobs as $jobs)
            <li>
                <a href="/jobs/{{ $jobs['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $jobs['title'] }}</strong>, pays: {{ $jobs['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
