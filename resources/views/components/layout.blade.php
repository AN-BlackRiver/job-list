<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js','resources/css/app.css'])
    <title>Работа Уфа</title>
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="flex justify-between items-center">
                    <a href="/">
                        <img style="width: 55px; height: 50px " src="{{ \Illuminate\Support\Facades\Vite::asset("resources/images/icon.svg")  }}" alt="">
                    </a>
                    <h2 class="font-bold ml-5">Работа Уфа</h2>
            </div>

            <div class="space-x-6 font-bold">
               <a href="">Работа</a>
               <a href="">Карьера</a>
               <a href="">Зарплаты</a>
               <a href="">Компании</a>
            </div>

            <div>
                <a href="">Опубликовать вакансию</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>
