<x-layout>
    <div class="space-y-10">
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Давай Найдем Тебе Работу</h1>
        <x-form.form action="/search" class="mt-7">
            <x-form.input :label="false" name="q" placeholder="Председатель Курултая"></x-form.input>
        </x-form.form>
    </section>

    <section class="pt-10">


        <x-section-heding>Лучшие вакансии</x-section-heding>

        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach($featuredJobs as $job)
                <x-job-card :$job/>
            @endforeach

        </div>
    </section>

    <section>
        <x-section-heding>Теги</x-section-heding>

        <div class="mt-6 space-x-1">
            @foreach($tags as $tag)
                <x-tag :tag="$tag"/>
                {{--<x-tag :$tag/>--}}
            @endforeach
        </div>
    </section>

    <section>
        <x-section-heding>Вакансии</x-section-heding>
        <div class="mt-6 space-y-6">
            @foreach($jobs as $job)
                <x-job-card-wide :$job/>
            @endforeach
        </div>
    </section>

    </div>
</x-layout>
