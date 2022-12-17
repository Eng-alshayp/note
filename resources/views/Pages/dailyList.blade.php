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
                        <h2 class="display-5 text-info ">This Page to view your List</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quod placeat quo odit, dignissimos labore minima laboriosam odio eum atque sint, quam debitis harum. Suscipit eius officiis illum accusamus amet!</p>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, alias.</p>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <section class="container-fluid">
            <table class="table table-dark table-striped-columns">
                <thead>
                <tr class="text-center">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Create</th>
                    <th>Instructions</th>
                </tr>
                </thead>
                @foreach($tasks as $task)
                    <tbody>
                    <tr class="table-active">
{{--                       <td>{{$task->id}}</td>--}}
                        <td class="align-center">
                            <ul><li></li></ul>
                        </td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->created_at}}</td>
                        <td>
                            <a href="{{route('task.show',$task->id)}}" class="btn btn-info px-3 mx-3">view</a>
{{--                            <input type="checkbox"  />--}}
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </section>


@endsection
