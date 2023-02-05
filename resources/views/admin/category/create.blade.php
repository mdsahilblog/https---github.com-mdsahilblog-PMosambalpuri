@extends('layouts.admin')

@section('content')
<section class="content">
<div class="row">
    
    <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Category
              <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
              </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 mb-3 form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-3 form-group">
                        <label for="Slug">Slug</label>
                        <input type="text" name="slug" class="form-control">
                        @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-3 form-group">
                        <label for="Description">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                        @error('description') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-3 form-group">
                        <label for="Image">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-3 form-group">
                        <label for="inputName">Status</label>
                        <input type="checkbox" name="status" class="form-control">
                        @error('status') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-3 form-group">
                        <label for="MetaTitle">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                        @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-3 form-group">
                        <label for="MetaKeyword">Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                        @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-3form-group">
                        <label for="MetaDescription">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                        @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                    </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
</div>
</section>
@endsection