<div style="
    border: 1px solid 
    #0000FF; 
    padding: 32px; 
    background-color: {{$color}}"
>
    
    <h1> {{ $salutation }}, {{ strtoupper($name)}} </h1>

    {{-- <input type="text" wire:model="name"/> --}}

    {{-- <select wire:model="name">
        <option value="Alessandro">Alessandro</option>
        <option value="Carlos Alberto">Carlos Alberto</option>
    </select> --}}
    <select wire:model="salutation">
        @foreach($salutationOptions as $option)
            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>

    <input type="color" wire:model="color" />
   
</div>
