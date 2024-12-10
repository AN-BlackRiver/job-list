<x-layout>
    <x-page-heading>Результаты поиска</x-page-heading>
    <section>
        <div class="space-y-6">
            @forelse($jobs as $job)
                <x-job-card-wide :$job/>
            @empty
                <h1 class="font-bold">Ничего не найдено((</h1>
            @endforelse
        </div>
    </section>
</x-layout>
