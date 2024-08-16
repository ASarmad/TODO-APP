@extends('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid"></div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Show Task</h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h1 class="text-center">Title: {{$task->title}}</h1>
                                    <h1 class="text-center">Message: {{$task->message}}</h1>
                                    <h1 class="text-center">Deadline Date: {{$task->deadline_date}}</h1>
                                    <h1 class="text-center">Deadline Time: @if($task->deadline_time) {{$task->deadline_time}}@else N/A @endif</h1>
                                    <h1 class="text-center">Status:<span style="@if($task->status=='Pending') color:yellow; @else color:green; @endif">{{$task->status}}</span></h1>
                                </div>
                                <div class="col-6">
                                    <form method="post" action="{{ Route('change_task_status',['task'=>$task->id]) }}" class="ajax-form">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" name="complete" id="completeCheckBox">
                                            <label class="form-check-label">Mark as Complete ?</label>
                                        </div>
                                        <div >
                                            <button type="submit" class="btn btn-success" id="doneBtn" disabled>Done</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const checkbox = document.getElementById('completeCheckBox');
        const button = document.getElementById('doneBtn');
        checkbox.addEventListener('change', function() {
            button.disabled = !this.checked;
        });
    </script>
@endsection
