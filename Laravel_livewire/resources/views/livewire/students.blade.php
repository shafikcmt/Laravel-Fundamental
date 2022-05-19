
<div class="container">
<!-- @include('livewire.create') -->
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h1>Student List</h1>
                   <a href="/create" class="btn btn-primary">Add New Student </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->firstname}}</td>
                                <td>{{$student->lastname}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->email}}</td>
                                <td>
                                    <button class="btn btn-info" wire:click="edit()">Edit</button>
                                    <button class="btn btn-info">Delete</button>
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


