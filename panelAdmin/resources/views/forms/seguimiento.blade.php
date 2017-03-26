<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Consulta</title>
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
            <h3>CONSULTA</h3>
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
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Código del diagnóstico relacionado
      </div>
      <div class="column small-6 medium-3">
        <input type="text">
      </div>
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Código del diagnóstico relacionado
      </div>
      <div class="column small-6 medium-3">
        <input type="text">
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-12">
        <label>Motivo de Consulta:</label>
        <textarea name="" id="consult-motive" cols="auto" rows="auto"></textarea>
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-12">
        <label>Evolución o seguimiento:</label>
        <textarea name="" id="records" cols="auto" rows="auto"></textarea>
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-12">
        <label>Indicaciones:</label>
        <textarea name="" id="plan" cols="auto" rows="auto"></textarea>
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Código de consulta
      </div>
      <div class="column small-6 medium-3">
        <input type="text">
      </div>
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Finalidad de la consulta
      </div>
      <div class="column small-6 medium-3">
        <select name="" id="select-consult-goal">
          <option value="1">Atención del parto (puerperio)</option>
          <option value="2">Atención del recién nacido</option>
          <option value="3">Atención en planificación familiar</option>
          <option value="4">Detección de alteraciones de crecimiento y desarrollo del menor de diez años</option>
          <option value="5">Detección de alteración del desarrollo joven</option>
          <option value="6">Detección de alteraciones del embarazo</option>
          <option value="7">Detección de alteraciones del adulto</option>
          <option value="8">Detección de alteraciones de agudeza visual</option>
          <option value="9">Detección de enfermedad profesional</option>
          <option value="10" selected>No aplica</option>

        </select>
      </div>
    </div>

    <div class="row align-center">
      <div class="column small-6 medium-3 
                  label-aside text-right">
        Causa externa
      </div>
      <div class="column small-6 medium-9">
        <select name="" id="external-cause">
          <option value="1">Accidente  de trabajo</option>
          <option value="2">Accidente  de tránsito</option>
          <option value="3">Accidente rábico</option>
          <option value="4">Accidente ofídico</option>
          <option value="5">Otro tipo de accidente</option>
          <option value="6">Evento catastrófico</option>
          <option value="7">Lesión por agresión</option>
          <option value="8">Lesión auto infligida</option>
          <option value="8"></option>
          <option value="9">Sospecha de maltrato físico/option>
          <option value="10">Sospecha de abuso sexual</option>
          <option value="11">Sospecha de violencia sexual</option>
          <option value="12">Sospecha de maltrato emocional</option>
          <option value="13">Enfermedad general</option>
          <option value="14">Enfermedad profesional</option>
          <option value="15">Otra</option>

        </select>
      </div>
    </div>

    <div class="row align-center text-center">
      <div class="column small-2">
        Código
      </div>
      <div class="column small-4">
        Procedimiento
      </div>
      <div class="column small-2">
        Cantidad
      </div>
      <div class="column small-2">
        Finalidad
      </div>
      <div class="column small-2">
        Forma de realización
      </div>
    </div>

    <div class="row align-center text-center">
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-4">
        <input type="text">
      </div>
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-2">
        <select name="" id="select-finality">
          <option value="1">
            Terapéutico
          </option>
        </select>
      </div>
      <div class="column small-2">
        <select name="" id="select-realization-way">
          <option value="1">Unico o unilateral</option>
          <option value="2">Múltiple o bilateral, misma vía, diferente especialidad</option>
          <option value="3">Múltiple o bilateral, misma vía, igual especialidad</option>
          <option value="4">Múltiple o bilateral, diferente vía, diferente especialidad</option>
          <option value="5">Múltiple o bilateral, diferente vía, igual especialidad</option>
        </select>
      </div>
    </div>

    <div class="row align-center text-center">
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-4">
        <input type="text">
      </div>
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-2">
        <select name="" id="select-finality">
          <option value="1">
            Terapéutico
          </option>
        </select>
      </div>
      <div class="column small-2">
        <select name="" id="select-realization-way">
          <option value="1">Unico o unilateral</option>
          <option value="2">Múltiple o bilateral, misma vía, diferente especialidad</option>
          <option value="3">Múltiple o bilateral, misma vía, igual especialidad</option>
          <option value="4">Múltiple o bilateral, diferente vía, diferente especialidad</option>
          <option value="5">Múltiple o bilateral, diferente vía, igual especialidad</option>
        </select>
      </div>
    </div>

    <div class="row align-center text-center">
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-4">
        <input type="text">
      </div>
      <div class="column small-2">
        <input type="text">
      </div>
      <div class="column small-2">
        <select name="" id="select-finality">
          <option value="1">
            Terapéutico
          </option>
        </select>
      </div>
      <div class="column small-2">
        <select name="" id="select-realization-way">
          <option value="1">Unico o unilateral</option>
          <option value="2">Múltiple o bilateral, misma vía, diferente especialidad</option>
          <option value="3">Múltiple o bilateral, misma vía, igual especialidad</option>
          <option value="4">Múltiple o bilateral, diferente vía, diferente especialidad</option>
          <option value="5">Múltiple o bilateral, diferente vía, igual especialidad</option>
        </select>
      </div>
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