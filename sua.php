	
			<?php
			   $sql = "select * from product where ID = $_GET[id]";
			   $run = mysql_query($sql);
			   $dong = mysql_fetch_array($run);
			   ?>
            <form action="xuly.php?id=<?php echo $dong['ID'] ?>" method="post" enctype="multipart/form-data"> 
            <table width="200px" border="1">
              <tr align="center">
                <td colspan="2">Sửa Sản phẩm</td>
              </tr>
              <tr>
                <td>ProductName</td>
                <td><input size="50" type="text" name="_ProductName" value="<?php echo $dong['ProductName'] ?>"></td>
              </tr>
              <tr>
                <td>Price</td>
                <td><input size="50" type="text" name="_Price" value="<?php echo $dong['Price'] ?>"></td>
              </tr>
              <tr>
                <td>Category</td>
                <td><input size="50" type="text" name="_Category" value="<?php echo $dong['Category'] ?>"></td>
              </tr>
              <tr>
                <td>ImageUrl</td>
                <td><input size="50" type="file" name="_ImageUrl" value="<?php echo $dong['ImageUrl'] ?>"></td>
              </tr>
              <tr>
                <td colspan="2"><form name="form1" method="post" action="">
                  <div align="center">
                    <input type="submit" name="sua" id="sua" value="Sửa">
                  </div>
                </form></td>
              </tr>
              </table>