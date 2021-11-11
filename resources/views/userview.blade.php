<html>
 <head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Header include -->
@include('includes.layouts.header')
<!-- Form die data in de database plaatst. -->
<div class="row">
    <form action="submit" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-field col s2">
        <input type="text" name="name" placeholder="* Medewerker Naam...." required>
        <br>
        <input type="text" name="description" placeholder="* Omschrijving...." required>
        <br>
        <input type="datetime-local" name="finishDate" placeholder="* Eind Datum: dd/mm/yy">
        <br><br><br>
        <p>Foto upload&nbsp; <i class="bi bi-card-image"></i></p>
        <input type="file" name="image">
        <br>
        <br>
        <br>
        <input type="text" name="material1" placeholder="Materiaal 1">
        <br>
        <input type="text" name="material2" placeholder="Materiaal 2">
        <br>
        <input type="text" name="material3" placeholder="Materiaal 3">
        <br>
        <input type="text" name="material4" placeholder="Materiaal 4">
        <br><br>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button></div>
</form>
</div>
</body>
</html>