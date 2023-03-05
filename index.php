<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
</head>
<style>
    .border-bottom {
        border-bottom: solid;
        border-bottom-color: gray;
    }
</style>

<body>
    <div class="fixed top-0 left-0 h-40 p-2 mb-2 bg-gray-200 w-full shadow-xl opacity-95 flex items-center">
        <div class="basis-1/6 p-2">
            <img src="img/ed.png" alt="Eduardus Krankenhaus" srcset="">
        </div>
        <div class="flex flex-col stretch self-stretch">
            <div class="basis-1/6 text-4xl px-2 antialiased">
                <p>
                    Eduardus Intranet
                </p>
            </div>
            <div class="basis-4/6 px-2 flex stretch items-end">
                <button class=" border-b-2 border-blue-600 mr-2 p-2 hover:border-b-2 hover:border-gray-800 text-gray-800">Aktuelles</button>
                <button class=" border-b-2 border-gray-200 mr-2 p-2 hover:border-b-2 hover:border-gray-800 hover:transition-[border]  delay-150 ease-in-out text-gray-800">Telefon</button>
                <button class=" border-b-2 border-gray-200 mr-2 p-2 hover:border-b-2 hover:border-gray-800 hover:transition-[border]  delay-150 ease-in-out text-gray-800">Qualitätsmanagement</button>
                <button class=" border-b-2 border-gray-200 mr-2 p-2 hover:border-b-2 hover:border-gray-800 hover:transition-[border]  delay-150 ease-in-out text-gray-800">Schwarzes Brett</button>
                <button class=" border-b-2 border-gray-200 mr-2 p-2 hover:border-b-2 hover:border-gray-800 hover:transition-[border]  delay-150 ease-in-out text-gray-800">Fortbildung</button>
                <button class=" border-b-2 border-gray-200 mr-2 p-2 hover:border-b-2 hover:border-gray-800 hover:transition-[border]  delay-150 ease-in-out text-gray-800">Dienst</button>
                <button class=" border-b-2 border-gray-200 mr-2 p-2 hover:border-b-2 hover:border-gray-800 hover:transition-[border]  delay-150 ease-in-out text-gray-800">Galerie</button>
            </div>
        </div>
    </div>
    <div class="flex px-2 mt-44">
        <div class="basis-1/6 bg-blue-700 mr-1">
            <?php

            echo '<ul class="p-2 text-white">';
            for ($i = 0; $i < 60; $i++) {
                echo '<li>';
                echo $i . '. Eintrag';
                echo '</li>';
            }
            echo '</ul>';
            ?>
        </div>
        <div class="basis-5/6 p-2  bg-gray-100">
            Content
        </div>
    </div>

</body>

</html>