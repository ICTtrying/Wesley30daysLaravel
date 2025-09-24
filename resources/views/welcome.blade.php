<x-layout>
    <div class="space-y-10">

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 flex flex-wrap gap-2">
                <x-tag>Laravel</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Tailwind</x-tag>
                <x-tag>CSS</x-tag>
                <x-tag>HTML</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>AWS</x-tag>
                <x-tag>Docker</x-tag>
                <x-tag>Kubernetes</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>

    </div>
</x-layout>
