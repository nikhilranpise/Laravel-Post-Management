@include('header')

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">  
                    <a class="btn btn-primary p-2" style="font-size:15px" href="{{ url('/add_post') }}">Add Post
                    </a>
                        
                </div>
                @if(Session::has('success'))
                <div id="flashdivs" class="sucess_msg text-success" style="text-align: center;">{{ session('success') }}</div><br> 
                @endif
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h4 class="box-title">All Posts</h4>
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-hover text-center te display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if( count( $posts ) > 0 )
                                    @foreach( $posts as $post )
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td><img src="{{ asset('post_image').'/'.$post->image }}" height="100" width="100" alt=""></td>
                                        <td>
                                            <a href="{{ url('/edit_post/'.$post->id ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit" style="padding-right:5px !important"></i>Edit</a>&nbsp;
                                            <a href="{{ url('/delete_post/'.$post->id ) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-dark btn-sm"><i class="fa fa-times-circle" style="padding-right:5px !important"></i>Delete</a>&nbsp;
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="row" align="right">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
            </div>
        </section>
    </div>
</div>

@include('footer')