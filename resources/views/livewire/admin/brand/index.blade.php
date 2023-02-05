<section class="content">
       
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Brand List
                            <a href="#" data-toggle="modal" data-target="#addbrandModal" class="btn btn-primary btn-sm float-end">Add Brands</a>
                        </h4>
                    </div>
                    <div class="card body">
                        <table class="table table-border table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                        <div>
                       
                        </div>
                    </div>
                </div>
                @if(session('message1'))
                        <h4 class="alert alert-success">{{session('message1')}}</h4>
                    @endif
            </div>
        </div>
    </div>

    @include('livewire.admin.brand.modal-form')

@push('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#addbrandModal').modal('hide');
        });
    </script>

@endpush

</section>