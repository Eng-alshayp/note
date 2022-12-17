@extends('Layouts.layout')

@section('title')
    Home page
@endsection

@section('nav-link')
    <li class="nav-item">
        <a class="nav-link" href="/task">Tasks</a>
    </li>
    <li class="nav-item dropdown mb-2">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learn</a>
        <ul class="dropdown-menu  ">
            <li><a href="#learn" class="dropdown-item ">Learn </a></li>
            <li><a href="#next" class="dropdown-item ">Next</a></li>
        </ul>
    </li>

    <div class="countainer">
        <a href="/addtask" class="btn btn-info mb-1">Add Task</a>
    </div>
@endsection

@section('body')
    <section id="hero" class="bg-dark text-light text-center text-sm-start mt-5">
        <div class="container py-3">
            <div class="d-sm-flex align-items-center">
                <div>
                    <h1 class="display-5 text-info">
                       TO DO LIST
                    </h1>
                    <p class="py-1 lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim
                        facere natus repudiandae neque placeat debitis laborum corporis
                        accusamus perferendis at.
                    </p>
                    <button class="btn btn-info">Get started</button>
                </div>
                <img
                    class="d-none d-sm-block img-fluid w-50"
                    src="./img/img1.svg"
                    alt="img1"
                />
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 ">
                    <div class="card bg-dark text-light mb-3">
                        <div class="text-center d-none d-md-block h1 py-3">
                            <i class="bi bi-card-checklist text-info"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title text-info">Check </h3>
                            <p class="card-text lead">
                               when you finish your work check it.

                            </p>
                            <button class="btn btn-info">Learn more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="card bg-dark text-light mb-3">
                        <div class="text-center d-none d-md-block h1 py-3">
                            <i class="bi bi-pencil-square text-info"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title text-info">Write your list</h3>
                            <p class="card-text lead">
                                write your activity to do it all day
                            </p>
                            <button class="btn btn-info">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="learn" class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md">
                    <img src="./img/learn-1.svg" class="img-fluid " alt="">
                </div>
                <div class="col-md p-3">
                    <h2>Learn The Basic</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit, dignissimos labore minima laboriosam odio eum atque sint, quam debitis harum. Suscipit eius officiis illum accusamus amet!</p>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, alias.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="next" class="py-5 bg-dark text-light ">
        <div class="container">
            <div class="row align-items-center justify-content-center flex-row-reverse">
                <div class="col-md">
                    <img src="./img/next.svg" class="img-fluid " alt="">
                </div>
                <div class="col-md p-3">
                    <h2>Next Learn Basics</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit, dignissimos labore minima laboriosam odio eum atque sint, quam debitis harum. Suscipit eius officiis illum accusamus amet!</p>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, alias.</p>
                </div>
            </div>
        </div>
    </section>

@endsection