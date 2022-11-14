<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class Test extends \PHPUnit\Framework\TestCase
{
    public function  testIfEmptyArray(){
        $form = App\SendSurvey::class;
        $conn = mysqli_connect('localhost','root','','surveylasalle');
        $data = "1";
        $sql = "INSERT INTO tests (test) VALUES ($data)";
        $conn->query($sql);
        $this->assertEmpty(
            $data, "data is not empty"
        );
    }

    public function testIfNotEmptyArray(){
        $form = App\SendSurvey::class;
        $data = "";
        $conn = mysqli_connect('localhost','root','','surveylasalle');
        $sql = "INSERT INTO tests (test) VALUES ($data)";
        $conn->query($sql);

        $this->assertNotEmpty(
            $data,"data is empty"
        );

    }

    public function testConnexionToDB(){
        $conn = mysqli_connect('localhost','root','','surveylasalle');
        if($conn){
            print_r("Connexion Success To DB");
            self::assertTrue(true);
        }
        else{
            print_r("Connexion Failed To DB");
        }
    }

    public function testIfSurveyAddedToDB(){
        $conn = mysqli_connect('localhost', 'root', '', 'surveylasalle');
        if (isset($_POST['Submit'])){
            $_POST['tests'];
            $sql = "INSERT INTO tests (name)
                        VALUES ('test survey')";

            $result= $conn->query($sql);

        }
        else{
            print_r("Survey not added to db");
        };

    }

    public function testGetSurveyFromDB(){
        $conn = mysqli_connect('localhost', 'root', '', 'surveylasalle');
        $sql = "SELECT * FROM tests";
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
        $conn = mysqli_connect('localhost', 'root', '', 'surveylasalle');
        $sql = "DELETE * FROM tests";
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