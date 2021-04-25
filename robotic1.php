<?php 
# This is The first files containg objects for the project 
class RanjaRobot1{
    private $robotTitle;
    private $robotHeader1;
    private $robotHeader2;
    private $Item1;
    private $Item2;
    public function robotHeader1($robotTitle,$robotCss,$robotJs){
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" href="<?php echo $robotcss?>"/>
        <scrpt href="<?php echo $robotJs;?>"/>
        </head></html>
    }
}