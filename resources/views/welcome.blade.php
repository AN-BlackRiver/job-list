<x-layout>
    <div class="space-y-10">
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Давай Найдем Тебе Следующую Работу</h1>
        <form action="" class="mt-6">
            <input type="text" placeholder="Бортник..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
        </form>
    </section>

    <section class="pt-10">
        <x-section-heding>Лучшие вакансии</x-section-heding>

        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            <x-job-card/>
            <x-job-card/>
            <x-job-card/>
        </div>
    </section>

    <section>
        <x-section-heding>Теги</x-section-heding>

        <div class="mt-6 space-x-1">
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
            <x-tag>Тег</x-tag>
        </div>
    </section>

    <section>
        <x-section-heding>Вакансии</x-section-heding>
        <div class="mt-6 space-y-6">
        <x-job-card-wide></x-job-card-wide>
        <x-job-card-wide></x-job-card-wide>
        <x-job-card-wide></x-job-card-wide>
        </div>
    </section>

    </div>
</x-layout>
