<?php
	function insert($table, $data) {
		$val = "";
		$file = "";
		if(is_array($data)) {
			$i = 0;
			foreach($data as $key=>$value) {
				if($key!="addNew"){
					$i++;
					if($i = 1){
						$file .= $key;
						$val .= "'".$value."'";
					}else {
						$file .= ','.$key;
						$val .= ",'".$value."'";
					}
				}
			}
		}
		$sqlInsert = "INSERT INTO $table ($file) VALUES ($val)";
	}
