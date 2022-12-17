@extends('Layouts.layout')

@section('title')
    Edit Task
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
                        <img src="/img/edit.svg" class="img-fluid w-50 h-50" alt="">
                    </div>
                    <div class="col-md p-3">
                        <h2 class="display-5 text-info ">This Page to Edit your List</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit, dignissimos labore minima laboriosam odio eum atque sint, quam debitis harum. Suscipit eius officiis illum accusamus amet!</p>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, alias.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="container py-5">
        <form action="{{route('task.update',$task->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label lead">Title</label> <i class="bi bi-pencil-square"></i>
                <input type="text" class="form-control w-50" id="title" name="title"  value="{{$task->title}}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label lead">Task Details</label>
                <textarea class="form-control" id="body" rows="3" name="body" >{{$task->body}}</textarea>
            </div>
            <div class="w-25 mb-3">
                <label for="title" class="form-label lead">Date</label>
                <input type="date" class="form-control" id="date" placeholder="date">
            </div>
            <div class="w-50 mb-3">
                <label for="title" class="form-label lead">Day</label>

                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>Choose Day ...</option>
                    <option value="1">Sunday</option>
                    <option value="2">Monday</option>
                    <option value="3">Tuesday</option>
                    <option value="4">Wednseday</option>
                    <option value="5">Thursday</option>
                    <option value="6">Friday</option>
                    <option value="7">Saturday</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info mt-2">Submit</button>
        </form>


    </section>



@endsection
