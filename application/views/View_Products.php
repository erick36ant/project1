<?php
	echo $title;
	
	$this->table->set_heading('No','Product Name','Price', 'Action');
	
	$no=0;
	foreach ($products->result() as $row)
	{
		$no++;
		$this->table->add_row($no, $row->ProductName, "$ ".$row->UnitPrice, 'Delete');
		
	}
	
	echo $this->table->generate();
?>