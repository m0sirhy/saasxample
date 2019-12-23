@extends('layouts.template') @section('content')

<div class="container">
    @include('sweetalert::alert')

    <div class="row">
        <form action="/pay" method="POST">
        @csrf
            <input type="text" placeholder="pay a payment"  required name="payment">
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
                                <div class="img align-self-stretch" style="background-image: url({{asset('storage/'.$Student->pimage)}});"></div>
                            </div>
                                                                <?php $sum=0;
                                                                $hours=0;
                                                                
                                                                ?>
                    @foreach ($course as $c)
                        <?php $sum+=$c->grade ;
                        $hours+=$c->hours;
                        ?>
                    @endforeach
                            <div class="text pt-3 text-center">
                                <h3>name :{{$Student->fname }},{{$Student->lname}}</h3>
                                {{-- <span class="position mb-2">Enroll Year:{{$Student->$enrollyear}} </span> --}}
                                <div class="faded">
                                 
                                    <p>the  bill:{{$Student->price * $hours -$Student->payment}} </p>
                                    <p>gpa:{{$sum/$course->count()}} </p>
                            <p>Adress: {{$Student->address}} </p>
                                                        <p>Birth Of Date: {{$Student->birthdate}} </p>
                            <p>Hour price: {{$Student->price}} </p>
                                                        <p>Spec: {{$Student->spec}} </p>




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
                                    <?php $sum=0?>

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
                        <?php $sum+=$c->grade ;?>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</div>

@endsection