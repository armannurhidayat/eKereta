<?php

	function stasiun_help($nama_table) {
		$ci =& get_instance();
		// $optgroup = $ci->db->get_where($nama_table, ['is_kota' => 0])->result();

		$optgroups = $ci->db->get_where($nama_table, ['is_kota' => 0])->result();

		if (!empty($optgroups)) {
		  foreach ($optgroups as $optgroup) {
		    $options =  $ci->db->get_where($nama_table, ['is_kota' => $optgroup->id]);

		    if ($options->num_rows() > 0) {
		      echo "<optgroup label='$optgroup->nama_stasiun'>";

		      foreach ($options->result() as $option) {
		        echo "<option value='$option->id'> $option->nama_stasiun </option>";
		      }
		      echo "</optgroup>";

		    } else {
		      echo "";
		    }
		  }

		} else {
		  echo "";
		}
	}