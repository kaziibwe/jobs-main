



 {{--  foreach ($listings as $listing): ?> --}}

 {{--  we can you the directives --}}
 
  {{-- <h2><//?php echo $listing['title']; ?></h2>
  <h2><//?php echo $listing['description']; ?></h2>
<//?php endforeach; ?> --}}

{{-- @php 
 $test = 1
@endphp

{{$test}} --}}



{{-- @extends('layout')
@section('content') --}}
<x-layout>
@include('partials._hero')
@include('partials._search')
    

{{-- <h1> {{ $heading }}  </h1> --}}

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" >

@unless(count($listings)==0)


@foreach ($listings as $listing)
{{-- <h2>
  <a href="/listings/{{$listing['id']}}"> {{$listing['title']}} </a>
</h2>
<h2>{{ $listing['description']}}</h2> --}}


{{-- components work with cards --}}
<x-listing-card :listing="$listing" />

@endforeach

@else 
<p>no listings</p>

@endunless

</div>
<div class="mt-6 p-4">
  {{$listings->links()}}
  </div>
  
</x-layout>

{{-- @endsection --}}




