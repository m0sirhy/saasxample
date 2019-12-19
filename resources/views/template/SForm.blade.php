 @extends('layouts.template') @section('content')
<!-- Default form contact -->
<div class="container-sm">
    <div class="row">
        <div class="col-sm">
            <form class="text-center border border-light p-5" action="/Student" method="POST" id="upload_form" enctype="multipart/form-data" style="margin:70px;border-color: #263534  !important;border-style: double!important;">
                @csrf
                <p class="h4 mb-4">Please Fill Your Data</p>

                <!-- FName -->
                <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="FirstName" name="fname" value="{{ old('fname') }}">

                <!-- lName -->
                <input type="text" class="form-control mb-4" placeholder="LasttName" name="lname" required value="{{ old('lname') }}">
                <!-- enrollYear -->
                <input type="text" class="form-control mb-4" placeholder="enrollYear" required  value=" {{ old('enrollyear') }}" name="enrollyear">
                <!-- phoneNumber -->
                <input type="text" class="form-control mb-4" placeholder="phoneNumber" required name="phone" value="{{ old('phone') }}">
                <!-- Address -->
                <input type="text" class="form-control mb-4" placeholder="Address" name="address" required value="{{ old('address') }}">
                <!-- Date of Birth -->
                <label> Date of Birth</label>

                <input type="date" class="form-control mb-4" placeholder="Date of Birth" name="birthdate" required value="{{ old('birthdate') }}">
                <!-- Specialization -->
                <input type="text" class="form-control mb-4" name="spec" placeholder="Specialization " required value="{{ old('spec') }}">

                <!-- houre price -->
                <input type="text" class="form-control mb-4" name="price" placeholder="houre price" required value="{{ old('price') }}">
                <!-- img -->
                <label>Upload Personal image</label>
                <input type="file" name="pimage" required value="{{ old('pimage') }}">
                <br>

                <label>Upload birth date image</label>
                <input type="file" name="birimage" required value="{{ old('birimage') }}">
                <br>

                <label>Upload Personal ID image</label>
                <input type="file" name="idimage" required value="{{ old('idimage') }}">


                <button class="btn btn-info btn-block" type="submit">Send</button>

            </form>
        </div>
        <div class="col-sm">
        </div>

    </div>
</div>

<!-- Default form contact -->
@endsection