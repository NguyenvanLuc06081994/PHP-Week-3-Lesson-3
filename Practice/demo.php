<?php
//function checkNum($number) {
//    if($number>1) {
//        throw new Exception("Value must be 1 or below");
//    }
//    return true;
//}
//
//
//
//try {
//    checkNum(1);
//    echo "If you see this, the number is 1 or below";
//} catch (Exception $e) {
//    echo "Message : ".$e->getMessage();
//}


//class CustomException extends Exception
//{
//
//    public function errorMessage()
//    {
//        /* error message */
//        return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
//            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
//    }
//}
//
//$email = "someone@example/.com";
//
//try {
//    /* check if */
//    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
//        /* throw exception if email is not valid */
//        throw new CustomException($email);
//    }
//} catch (CustomException $e) {
//    /* display custom message */
//    echo $e->errorMessage();
//}


//class CustomException extends Exception
//{
//    public function errorMessage()
//    {
//        /* error message */
//        return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
//            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
//    }
//}
//
//$email = "someone@example.com";
//
//try {
//    /* check if */
//    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
//        /* throw exception if email is not valid */
//        throw new CustomException($email);
//    }
//    /* check for "example" in mail address */
//    if (strpos($email, "example") !== FALSE) {
//        throw new Exception("$email is an example e-mail");
//    }
//} catch (CustomException $e) {
//    echo $e->errorMessage();
//} catch (Exception $e) {
//    echo $e->getMessage();
//}


//class CustomException extends Exception
//{
//    public function errorMessage()
//    {
//        /* error message */
//        return $this->getMessage() . ' is not a valid E-Mail address.';
//    }
//}
//
//$email = "someone@example.com";
//
//try {
//    try {
//        /* check for "example" in mail address */
//        if (strpos($email, "example") !== FALSE) {
//            /* throw exception if email is not valid */
//            throw new Exception($email);
//        }
//    } catch (Exception $e) {
//        /* re-throw exception */
//        throw new CustomException($email);
//    }
//} catch (CustomException $e) {
//    /* display custom message */
//    echo $e->errorMessage();
//}



function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

//try {
//    echo inverse(0) . "\n";
//} catch (Exception $e) {
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
//} finally {
//    echo "Second finally.\n";
//}



