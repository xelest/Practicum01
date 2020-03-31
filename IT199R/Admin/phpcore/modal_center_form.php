<!-- Modal -->
<div class="modal fade" id="center_modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="margin-top: 8%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #354664;color: white;">
        <h4 class="modal-title" id="exampleModalLongTitle" style="color: white;">UPDATE MESSAGE</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="#">
        <div class="parent-container-horizontal">

        <div class="item-container">
        <label for="exampleInputEmail1">Sender</label></div>
         <div class="item-container">
        <select id="" name="msg_sender" style="width: 100%; height: 35px;">
        <option value="CCIS">CCIS Faculty</option>
        <option value="MITL">MITL Faculty</option>
        <option value="Admission">Admission's Office</option>
        <option value="CGC">CGC - Center for Guidance and Counseling</option>
        <option value="CSA">CSA - Center for Student Advising</option>
      </select>
        </div> <br>
        <div class="item-container">
        <label for="exampleInputEmail1">ID No.</label>
        <input type="text" class="form-control" id="usr" name="msg_id_no" required="required">
        </div> <br>

        <div class="item-container">
        <label for="exampleInputEmail1">Message</label>
    <textarea id="w3mission" rows="5" cols="69" name="msg_details" required="required" style="width: 100%;"></textarea>
        </div> <br>


        </div>
      </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>