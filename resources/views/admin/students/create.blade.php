<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Add New Student') }}
                            <a href="{{ route('students.index') }}" class="btn btn-sm btn-danger" style="float: right;">All
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
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="ClassName" class="form-label">Class Name </label>
                                <select class="form-control" name='class_id' >
                                    @foreach($classes as $row)
                                    <option value="{{$row->id}}">{{$row->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name <span class="text-danger">*</span> </label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror " id="name"
                                    placeholder="Student Name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="roll" class="form-label">Student Roll <span class="text-danger">*</span> </label>
                                <input type="text" name="roll"
                                    class="form-control @error('roll') is-invalid @enderror " id="roll"
                                    placeholder="Student Roll" value="{{ old('roll') }}">
                                @error('roll')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Student Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror " id="email"
                                    placeholder="Student Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Student Phone <span class="text-danger">*</span> </label>
                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror " id="phone"
                                    placeholder="Student Phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
