@if ($errors->any())
    <div class="alert alert-danger">
        <h5>Gagal!</h5>
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
