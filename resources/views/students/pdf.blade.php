<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Informe de: {{ Str::title($student->nomAlumno)}}</title>
  <link href="{{ env('APP_URL') }}/css/bootstrap.css" rel="stylesheet">
  <style>
    @page {
        margin: 0cm 0cm;
        font-family: Arial;
    }

    body {
        margin: 3cm 2cm 2cm;
    }

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        /* background-color: #2a0927; */
        color: #000;
        text-align: center;
        line-height: 30px;
    }

    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        /* background-color: #2a0927; */
        color: #000;
        text-align: center;
        line-height: 35px;
    }
    .div-img {
      display: block;
      justify-content: left;
      margin: 0 auto;
    }
    .col-md-6 {
      flex: 0 0 auto;
      width: 50%
    }
    body {
      background-image: url('{{env('APP_URL')}}images/jardin-logo.png');
      background-repeat: no-repeat;
      background-size:50%;
      background-position: 50% 50%;
    }
    table{
      background-color:rgba(255, 255, 255, 0.7);
    }
    </style>
</head>
<body>
<header>
  @if ($student->genero == 'Masculino')
  <div class="div-img">
    <img src="{{ env('APP_URL') }}/images/icono-niño.png" alt="jardin-logo" width="100">
  </div>
  @else
  <div class="div-img">
    <img src="{{ env('APP_URL') }}/images/icono-niña.png" alt="jardin-logo" width="100">
  </div>
  @endif
</header>

<main>
  <table width="100%">
    <thead>
      <th>
        <td><b>{{ Str::upper($student->nomAlumno)}}</b></td>
      </th>
    </thead>
    <tbody>
      <tr>
        <td><b>Nivel:</b></td><td>{{ $student->nivel}}</td>
      </tr>
      <tr>
        <td><b>Fecha matricula:</b> </td><td>{{ $student->fechaMatricula}}</td>
      </tr>
      <tr>
        <td><b>Edad:</b> </td><td>{{ $student->EdadAlumno}}</td>
      </tr>
      <tr>
        <td><b>Genero:</b> </td><td>{{ $student->genero}}</td>
      </tr>
      <tr>
        <td><b>EPS:</b> </td><td>{{ $student->EPS}}</td>
      </tr>
      <tr>
        <td><b>Fecha de nacimiento:</b> </td><td>{{ $student->fechaNacimiento}}</td>
      </tr>
      <tr>
        <td><b>Tipo documento:</b> </td><td>{{ $student->documentType}}</td>
      </tr>
      <tr>
        <td><b>Numero documento:</b> </td><td>{{ $student->numDocumento}}</td>
      </tr>
      <tr>
        <td><b>Regimen de salud:</b> </td><td>{{ $student->Esalud}}</td>
      </tr>
      <tr>
        <td><b>Numero telefonico:</b> </td><td>{{ $student->numTelefonico}}</td>
      </tr>
      <tr>
        <td><b>Numero telefonico 1:</b> </td><td>{{ $student->numTelefonicoUno}}</td>
      </tr>
      <tr>
        <td><b>Numero telefonico 2:</b> </td><td>{{ $student->numTelefonicoDos}}</td>
      </tr>
      <tr>
        <td><b>Direccion:</b> </td><td>{{ $student->direccionAlumno}}</td>
      </tr>
      <tr>
        <td><b>Barrio:</b> </td><td>{{ $student->barrio}}</td>
      </tr>
      <tr>
        <td><b>Localidad:</b> </td><td>{{ $student->localidad}}</td>
      </tr>
      <tr>
        <td><b>Nombre mama:</b> </td><td>{{ $student->nombreMama}}</td>
      </tr>
      <tr>
        <td><b>Documento mama:</b> </td><td>{{ $student->documentoMama}}</td>
      </tr>
      <tr>
        <td><b>Telefono mama:</b> </td><td>{{ $student->telefonoMama}}</td>
      </tr>
      <tr>
        <td><b>Direccion mama:</b> </td><td>{{ $student->direccionMama}}</td>
      </tr>
      <tr>
        <td><b>Correo mama:</b> </td><td>{{ $student->correoMama}}</td>
      </tr>
      <tr>
        <td><b>Nombre papa:</b> </td><td>{{ $student->nombrePapa}}</td>
      </tr>
      <tr>
        <td><b>Documento papa:</b> </td><td>{{ $student->documentoPapa}}</td>
      </tr>
      <tr>
        <td><b>Telefono papa:</b> </td><td>{{ $student->telefonoPapa}}</td>
      </tr>
      <tr>
        <td><b>Direccion papa:</b> </td><td>{{ $student->direccionPapa}}</td>
      </tr>
      <tr>
        <td><b>Correo papa:</b> </td><td>{{ $student->correoPapa}}</td>
      </tr>
      <tr>
        <td><b>1er responsable:</b> </td><td>{{ $student->nomPriRes}}</td>
      </tr>
      <tr>
        <td><b>Documento:</b> </td><td>{{ $student->docPriRes}}</td>
      </tr>
      <tr>
        <td><b>Direccion:</b> </td><td>{{ $student->dirPriRes}}</td>
      </tr>
      <tr>
        <td><b>Telefono:</b> </td><td>{{ $student->telPriRes}}</td>
      </tr>
      <tr>
        <td><b>2do responsable:</b> </td><td>{{ $student->nomSegRes}}</td>
      </tr>
      <tr>
        <td><b>Documento:</b> </td><td>{{ $student->docSegRes}}</td>
      </tr>
      <tr>
        <td><b>Direccion:</b> </td><td>{{ $student->dirSegRes}}</td>
      </tr>
      <tr>
        <td><b>Telefono:</b> </td><td>{{ $student->telSegRes}}</td>
      </tr>
      <tr>
        <td><b>3er responsable:</b> </td><td>{{ $student->nomTerRes}}</td>
      </tr>
      <tr>
        <td><b>Documento:</b> </td><td>{{ $student->docTerRes}}</td>
      </tr>
      <tr>
        <td><b>Direccion:</b> </td><td>{{ $student->dirTerRes}}</td>
      </tr>
      <tr>
        <td><b>Telefono:</b> </td><td>{{ $student->telTerRes}}</td>
      </tr>
    </tbody>
  </table>
</main>

<footer>
    <h1>{{ env('APP_NAME') }}</h1>
</footer>
</body>
</html>
