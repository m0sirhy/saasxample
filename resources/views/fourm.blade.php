<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
    </script>
    <script type="text/javascript">
       $(function() {
          $( "#date" ).datepicker({dateFormat: 'yy'});
       });
    </script>
</head>

<body>
    <form action="/Student" method="POST"  enctype="multipart/form-data">
        @csrf
        <label>First name</label>
        <input type="text" name="fname"  value="{{ old('fname') }}">
        <label>Last name</label>
        <input type="text" name="lname" value="{{ old('lname') }}" >
        enrollYear
        <input  type="year"  id="date" value=" {{ old('enrollyear') }}" name="enrollyear">
        <label>Phone #</label>
        <input type="text" name="phone" value="{{ old('phone') }}" >
        <label>Address</label>
        <input type="text" name="address" value="{{ old('address') }}" >
        <label>Birth Date #</label>
        <input type="date" name="birthdate" value="{{ old('birthdate') }}" >
        <label>Spec</label>
        <input type="text" name="spec" value="{{ old('spec') }}" >
        <label>Hour price</label>
        <input type="text" name="price" value="{{ old('price') }}" >
        <label>Upload birthdate image</label>
        <input type="file" name="pimage" value="{{ old('pimage') }}" >
        <label>Upload ID image</label>
        <input type="file" name="birimage" value="{{ old('birimage') }}" >
        <label>Upload Personal image</label>
        <input type="file" name="idimage" value="{{ old('idimage') }}" >
        <input type="submit" value="Submit">
    </form>

    <form enctype="multipart/form-data" method="post" action="/drop">
@csrf
        <input type="file" name="upload_file" />
        <input type="submit" value="Upload to Dropbox" />
</form>
</body>

</html>