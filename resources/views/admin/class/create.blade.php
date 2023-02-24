<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="card-header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Add New Class') }}
                        <a href="{{route('class.index')}}" class="btn btn-sm btn-danger" style="float: right;" >All Class</a>
                        </h2>
                    </div>
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success')}}
                            </div>
                            {{-- <strong class="text-success" >{{ session()->get('success')}}</strong> --}}
                        @endif
                        <form action="{{route('store.class')}}" method="POST" >
                            @csrf
                            <div class="mb-3">
                              <label for="ClassName" class="form-label">Class Name</label>
                              <input type="text" name="class_name" class="form-control @error('class_name') is-invalid @enderror " id="ClassName" placeholder="Class Name" value="{{ old('class_name')}}" >
                              @error('class_name')
                                <span class="invalid-feedback" role="alert" >
                                    <strong>{{$message}}</strong>
                                </span>
                              @enderror
                            </div>
                            <button style="background-color: #0d6efd " type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
