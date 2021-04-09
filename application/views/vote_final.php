<!-- หน้าแสดงข้อมูลทั้งหมดที่ random มาแล้ว -->
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <h4 style="text-align:center;"> รายชื่อสมาชิกพรรคทั้งหมด ที่randomคะแนนแล้ว</h4>
            <table class="table table=bordered table=hover">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</th>
                        <th>ชื่อ</th>
                        <th>สกุล</th>
                        <th>ระดับการศึกษา</th>
                        <th>ชื่อพรรค</th>
                        <th>คะแนน</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query4 as $rs) { ?>
                        <tr>
                            <td> <?php echo $rs->id; ?> </td>
                            <td> <?php echo $rs->name; ?> </td>
                            <td> <?php echo $rs->lastname; ?> </td>
                            <td> <?php echo $rs->grade; ?> </td>
                            <td> <?php echo $rs->partyname; ?> </td>
                            <td> <?php echo $rs->point; ?> </td>
                    
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
 
            <tbody>
                    <?php foreach ($query5 as $r) { ?>
                        <tr>

                            <div class="col-md-7">
                                <h4 style="text-align:center;"> พรรคที่ได้คะแนนที่นั่งสูงสุด</h4>
                                <br>
                                <form action="<?php echo site_url('main/editdata'); ?>" method="post" class="form-hoizontal">

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">ชื่อพรรค</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="partyname" required class="form-control" 
                                            value="<?php echo $r->partyname; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 control-label">คะแนนรวมที่ได้</div>
                                        <div class="col-sm-6">
                                            <input type="text" name="a" required class="form-control" 
                                            value="<?php echo $r->a; ?>">
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </tr>
                    <?php } ?>
                </tbody>

        </div>
    </div>
</div>