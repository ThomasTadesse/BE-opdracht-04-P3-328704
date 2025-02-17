<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergenen Overzicht</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Overzicht Allergenen</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-400 text-white">
                    <th class="py-3 px-4 text-left">Naam</th>
                    <th class="py-3 px-4 text-left">Omschrijving</th>
                    <th class="py-3 px-4 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allergenen as $allergeen)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $allergeen->Naam }}</td>
                        <td class="py-3 px-4">{{ $allergeen->Omschrijving }}</td>
                        <td class="py-3 px-4">
                            <span class="{{ $allergeen->IsActief ? 'text-green-600' : 'text-red-600' }}">
                                {{ $allergeen->IsActief ? 'Actief' : 'Inactief' }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>