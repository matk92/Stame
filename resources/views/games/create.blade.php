<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="fixed top-0 left-0 p-4">
        <a href="{{ route('games.index') }}" class="flex items-center text-gray-700 hover:text-gray-900">
            <i class="fas fa-arrow-left mr-2"></i> Retour
        </a>
    </div>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-4 text-center">
            <h1 class="text-xl font-semibold text-gray-700">Ajouter un jeu</h1>
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Titre
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Titre du jeu" value="{{ old('title') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="release_date">
                        Date de Sortie
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="release_date" name="release_date" type="date" value="{{ old('release_date') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="genre">
                        Genre
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="genre" name="genre" type="text" placeholder="Genre du jeu" value="{{ old('genre') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="summary">
                        Résumé
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="summary" name="summary" rows="3" placeholder="Résumé du jeu" required>{{ old('summary') }}</textarea>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="producer">
                        Producteur
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="producer" name="producer" type="text" placeholder="Producteur du jeu" value="{{ old('producer') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pegi">
                        PEGI
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pegi" name="pegi" type="number" placeholder="Classification PEGI" value="{{ old('pegi') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="score">
                        Score (<span id="scoreValue" class="text-gray-700">50</span>)
                    </label>
                    <input class="!border-cyan-200 border-2 h-1 appearance-none rounded w-2/5  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="score" name="score" type="range" placeholder="Score du jeu" value="{{ old('score') }}" required min="0" max="100" oninput="document.getElementById('scoreValue').textContent = this.value">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                        Commentaire
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comment" name="comment" rows="3" placeholder="Votre commentaire" required>{{ old('comment') }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="cover_image">
                        Image de Couverture
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cover_image" name="cover_image" type="file" accept="image/png, image/jpeg" value="{{ old('cover_image') }}" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Ajouter le jeu
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>