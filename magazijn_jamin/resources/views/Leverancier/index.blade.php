<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leverancier Gegevens</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Overzicht Leverancier Gegevens</h1>

        <!-- Tabel voor Overzicht Leverancier Gegevens -->
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-400 text-white">
                    <th class="py-3 px-4 text-left">Naam Leverancier</th>
                    <th class="py-3 px-4 text-left">Contactpersoon</th>
                    <th class="py-3 px-4 text-left">Mobiel</th>
                    <th class="py-3 px-4 text-left">Stad</th>
                    <th class="py-3 px-4 text-left">Straat</th>
                    <th class="py-3 px-4 text-left">Huisnummer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leveranciers as $leverancier)
                <tr class="border-b hover:bg-gray-50">
                    <!-- Leverancier gegevens -->
                    <td class="py-3 px-4">{{ $leverancier->Naam ?? 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $leverancier->Contactpersoon ?? 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $leverancier->Mobiel ?? 'N/A' }}</td>

                    <!-- Adresgegevens contact -->
                    @if($leverancier->Stad && $leverancier->Straat && $leverancier->Huisnummer)
                        <td class="py-3 px-4">{{ $leverancier->Stad }}</td>
                        <td class="py-3 px-4">{{ $leverancier->Straat }}</td>
                        <td class="py-3 px-4">{{ $leverancier->Huisnummer }}</td>
                    @else
                        <td class="py-3 px-4" colspan="3">Er zijn geen adresgegevens bekend</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Terugknop -->
        <div class="mt-6">
            <a href="{{ route('allergeen.index') }}" class="bg-blue-300 text-white px-4 py-2 rounded-lg shadow hover:bg-green-300">
                Terug naar Overzicht Allergenen
            </a>
        </div>
    </div>
</body>
</html>