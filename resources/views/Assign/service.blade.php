@extends('assign.master')
@section('content')

<section class="w3l-servicesblock py-5">
        <div class="container py-md-5 py-4">
            <div class="row pb-lg-4">
                <div class="col-lg-6 w3l-progress align-self pr-lg-5">
                    <h3 class="title-style mb-5">A high quality and best photography</h3>
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Photography <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Creativity <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Retouching <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">New Stills <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5">
                    <img src="assets/images/service1.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5 pt-lg-5">
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                    <img src="assets/images/service2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 about-right-faq align-self pl-lg-5 order-lg-last order-first">
                    <h3 class="title-style mb-4">Making world a better place</h3>
                    <p>Lorem ipsum viverra feugiat. Tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                    <a class="btn btn-style btn-style-primary mt-lg-5 mt-4" href="/about">Learn More </a>
                </div>
            </div>
        </div>
    </section>

@stop