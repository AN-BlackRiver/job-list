<x-layout>
    <x-page-heading>Регистрация</x-page-heading>

    <x-form.form method="POST" action="/register" enctype="multipart/form-data">
        <x-form.input label="Имя" name="name"/>
        <x-form.input label="Email" name="email" type="email"/>
        <x-form.input label="Пароль" name="password" type="password"/>
        <x-form.input label="Повторите пароль" name="password_confirmation" type="password"/>

        <x-form.diviver/>

        <x-form.input label="Организация" name="employer"/>
        <x-form.input label="Логотип" name="logo" type="file"/>

        <x-form.button>Создать учетную запись</x-form.button>
    </x-form.form>
</x-layout>
