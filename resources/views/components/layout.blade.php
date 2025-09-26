<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pixel position</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="text-white" style="background-color: var(--black); font-family: 'Hanken Grotesk', sans-serif;">
    <div class="px-10">
        <nav class="flex justify-between py-4 border-b border-white/30 items-center">
            <div>
                <a href="/" class="">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" width="60"
                        height="60" style="max-width:60px;max-height:60px;">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            <div>
                <a href="">Post a job</a>
            </div>
        </nav>

        <main class="mt-10 mx-auto max-w-screen-lg">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
