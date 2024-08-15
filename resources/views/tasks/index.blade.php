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
                            <h1 class=" text-center">View Tasks</h1>
                            <div class="card-tools">
                                <form action="{{ Route('create_task') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Create</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Message</th>
                                    <th class="text-center">Deadline Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Updated At</th>
                                    <th class="text-center">show</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($tasks->count())
                                    @foreach ($tasks as $record)
                                        <tr>
                                            <td class="text-center">{{ $record->id }}</td>
                                            <td class="text-center">{{ $record->title }}</td>
                                            <td class="text-center text-wrap">{{ $record->message }}</td>
                                            <td class="text-center">{{ $record->deadline_date }}</td>
                                            <td class="text-center">{{ $record->status }}</td>
                                            <td class="text-center">{{ $record->created_at->format('d-m-Y') }}</td>
                                            <td class="text-center">{{ $record->updated_at->format('d-m-Y') }}</td>
                                            <td class="text-center">
                                                <a href="{{ Route('show_task',['task' => $record->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ Route('edit_task',['task' => $record->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>

                                            </td>
                                            <td class="text-center">
                                                <form action="{{ Route('destroy_task', ['task' => $record->id]) }}" method="POST" style="display:inline;" class="ajax-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">No Records Found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
