@extends('layouts.layout-user')

@section('title', 'Portfolio Category')

@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Portfolio Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Portfolio Category</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('user.product-categories.create') }}" class="btn btn-primary">Add</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $index => $category)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('user.product-categories.edit', $category->id) }}" class="btn btn-warning btn-sm" title="Edit"><span class="fa fa-pencil-alt"></span></a>
                                        
                                        <button class="btn btn-danger btn-sm btn-delete" title="Delete" data-delete-name="{{ $category->name }}"><span class="fa fa-trash"></span>
                                            <form class="form-delete" action="{{ route('user.product-categories.destroy', $category->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('foot')
    <script>
        $('#list').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
@endsection
