<x-layout>
    <div class="absolute top-0 right-0 m-4">
        Welkom, Manager
    </div>

    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 px-4">
        <h1 class="text-4xl font-bold mb-4">Magazijn Jamin</h1>
        <br>
        <a href="{{ route('leverancier.index') }}" class="px-4 py-2 bg-cyan-500 text-white rounded">Wijzigen Leveranciers</a>
    </div>
</x-layout>
