<?php
if (isset($_POST['simpan'])) {
    mysql_query("INSERT INTO member (nama, email, phone) VALUES ('".$_POST['nama']."', '".$_POST['email']."', '".$_POST['phone']."')");
    writeMsg('save.sukses');
}
?>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form method="post" id="form_input">
            <div class="left-inner-addon ">
                <i class="fa fa-user"></i>
                <input type="text" class="form-control" placeholder="Username" name="nama" id="nama" required/>
            </div>
            <!--<div class="form-group">-->
            <!--    <label class="control-label" for="nama">Nama (wajib diisi)</label>-->
            <!--    <input type="text" class="form-control" name="nama" id="nama" required>-->
            <!--</div>-->
            <br>

            <div class="left-inner-addon ">
                <i class="fa fa-envelope-o"></i>
                <input type="text" class="form-control" placeholder="Email" name="email" id="email" required/>
            </div>
            <!--<div class="form-group">-->
            <!--    <label class="control-label" for="email">Email (wajib diisi)</label>-->
            <!--    <input type="email" class="form-control" name="email" id="email" required>-->
            <!--</div>-->
            <br>

            <div class="left-inner-addon ">
                <i class="fa fa-mobile"></i>
                <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" required/>
            </div>
            <!--<div class="form-group">-->
            <!--    <label class="control-label" for="hp">No HP</label>-->
            <!--    <input type="text" class="form-control" name="hp" id="hp">-->
            <!--</div>-->

            <!--<div class="form-group">-->
            <!--    <input type="submit" value="Save" name="simpan" class="btn btn-primary">-->
            <!--    <input type="reset" value="Reset" class="btn btn-danger">-->
            <!--</div>-->
            <br>
            <button type="submit" class="btn btn-success" name="simpan">
                <i class="fa fa-floppy-o"></i> Save
            </button>

            <button type="reset" class="btn btn-danger">
                <i class="fa fa-refresh"></i> Reset
            </button>

        </form>
    </div>
</div>