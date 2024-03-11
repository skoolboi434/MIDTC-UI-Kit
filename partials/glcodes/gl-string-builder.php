<section class="element-container">
  <div class="container">
    <h3 class="heading mb-5">GL Code String Builder</h3>

    <div class="gl-code-builder">
      <span class="d-block mb-2">Available Codes:</span>
      <div id="div1" class="available-codes mb-5" ondrop="drop(event)"
        ondragover="allowDrop(event)">

        <button class="btn-custom btn-secondary-light" draggable="true"
          ondragstart="drag(event)" id="location">Location</button>

        <button class="btn-custom btn-secondary-light" draggable="true"
          ondragstart="drag(event)" id="departments">Departments</button>

        <button class="btn-custom btn-secondary-light" draggable="true"
          ondragstart="drag(event)" id="profit">Profit</button>

        <button class="btn-custom btn-secondary-light" draggable="true"
          ondragstart="drag(event)" id="company">Company</button>
      </div>

      <span class="d-block mb-2">Selected Codes:</span>
      <div id="div2" class="selected-codes mb-5" ondrop="drop(event)"
        ondragover="allowDrop(event)">

        <button class="btn-custom btn-secondary-light" draggable="false"
          id="drag1">GL</button>
      </div>

      <div class="selected-fields-container">
        <div class="text-container text-center mb-5">
          <p>Select how many characters you want for each<br /> selected code!
          </p>
        </div>

        <div class="active-fields">
          <div class="form-group">
            <div class="row justify-content-md-center">
              <div class="col-2">
                <label for="">GL</label>
                <input type="text" class="form-control" name="" id="GL">
              </div>
              <div class="col-2">
                <label for="">Location</label>
                <input type="text" class="form-control" name="location"
                  id="location">
              </div>
              <div class="col-2">
                <label for="">Departments</label>
                <input type="text" class="form-control" name="departments"
                  id="departments">
              </div>
              <div class="col-2">
                <label for="">Company</label>
                <input type="text" class="form-control" name="company"
                  id="company">
              </div>
              <div class="col-2">
                <label for="">Profit</label>
                <input type="text" class="form-control" name="profit"
                  id="profit">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>