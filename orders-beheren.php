<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bieren</title>
</head>

<body>

    <div class="container mx-auto">
        <h1 class="text-4xl mt-8">Bieren winkel</h1>

        <p class="text-2xl font-semibold">Orders beheren</p>

        <div class="mt-4 mb-12">
            <a href="index.php" class="text-blue-500 underline">Terug naar overzicht</a>
        </div>

        <div class="my-12">
            <p class="text-2xl">
                <b class="font-semibold">Totale inkomsten:</b>
                &euro;1500
            </p>
            <p class="text-2xl">
                <b class="font-semibold">Aantal orders:</b>
                10
            </p>
            <p class="text-2xl">
                <b class="font-semibold">Gemiddeld aantal flesjes per order:</b>
                3
            </p>
            <p class="text-2xl text-orange-500">
                <b class="font-semibold">Nog af te werken:</b>
                1
            </p>
            <!-- of -->
            <p class="text-2xl text-green-500">
                <b class="font-semibold">Alles afgewerkt!</b>
            </p>
        </div>

        <div class="">
            <table class="w-full">
                <thead class="bg-neutral-800 text-neutral-100">
                    <tr>
                        <th class="text-left p-2">
                            Datum
                        </th>
                        <th class="text-left p-2">
                            Bier
                        </th>
                        <th class="text-left p-2">
                            Aantal
                        </th>
                        <th class="text-left p-2">
                            Totale prijs
                        </th>
                        <th class="text-left p-2">
                            Naam
                        </th>
                        <th class="text-left p-2">
                            Afgehandeld    
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even:bg-neutral-200 odd:bg-neutral-100">
                        <td class="p-2">
                            2023-02-03
                        </td>
                        <td class="p-2">  
                            Duvel
                            <span class="text-sm text-neutral-500 block italic">Moortgat</span>
                        </td>
                        <td class="p-2">  
                            5 flesjes
                        </td>
                        <td class="p-2">  
                            <span class="font-semibold">&euro;9</span>
                        </td>
                        <td class="p-2">  
                            <a href="mailto:johndoe@test.be" class="text-blue-500 underline">John Doe</a>
                        </td>
                        <td class="p-2">  
                            <form method="post">
                                <input type="hidden" value="1" name="order_id">
                                <input type="submit" value="Afhandelen" class="cursor-pointer bg-neutral-300 px-2 py-1">
                            </form>
                        </td>
                    </tr>

                    <tr class="even:bg-neutral-200 odd:bg-neutral-100">
                        <td class="p-2">
                            2023-02-01
                        </td>
                        <td class="p-2">  
                            Duvel
                            <span class="text-sm text-neutral-500 block italic">Moortgat</span>
                        </td>
                        <td class="p-2">  
                            5 flesjes
                        </td>
                        <td class="p-2">  
                            <span class="font-semibold">&euro;9</span>
                        </td>
                        <td class="p-2">  
                            <a href="mailto:johndoe@test.be" class="text-blue-500 underline">John Doe</a>
                        </td>
                        <td class="p-2">  
                            <div class="flex items-center gap-2">
                                <span class="bg-green-500 text-green-100 p-2 rounded-full w-6 h-6 inline-block text-sm flex items-center justify-center">&checkmark;</span>
                                <span class="text-green-500">Afgehandeld!</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php include('./includes/footer.php') ?>
    </div>

</body>

</html>