<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    @include('sweetalert::alert')
    <form action="/Course" method="POST">
        @csrf
    Course name

    <input type="text" name="name"> 
    <br>
    Course Instractour


    <input type="text" name="instractor"> 
    <br>

    Course Hours
    <input type="text" name="hours">
    <br>

    Course grade
    <input type="text" name="grade">
    <br>

    year
    <input type="year" name="year">
    <br>

    Semster 
    <select>
           
            <option value="fsemester">first semester</option>
            <option value="ssemester">second semester</option>
          </select> 

    <input type="submit" value="submit">

</form>



</body>

</html>