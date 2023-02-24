<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Add New Student') }}
                            <a href="{{ route('students.index') }}" class="btn btn-sm btn-danger" style="float: right;">Update 
                                Student</a>
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                            {{-- <strong class="text-success" >{{ session()->get('success')}}</strong> --}}
                        @endif
                        <form action="{{ route('students.update', $students->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH" />
                            <div class="mb-3">
                                <label for="ClassName" class="form-label">Class Name </label>
                                <select class="form-control" name='class_id' >
                                    @foreach($classes as $row)
                                    <option value="{{$row->id}}"  @if($row->id == $students->class_id) selected @endif >{{$row->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name <span class="text-danger">*</span> </label>
                                <input type="text" name="name" class="form-control" value="{{ $students->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="roll" class="form-label">Student Roll <span class="text-danger">*</span> </label>
                                <input type="text" name="roll" class="form-control" value="{{ $students->roll }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Student Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $students->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Student Phone <span class="text-danger">*</span> </label>
                                <input type="text" name="phone" class="form-control" value="{{ $students->phone }}">
                            </div>
                            <button style="background-color: #0d6efd " type="submit"
                                class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
