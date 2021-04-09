<div class="container">
    <div class="row">
        <div class="col-md-7">
            <h4 style="text-align:center;"> รายชื่อสมาชิกพรรคทั้งหมด</h4>
            <table class="table table=bordered table=hover">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>ชื่อ</th>
                        <th>สกุล</th>
                        <th>ระดับการศึกษา</th>
                        <th>ชื่อพรรค</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $rs) { ?>
                        <tr>
                            <td> <?php echo $rs->id; ?> </td>
                            <td> <?php echo $rs->name; ?> </td>
                            <td> <?php echo $rs->lastname; ?> </td>
                            <td> <?php echo $rs->grade; ?> </td>
                            <td> <?php echo $rs->partyname; ?> </td>
                      
                            <!-- <td><a href="<?php echo site_url('main/edit/') . $rs->id; ?>">แก้ไข</td> -->
                            <td><a href="<?php echo site_url('main/del/') . $rs->id; ?>" 
                            onclick="return confirm('ยืนยัน')">ลบสมาชิก</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
 
   <td><a  href="<?php echo site_url('main/vote/') ?>">ไปหน้า vote คะแนน</td>

            <!-- <tbody>
                    <?php foreach ($query2 as $r) { ?>
                        <tr>

                            <div class="col-md-7">
                                <h4 style="text-align:center;"> N</h4>
                                <br>
                                <form action="<?php echo site_url('main/editdata'); ?>" method="post" class="form-hoizontal">

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">id</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="id" required class="form-control" 
                                            value="<?php echo $r->id; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">password</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="password" required class="form-control"
                                            value="<?php echo $r->password; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">year</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="year" required class="form-control"
                                            value="<?php echo $r->year; ?>">
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </tr>
                    <?php } ?>
                </tbody> -->

        </div>
    </div>
</div>