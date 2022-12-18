@extends('Layouts.layout')

@section('titlte')
Daily List
@endsection
@section('nav-link')
    <div class="countainer">
        <a href="/addtask" class="btn btn-info mb-1">Add Task</a>
    </div>
@endsection

@section('body')
    <section class="bg-dark text-light mb-5">
        <section  class="py-5 mt-5 container">
            <div class="container mt-2">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md">
                        <img src="./img/note.svg" class="img-fluid w-50 h-50" alt="">
                    </div>
                    <div class="col-md p-3">
                        <h2 class="display-5 text-info " >  View Your Note</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit, dignissimos labore minima laboriosam odio eum atque sint, quam debitis harum. Suscipit eius officiis illum accusamus amet!</p>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <section class="container-fluid mb-5">

    @foreach($tasks as $task)
        <section class="container mb-2">
            <div style="border: 1px solid ; border-radius: 5px 5px 20px 5px">
                <div class="bg-dark text-light text-center">
                    <h2 class="text-primary">Notes</h2>
                </div>
                <div class="px-2">
                    <h5  style="font-weight: 400 ; font-size: 2em ; "> Title: <span class="text-primary">{{$task->title}}</span> </h5>
                    <hr>
                </div>
                    <div class="px-2">
                        <h5>Instructions :</h5>
                        <div class="mb-3 px-3">
                            <a href="{{route('task.show',$task->id)}}" class="btn btn-info ">view</a>
                            <a href="{{route('task.edit' , $task->id)}}" class="btn btn-warning  ">Edit</a>
                            <form style="display: inline-block" action="{{route('task.destroy',$task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delete</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                <div class="px-2 mb-2">
                   <p class="text-primary">Created Time : <span class="text-danger">{{$task->created_at}}</span></p>
                </div>

            </div>
        </section>
    @endforeach
        </section>


@endsection
