<!-- หน้าvoteคะแนนแบบrandom -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: powderblue;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>หน้า vote คะแนน(random คะแนนของแต่ละคนแล้วบันทึกใน db)</title>

</head>

<body>

    <div class="container nt">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <h4 style="text-align:center;"> หน้า vote คะแนน(random คะแนนของแต่ละคนแล้วบันทึกใน db)</h4>
                <br>
                <tbody>
                    <?php foreach ($query3 as $r) { ?>
                        <tr>

                            <div class="col-md-7">
                                <h4 style="text-align:center;"> </h4>
                                <br>
                                <form action="<?php echo site_url('main/addvote'); ?>" method="post" class="form-hoizontal">


                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">idผู้สมัคร</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="id" required class="form-control" value="<?php echo $r->id; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">ชื่อผู้สมัคร</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="name" required class="form-control" value="<?php echo $r->name; ?>" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">ชื่อพรรค</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="partyname" required class="form-control" value="<?php echo $r->partyname; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">random คะแนนแต่ละคน</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="point" required class="form-control" value="<?php echo $rand = substr(str_shuffle('12345678'), 0, 2); ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label"></div>
                                        <div class="col-sm-5">
                                            <button type="submit" class="btn btn-primary">บันทึกข้อมูลการ random</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </tr>
                    <?php } ?>
                </tbody>


                </form>
            </div>
        </div>
    </div>

</body>

</html>