@extends('Layouts.layout')

@section('title')
    view task
@endsection
@section('nav-link')
    <li class="nav-item">
        <a class="nav-link" href="/task">Tasks</a>
    </li>
    <div class="countainer">
        <a href="/addtask" class="btn btn-info mb-1">Add Task</a>
    </div>
@endsection

@section('body')
    <section class="bg-dark text-light">
        <section  class="py-4 mt-5 container">
            <div class="container mt-2">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md">
                        <img src="/img/view.svg" class="img-fluid w-50 h-50" alt="">
                    </div>
                    <div class="col-md p-3">
                        <h2 class="display-5 text-info "> show your note</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit,</p>
                        <a href="{{route('task.edit' , $task->id)}}" class="btn btn-warning mt-2">Edit</a>
                        <form action="{{route('task.destroy',$task->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </section>

    <section class="py-5 container">
        <div style="border: 1px solid ; border-radius: 5px">
            <div class="bg-dark text-light text-center">
                <h2 class="text-primary">Note Title </h2>
            </div>
                <h3 class="mx-5" style="font-weight: 400 ; font-size: 2em ; color: dodgerblue"> _ {{$task->title}}</h3>
        </div>

        <div class="mt-2" style="border: 1px solid ; border-radius: 5px">
            <div class="bg-dark text-light text-center">
                <h2 style="color: mediumaquamarine ; font-weight: 500">Note</h2>
            </div>
        <h3 class="mx-5"  style="font-weight: 400 ; font-size: 2em"> _ {{$task->body}}</h3>
        </div>

        <div class="mt-2" style="border: 1px solid ; border-radius: 5px">
            <div class="bg-dark text-light text-center">
                <h2 class="text-light">Last Update</h2>
            </div>
            <p class="mx-5"  style=" color: darkred"> {{$task->updated_at}}</p>
        </div>


    </section>
@endsection


