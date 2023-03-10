 <!-- Modal -->
 <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brands</h1>
          <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="storeBrand">
        <div class="modal-body">
         <div class="mb-3">
            <label>Brand Name</label>
            <input type="text" wire:model.defer="name" class="form-control" >
            @error('name')<small class="text-denger">{{ $message }}</small> @enderror
         </div>
         <div class="mb-3">
            <label>Brand Slug</label>
            <input type="text" wire:model.defer="slug" class="form-control" >
            @error('slug')<small class="text-denger">{{ $message }}</small> @enderror
         </div>
         <div class="mb-3">
            <label>Status</label><br/>
            <input type="checkbox" wire:model.defer="status" /> Checked = Hidden, Unchecked = Visible
            @error('status')<small class="text-denger">{{ $message }}</small> @enderror
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- Brand Update Model --}}

   <!-- Modal -->
 <div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Brands</h1>
          <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div wire:loading class="p-2">
            <div class="spinner-grow" role="status">
                <span class="visually-hidden">Hometex...</span>
              </div>Hometex...
        </div>
        <div wire:loading.remove>
            <form wire:submit.prevent="updateBrand">
                <div class="modal-body">
                 <div class="mb-3">
                    <label>Brand Name</label>
                    <input type="text" wire:model.defer="name" class="form-control" >
                    @error('name')<small class="text-denger">{{ $message }}</small> @enderror
                 </div>
                 <div class="mb-3">
                    <label>Brand Slug</label>
                    <input type="text" wire:model.defer="slug" class="form-control" >
                    @error('slug')<small class="text-denger">{{ $message }}</small> @enderror
                 </div>
                 <div class="mb-3">
                    <label>Status</label><br/>
                    <input type="checkbox" wire:model.defer="status" /> Checked = Hidden, Unchecked = Visible
                    @error('status')<small class="text-denger">{{ $message }}</small> @enderror
                 </div>
                </div>
                <div class="modal-footer">
                  <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Delete Model --}}

  <!-- Modal -->
 <div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Brands</h1>
          <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div wire:loading class="p-2">
            <div class="spinner-grow" role="status">
                <span class="visually-hidden">Hometex...</span>
              </div>Hometex...
        </div>
        <div wire:loading.remove>
            <form wire:submit.prevent="destroyBrand">
                <div class="modal-body">
                    <h4>Are you sure you want to delete this Brand?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Yes. Delete</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
