<!-- modal -->
<div wire:ignore.self class="modal fade" id="addbrandModal">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Brands</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="storeBrand">
                <div class="modal-body">
                    <div class="mb3">
                        <label>Brand Name</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="mb3">
                        <label>Brand Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control">
                        @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="mb3">
                        <label>Status</label><br>
                        <input type="checkbox" wire:model.defer="status"> Checked=Hidden, Un-Checked=Visible
                        @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- modal end -->