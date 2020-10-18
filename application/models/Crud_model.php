<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {


	public function __construct()
		{
			$this->load->database();

		}
		function createData()
			{
				$data = array (
					'make' => $this->input->post('make'),
					'model' => $this->input->post('model'),
					'deviceType' => $this->input->post('deviceType'),
					'imeiSerialno' => $this->input->post('imeiSerialno'),
					'osVersion' => $this->input->post('osVersion'),
					'assignedTo' => $this->input->post('assignedTo'),
					'serviceVehicle' => $this->input->post('serviceVehicle'),
					'dateAssigned' => $this->input->post('dateAssigned'),
					'status_id' => $this->input->post('status_id'),
				);
				$this->db->insert('tbl_device', $data);

			}

	function getAllData() {
		$query = $this->db->query('SELECT * FROM tbl_device');
		return $query->result();
	}

	function getData($id) {
		$query = $this->db->query('SELECT * FROM tbl_device WHERE `id` =' .$id);
		return $query->row();
	}

	function updateData($id) {
		$data = array (
			'make' => $this->input->post('make'),
			'model' => $this->input->post('model'),
			'deviceType' => $this->input->post('deviceType'),
			'imeiSerialno' => $this->input->post('imeiSerialno'),
			'osVersion' => $this->input->post('osVersion'),
			'assignedTo' => $this->input->post('assignedTo'),
			'serviceVehicle' => $this->input->post('serviceVehicle'),
			'dateAssigned' => $this->input->post('dateAssigned'),
			'status_id' => $this->input->post('status_id'),
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_device', $data);
	}

	function deleteData($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_device');
	}
}

