<?php
/**
 * set_exception_handler function
 * allows you to define a custom function that will handle uncaught exceptions automatically
 * تضمنلك إن أي إكسيبشن مش متهندل، مش هيضرب في وش اليوزر، إنما إنته هتتعامل معاه من هنا
 */
function exception_handeler($exception)
{
    $message = $exception->getMessage();
    $line = $exception->getLine();
    error_log("There is unhandeled Exception, message is $message, line is $line \n", 3, "logs.log");

    echo 'something went wrong, please try again <br>';
}

set_exception_handler('exception_handeler');


try {
    throw new RuntimeException('My Runtime exception');
} catch (\Exception $th) {
    echo 'handeled exception will not stop the execution of the page <br>';
}


throw new PDOException('My PDOException');
// uncaught exceptions --> set_exception_handler --> stopping the excution of the page

echo 'End of Program <br>';  // will not be executed.
