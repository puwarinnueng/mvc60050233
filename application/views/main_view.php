<!-- หน้าสมัครสมาชิก คนแรก -->
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
    <title>สมัครสมาชิกพรรค</title>

</head>

<body>

    <div class="container nt">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <h4 style="text-align:center;"> สมัครสมาชิกพรรค</h4>
                <br>
                <form action="<?php echo site_url('main/adddata'); ?>" method="post" class="form-hoizontal">


                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ชื่อผู้สมัคร</div>
                        <div class="col-sm-6">
                            <input type="text" name="name"
                            pattern="[a-zA-Z]{1,}" title="ชื่อผู้สมัคร" required class="form-control" placeholder="ตัวอักษรอังกฤษ">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">นามสกุล</div>
                        <div class="col-sm-6">
                            <input type="text" name="lastname"
                            pattern="[a-zA-Z]{1,}" title="นามสกุลผู้สมัคร" required class="form-control" placeholder="ตัวอักษรอังกฤษ">
                        </div>
                    </div>

                    <tr>
                        <td><label for="grade">ระดับการศึกษาสูงสุด :</label>
                        <td><select id="grade" name="grade" size="1">
                                <option value="ม.6">ม.6</option>
                                <option value="ปริญญาตรี">ปริญญาตรี</option>
                                <option value="ปริญญาโท">ปริญญาโท</option>
                                <option value="ปริญญาเอก">ปริญญาเอก</option>
                            </select><br><br></td>
                        </td>
                    </tr>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ชื่อพรรค</div>
                        <div class="col-sm-6">
                            <input type="text" name="partyname" required class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">สมัครสมาชิกพรรค</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>