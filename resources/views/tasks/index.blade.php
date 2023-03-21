<x-app-layout >

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        @include('tasks._create')
      </div>
    </div>

    <table id="kt_datatable_example_1" class="table align-middle table-row-dashed min-h-400px fs-6 gy-5 dataTable no-footer" aria-describedby="kt_datatable_example_1_info" style="width: 930px;">    
    <thead>
    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
        <th>Nama</th>
        <th class="text-end min-w-100px">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
    <form method="post">
   
    @csrf
 
                            
        <div  class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Your Tasks</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>
 
            <div class="modal-body">
            <input type="text" name="nama" id="nama" class="form-control">
            <input type="hidden" name="id" id="id">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button id="edit_user" type="submit" class="btn btn-primary" data-toggle="modal">Update</button>
            </div>
        </div>
   
</form>
    </div>
</div>
    </tbody>
</table>

  </div>

</x-app-layout>