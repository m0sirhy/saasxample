@extends('layouts.template') @section('content')

<div class="container">
    @include('sweetalert::alert')

    <div class="row">
        <form action="/pay" method="POST">
            <input type="text" placeholder="pay a payment" name="payment">
            <input type="submit" name="pay" value="pay">


        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate" style="margin:70px;border-color: #263534  !important;border-style: double!important;">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>name : , id: </h3>
                                <span class="position mb-2">level: </span>
                                <div class="faded">
                                    <p>course: </p>
                                    <p>the rest of the bill: </p>
                                    <p>gpa: </p>

                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($course as $c)
                        
                   
                    <div class="col col-lg-2 ftco-animate">
                        <div class="text bg-light p-4">
                        <h3><a href="#">{{$c->name}}</a></h3>
                            <p class="subheading"><span>Class Instractour:</span>{{ $c->Instractour}}</p>
                        <p><span>Class semester:</span>{{$c->semester}}</p>
                        <p><span>Class year:</span>{{$c->year}}</p>
                        <p><span>Class Wight:</span>{{$c->hours}}</p>
                        <p><span>Class grade:</span>{{$c->grade}}</p>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</div>

@endsection