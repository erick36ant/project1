<?php
	/**
	* fungsi duit
	*descripsi pemisah ribuan
	*@param float $number
	*@return string
	*/

	function duit($number){
		return 'Rp. ' .number_format($number,0,",",".");
	}
?>