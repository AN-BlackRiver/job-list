<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js','resources/css/app.css'])
    <title>Работа Уфа</title>
</head>
<body class="bg-black text-white font-arimo pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="flex justify-between items-center">
                    <a href="/">
                        <img style="width: 55px; height: 50px " src="{{ \Illuminate\Support\Facades\Vite::asset("resources/images/icon.svg")  }}" alt="">
                    </a>
                    <h2 class="font-bold ml-5">Работа Уфа</h2>
            </div>

            <div class="space-x-6 font-bold">
               <a href="{{route('home')}}">Работа</a>
               <a href="">Карьера</a>
               <a href="">Зарплаты</a>
               <a href="">Компании</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Опубликовать вакансию</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Выйти</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Войти</a>
                    <a href="/register">Зарегистрироваться</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[1000px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>
