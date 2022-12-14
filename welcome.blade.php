<!--Laad Master Elements-->
@extends('master')
@section('title', 'HBM Taaklijst')
@section('content')

<!--Form voor de takenlijst-->
<div>
<h1>Taken Lijst</h1>

<form method="post" action="{{ route('saveTaak') }}" accept-charset="UTF-8">
    {{ csrf_field() }}

    <Label for="TaakLijst">Voor hier uw Taak in:</label> </br>
    <input type="text" name="TaakLijst"> </br></br>
    <button type="sumbit" class="TaakForm">Taak opslaan</button>

</form>
</div>

<!--Lijst met taken-->
@foreach ($TakenLijst as $TaakLijst)
<div>
    <p>Taak:</p>
    <p>{{ $TaakLijst->Taak }}</p>

    <form method="post" action="{{ route('Compleet', $TaakLijst->id) }}" accept-charset="UTF-8">
        {{ csrf_field() }}
        <button type="sumbit" class="CompleetKnop">Taak compleet</button>
    </form>
    </br>
</div>
@endforeach

@endsection
