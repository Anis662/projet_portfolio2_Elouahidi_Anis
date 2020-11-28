
<section id="about" class="about">

    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      @foreach ($about as $i )
      <div class="row">
        <div class="col-lg-4">
          <img src="{{ asset("img/$i->photo") }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>UI/UX Designer &amp; Web Developer.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{ $i->anniversaire }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{ $i->website }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $i->phone }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{ $i->city }}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ $i->age }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{ $i->degre }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{ $i->mail }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{ $i->freelance }}</li>
              </ul>
            </div>
          </div>
          <p>
            {{ $i->texte }}
          </p>
        </div>
      </div>
          
      @endforeach

    </div>
  </section>
