@extends('layouts.app')

@section('page-title', 'Trains')

@section('content')
    <section class="bg-dark py-4">
        <div class="container">

            <div class="py-4 d-flex justify-content-center">
                <form action="" method="get" class="d-flex">

                    <select class="form-select" name="data_for_train" id="data_for_train">
                        <option value="2024-05-13">2024-05-13</option>
                        <option value="2024-05-14">2024-05-14</option>
                        <option value="2024-05-15">2024-05-15</option>
                        <option value="2024-05-16">2024-05-16</option>
                        <option value="2024-05-17">2024-05-17</option>
                    </select>
    
                    <button type="submit" class="btn btn-warning">
                       Filter
                    </button>
    
    
                </form>
            </div>

            @if (isset($_GET['data_for_train']))
                <div class="row row-cols-1 g-4">
                    @foreach ($allTrains as $train)
                        @if ($train->data === $_GET['data_for_train'])
                            <div class="col">
                                <a href="{{ route('guest.train.show', $train) }}" class="text-decoration-none">
                                    <div class="card py-5 position-relative">
                                        <div class="card-body">
                                            <div class="text-center">
                                                Data Biglietto:
                                                <strong>
                                                    {{ $train->data }}
                                                </strong>
                                            </div>
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
                        @endif
                    @endforeach
        </div>
    @else
        <div class="row row-cols-1 g-4">
            @forelse ($trains as $key => $trainDay)
                @if ($key === 'trainsToday')
                    <h3 class="text-center text-white">
                        Treni in partenza oggi
                    </h3>
                @else
                    <h3 class="text-center text-white">
                        Treni in partenza prossimamente
                    </h3>
                @endif
                @foreach ($trainDay as $train)
                    <div class="col">
                        <a href="{{ route('guest.train.show', $train) }}" class="text-decoration-none">
                            <div class="card py-5 position-relative">
                                <div class="card-body">
                                    <div class="text-center">
                                        Data Biglietto:
                                        <strong>
                                            {{ $train->data }}
                                        </strong>
                                    </div>
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
                @endforeach
            @empty
                <div class="col">
                    <h2>Not found Trains</h2>
                </div>
            @endforelse
        </div>
        @endif
        </div>
    </section>
@endsection
