<button>
    <a href="/create_cars">
        ADD CAR
    </a>
</button>
@foreach($cars as $car)
<h2>
    {{$car->type}}
    {{$car->model}}
    <button>
        <a href="{{route('delete_cars',$car->id)}}">Delete This car</a>
    </button>
</h2>
@endforeach