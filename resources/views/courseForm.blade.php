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
    <input type="text" name="student_id" value="{{$id}}" hidden> Course Instractour

    <input type="text" name="name"> Course Instractour


    <input type="text" name="instractor"> Course Hours
    <input type="text" name="hours">
    Course grade
    <input type="text" name="grade">
    year
    <input type="year" name="year">
    Semster 
    <select>
           
            <option value="fsemester">first semester</option>
            <option value="ssemester">second semester</option>
          </select> 

    <input type="submit" value="submit">

</form>



</body>

</html>