<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('All Students') }}
                            <a href="{{ route('students.create') }}" class="btn btn-sm btn-primary"
                                style="float: right;">New Students </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert" >
                            {{session()->get('success')}}
                        </div>
                        @endif
                        <table class="table table-responsive table-stripe">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Roll</td>
                                    <td>Name</td>
                                    <td>Phone</td>
                                    <td>Class Name</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $key => $row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->roll }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->class_name }}</td>
                                        <td>
                                            <a href="{{route('students.show', $row->id)}}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{route('students.edit', $row->id)}}" class="btn btn-info btn-sm">Edit</a>
                                            <form action="{{ route('students.destroy', $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE" >
                                                <button type="submit" class="btn bg-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
