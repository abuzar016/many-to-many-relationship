@if (Session::has('success'))
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ Session::get('success') }} 
                </div>
            </div>
        </div>
    </div>
@endif

@if (Session::has('delete'))
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-danger">
                    <strong>Delete!</strong> {{ Session::get('delete') }} 
                </div>
            </div>
        </div>
    </div>
@endif