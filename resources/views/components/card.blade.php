{{-- <div class="bg-gray-50 border border-gray-200 rounded p-6">
    {{$slot}}  slot is for sorounding when u want to pass component tags eg divisions
</div> --}}

{{-- the above method  used to replace the the division with the same with the class 
    the above card componet raps around what ever we want <x-card> </x-card> eg --}}

<div {{$attributes->merge(['class'=>'class="bg-gray-50 border border-gray-200 rounded p-6"'])}}>
    {{$slot}}
</div> 


