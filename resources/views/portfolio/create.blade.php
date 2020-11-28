@extends('templates.structure')
@section('content')


<section class="container">

    
    <form action="{{ route("portfolio.store") }}" method="POST" enctype="multipart/form-data">
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
          <label for="formGroupExampleInput">Categorie</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="categorie">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Img</label>
          <input type="file" class="form-control" id="formGroupExampleInput2"  name="img">
        </div>
      
          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-secondary">SUBMIT</button>
          </div>
      </form>
</section>
@endsection

