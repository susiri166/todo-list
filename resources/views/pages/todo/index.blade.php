@extends('Layouts.app')

@section('content')
    <div class=" container rounded-3 border border-2 border-dark my-5 bg-white" style="height:auto;">
        <h1 class=" h1">To Do List</h1>


        <form action="{{ route('todo.store') }}" method="post">
            @csrf


            <div class="row">
                <div class=" col-8">
                    <input class=" py-3 form-control shadow" name="title" placeholder="input your task" type="text"
                        id="inputText">
                </div>
                <div class="col-2">

                    <button type="submit" class=" mt-2 btn btn-dark"> Add </button>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tak no</th>
                    <th scope="col">Title</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key => $task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task->title }}</td>
                        <td>
                        @if ($task->done==0)
                        <span class="badge bg-warning text-dark">Not Completed</span>
                        @else
                        <span class="badge bg-success">Completed</span>
                        @endif
                        </td>
                        <td>
                            <a href="{{ route('todo.done',$task->id) }}" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a href="{{ route('todo.delete',$task->id) }}"class="btn btn-danger" ><i class="fa fa-trash"  aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
