<?php

class math {

	public function multiplication_table() {

        echo "Multply it.";

        $this->title = "Multiplication Table";
        
        $maxRows = 8;
        $maxCols = 10;

        $this->viewParams = [
            "maxRows"=> $maxRows,
            "maxCols"=> $maxCols
		];
	}
}
