@include('header')

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">  
                    <a class="btn btn-primary p-2" style="font-size:15px" href="{{ url('/add_admin') }}">Add User Admin
                    </a>
                        
                </div>
                @if(Session::has('success'))
                    <div id="flashdivs" class="sucess_msg text-success" style="text-align: center;">{{ session('success') }}
                    </div>
                @elseif(Session::has('error'))
                    <div id="flashdivs" class="sucess_msg text-danger" style="text-align: center;">{{ session('error') }}
                    </div>
                    <br> 
                @endif
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h4 class="box-title">All Admins</h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-hover text-center te display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @php
                                    $adminData = Session::get('adminData');
                                    $role = $adminData->role; 
                                @endphp
                                <tbody>
                                    @if( count( $admins ) > 0 )
                                    @foreach( $admins as $admin )
                                    <tr>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->username }}</td>
                                        <td>
                                            @if( $admin->role == '1' ) 
                                            <span>Super Admin </span>
                                            @elseif( $admin->role == '0' )
                                            <span>Admin</span> 
                                            @endif
                                        </td>
                                        
                                        @if( $role == '1')
                                        <td>
                                            <a href="{{ url('/edit_admin/'.$admin->id ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit" style="padding-right:5px !important"></i>Edit</a>&nbsp;
                                            <a href="{{ url('/delete_admin/'.$admin->id ) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-dark btn-sm"><i class="fa fa-times-circle" style="padding-right:5px !important"></i>Delete</a>&nbsp;
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
            </div>
        </section>
    </div>
</div>

@include('footer')