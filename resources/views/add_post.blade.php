@include('header')

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Posts</h4>
                    @if(Session::has('success'))
                    <div class="text-success" style="text-align: center;">{{ session('success') }}</div><br>
                    @endif
                    <!-- /.box-header -->
                    <form class="form" method="post" action="{{ url('/save_post') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                        <div style="text-align: center;">
                                            <span class="text-danger" >@error('title'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                                        <div style="text-align: center;">
                                            <span class="text-danger" >@error('description'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label"> Image</label>
                                        <input type="file" name="post_image" class="form-control" accept="image/png, image/jpeg"  required>
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