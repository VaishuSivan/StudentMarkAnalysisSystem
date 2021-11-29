<?php
    include('includes/dbconect.php');
            // select record from mysql 
            $sql="SELECT DISTINCT * FROM 16it48";
            $result=mysql_query($sql);
            if(mysql_num_rows($result) == 0){ echo "<font color='red' size='3'>No Registered Students yet</font>&nbsp;&nbsp;<a href='teacher_home.php?page=new_student&Id=$sch_id'>Add Student"; 
            }
                else
                {
          echo "<table width='850' border='0'>
                <tr style='font-size: 12px; font-weight: bold; color: rgb(0, 153, 204); background: none repeat scroll 0% 0% rgb(230, 249, 217);'>
               <td width='150'><div align='center'>sub_id</div></td>
			   <td width='150'><div align='center'>sub_name</div></td>
                  <td width='150'><div align='center'>internal_I</div></td>
                  <td width='150'><div align='center'>internal_II</div></td>
                  <td width='150'><div align='center'>semester</div></td>
                  </tr>";
                  ?>
                  <?php
                    $num=1;
                        while($rows=mysql_fetch_array($result)){
                        $num++;
                        $skizzy = $rows['sub_id_id']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                        ?>
                <tr bgcolor="<?php echo $bg; ?>">
                  
				  <td><div align="center"><input type="text" name="bot" size="10" /></div></td>
				  <td><div align="center"><input type="text" name="bot" size="10" /></div></td>
                    <td><div align="center"><input type="text" name="bot" size="10" /></div></td>
                  <td><div align="center"><input type="text" name="mt" size="10" /></div></td>
                  <td><div align="center"><input type="text" name="eot" size="10" />
                  </div></td>
              </tr>
                  <?php
                        }
                }
                        ?>
                          <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                    <td><div align="center"><input type="image" name="submit" id="submit" value="Submit" style="border:none" src="image/submit.jpg" />&nbsp;&nbsp;<input type="hidden" name="add_marks" value="1" /></div></td>
                  <td><div align="center">&nbsp;</div></td>
                  <td><div align="center">&nbsp;
                  </div></td>
              </tr>
              </table>