<!--begin::Wrapper-->
<div class="d-flex flex-stack mb-5">
  <!--begin::Search-->
  <div class="d-flex align-items-center position-relative my-1">
    <input type="text" name="nama" class="form-control form-control-solid w-250px ps-2 @error('nama') is-invalid @enderror" value="{{ $tasks->nama }}" placeholder="The Name of Tasks"/>
      @error('nama')
        <span class="invalid-feedback text-sm ml-2">{{ $message }}</span>
      @enderror
  </div>
 
  <!--begin::Toolbar-->
    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">   
        <button type="submit" class="btn btn-primary" data-bs-toggle="tooltip">{{ $submit }}</button>
    </div>
</div>




