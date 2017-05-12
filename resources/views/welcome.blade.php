@extends('layouts.app')

@section('title')
HOME &raquo;
@endsection

@section('content')



    

<div class="container text-center">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="blue">
        <a class="navbar-center" href="{{ url('/jakdzialamy') }}">
                <img src="pic/certus_zobacz.png">
                Sprawdź jak działamy, zobacz jakie to proste!
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1"> <!-- col8 start -->
      


      <div class="col-md-4"><!-- col4-01 start -->
        <img class="img-circle" src="pic/av3.png" alt="Generic placeholder image"  height="100">
              </br></br>
              <h2>Dołącz do grona zadowolonych klientów</h2> 
      </div><!-- col4-01 end -->
      


      <div class="col-md-4"><!-- col4-02 start -->
        <img class="img-circle" src="pic/av1.png" alt="Generic placeholder image" width="140" height="140">
              <h2></h2>
              <p>Największą zaletą pożyczki w Certus jest szybki czas weryfikacji wniosków. Gotówkę można otrzymać nawet w ciągu 15 minut z dojazdem do klienta!</br>
        <b>Pani Beata</b> z Braniewa</p>
      </div><!-- col4-02 end -->
        


      <div class="col-md-4"><!-- col4-03 start -->
        <img class="img-circle" src="pic/av2.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2></h2>
              <p>Skorzystałem z Auto Pożyczki. Byłem zaskoczony, że moje auto w pełni zabezpieczyło pożyczkę, a ja nadal mogłem z niego korzystać!</br>
        <b>Pan Krzysztof</b> z Węgorzewa</p>
      </div><!-- col4-03 end -->
    </div><!-- col8 end -->
  </div>
</div>


@endsection










