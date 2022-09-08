<div class="d-flex align-items-center">
    <input type="text" id="search" class="input-group-text m-2" onkeyup="search()" placeholder="search">
    <div class="m2">
        <select class="form-select" name="page_num" id="page_num">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <div class="m-2">
        <select class="form-select"  name="class_num" id="class_num">
            <option value="default" disabled selected value>Class number</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>
    <div class="m-2">
        <select class="js-example-basic-single form-select" style="width: 100%" name="state" id="select2">
            <option value="default" disabled selected>Select teacher</option>
        </select>
    </div>
    <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-plus"></i>
    </button>

    <button id="reload_page" href="javascript:void(0)" class="btn btn-primary m-2">
        <i class="fa-solid fa-rotate"></i>
    </button>
</div>
