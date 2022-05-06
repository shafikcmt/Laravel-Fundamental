<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Contact Form</h3>
                        </div>
                        <div class="card-body">
                        <form action="" wire:submit.prevent="submitForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" wire:model="name" class="form-control">
                            @error('name') <span class="text-danger" >{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" wire:model="email" class="form-control">
                            @error('email') <span class="text-danger" >{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" wire:model="phone" class="form-control">
                            @error('phone') <span class="text-danger" >{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea name="msg" id="" cols="30" rows="10" wire:model="msg" class="form-control"></textarea>
                            @error('msg') <span class="text-danger" >{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>

                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
