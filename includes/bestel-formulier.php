<div class="font-semibold">Gegevens</div>

<div>
    <label for="naam">Naam:</label>
    <p class="text-neutral-500 italic text-sm">Geef jouw naam in</p>
    <input type="text" id="naam" class="w-full bg-neutral-100 p-2 block">
    <div class="text-red-500">
        Naam is verplicht.
    </div>
</div>

<div>
    <label for="email">E-mailadres:</label>
    <p class="text-neutral-500 italic text-sm">Geef jouw e-mailadres in</p>
    <input type="text" id="email" class="w-full bg-neutral-100 p-2 block">
    <div class="text-red-500">
        E-mailadres is verplicht.
    </div>
</div>


<div class="font-semibold">Adres</div>

<div>
    <label for="straat">Straat + Huisnummer:</label>
    <p class="text-neutral-500 italic text-sm">Geef je straat en huisnummer/bus in</p>
    <input type="text" id="straat" class="w-full bg-neutral-100 p-2 block">
    <div class="text-red-500">
        Straat is verplicht.
    </div>
</div>

<div>
    <label for="straat">Gemeente:</label>
    <p class="text-neutral-500 italic text-sm">Kies je gemeente</p>
    <select id="gemeente_id" class="w-full bg-neutral-100 p-2 block">
        <option disabled selected>-- Kies een gemeente</option>
        <option value="1">3960 - Bree</option>
        <option value="1">3550 - Heusden-Zolder</option>
    </select>
    <div class="text-red-500">
        Gemeente is verplicht.
    </div>
</div>

<div class="font-semibold">Bijkomend</div>

<div>
    <label for="aantal">Aantal:</label>
    <p class="text-neutral-500 italic text-sm">Hoeveel flesjes wil je bestellen?</p>
    <input min=1 type="number" id="aantal" class="w-full bg-neutral-100 p-2 block">
    <div class="text-red-500">
        Aantal is verplicht.
    </div>
</div>

<div>
    <input type="checkbox" id="voorwaarden" class="">
    <label for="aantal">Ik plaats mijn bestelling en ik ga akkoord met de voorwaarden.</label>
    <div class="text-red-500">
        Je moet de voorwaarden accepteren.
    </div>
</div>