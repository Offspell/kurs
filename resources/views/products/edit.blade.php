<x-guest-layout>
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nazwa')" />
            <x-text-input id="name" class="block mt-1 w-full" max length="500" type="text" name="name" :value="old($product->name)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Surname -->
        <div>
            <x-input-label for="description" :value="__('Opis')" />
            <textarea id="description" max length="1500" class="block mt-1 w-full" type="text" name="description" :value="old($product->description)" required autofocus autocomplete="description"></textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <!-- Phone_number -->
        <div>
            <x-input-label for="amount" :value="__('Ilość')" />
            <x-text-input id="amount" class="block mt-1 w-full" min="0" type="number" name="amount" :value="old($product->amount)" required autofocus autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Cena')" />
            <x-text-input id="price" step="0.01" min="0" class="block mt-1 w-full" type="number" name="price" :value="old($product->price)" required autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="image" :value="__('Grafika')" />
            <x-text-input id="image" class="form-control" type="file" name="image"/>
        </div>
        <div class="mt-4 justify-content-center">
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="Zdjęcie produktu">
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">

            </a>

            <x-primary-button class="ms-4">
                Zapisz
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
