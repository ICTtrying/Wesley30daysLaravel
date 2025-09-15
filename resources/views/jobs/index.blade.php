<x-layout>
    <x-slot:heading>Jobs page</x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job) <!-- gebruik $job, niet $jobs -->
            <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name ?? 'Unknown' }} <!-- voorkom errors als employer leeg is -->
                </div>
                <div>
                    <strong>{{ $job->title }}</strong>, pays: {{ $job->salary }} per year.
                </div>
            </a>
        @endforeach

        <div class="mt-4">
            {{ $jobs->links() }} <!-- dit blijft de paginator -->
        </div>
    </div>
</x-layout>
