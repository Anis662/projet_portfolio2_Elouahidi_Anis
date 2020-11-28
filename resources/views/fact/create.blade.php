@extends('templates.structure')
@section('content')


<section class="container">

    
    <form action="{{ route("fact.store") }}" method="POST">
        @csrf
        
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
          <input type="text" class="form-control" id="formGroupExampleInput"  name="titre">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Chiffre</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="chiffre">
        </div>
      
          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-secondary">SUBMIT</button>
          </div>
      </form>
</section>
@endsection

