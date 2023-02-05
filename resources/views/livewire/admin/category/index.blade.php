<section class="content">
       
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Category
                            <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card body">
                        <table class="table table-border table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->status == '1' ? 'Hidden':'Visible'}}</td>
                                        <td>
                                            <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success">Edit</a> 
                                            <a href="#" wire:click="deleteCategory({{$category->id}})" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">Delete</a> 
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                        {{ $categories->links() }}
                        </div>
                    </div>
                </div>
                @if(session('message1'))
                        <h4 class="alert alert-success">{{session('message1')}}</h4>
                    @endif
            </div>
        </div>
    </div>

<!-- modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Category Delete</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                    <h6>Are you sure you want to delete this data?</h6>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Yes, Delete</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- modal end -->
@push('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteModal').modal('hide');
        });
    </script>

@endpush

</section>

