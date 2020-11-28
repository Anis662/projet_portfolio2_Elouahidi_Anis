@extends('templates.structure')
@section('content')


<section class="container">

    
    <form action="/admin/fact/{{ $fact->id }}" method="POST">
        @csrf
        @method("put")
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="form-group">
          <label for="formGroupExampleInput">Titre</label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $fact->titre }}" name="titre">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Chiffre</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $fact->chiffre }}" name="chiffre">
        </div>
      
          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-secondary">SUBMIT</button>
          </div>
      </form>
</section>
@endsection

