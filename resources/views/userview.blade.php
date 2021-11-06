<html>
 <head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <!-- Header include -->
@include('includes.layouts.header')
<!-- Form die data in de database plaatst. -->
<div class="row">
    <form action="submit" method="POST">
    @csrf
    <div class="input-field col s2">
        <input type="text" name="name" placeholder="* Medewerker Naam...." required>
        <br>
        <input type="text" name="description" placeholder="* Omschrijving...." required>
        <br>
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
         <button type="submit"  class="btn waves-effect waves-light" >Submit</button></div>
</form>
</div>
</body>
</html>