@if(session()->has('message'))
   <div x-data="{show:true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed -translate-xp-1/2 top-0 tranform bg-laravel left-1/2 text-black px-48 py-3">
    <p>{{session('message')}}</p>
</div>
    {{-- it wrks only the color of th back ground --}}
@endif