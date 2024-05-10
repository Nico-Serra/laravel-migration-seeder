@extends('layouts.app')

@section('page-title', 'Train')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Thanks for choise our Train</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Buy
            </button>
        </div>
    </div>

    

    <section class="bg-dark">
        <h2 class="text-center text-white">Your Train is</h2>
        <div class="container">
            <div class="col">
                <a href="{{ route('guest.train.show', $train) }}" class="text-decoration-none">
                    <div class="card py-5 position-relative">
                        <div class="card-body">
                            <div class="d-flex justify-content-between py-4">
                                <span>
                                    Codice Treno:
                                    <strong>
                                        {{ $train->codice_treno }}
                                    </strong>
                                </span>
                                <h3 class="card-title">
                                    {{ $train->azienda }}
                                </h3>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div>Stazione di partenza:
                                    <strong>
                                        {{ $train->stazione_di_partenza }}
                                    </strong>
                                </div>
                                <div>Stazione di arrivo:
                                    <strong>
                                        {{ $train->stazione_di_arrivo }}
                                    </strong>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between py-4">
                                <div>Orario di partenza:
                                    <strong>
                                        {{ $train->orario_di_partenza }}
                                    </strong>
                                </div>
                                <div>Orario di arrivo:
                                    <strong>
                                        {{ $train->orario_di_arrivo }}
                                    </strong>
                                </div>
    
                            </div>
    
    
                        </div>
                        <div class="card_bg">
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col text-center py-5 text-white">
                @if ($train->in_orario === 1)
                    <h4>Il tuo treno è in orario</h4>
                    @if ($train->cancellato === 1)
                        <h5>Mi dispiace il tuo treno è stato cancellato </h5>
                    @endif
                @else
                    <h4>il tuo treno non è in orario</h4>
                @endif
            </div>
        </div>
    </section>


@endsection
