<?php $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = '';
  $DB_NAME = 'mclccisn_gatekeeper';


  $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

  if(!$con)
  {
    die( "Unable to select database");
  }

  //'2021-01-11','2021-01-12', '2021-01-13','2021-01-14','2021-01-15','2021-01-16'

  $dy=0;
  $dday = array('2021-01-11','2021-01-12', '2021-01-13','2021-01-14','2021-01-15','2021-01-16');
  $v1  = array(''.$dday[$dy].' 06:50:00',''.$dday[$dy].' 9:30:00',''.$dday[$dy].'11:40:00',''.$dday[$dy].'15:15:00',''.$dday[$dy].'16:15:00');   //start
  $v2 = array(''.$dday[$dy].' 07:30:00',''.$dday[$dy].' 10:15:00',''.$dday[$dy].'13:30:00',''.$dday[$dy].'16:30:00',''.$dday[$dy].'17:40:00');   //end
  $v3 = array(''.$dday[$dy].' 07:15:00',''.$dday[$dy].' 10:00:00',''.$dday[$dy].'13:10:00',''.$dday[$dy].'16:07:00',''.$dday[$dy].'17:00:00');   //end
  $start_time = 0;
  $end_time = 0;
  $id_no =  array("2017380981", "2013104449", "2017102556", "2019102433", "2019180967", "2017580058", "2017105453", "2014102346", "2016106141");

  //  "2017380981", "2013104449", "2017102556", "2019102433", "2019180967", "2017580058", "2017105453", "2014102346", "2016106141"


      for($dy=0 ; $dy <= 5; $dy++)
            {
            for($y = 0 ; $y <= 4; $y++)
              {

                  //iterate here for insertion 4=number of id nos
                  for($x = 0 ; $x <= 8; $x++)
                  {

                      //generate
                      $dt = gen_dt($y,$dday[$dy]);

                      $dt2 = gen_dt2($y,$dday[$dy]);

                      /////////////
                      $start_time = $dt;
                      $end_time = $dt2;
                      if($start_time <= $dt)
                      {
                      $start_time = $dt;
                      }
                      if($end_time >= $dt2)
                      $end_time = $dt2;
                      /////////////
                      //regenerate
                      while ($dt > $dt2)
                      {
                        $dt = gen_dt2($y,$dday[$dy]);
                      }
                    
                /*  $msql= "
                  SELECT DATE_FORMAT(
                      FROM_UNIXTIME(
                          RAND() * 
                              (UNIX_TIMESTAMP('".$v1[$y]."') - UNIX_TIMESTAMP('".$v2[$y]."')) + 
                              UNIX_TIMESTAMP('".$v2[$y]."')
                                    ), '%Y-%m-%d %H:%i:%s')";

                  if ($result = mysqli_query($con, $msql)) {
                  while ($row = mysqli_fetch_row($result)) {
                    $dt = $row[0]; 
                    }
                  } */
                  echo $dt;
                  echo "<br>";
                  $myqry1 = "INSERT INTO `tapin_logs`(`id_no`,`inDate`) VALUES ('".$id_no[$x]."','".$dt."')";
                  mysqli_query($con, $myqry1);


                  echo $dt2;
                  echo "<br>";
                  $myqry2 = "INSERT INTO `tapout_logs`(`id_no`,`outDate`) VALUES ('".$id_no[$x]."','".$dt2."')";
                  mysqli_query($con, $myqry2);


                } 
                sleep(1);
                $start_time = $dt;
                $end_time = $dt2;
              } 
              sleep(1);
            }
    

    function gen_dt($z, $dday){
  $v1  = array(''.$dday.' 06:50:00',''.$dday.' 9:30:00',''.$dday.' 11:40:00',''.$dday.' 15:15:00',''.$dday.' 16:15:00');   //start
  $v2 = array(''.$dday.' 07:15:00',''.$dday.' 10:00:00',''.$dday.' 13:00:00',''.$dday.' 16:00:00',''.$dday.' 17:40:00');   //end

  $id_no =  array("2016180067", "2015380013", "2015102429", "2015102434", "2015102433", "2015180061", "2013380018", "2017102425", "2018102686", "2018102417");

      $DB_HOST = 'localhost';
      $DB_USER = 'root';
      $DB_PASS = '';
      $DB_NAME = 'mclccisn_gatekeeper';


      $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

      if(!$con)
      {
        die( "Unable to select database");
      }

    $msql= "
    SELECT DATE_FORMAT(
            FROM_UNIXTIME(
                 RAND() * 
                    (UNIX_TIMESTAMP('".$v1[$z]."') - UNIX_TIMESTAMP('".$v2[$z]."')) + 
                     UNIX_TIMESTAMP('".$v2[$z]."')
                          ), '%Y-%m-%d %H:%i:%s')";
                          sleep(0.200);
    if ($result = mysqli_query($con, $msql)) {
     while ($row = mysqli_fetch_row($result)) {
      $dt = $row[0]; 
      }
    }

    return $dt;
    }  

    function gen_dt2($z, $dday){
  $v2 = array(''.$dday.' 08:00:00',''.$dday.' 10:00:00',''.$dday.' 12:15:00',''.$dday.' 16:30:00',''.$dday.' 17:40:00');   //end
  $v3 = array(''.$dday.' 08:15:00',''.$dday.' 10:20:00',''.$dday.' 12:45:00',''.$dday.' 16:45:00',''.$dday.' 16:00:00');   //end
  

  $id_no =  array("2016180067", "2015380013", "2015102429", "2015102434", "2015102433", "2015180061", "2013380018", "2017102425", "2018102686", "2018102417");

      $DB_HOST = 'localhost';
      $DB_USER = 'root';
      $DB_PASS = '';
      $DB_NAME = 'mclccisn_gatekeeper';

      $conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

      if(!$conn)
      {
        die( "Unable to select database");
      }

    $msql= "
    SELECT DATE_FORMAT(
            FROM_UNIXTIME(
                 RAND() * 
                    (UNIX_TIMESTAMP('".$v2[$z]."') - UNIX_TIMESTAMP('".$v3[$z]."')) + 
                     UNIX_TIMESTAMP('".$v3[$z]."')
                          ), '%Y-%m-%d %H:%i:%s')";
sleep(0.200);
    if ($result = mysqli_query($conn, $msql)) {
     while ($row = mysqli_fetch_row($result)) {
      $dt = $row[0]; 
      }
    }

    return $dt;
    }     




?>