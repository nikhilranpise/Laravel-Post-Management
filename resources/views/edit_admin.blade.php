@include('header')

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Admin</h4>
                    @if(Session::has('success'))
                    <div class="text-success" style="text-align: center;">{{ session('success') }}</div><br>
                    @endif
                    <!-- /.box-header -->
                    <form class="form" method="post" action="{{ url('/update_admin/'.$admin->id) }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $admin->name }}">
                                        <div style="text-align: center;">
                                            <span class="text-danger" >@error('name'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $admin->username }}">
                                        <div style="text-align: center;">
                                            <span class="text-danger" >@error('username'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label"> Role </label>
                                        <select class="form-control" name="role">
                                            <option value="">--Select--</option>
                                            <option value="1" {{ $admin->role == '1' ? 'selected' : '' }}>Super Admin</option>
                                            <option value="0" {{ $admin->role == '0' ? 'selected' : '' }}>Admin</option>
                                        </select>
                                        <div style="text-align: center;">
                                            <span class="text-danger" >@error('role'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="box-footer">
                            <div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            
                        </div>
                    </form>
                </div>
                <br />
            </div>
        </section>
    </div>
</div>

@include('footer')