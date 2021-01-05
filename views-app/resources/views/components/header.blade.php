<div>
    <h1> Este es el Componente del Header </h1>
    <h3> {{ $name }} </h3>
    <h3>Truits are: </h3>
    <ul>
        @foreach ($fruits as $fruit)
            <li> {{$fruit}} </li>
        @endforeach
    </ul>
</div>  