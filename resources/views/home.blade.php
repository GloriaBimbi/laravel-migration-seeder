@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Trains</h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Azienda</th>
            <th>Stazione di partenza</th>
            <th>Stazione di arrivo</th>
            <th>Orario di partenza</th>
            <th>Orario di arrivo</th>
            <th>Codice Treno</th>
            <th>In orario</th>
            <th>Cancellato</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($trains as $train)
            <tr>
              <td>{{$train->id}}</td>
              <td>{{$train->company}}</td>
              <td>{{$train->departure_station}}</td>
              <td>{{$train->arrival_station}}</td>
              <td>{{$train->departure_date}}</td>
              <td>{{$train->arruval_date}}</td>
              <td>{{$train->train_code}}</td>
              <td>{{$train->on_time ? 'Si' : 'No'}}</td>
              <td>{{$train->cancelled ? 'Si' : 'No'}}</td>
            </tr>
          @empty
              <tr>
                <td colspan="9"></td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
@endsection
