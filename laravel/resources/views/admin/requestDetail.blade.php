<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/main.css'])

</head>

<body>
    <div class="border border-gray-300 shadow-sm rounded-lg overflow-hidden max-w-sm mx-auto mt-16">
        <table class="w-full text-sm leading-5">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 text-left font-medium text-gray-600">Details</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-600">values</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Calories</td>
                    <td class="py-3 px-4 text-left">240</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Total Fat</td>
                    <td class="py-3 px-4 text-left">12g</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Saturated Fat</td>
                    <td class="py-3 px-4 text-left">3.5g</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Trans Fat</td>
                    <td class="py-3 px-4 text-left">0g</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Cholesterol</td>
                    <td class="py-3 px-4 text-left">45mg</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Sodium</td>
                    <td class="py-3 px-4 text-left">430mg</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Total Carbohydrate</td>
                    <td class="py-3 px-4 text-left">19g</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Dietary Fiber</td>
                    <td class="py-3 px-4 text-left">3g</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Sugars</td>
                    <td class="py-3 px-4 text-left">4g</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Protein</td>
                    <td class="py-3 px-4 text-left">22g</td>
                </tr>

            </tbody>
        </table>
        <div class="flex mt-5 gap-5 px-4 py-2">
            <button
                class="px-4 py-2 font-medium text-white bg-green-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Approve</button>
            <button
                class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Denied</button>
        </div>
    </div>

</body>

</html>