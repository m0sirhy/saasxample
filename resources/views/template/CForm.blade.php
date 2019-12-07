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
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Course name" name="name" value="{{old('name')}}">

    <!-- instractour -->
    <input type="text" class="form-control mb-4" placeholder="course instractour" name="instractor" value="{{old('instractor')}}">
    <!-- Course Hours -->
    <input type="text" class="form-control mb-4" placeholder="Course Hours" name="hours" value="{{old('hours')}}">
    <!-- Course grade -->
    <input type="text" class="form-control mb-4" placeholder="Course grade" name="grade" value="{{old('grade')}}">

    <input type="text" class="form-control mb-4" placeholder="Course Year" name="year" value="{{old('year')}}">
    <!-- semester -->
    <select name="semester" class="browser-default custom-select mb-4">
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