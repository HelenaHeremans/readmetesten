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

        <p class="text-2xl font-semibold">Registreren</p>

        <div class="mt-12">
            <form method="post" class="grid gap-4 max-w-lg">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" class="w-full bg-neutral-100 p-2 block">
                    <div class="text-red-500">
                        Username is verplicht.
                    </div>
                </div>

                <div>
                    <label for="password">Wachtwoord:</label>
                    <input type="password" id="password" class="w-full bg-neutral-100 p-2 block">
                    <div class="text-red-500">
                        Wachtwoord is verplicht.
                    </div>
                </div>

                <div>
                    <label for="password_confirmation">Wachtwoord confirmatie:</label>
                    <input type="password" id="password_confirmation" class="w-full bg-neutral-100 p-2 block">
                    <div class="text-red-500">
                        Wachtwoord confirmatie is verplicht.
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <input type="submit" value="Registreren" class="cursor-pointer p-2 bg-green-500 text-green-100 inline-block">
                </div>
            </form>
        </div>
    </div>

</body>

</html>