<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
</head>

<body>
<a href="/add_users">ADD NEW USRER</a>
    @foreach($users as $user)
    <div class="col-sm-5">
        <h2 class="fw-bold fs-7">
            {{$user->name}}
            <br>
            {{$user->email}}
            <br>
            {{$user->mobile}}
            <br>
            {{$user->age}}
        </h2>
        <button>
            <a href="{{route('delete_users',$user->id)}}">Delete This User</a>
        </button>
    </div>
    </div>
    </div>
    @endforeach

</body>

</html>