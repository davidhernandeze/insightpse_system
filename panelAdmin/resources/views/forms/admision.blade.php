<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admisión</title>
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
            <h3>ADMISIÓN</h3>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- 
    Here lie all the inputs, 
    this is the main form,
    the greatest form of all,
    the container of all those
    small divs and inputs.

    PS: Delete all TODOs when you're done
  -->
  <section id="main-form">
    <!-- for your own sake I'm gonna list all rows in order: -->

    <!-- Row 1 -->
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

    <!-- Row 2 -->
    <div class="row align-center">
      <div class="column small-2 text-center label-aside">
        Apellidos
      </div>
      <div class="column small-10">
        <input type="text">
      </div>
    </div>

    <!-- Row 3 -->
    <div class="row align-center">
      <div class="column small-2 text-center label-aside">
        Nombres
      </div>
      <div class="column small-10">
        <input type="text">
      </div>
    </div>

    <!-- Row 4 -->
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

    <!-- Row 5 -->
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

    <!-- Row 6 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Lugar de nacimiento
      </div>
      <div class="column small-7 medium-5">
        <input type="text">
      </div>
      <div class="column small-5 show-for-small-only"></div>
      <div class="column small-7 medium-5">
        <input type="text">
      </div>
    </div>

    <!-- Row 7 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Dirección
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Barrio
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
    </div>

    <!-- Row 8 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Ciudad
      </div>
      <div class="column small-7 medium-2">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Departamento
      </div>
      <div class="column small-7 medium-2">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Zona
      </div>
      <div class="column small-7 medium-2">
        <!-- TODO: put a name if you want to -->
        <select name="" id="select-zone-type">
          <option value="U">Urbana</option>
          <option value="R">Rural</option>
        </select>
      </div>
    </div>

    <!-- Row 9 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Teléfono
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Correo electrónico
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
    </div>
    
    <!-- Row 10 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Estado civil
      </div>
      <div class="column small-7 medium-4">
        <!-- TODO: name-roni peperoni -->
        <select name="" id="select-civil-state">
          <option value="1">Soltero(a)</option>
          <option value="2">Casado(a)</option>
          <option value="3">Divorciado(a)</option>
          <option value="4">Viudo(a)</option>
        </select>
      </div>
      <div class="column small-5 medium-4 
                  label-aside text-right">
        No. de hijos o hermanos
      </div>
      <div class="column small-7 medium-2">
        <input type="text">
      </div>
    </div>

    <!-- Row 11 -->
    <div class="row align-center">
      <div class="column small-3 medium-2 
                  label-aside text-right">
        Acompañante
      </div>
      <div class="column small-2 medium-1">
        <!-- TODO: give me a name senpai -->
        <select name="" id="select-companion-type">
          <option value="true">Si</option>
          <option value="false">No</option>
        </select>
      </div>
      <div class="column small-3 medium-2 
                  label-aside text-right">
        Parentesco
      </div>
      <div class="column small-4 medium-7">
        <input type="text">
      </div>
    </div>

    <!-- Row 12 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Apellidos
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Nombres
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
    </div>

  </section>

  <section id="parents-section">

    <!-- Row 13 -->
    <div class="row align-center text-center">
      <div class="column small-12">
        <h3>Datos de los padres</h3>
      </div>
    </div>
  
    <!-- Row 14 -->
    <div class="row align-center">
      <div class="column small-4 medium-2
                  text-center label-aside">
        Nombre padre
      </div>
      <div class="column small-8 medium-10">
        <input type="text">
      </div>
    </div>

    <!-- Row 15 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Doc. identidad
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Teléfono
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
    </div>

    <!-- Row 16 -->
    <div class="row align-center">
      <div class="column small-4 medium-2
                  text-center label-aside">
        Nombre madre
      </div>
      <div class="column small-8 medium-10">
        <input type="text">
      </div>
    </div>

    <!-- Row 17 -->
    <div class="row align-center">
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Doc. identidad
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        Teléfono
      </div>
      <div class="column small-7 medium-4">
        <input type="text">
      </div>
    </div>

  </section>

  <section id="brothers-childs-section">

    <!-- Row 18 -->
    <div class="row align-center text-center">
      <div class="column small-12">
        <h3>Datos de los hermanos o hijos</h3>
      </div>
    </div>

    <!-- Row 19 -->
    <div class="row align-center text-center">
      <div class="column small-4">
        Nombres y apellidos
      </div>
      <div class="column small-2">
        Edad
      </div>
      <div class="column small-2">
        Sexo
      </div>
      <div class="column small-4">
        Ocupación
      </div>
    </div>

    <!-- Row 20 -->
    <div class="row align-center text-center">
      <div class="column small-4">
        <input type="text">
      </div>
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-2">
        <!-- TODO: give this a name -->
        <select name="" id="select-sex-type">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
      </div>
      <div class="column small-4">
        <input type="text">
      </div>
    </div>

    <!-- Row 21 -->
    <div class="row align-center text-center">
      <div class="column small-4">
        <input type="text">
      </div>
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-2">
        <!-- TODO: give this a name -->
        <select name="" id="select-sex-type">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
      </div>
      <div class="column small-4">
        <input type="text">
      </div>
    </div>

    <!-- Row 22 -->
    <div class="row align-center text-center">
      <div class="column small-4">
        <input type="text">
      </div>
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-2">
        <!-- TODO: give this a name -->
        <select name="" id="select-sex-type">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
      </div>
      <div class="column small-4">
        <input type="text">
      </div>
    </div>

  </section>

  <section id="consort-section">
    <!-- Row 23 -->
    <div class="row align-center text-center">
      <div class="column small-12">
        <h3>Datos del cónyuge</h3>
      </div>
    </div>

    <!-- Row 24 -->
    <div class="row align-center">
      <div class="column small-4 medium-2 
                  label-aside text-right">
        Nombre
      </div>
      <div class="column small-8 medium-4">
        <input type="text">
      </div>
      <div class="column small-4 medium-2 
                  label-aside text-right">
        Apellidos
      </div>
      <div class="column small-8 medium-4">
        <input type="text">
      </div>
    </div>

    <!-- Row 25 -->
    <div class="row align-center">
      <div class="column small-4 medium-2
                  label-aside text-right">
        Edad
      </div>
      <div class="column small-8 medium-1">
        <input type="text">
      </div>
      <div class="column small-4 medium-2
                  label-aside text-right">
        Ocupación
      </div>
      <div class="column small-8 medium-2">
        <input type="text">
      </div>
      <div class="column small-4 medium-2
                  label-aside text-right">
        Escolaridad
      </div>
      <div class="column small-8 medium-3">
        <input type="text">
      </div>
    </div>

    <!-- Row 26 -->
    <div class="row align-center">
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Tiempo de matrimonio
      </div>
      <div class="column small-6 medium-3">
        <input type="text">
      </div>
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Tiempo de noviazgo
      </div>
      <div class="column small-6 medium-3">
        <input type="text">
      </div>
    </div>

    <!-- Row 27 -->
    <div class="row align-center">
      <div class="column small-7 medium-4 
                  label-aside text-right">
        Matrimonios anteriores suyos
      </div>
      <div class="column small-5 medium-3">
        <input type="text">
      </div>
      <div class="column small-5 medium-2 
                  label-aside text-right">
        No. Hijos
      </div>
      <div class="column small-7 medium-3">
        <input type="text">
      </div>
    </div>

    <!-- Row 28 -->
    <div class="row align-center">
      <div class="column small-7 medium-4 
                  label-aside text-right">
        Matrimonios anteriores de su pareja
      </div>
      <div class="column small-5 medium-3">
        <input type="text">
      </div>
      <div class="column small-7 medium-2 
                  label-aside text-right">
        No. Hijos
      </div>
      <div class="column small-5 medium-3">
        <input type="text">
      </div>
    </div>

  </section>

  <section id="comments">
    <!-- Row 29 -->
    <div class="row align-center">
      <div class="column small-12">
        <label>Observaciones:</label>
        <textarea name="" id="anotations" cols="auto" rows="auto"></textarea>
      </div>
    </div>
  </section>


  <section id="foot">
    <!-- Row 30 -->
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