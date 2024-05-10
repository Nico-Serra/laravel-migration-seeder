@extends('layouts.app')

@section('page-title', 'Trains')

@section('content')
    <section class="bg-dark py-4">
        <div class="container">
            <div class="row row-cols-1 g-4">
                @forelse ($trains as $train)
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
                @empty
                    <div class="col">
                        <h2>Not found Trains</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
