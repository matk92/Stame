<x-app-layout>

    <div class="container mx-auto px-4 py-8 mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-700">Liste des jeux</h1>
            @can('update articles')
            <a href="{{ route('games.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition ease-in-out duration-150">
                + Ajouter un jeu
            </a>
            @endcan
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($games as $game)
            <div class="bg-white shadow-md rounded-lg overflow-hidden cursor-pointer" data-modal-target="#modal{{ $game->id }}">
                <img src="{{ asset('storage/games/' . $game->cover_image) }}" alt="Image de {{ $game->title }}" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="font-bold text-lg mb-2">{{ $game->title }}</h2>
                    <p class="text-gray-700 text-base mb-4">
                        {{ Str::limit($game->summary, 100) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $game->genre }}</span>
                        <span class="text-sm text-gray-600">{{ $game->release_date }}</span>
                    </div>
                </div>
            </div>
            <div class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full" id="modal{{ $game->id }}">
                <div class="modal-container max-w-3xl mx-auto mt-10 mb-10 bg-white rounded shadow-lg z-50 overflow-y-auto">
                    <!-- Modal Header -->
                    <div class="modal-header flex justify-between items-center bg-gradient-to-r from-purple-500 to-pink-500 text-white p-4 rounded-t shadow-lg">
                        <h2 class="text-xl">{{ $game->title }}</h2>
                        <button class="modal-close" data-modal-close="#modal{{ $game->id }}">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                            </svg>
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body p-4">
                        <img src="{{ asset('storage/games/' . $game->cover_image) }}" alt="Image de {{ $game->title }}" class="w-full h-64 object-cover mb-4 rounded">
                        <p class="text-gray-700 mb-2"><strong>Date de sortie :</strong> {{ $game->release_date }}</p>
                        <p class="text-gray-700 mb-2"><strong>Genre :</strong> {{ $game->genre }}</p>
                        <p class="text-gray-700 mb-2"><strong>Résumé :</strong> {{ $game->summary }}</p>
                        <p class="text-gray-700 mb-2"><strong>Producteur :</strong> {{ $game->producer }}</p>
                        <p class="text-gray-700 mb-2"><strong>Classification PEGI :</strong> {{ $game->pegi }}</p>
                        <p class="text-gray-700 mb-2"><strong>Score :</strong> {{ $game->score }}</p>
                        <p class="text-gray-700"><strong>Commentaire :</strong> {{ $game->comment }}</p><br>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('games.edit', $game->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition ease-in-out duration-150">
                                Éditer
                            </a>
                            @can('delete articles')
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition ease-in-out duration-150 focus:outline-none focus:shadow-outline" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce jeu ?');">
                                    Supprimer
                                </button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var alert = document.getElementById('alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 5000);
        };

        document.querySelectorAll('[data-modal-target]').forEach(trigger => {
            trigger.addEventListener('click', function() {
                const modal = document.querySelector(this.getAttribute('data-modal-target'));
                modal.classList.remove('hidden');
            });
        });

        document.querySelectorAll('[data-modal-close]').forEach(closeButton => {
            closeButton.addEventListener('click', function() {
                const modal = this.closest('.modal');
                modal.classList.add('hidden');
            });
        });

        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    modal.classList.add('hidden');
                }
            });
        });
    </script>
</x-app-layout>