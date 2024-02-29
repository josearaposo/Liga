Create
<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('jugadores.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Nombre -->
            <div>
                <x-input-label for="nombre" :value="'Nombre del Jugador'" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                    required autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>
            <!-- Posicion -->
            <div>
                <x-input-label for="posicion" :value="'Posicion del Jugador'" />
                <x-text-input id="posicion" class="block mt-1 w-full" type="text" name="posicion" :value="old('posicion')"
                    required autofocus autocomplete="posicion" />
                <x-input-error :messages="$errors->get('posicion')" class="mt-2" />
            </div>
            <!-- Edad -->
            <div>
                <x-input-label for="edad" :value="'Edad del Jugador'" />
                <x-text-input id="edad" class="block mt-1 w-full" type="text" name="edad" :value="old('edad')"
                    required autofocus autocomplete="edad" />
                <x-input-error :messages="$errors->get('edad')" class="mt-2" />
            </div>
            <!-- Foto -->
            <div>
                <x-input-label for="foto" :value="'Foto del Jugador'" />
                <x-text-input id="foto" class="block mt-1 w-full" type="file" name="foto" :value="old('foto')"
                    required autofocus autocomplete="foto" />
                <x-input-error :messages="$errors->get('foto')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('jugadores.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Insertar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
