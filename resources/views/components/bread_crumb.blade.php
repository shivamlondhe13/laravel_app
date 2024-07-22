<div class="bg-secondary">
    <div class="card bg-transparent">
        <div class="card-body ">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @foreach ($crumb as $val)
                        <li class="breadcrumb-item text-light" aria-current="page">
                            <h4>
                                {{ $val }}
                            </h4>
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
</div>
