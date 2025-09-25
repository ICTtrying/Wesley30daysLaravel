<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <form action="" class="mt-6 ">
                <input type="text" placeholder="webdeveloper" class="bg-white/5 rounded-xl border-white/10 px-5 py-4 w-full max-w-xl" />
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
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

            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>

    </div>
</x-layout>
