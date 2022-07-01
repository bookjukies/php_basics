    <?php 
        $king = "Bongani";

        //the normal way
        $kingNames = ['Mkhumbi','Justice','Ndumiso'];
        //you can not call the whole array with echo use print_a()
        print_r($kingNames);



        //sort of like objects in js
        $short = [
            "Ice"=>"Justice",
            "Ndu"=>"Ndumiso",
            "Debo"=> "Bongani"
        ];

        echo $short["Debo"];

