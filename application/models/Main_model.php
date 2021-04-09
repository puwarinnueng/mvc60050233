<?php
class Main_model extends CI_Model
{

    //เพิ่มข้อมูลเข้า db
    public function addmember()
    {
        $data = array(
            // 'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'lastname' => $this->input->post('lastname'),
            'grade' => $this->input->post('grade'),
            'partyname' => $this->input->post('partyname'),

        );

        $query = $this->db->insert('vote', $data);
        if ($query) {
            echo 'ok';
        } else echo 'false';
    }

    //show ข้อมูลที่สมัครสมาชิกแล้ว
    public function showdata()
    {
        $sql = "
            SELECT id,name,lastname,grade,partyname
            FROM vote
            limit 11
            ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    //สมัครสมาชิกคนถัดไป คิวรี่ พรรค ออกมาจาก db
    public function showdata2()
    {
        $sql = "
             SELECT partyname,id,name,lastname,grade
             FROM vote
             limit 1
             ";
        $query2 = $this->db->query($sql);
        return $query2->result();
    }


    //ลบข้อมูล
    public function del($id)
    {
        $this->db->delete('vote', array('id' => $id));
    }

    //โหลดหน้าทำการvote
    public function vote()
    {
        $sql = "
            SELECT partyname,id,name,lastname,grade
            FROM vote
            order by rand()
            limit 11
            ";
        $query3 = $this->db->query($sql);
        return $query3->result();
    }

    //เพิ่มข้อมูลการvoteคะแนนเข้า db
    public function addvote()
    {
        $data = array(
            'point' => $this->input->post('point'),

        );

        $this->db->where('id', $this->input->post('id'));

        $query = $this->db->update('vote', $data);
        if ($query) {
            echo 'ok';
        } else echo 'false';
    }

    //แสดงข้อมูลของสมาชิก และคะแนนหลังจาก random คะแนนให้แล้ว 
    public function votefinal()
    {
        $sql = "
            SELECT partyname,id,name,lastname,grade,point
            FROM vote
            order by rand()
            limit 11
            ";
        $query4 = $this->db->query($sql);
        return $query4->result();
    }

    //พรรคที่ได้ จำนวน ที่นั่งสูงสุด
    public function votefinal2()
    {
        $sql = "
            SELECT partyname, sum(point) as a
            FROM vote
            order by a desc
            limit 11
            ";
        $query5 = $this->db->query($sql);
        return $query5->result();
    }
}
