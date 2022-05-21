
@if(session("success"))
  <div class="alert alert-success alert-dismissible text-white" role="alert">
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      {{ session("success") }}
  </div>
@endif
 
@if(session("danger"))
<div class="alert alert-danger alert-dismissible text-white" role="alert">
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    {{ session("danger") }}
</div>
@endif

 <br>