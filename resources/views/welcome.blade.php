<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 min-h-svh w-full flex">
    <main class="grid grid-cols-3 gap-8 flex-1 p-8">
        <div class="bg-gray-100/10 col-span-2 flex rounded">
            <div
                class="bg-blue-500/10 flex-1 rounded border border-blue-500/40 border-dashed m-8 flex items-center justify-center text-blue-500/50">
                <span>Choose your image folders here</span>
            </div>
        </div>
        <div class="bg-gray-100/10 rounded flex">
            <div class="m-8">
                <span>Choose your file types</span>
                <ul class="flex flex-col space-y-2">
                    <li class="flex flex-row items-baseline space-x-2"><input type="checkbox" /> <span>.png</span></li>
                    <li class="flex flex-row items-baseline space-x-2"><input type="checkbox" /> <span>.gif</span></li>
                    <li class="flex flex-row items-baseline space-x-2"><input type="checkbox" /> <span>.webp</span></li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-100/10 flex col-span-2 rounded">
            <div class="m-8 flex-1 flex">
                <table class="border rounded border-gray-500 flex-1">
                    <thead class="bg-gray-500/30">
                        <th class="text-left px-2 py-1">Name</th>
                        <th class="text-left px-2 py-1">Path</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PhotoLibrary</td>
                            <td>~/Users/yasin/Desktop</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-gray-100/10 rounded flex">
            <div class="flex-1 flex items-center justify-center">
                <button class="bg-gradient-to-b from-blue-500 to-blue-600 px-3 py-2 rounded text-white">Scan for
                    duplicates</button>
            </div>
        </div>
    </main>
</body>

</html>
