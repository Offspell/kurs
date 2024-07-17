<x-guest-layout>
    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Nazwa')" />
        <x-text-input id="name" class="block mt-1 w-full" max length="500" type="text" name="name" :value="($product->name)" disabled/>
    </div>
    <!-- Surname -->
    <div>
        <x-input-label for="description" :value="__('Opis')" />
        <x-text-input id="description" max length="1500" class="block mt-1 w-full" type="text" name="description" :value="($product->description)" disabled />
    </div>
    <!-- Phone_number -->
    <div>
        <x-input-label for="amount" :value="__('Ilość')" />
        <x-text-input id="amount" class="block mt-1 w-full" min="0" name="amount" :value="($product->amount)" disabled />

    </div>
    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="price" :value="__('Cena')" />
        <x-text-input id="price" step="0.01" min="0" class="block mt-1 w-full" :value="($product->price)" disabled />
    <div class="flex items-center justify-end mt-4"></div>

    <div class="mt-4">
        <x-input-label for="category" :value="__('Kategoria')" />
        <select id="category" class="block mt-1 w-full" name="category_id" disabled>
            @if($product->hasCategory())
                <option>{{ $product->category->name }}</option>
            @else
                <option>Brak</option>
            @endif
        </select>
    </div>
</x-guest-layout>
