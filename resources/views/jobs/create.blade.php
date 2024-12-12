<x-layout>
    <x-page-heading>Создание новой вакансии</x-page-heading>

    <x-form.form method="POST" action="/jobs">
        <x-form.input label="Название" name="title"></x-form.input>
        <x-form.input label="Цена" name="salary"></x-form.input>
        <x-form.input label="Место" name="location"></x-form.input>

        <x-form.select label="Время работы" name="schedule">
            <option>Полный график</option>
            <option>Частичная занятость</option>
        </x-form.select>

        <x-form.input label="Ссылка на вакансию" name="url"></x-form.input>
        <x-form.checkbox label="Поднять в топ" name="featured"></x-form.checkbox>

        <x-form.diviver/>

        <x-form.input label="Теги (укажите через запятую)" name="tags"></x-form.input>
        <x-form.button>Опубликовать вакансию</x-form.button>
    </x-form.form>
</x-layout>
