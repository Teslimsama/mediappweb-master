<!--  <div class="modal fade" id="diagnosis" tabindex="-1" aria-labelledby="diagnosis" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="diagnosis">Assign a doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="system/_appointments.php" method="POST">
          <input type="hidden" value="<?php //echo $patient_id; ?>" name="patient-id">
          <div class="mb-2">
            <select name="doctor" class="form-select form-select-lg mb-2">
              <option>your diagnosis please...</option>
        
            </select>
            <div class="mb-2">
              <label>Pick and appointment date</label>
              <input type="datetime-local" name="appt-date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="diagnosis">Assign Doctor</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> -->
<!--  -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="system/_diagnosis.php" method="POST">
          <div class="mb-3">
          <input type="hidden" value="<?php echo $patient_id; ?>" name="patient-id">
          <input type="hidden" value="<?php echo $doctor_id; ?>" name="doctor-id">
            <label for="message-text" class="col-form-label">Diagnosis :</label>
            <textarea class="form-control" name="message" ></textarea>
          </div> <button type="submit" name="send-message" class="btn btn-primary">Send Diagnosis</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
