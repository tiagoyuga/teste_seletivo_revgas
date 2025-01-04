<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">

    <div class="card-body px-4 py-3">

        <div class="row align-items-center">

            <div class="col-8">
                <h4 class="fw-semibold mb-8">{{ $label }}</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="{{ route('home') }}">Início</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <strong><a href="{{ route('home') }}">{{ $label }}</a></strong>
                        </li>

                    </ol>
                </nav>
            </div>
            {{----}}
        </div>
    </div>
</div>