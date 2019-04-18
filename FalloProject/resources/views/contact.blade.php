@extends('LogMaster')

@section('title')
    contact
@endsection

@section('content')
  <form method="post">
      {{ csrf_field() }}


      <div class="divConnect form-group">From : </div>

      <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Votre adresse Mail" value="{{ old('email') }}" name="email">
      </div>
          <!-- Gestion d'erreur pour l'adresse Mail -->
          @if( $errors->has('email'))

              <p class="help is-danger">
                  {{ $errors->first('email') }}
              </p>

          @endif

          <div class="divConnect form-group">To : </div>
          <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="ahmedhilali07@gmail.com" name="email" readonly>
          </div>
              <!-- Gestion d'erreur pour l'adresse Mail -->
              @if( $errors->has('email'))

                  <p class="help is-danger">
                      {{ $errors->first('email') }}
                  </p>

              @endif
          <br>
          <textarea rows="10" class="form-control" placeholder="Message" name="message"></textarea>

          <input type="submit" >

  </form>
@endsection
