{{-- @props(['tagsCsv'])  the scv is commer separated list  --}}

@props(['tagsCsv']) 

 @php   
//  siting the  array using explode basing on the comes
 $tags = explode(',', $tagsCsv);
 @endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
    <a href="/?tag={{$tag}}">{{$tag}}</a>    
     {{-- /? filter and pass the query tag --}}

   </li>
    @endforeach

</ul>
               
                