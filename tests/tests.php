<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class tests extends TestCase
{
    public function  testIfEmptyArray(){
        $data = "test data";
        $this->assertEmpty(
            $data, "data is not empty"
        );
    }

    public function testIfNotEmptyArray(){
        $data = "";
        $this->assertNotEmpty(
            $data,"data is empty"
        );

    }

    public function testIfSurveyAddedToDB(){
        $conn = mysqli_connect('localhost', 'root', '', 'dbtest');
        if (isset($_POST['Submit'])){
            $_POST['survey'];
            $sql = "INSERT INTO dbtest (survey)
                        VALUES ('test survey')";

            $result= $conn->query($sql);

        }
        else{
            print_r("Survey not added to db");
        };

    }

    public function testGetSurveyFromDB(){
        $conn = mysqli_connect('localhost', 'root', '', 'dbtest');
        $sql = "SELECT * FROM survey";
        if (
            $conn->query($sql)
        ){
            print_r("survey is in the db");
        }

        else{
            print_r("survey not found in db");
        }


    }

    public function testDeleteSurveyFromDB(){
        $conn = mysqli_connect('localhost', 'root', '', 'dbtest');
        $sql = "DELETE * FROM survey";
        if(
            $conn->query($sql)
        ){
            print_r("survey deleted with success");
        }
        else{
            print_r("survey not deleted");
        }
    }


}

?>