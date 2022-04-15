<!-- Create Project Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLongTitle">Add vCard Project</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
 
             <form id="ajaxEditForm" enctype="multipart/form-data" class="modal-form" action="{{route('user.vcard.projectUpdate')}}" method="POST">
                @csrf
                <input id="inproject_id" type="hidden" name="project_id">
                <div class="row">
                   <div class="col-lg-12">
                     <div class="form-group">
                       <div class="col-12 mb-2">
                         <label for="image"><strong>Image*</strong></label>
                       </div>
                       <div class="col-md-12 showImage mb-3">
                         <img id="inimage" src="{{asset('assets/admin/img/noimage.jpg')}}" alt="..." class="img-thumbnail image">
                       </div>
                       <input type="file" name="image" id="image" class="form-control">
                       <p id="eerrimage" class="mb-0 text-danger em"></p>
                     </div>
                   </div>
                 </div>
                <div class="form-group">
                   <label for="">Title **</label>
                   <input id="intitle" type="text" class="form-control {{$vcard->direction == 2 ? 'rtl' : ''}}" name="title" placeholder="Enter title" value="">
                   <p id="eerrtitle" class="mb-0 text-danger em"></p>
                </div>

                <div id="editApp">
                  <div class="form-group">
                    <label class="form-label">External Link Status **</label>
                    <div class="selectgroup w-100">
                       <label class="selectgroup-item">
                          <input type="radio" name="external_link_status" value="1" class="selectgroup-input elstatus" data-short_details_id="eshortDetails" data-ext_link_id="eextLink">
                          <span class="selectgroup-button">Active</span>
                       </label>
                       <label class="selectgroup-item">
                          <input type="radio" name="external_link_status" value="0" class="selectgroup-input elstatus" data-short_details_id="eshortDetails" data-ext_link_id="eextLink">
                          <span class="selectgroup-button">Deactive</span>
                       </label>
                    </div>
                 </div>
                 <div class="form-group" id="eextLink" style="display: none;">
                    <label for="">External Link</label>
                    <input type="text" id="inexternal_link" class="form-control" name="external_link">
                    <p class="text-warning mb-0">If you dont want any details content, then leave this field blank</p>
                    <p id="errexternal_link" class="mb-0 text-danger em"></p>
                 </div>
                  <div class="form-group" id="eshortDetails" style="display: none;">
                     <label for="">Short Details</label>
                     <textarea id="inshort_details" class="form-control {{$vcard->direction == 2 ? 'rtl' : ''}}" name="short_details" rows="4" cols="80" placeholder="Enter short details"></textarea>
                     <p class="text-warning mb-0">If you dont want any details content, then leave this field blank</p>
                     <p id="eerrshort_details" class="mb-0 text-danger em"></p>
                  </div>
                </div>
 
                <div class="form-group">
                   <label for="">Serial Number **</label>
                   <input id="inserial_number" type="number" class="form-control ltr" name="serial_number" value="" placeholder="Enter Serial Number">
                   <p id="eerrserial_number" class="mb-0 text-danger em"></p>
                   <p class="text-warning mb-0"><small>The higher the serial number is, the later the project will be shown.</small></p>
                </div>
             </form>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button id="updateBtn" type="button" class="btn btn-primary">Update</button>
          </div>
       </div>
    </div>
 </div>


