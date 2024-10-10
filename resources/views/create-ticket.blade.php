@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Ticket</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Ticket Form</h2> 
                     <!-- Every name must similar with our TicketModel -->
                    <form method="post" action="/save-ticket">
                        @csrf

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                        </div>
                    
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>
                    
                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                        </div>
                    
                        <!-- Level -->
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" id="level" name="level" required>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>                        
                    
                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input class="form-control" id="status" name="status" placeholder="Status" value="New" readonly style="background-color: #e9ecef; color: #6c757d;">
                        </div>
                    
                        <!-- Msg -->
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea class="form-control" id="msg" name="msg" rows="3" placeholder="Enter message" required></textarea>
                        </div>
                    
                    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-1">Submit</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
