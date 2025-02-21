<x-template>

<div class="space-y-4">
@foreach ($cours as $cour)
<p> {{$cour->nom}} </p>

@endforeach

</x-template>
