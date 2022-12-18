@extends('Layouts.layout')

@section('title')
    Add Task
@endsection
@section('nav-link')
    <li class="nav-item mb-2">
        <a class="nav-link" href="/task">Tasks</a>
    </li>
@endsection

@section('body')

    <section class="bg-dark text-light">
        <section  class="py-4 mt-5 container">
            <div class="container mt-2">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md">
                        <img src="./img/addtask.svg" class="img-fluid w-50 h-50" alt="">
                    </div>
                    <div class="col-md p-3">
                        <h2 class="display-5 text-info "> Write your List</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit, dignissimos labore minima laboriosam odio eum atque sint, quam debitis harum. Suscipit eius officiis illum accusamus amet!</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="container py-5">
        <form action="{{route('task.store')}}" method="post">
            @csrf
            <div style="border: 1px solid ; border-radius: 10px" class="mb-3 bg-dark text-light">
                <h5 style="font-weight: 600 ; font-size: 2em" class="text-center">Write Note ...</h5>
                <div style="border: 1px solid ; border-radius: 5px" class=" m-2 mb-4">
                    <div class="mb-3 px-3 " >
                        <i class="bi bi-pencil-square"></i><label for="title" class="form-label" style=" font-size: 1.8em">Title</label>

                        <input type="text" class="form-control w-50" id="title" name="title" required maxlength="20" placeholder="Title Note ...">
                    </div>
                </div>

                <div style="border: 1px solid ; border-radius: 5px" class=" m-2  mb-3 ">
                    <div class="mb-3 px-3 " >
                        <label for="body" class="form-label lead">Note Details</label>
                        <input type="text" class="form-control" id="body" required maxlength="255" name="body" placeholder="Body ..."/>
                    </div>
                </div>

                <button type="submit" class="btn btn-info m-2">Submit</button>
            </div>
        </form>


        </section>



@endsection
