@if($errors->any())
    <div class="alert alert-danger dev-mod">
        <li>{{ $errors->first() }}</li>
    </div>
@endif

@if (Session::has('message'))
    <div class="alert {{ Session::get('messageType') == 's' ? 'alert-success' : 'alert-danger' }} dev-mod">
        <ul>
            <li>{{ Session::get('message') }}</li>
        </ul>
    </div>
@endif