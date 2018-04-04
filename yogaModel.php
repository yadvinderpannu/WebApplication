<?php

class YogaModel extends CI_Model{

	public function classes()
	{

		$query = $this->db->get("class");
		return $query->result_array();

	}

	public function days()
	{

		$query = $this->db->get("days");
		return $query->result_array();

	}

	public function times()
	{

		$query = $this->db->get("time");
		return $query->result_array();

	}

	public function schedule_data()
	{

		$query = $this->db->get("days");
		$d = $query->result_array();

		foreach ($d as $r) {
			$query1 = $this->db->query("SELECT schedule.timeid, `time`, classname FROM schedule JOIN class ON schedule.classid = class.classid JOIN `time` ON `time`.timeid = schedule.timeid WHERE schedule.daysid = ".$r['daysid']." ORDER BY timeid");
			foreach ($query1->result_array() as $t) {
				$s[$r['daysid']][] = $t['time']." ".$t['classname'];
			}
		}

		return [$d, $s];

	}

	public function insertContact($data)
	{
		$this->db->insert('contact',$data);
		return 1;
	}

	public function valid_time($data)
	{

		$this->db->where($data);
		$query = $this->db->get("schedule");

		return $query->num_rows();
	}

	public function valid_schedule($clid)
	{
		$query = $this->db->query("SELECT daysname, `time` FROM schedule JOIN days ON schedule.daysid = days.daysid JOIN `time` ON `time`.timeid = schedule.timeid WHERE classid = $clid;");

		return $query->result_array();

	}

	public function insertClient($data)
	{

		$this->db->insert('client', $data);
		return $this->db->insert_id();
	}

	public function insertClientSchedule($data)
	{

		$this->db->insert('client-schedule', $data);
		return 1;
	}	

} 


?>