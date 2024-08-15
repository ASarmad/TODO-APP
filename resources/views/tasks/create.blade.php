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
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Create Task</h3>
                            </div>
                            <form method="post" action="{{Route('store_task')}}" class="ajax-form">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <input type="text" class="form-control" name="message" placeholder="Message">
                                    </div>
                                    <div class="form-group">
                                        <label>Deadline Date</label>
                                        <input type="date" class="form-control" name="deadline_date">
                                    </div>
                                    <div class="form-group">
                                        <label>Deadline Time</label>
                                        <input type="time" class="form-control" name="deadline_time">
                                    </div>
                                    <div >
                                        <button type="submit" class="btn btn-success">Create</button>
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
