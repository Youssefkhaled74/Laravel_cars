<h1>Welcome in Add User page </h1>
<div class="m-auto text-center pt-4 pb-4">
    <h1 class="fs-9 fw-bold"> Add user</h1>
</div>
<div class="m-auto text-center p-4 container border border-4 mb-4">
    <form action="/store_users" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold fs-3">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold fs-3">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div>
            <label class="form-label fw-bold fs-3">Age</label>
            <input class="form-control form-control-lg fw-bold" type="text" name="age">
        </div>
        <div>
            <label class="form-label fw-bold fs-3">Mobile</label>
            <input class="form-control form-control-lg fw-bold" type="text" name="mobile">
        </div>
        <div>
            <label class="form-label fw-bold fs-3">Password</label>
            <input class="form-control form-control-lg fw-bold" type="text" name="password">
        </div>
        <div class="d-grid gap-1 mt-4">
            <button type="submit" class="btn btn-dark">Add</button>
        </div>
    </form>
</div>