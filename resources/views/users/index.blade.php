<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden space-y-10 p-5 shadow-sm sm:rounded-lg">
                <div class="flex w-full justify-between">
                    <h1 class="text-center text-3xl font-bold">Gestion des utilisateurs</h1>
                    @if($users->count() == 1)
                    <a href="{{ route('users.createTest') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Ajouter utilisateur de test
                    </a>
                    @endif
                </div>
                <table class="border border-gray-300 mx-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Nom</th>
                            <th class="border border-gray-300 px-4 py-2">Email</th>
                            <th class="border border-gray-300 px-4 py-2">Rôle</th>
                            <th class="border border-gray-300 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $user->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if($user->id != auth()->user()->id)
                                <form action="{{ route('users.update', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <select name="role" id="role" class="border border-gray-300 px-4 pl-2 pr-16" onchange="this.form.submit()">
                                        <option value="admin" {{ $user->roles[0]->name == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="moderator" {{ $user->roles[0]->name == 'moderator' ? 'selected' : '' }}>Editor</option>
                                        <option value="user" {{ $user->roles[0]->name == 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                </form>
                                @else
                                {{ $user->roles[0]->name }}
                                @endif
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if($user->id != auth()->user()->id)
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Supprimer
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>