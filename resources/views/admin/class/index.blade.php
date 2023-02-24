<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('All Class') }}
                            <a href="{{route('create.class')}}" class="btn btn-sm btn-primary" style="float: right;" >Add New</a>
                    </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-stripe">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Class Name</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($class as $key => $row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->class_name }}</td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">Edit</a>
                                            <a href="{{route('class.delete', $row->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{$class->links() }} --}}
                        {{$class->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
