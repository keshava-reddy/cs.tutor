<?php

class algorithm {

    public function sorting() {

        echo "Let us sort it out.";

        $this->title = "Sorting Algorithms";

        $names = [ 
            "Selection Sort", 
            "Insertion Sort", 
            "Bubble Sort", 
            "Merge Sort"
        ];

        $this->viewParams = [ "sort_names"=> $names ];
    }


    public function asymptotic_complexity() {

        echo "It is complicated.";

        $this->title = "Asymptotic Complexity";

        $names = [
            "O(1)" => "Constant",
            "O(log n)" => "Logarithmic",
            "O(n)" => "Linear",
            "O(n2)" => "Quadratic",
        ];

        $this->viewParams = [ "asyco"=> $names ];
    }
}
