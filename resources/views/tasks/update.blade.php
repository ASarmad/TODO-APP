@extends('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid"></div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Update Product</h3>
                            </div>
                            <form method="post" action="{{Route('update_task',['task' => $task->id])}}" class="ajax-form">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $task->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <input type="text" class="form-control" name="message" placeholder="Message" value="{{ $task->message }}">
                                    </div>
                                    <div class="form-group">
                                        <label>date</label>
                                        <input type="date" class="form-control" name="deadline_date" value="{{ $task->deadline_date }}">
                                    </div>
                                    <div class="form-group">
                                        <label>time</label>
                                        <input type="time" class="form-control" name="deadline_time" value="{{ $time }}">
                                    </div>
                                    <div >
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
    </div>
@endsection
