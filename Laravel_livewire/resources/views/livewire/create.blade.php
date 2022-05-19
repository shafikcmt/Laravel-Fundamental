<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Add Students</h1>
                </div>
                <div class="card-body">
                    <form action="">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                        @endif
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" wire:model="firstname" placeholder="First name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" wire:model="lastname" placeholder="Last name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" wire:model="phone" placeholder="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="fname">Email</label>
                                <input type="email" class="form-control" wire:model="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                
                                <input type="submit" class="btn btn-primary" wire:click.prevent="store()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
