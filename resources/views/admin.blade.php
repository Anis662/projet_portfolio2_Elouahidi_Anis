@extends('templates.structure')
@include('header.header')
    
@section('content')
    <section class="container">
        <h1 class="text-center">Table About</h1>
        <a href="{{ route("about.create") }}" class="btn btn-warning">CREATE</a>
        <table class="table-responsive table-info container">
            <thead class="text-center">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">PHOTO</th>
                <th scope="col">ANNIVERSAIRE</th>
                <th scope="col">WEBSITE</th>
                <th scope="col">PHONE</th>
                <th scope="col">CITY</th>
                <th scope="col">AGE</th>
                <th scope="col">DEGRE</th>
                <th scope="col">MAIL</th>
                <th scope="col">FREELANCE</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>

            @foreach ($about as $i)
            <tbody>
              <tr class="px-5">
                <td >{{ $i->id }}</td>
                <td ><img src="{{ asset("img/$i->photo") }}"></td>
                <td >{{ $i->anniversaire }}</td>
                <td >{{ $i->website }}</td>
                <td >{{ $i->phone }}</td>
                <td >{{ $i->city }}</td>
                <td >{{ $i->age }}</td>
                <td >{{ $i->degre }}</td>
                <td >{{ $i->mail }}</td>
                <td >{{ $i->freelance }}</td>
                <td class="d-flex">
                    <a href="/admin/about/{{ $i->id }}/edit" class="btn btn-success">EDIT</a>
                    <form action="/admin/about/{{ $i->id }}" method="POST">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </td>


              </tr>
              
            </tbody>
                
            @endforeach
          </table>

          <h1 class="text-center">Table Skill</h1>
          <a href="{{ route("skill.create") }}" class="btn btn-warning">CREATE</a>
          <table class="table table-success">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Language</th>
                  <th scope="col">Pourcentage</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
  
              @foreach ($skill as $i)
              <tbody>
                <tr class="px-5">
                  <td >{{ $i->id }}</td>
                  <td >{{ $i->langue }}</td>
                  <td >{{ $i->pourcentage }}%</td>
                  <td class="d-flex">
                      <a href="/admin/skill/{{ $i->id }}/edit" class="btn btn-success">EDIT</a>
                      <form action="/admin/skill/{{ $i->id }}" method="POST">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger" type="submit">DELETE</button>
                      </form>
                  </td>
  
  
                </tr>
                
              </tbody>
                  
              @endforeach
            </table>

            <h1 class="text-center">Table Fact</h1>
            <a href="{{ route("fact.create") }}" class="btn btn-warning">CREATE</a>

            <table class="table table-secondary">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CHIFFRE</th>
                    <th scope="col">TITRE</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
    
                @foreach ($fact as $i)
                <tbody>
                  <tr class="px-5">
                    <td >{{ $i->id }}</td>
                    <td >{{ $i->titre }}</td>
                    <td >{{ $i->chiffre}}</td>
                    <td class="d-flex">
                        <a href="/admin/fact/{{ $i->id }}/edit" class="btn btn-success">EDIT</a>
                        <form action="/admin/fact/{{ $i->id }}" method="POST">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </td>
    
    
                  </tr>
                  
                </tbody>
                    
                @endforeach
              </table>



            <h1 class="text-center">Table Portfolio</h1>
            <a href="{{ route("portfolio.create") }}" class="btn btn-warning">CREATE</a>

            <table class="table table-danger">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">CATEGORIE</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
    
                @foreach ($portfolio as $i)
                <tbody>
                  <tr class="px-5">
                    <td >{{ $i->id }}</td>
                    <td ><img src="{{ asset("img/$i->img") }}" alt=""></td>
                    <td >{{ $i->categorie}}</td>
                    <td class="d-flex">
                        <a href="/admin/portfolio/{{ $i->id }}/edit" class="btn btn-success">EDIT</a>
                        <form action="/admin/portfolio/{{ $i->id }}" method="POST">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </td>
    
    
                  </tr>
                  
                </tbody>
                    
                @endforeach
              </table>
    </section>
@endsection