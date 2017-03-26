<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Egreso</title>
  <link rel="stylesheet" href="{{asset('forms/css/foundation.css')}}">
  <link rel="stylesheet" href="{{asset('forms/css/forms.css')}}">

</head>
<body>
  <!-- Header with title and logo -->
  <header>
    <div class="row align-center text-center">
      <div class="column medium-3" id="icon">
        <img src="{{asset('forms/icons/logo.png')}}">
      </div>

      <div class="column medium-9">
        <!-- title -->
        <div class="row" id="main-title">
          <div class="column medium-12">
            <h3>INSIGHT PSICOLOGÍA ESPECIALIZADA</h3>
          </div>
        </div>
        <div class="row" id="sheet-title">
          <div class="column medium-12">
            <h3>EGRESO</h3>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="main-input">
    <div class="row align-center">
      <div class="column medium-4">

        <label>Fecha de creación</label>
        <input type="text">

      </div>
      <div class="column medium-4">

        <label>Tipo de usuario</label>
        <!-- TODO: give this a name -->
        <select name="" id="select-user-type">
          <option value="1">Contributivo</option>
          <option value="2">Subsidiado</option>
          <option value="3">Vinculado</option>
          <option value="4" selected>Particular</option>
          <option value="5">Otro</option>
        </select>

      </div>
      <div class="column medium-4">
        <label>No. Historia</label>
        <input type="text">
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-2 text-center label-aside">
        Apellidos
      </div>
      <div class="column small-10">
        <input type="text">
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-2 text-center label-aside">
        Nombres
      </div>
      <div class="column small-10">
        <input type="text">
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-6 medium-2 
                  text-right label-aside">
        Fecha de nacimiento
      </div>
      <div class="column small-6 medium-2">
        <input type="text">
      </div>

      <div class="column small-6 medium-1 
                  text-right label-aside">
        Edad
      </div>
      <div class="column small-3 medium-2">
        <input type="text">
      </div>
      <div class="column small-3 medium-2">
        <!-- TODO: give this a name -->
        <select name="" id="select-age-type">
          <option value="1">Años</option>
          <option value="2">Meses</option>
          <option value="3">Días</option>
        </select>
      </div>

      <div class="column small-6 medium-1
                  text-right label-aside">
        Sexo
      </div>
      <div class="column small-6 medium-2">
        <!-- TODO: give this a name -->
        <select name="" id="select-sex-type">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-8 medium-4 
                  label-aside text-right">
        Tipo de documento de identificación
      </div>
      <div class="column small-4 medium-2">
        <!-- TODO: give this a name -->
        <select name="" id="select-document-type">
          <option value="CC" selected>Cédula ciudadanía</option>
          <option value="CE">Cédula de extranjería</option>
          <option value="PA">Pasaporte</option>
          <option value="RC">Registro civil</option>
          <option value="TI">Tarjeta de identidad</option>
          <option value="AS">Adulto sin identificación</option>
          <option value="MS">Menor sin identificación</option>
          <option value="NU">Número único de identificación</option>
        </select>
      </div>

      <div class="column small-6 medium-3 
                  label-aside text-right">
        Doc. de identificación
      </div>
      <div class="column small-6 medium-3">
        <input type="text">
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-3 text-center label-aside">
        Documento final de egreso
      </div>
      <div class="column small-9">
        <select name="" id="select-egress-document">
          <option value="1">Sin diagnóstico</option>
        </select>
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Fecha de ingreso
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Fecha de egreso
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
    </div>

    <div class="row align-center">
      <div class="column medium-6">
        <div class="row align-center">

          <div class="column small-8 text-right">
            <h6 class="text-center">Motivo de Egreso</h6>
            Terminación de tratamiento <input type="checkbox"><br>
            Voluntario <input type="checkbox"><br>
            Paso a otro servicio <input type="checkbox"><br>
            Otro motivo <input type="checkbox"><br>
          </div>

        </div>
        <div class="row align-center">
          <div class="column small-8" id="extra-checkbox-text">
            <input type="text" placeholder="¿Cuál?">
          </div>
        </div>
      </div>



      <div class="column medium-6">
        <div class="row align-center">
          <div class="column small-1"></div>
          <div class="column small-10">
            <label>Observaciones</label>
            <textarea name="" id="comments" cols="auto" rows="auto"></textarea>
          </div>
          <div class="column small-1"></div>
        </div>
      </div>
    </div>




    <div class="row column medium-8 small-centered">
      <label>Profesional tratante</label>
      <input type="text" class="text-center">
    </div>

  </section>



  <section id="foot">
    <div class="row column small-12 small-centered text-center">
      <footer>Dirección: Carrera no. 52-08, oficina 202, Centro de Negocio, Cabecera. Bucaramanga. Santander.
      <br><br>Teléf.: (+57)3212742867 </footer>
    </div>
  </section>

  <script src="{{asset('forms/js/vendor/jquery.js')}}"></script>
  <script src="{{asset('forms/js/vendor/what-input.js')}}"></script>
  <script src="{{asset('forms/js/vendor/foundation.js')}}"></script>
  <script src="{{asset('forms/js/app.js')}}"></script>
</body>
</html>