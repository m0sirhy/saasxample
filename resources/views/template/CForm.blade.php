@extends('layouts.template') @section('content')
<div class="container-sm">
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-sm">
            <!-- Default form  -->
            <form class="text-center border border-light p-5" action="/Course" method="POST" style="margin:70px;border-color: #263534  !important;border-style: double!important;">
                @csrf
                <p class="h4 mb-4">Fill Course Data</p>

                <!-- Course name -->
                <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Course name" name="name" required value="{{old('name')}}">

                <!-- instractour -->
                <input type="text" class="form-control mb-4" placeholder="course instractour" name="instractor" required value="{{old('instractor')}}">
                <!-- Course Hours -->
                <input type="text" class="form-control mb-4" placeholder="Course Hours" name="hours" required value="{{old('hours')}}">
                <!-- Course grade -->
                <input type="text" class="form-control mb-4" placeholder="Course grade" name="grade" required value="{{old('grade')}}">

                <input type="text" class="form-control mb-4" placeholder="Course Year" name="year" required value="{{old('year')}}">
                <!-- semester -->
                <select name="semester" required class="browser-default custom-select mb-4">
        <option value="fsemester">first semester</option>
        <option value="ssemester">second semester</option>  </select>


                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Send</button>

            </form>
            <!-- Default form contact -->
        </div>
        <div class="col-sm">


        </div>
    </div>
</div>

@endsection