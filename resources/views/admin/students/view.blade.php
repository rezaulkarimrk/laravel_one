<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Student Details') }}
                            <a href="{{ route('students.index') }}" class="btn btn-sm btn-primary"
                                style="float: right;">All Students </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <ul class="list" >
                            <li class="list-item" >Name: {{$student->name}}</li>
                            <li class="list-item" >Class: {{$student->class_id}}</li>
                            <li class="list-item" >Roll: {{$student->roll}}</li>
                            <li class="list-item" >Phone: {{$student->phone}}</li>
                            <li class="list-item" >Email: {{$student->email}}</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
