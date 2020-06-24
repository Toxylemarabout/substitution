<?php

	function build_table($array){
		// start table
		$html = '<table>';
		// header row
		$html .= '<tr>';
		foreach($array[0] as $key=>$value){
		
			$html .= '<th>' . htmlspecialchars($key) . '</th>';
		
		}
	
	$html .= '</tr>';
	
	foreach( $array as $key=>$value){
	
		$html .= '<tr>';
		foreach($value as $key2=>$value2){
	
			$html .= '<td>' . htmlspecialchars($value2) . '</td>';
		}
	
		$html .= '</tr>';
	}
	
	$html .= '</table>';
	return $html;
	
	}

?> 
