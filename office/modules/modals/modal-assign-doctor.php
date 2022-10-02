<div class="modal fade" id="assignDoctorModal" tabindex="-1" aria-labelledby="assignDoctorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="assignDoctorModalLabel">Assign a doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="system/_assign-doctor.php" method="POST">
          <input type="hidden" value="<?php echo $patient_id; ?>" name="patient-id">
          <div class="mb-2">
            <select name="doctor" class="form-select form-select-lg mb-2">
              <option>Choose a doctor ...</option>
              <?php 
                $sql_doctor = "SELECT * FROM users WHERE acctype='doctor' ORDER BY id DESC;";
                $sql_doctor_result = mysqli_query($db_connect,$sql_doctor);
                while($rows_doctor = mysqli_fetch_assoc($sql_doctor_result)){
                ?>
                <option value="<?php echo $rows_doctor['id']; ?>">
                  <?php echo $rows_doctor['firstname'] . ' ' . $rows_doctor['lastname'];?>
                </option>
                <?php }?>
            </select>
            <div class="mb-2">
              <label>Pick and appointment date</label>
              <input type="datetime-local" name="appt-date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="assign-doctor">Assign Doctor</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
