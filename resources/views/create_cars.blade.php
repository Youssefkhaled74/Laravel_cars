<h1>Welcome in Add car page </h1>
<div class="m-auto text-center pt-4 pb-4">
    <h1 class="fs-9 fw-bold"> Add car</h1>
</div>
<div class="m-auto text-center p-4 container border border-4 mb-4">
    <form action="/store_cars" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold fs-3">Type</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold fs-3">Model</label>
            <input type="text" class="form-control" name="model">
        </div>
        <div class="d-grid gap-1 mt-4">
            <button type="submit" class="btn btn-dark">Add</button>
        </div>
    </form>
</div>