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
                <tr class="border-b hover:bg-gray-50">
                    <!-- leverancier gegevens -->
                    <td class="py-3 px-4">{{ $allergeen->LeverancierNaam ?? 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $allergeen->Contactpersoon ?? 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $allergeen->Mobiel ?? 'N/A' }}</td>

                    <!-- Address data container -->
                    <td colspan="3" class="py-3 px-4">
                        <!-- No address message (visible by default) -->
                        <span class="no-address-message bg-gray-200 rounded">Er zijn geen adresgegevens bekend</span>
                        
                        <!-- Address data (hidden by default) -->
                        @if(isset($allergeen->Stad) && isset($allergeen->Straat) && isset($allergeen->Huisnummer))
                        <span class="address-data" style="display: none;">
                            <span class="mr-4">{{ $allergeen->Stad }}</span>
                            <span class="mr-4">{{ $allergeen->Straat }}</span>
                            <span>{{ $allergeen->Huisnummer }}</span>
                        </span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Knoppen -->
        <div class="mt-6 space-x-4">
            <a href="{{ url()->previous() }}" class="bg-blue-300 text-white px-4 py-2 rounded-lg shadow hover:bg-green-300">
                Terug naar vorige pagina
            </a>
            <button onclick="toggleAddress()" class="bg-gray-300 text-white px-4 py-2 rounded-lg shadow hover:bg-red-300">
                Toon Contact Data
            </button>
        </div>
    </div>

    <script>
        function toggleAddress() {
            const addressData = document.querySelector('.address-data');
            const noAddressMessage = document.querySelector('.no-address-message');
            
            if (addressData.style.display === 'none') {
                addressData.style.display = 'inline';
                noAddressMessage.style.display = 'none';
            } else {
                addressData.style.display = 'none';
                noAddressMessage.style.display = 'inline';
            }
        }

        // No need for DOMContentLoaded event as the initial state is handled by HTML
    </script>
</body>
</html>