<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/main.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div
        class="flex flex-col px-2 py-2 justify-center items-center h-screen bg-no-repeat bg-cover bg-center bg-[url('https://cdn.discordapp.com/attachments/1139186739559280651/1143203746994737192/certificate.jpg')] ">

        <img class="h-64"
            src="https://media.discordapp.net/attachments/1135564910131151019/1138487250234114109/remove.png?width=1396&height=714"
            alt="logo">

        <p class="text-5xl "> Certificate</p>
        <p class="mt-12 text-2xl "> this certificate is proudly presented to</p>

        <p class="mt-5 text-6xl "> {{Auth::getUser()->username}}</p>
        <p class="mt-20 text-4xl "> has attended the event</p>
        <p class="mt-3 text-2xl "> {{$event->name}}</p>
    </div>


</body>


</html>