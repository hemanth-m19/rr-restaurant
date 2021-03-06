@extends('backend.layout.layout')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.'.$page . '.store') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Price </label>
                                    <input type="text" class="form-control" id="price" name="price" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Delivery Time </label>
                                    <input type="text" class="form-control" id="delivery_time" name="delivery_time"
                                        required>
                                </div>
                                
                                    <select name="menus_id" id="menus">
                                        <option disabled selected>Select a Menu</option>
                                        @foreach ($menus as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    <br><br>
                                    <select name="veg" id="veg">
                                        <option disabled selected>Select a Veg of Non-Veg</option>
                                        <option value="1">Veg</option>
                                        <option value="0">Non-Veg</option>
                                    </select>
                                    <br><br>
                                    <select name="todays_special" id="todays_special">
                                        <option value="0" selected>Not Today Special</option>
                                        <option value="1">Today Special </option>
                                    </select>

                                <div class="form-group">
                                    <label for="name">Description </label>
                                    <textarea  class="form-control" id="editor" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sort">Sort </label>
                                    <input type="text" class="form-control" id="sort" name="sort" value="1" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                {{-- <a href="{{ route('admin.'.$page.'.index') }}" class="btn btn-danger pull-right">Cancel</a> --}}
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
