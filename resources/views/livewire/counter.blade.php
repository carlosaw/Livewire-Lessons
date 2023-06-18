<div>
    <h1> Contador de Estrelas (0-6): {{ $number }} </h1>
    {{-- <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button> --}}

    {{-- <input wire:keydown.a.prevent = "increment" wire:keydown.d.prevent = "decrement"/>
    <button wire:mouseover="increment">mouse over (+)</button>
    <button wire:mouseout="decrement">mouse out (-)</button> --}}

    {{-- <button wire:click="$set('number', 10)">Setar 10</button> --}}
    {{-- <button wire:click="$toggle('number')">Toggle</button> --}}
    <button wire:click="$refresh">Refresh</button>
</div>
