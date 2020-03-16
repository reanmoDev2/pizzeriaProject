<div class="modal fade pl-0 pr-0" id="acceptOrderModal">
  <div class="modal-dialog modal-dialog-centered accept-order-dialog">
    <div class="modal-content accept-order-content">
      <div class="modal-header">
        <div class="modal-title">Bestellung annehmen</div>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="line-wrapper">
          <div class="title">Aktuelle Zeit</div>
          <div class="time-container">
            <i class="far fa-clock"></i>
            <div class="datetime">
              18:35 Uhr
            </div>
          </div>
        </div>
        <div class="line-wrapper">
          <div class="mt-5 d-flex">
            <div class="title">Bestellung fertig in</div>
            <select class="form-control time-selecter" required>
              <option value="5">5 Minuten</option>
              <option value="10">10 Minuten</option>
              <option value="15">15 Minuten</option>
              <option value="20">20 Minuten</option>
              <option value="25">25 Minuten</option>
              <option value="30">30 Minuten</option>
              <option value="35">35 Minuten</option>
              <option value="40">40 Minuten</option>
              <option value="45">45 Minuten</option>
              <option value="50">50 Minuten</option>
              <option value="55">55 Minuten</option>
              <option value="60">60 Minuten</option>
            </select>
          </div>

        </div>

        <button class="btn btn-success btn-block accept" data-dismiss="modal">ANNEHMEN</button>
      </div>
    </div>
  </div>
</div>