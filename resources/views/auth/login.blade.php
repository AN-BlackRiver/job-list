<x-layout>
    <x-page-heading>Вход</x-page-heading>

    <x-form.form method="POST" action="/login">
        <x-form.input label="Email" name="email" type="email"/>
        <x-form.input label="Пароль" name="password" type="password"/>
        <x-form.button>Войти</x-form.button>
    </x-form.form>
</x-layout>
