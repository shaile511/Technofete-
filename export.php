<?php  

 function fetch_data($print)  
 {      include"connection.php";
        $count=0;
        $output = '<p>'.$print.'</p>';
        $registered=mysqli_query($connect,"select * from students;");
        $output.='<body style = "padding : 10px;"><table border="1" cellspacing="0" cellpadding="5" class="ui celled padded table"><tr>';
          $output.= '<th width="5%">Id</th>
                  <th width="15%"> Name </th>
                  <th width="15%"> Roll No. </th>
                  <th width="15%"> Ph no.</th>
                  <th width="25%"> Email Id </th>
                  <th width="15%"> College </th>
                  <th width="25%"> Event </th>
                  </tr>';
        while($regrow=mysqli_fetch_assoc($registered))
        { 
          $stdinfo=mysqli_query($connect,"select * from userinfo where roll_no='".$regrow['studentId']."';");
          
          while($student=mysqli_fetch_assoc($stdinfo))
          {$output.='<tr>';

            $count+=1;
              $output.= '<td>'.$count.'</td>
                        <td>'.$student['name'].'</td>
                        <td>'.$student['roll_no'].'</td>
                        <td>'.$student['mobile'].'</td>
                        <td><a href=mailto:"'.$student['email'].'">'.$student['email'].'</a></td>
                        <td>'.$student['college'].'</td>';
            $roll = $student['roll_no'];
            $query=mysqli_query($connect,"select eventId from students where studentId = '$roll';");
            while($row=mysqli_fetch_assoc($query))
            {
              $event=$row['eventId'];
            }
            $arr=explode(',', $event);
            $output.= '<td>';
            foreach($arr as $x){
              if($x!=''){
                $query=mysqli_query($connect,"select event_name from events where id = $x;");
                $row=mysqli_fetch_assoc($query);
                if($row['event_name']!=''){
                  $output.= "<p><i class='large green snowflake icon'></i>".$row['event_name']."</p><br>";
                }
              }
            }
            $output.= "</td></tr>";
          }
        }$output.= "</table></body>";
      return $output;  
 }  
 function fetch_event()  
 {      include"connection.php";
        
        $registered=mysqli_query($connect,"select * from events ;");
        $output ='<table border="1" cellspacing="0" cellpadding="5" class="ui celled padded table"><tr>';
        $output.='<th width="5%">Id</th>
                  <th width="40%">Event Name </th>
                  <th> Total count</th>
                  </tr>';
        while($regrow=mysqli_fetch_assoc($registered))
        { $id =$regrow['id'];
          $rowcount = mysqli_query($connect,"SELECT count(studentId) as id from students where eventId like '$id' or eventId like '$id,%' or eventId LIKE '%,$id,%' or eventId like '%,$id'");
          $rcount = mysqli_fetch_assoc($rowcount);
          $rc = $rcount['id'];
          $output.='<tr>
                        <td>'.$id.'</td>

                        <td>
                        <form action="export.php" method="POST" >
                        <button class="ui primary button" name="split" value='.$regrow['id'].'>'.$regrow['event_name'].'</button>
                        </form></td>
                        <td>'.$rc.'</td>
                        </tr>';
                      
        }
        $output.= "</table>";
      return $output;  
 } 
  function spliteve($eveid)  
 {      include"connection.php";
        $registered=mysqli_query($connect,"select * from events where id = $eveid;");
        $eve=mysqli_fetch_assoc($registered);
        $output = "<center><h2>".$eve['event_name']."</h2></center>";
        $output.='<table border="1" cellspacing="0" cellpadding="5" class="ui celled padded table"><tr>';
        $output.='<th width="5%">S.No</th>
                  <th width="20%">Name </th>
                  <th> Email</th>
                  <th> College </th>
                  <th> Department </th>
                  <th> Mobile </th>
                  </tr>';
        $stdinfo=mysqli_query($connect,"SELECT * from userinfo where roll_no in (select studentId from students where eventId like '$eveid' or eventId like '$eveid,%' or eventId LIKE '%,$eveid,%' or eventId like '%,$eveid') order by dept;");
        $count=0;
        while($student=mysqli_fetch_assoc($stdinfo)){
          $count+=1;
            $output.='<tr>
                      <td>'.$count.'</td>
                      <td>'.$student['name'].'</td>
                      <td>'.$student['email'].'</td>
                      <td>'.$student['college'].'</td>
                      <td>'.$student['dept'].'</td>
                      <td>'.$student['mobile'].'</td>
                      </tr>';
         }
                    
        $output.= "</table>";
        return $output; 
 } 
 function fetch_feedback()  
 {      include"connection.php";
        $registered=mysqli_query($connect,"select * from feedback;");
        $output ='<table border="1" cellspacing="0" cellpadding="5" class="ui celled padded table"><tr>';
        
          $output.= '<th width="5%">Id</th>
                    <th width="15%"> Name </th>
                    <th width="25%"> Email Id </th>
                    <th width="15%"> Subject </th>
                    <th width="40%"> Feedback </th>
                    </tr>';
        while($student=mysqli_fetch_assoc($registered))
        { 
          $count+=1;
              $output.= ' <tr><td>'.$count.'</td>
                          <td>'.$student['name'].'</td>
                          <td><a href=mailto:"'.$student['email'].'">'.$student['email'].'</a></td>
                          <td>'.$student['subject'].'</td>
                          <td>'.$student['message'].'</td>
                          </tr>';
        }
        $output.= "</table>";
      return $output;  
 }
   
      require_once('TCPDF/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("student Database");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  

      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      
      if(isset($_POST["export"]))  
    {  
      $content = '';  
      $content .= '  
      <h4 align="center">student Database</h4><br/>   
      ';
      $content .= fetch_data(1);   
      $obj_pdf->writeHTML($content);  
      ob_end_clean();
      $obj_pdf->Output('studentdata.pdf', 'I');  
      echo "export successful";
    }  
     if(isset($_POST["event"]))  
    {  
      $content = '';  
      $content .= '  
      <h4 align="center">Event Based Database</h4><br/>   
      ';
      $content .= fetch_event();   
      $obj_pdf->writeHTML($content);  
      ob_end_clean();
      $obj_pdf->Output('eventdata.pdf', 'I');  
      echo "export successful";
    }
     if(isset($_POST["feedback"]))  
    {  
      $content = '';  
      $content .= '  
      <h4 align="center">Feedback Database</h4><br/>   
      ';
      $content .= fetch_feedback();   
      $obj_pdf->writeHTML($content); 
      ob_end_clean();
      $obj_pdf->Output('feedbackdata.pdf', 'I');  
      echo "export successful";
    }
    if(isset($_POST["split"]))  
    {  
      $content = ''; 
      $id = $_POST['split'];
      $content .= spliteve($id);   
      $obj_pdf->writeHTML($content); 
      ob_end_clean();
      $obj_pdf->Output('eventdb.pdf', 'I');  
      echo "export successful";
    }
 ?>  