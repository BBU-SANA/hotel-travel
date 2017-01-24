		<div class="tab-pane" id="7">
			<pre><h5><strong><i class="icon-user"></i> List of Users</strong></h5></pre>	
 			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th><div align="center">ID</div></th>
                        <th><div align="center">Username</div></th>
                        <th><div align="center">Password</div></th>
                        <th><div align="center">Firstname</div></th>
                        <th><div align="center">Lastname</div></th>
                        <th><div align="center">Contact no.</div></th>
                        <th><div align="center">Actions</div></th>      
                    </tr>
                </thead>
                <?php
                    $cart_table = mysql_query("select  * from tb_user") or die(mysql_error());
                    $cart_count = mysql_num_rows($cart_table);
                    while ($cart_row = mysql_fetch_array($cart_table)) {
                        $user_id = $cart_row['user_id'];
                ?>
                <tbody>
                    <tr>
                        <td><div style="font-size:11px; color:rgba(153,0,0,1);" align="center"><?php echo $cart_row['user_id'];?></div></td>
                        <td><div style="font-size:11px; color:rgba(153,0,0,1);" align="center"><?php echo $cart_row['username'];?></div></td>
                        <td><div style="font-size:11px; color:rgba(153,0,0,1);" align="center"><?php echo $cart_row['password'];?></div></td>
                        <td><div style="font-size:11px; color:rgba(153,0,0,1);" align="center"><?php echo $cart_row['firstname'];?></div></td>
                        <td><div style="font-size:11px; color:rgba(153,0,0,1);" align="center"><?php echo $cart_row['lastname'];?></div></td>
                        <td><div style="font-size:11px; color:rgba(153,0,0,1);" align="center"><?php echo $cart_row['contact'];?></div></td>
                        <td width="230">
                            <div align="center">
                                <a href="#adduser" class="btn" role="button" data-toggle="modal"><i class="icon-plus-sign"></i> Add</a>
                                <a href="#edit_user<?php echo $user_id; ?>" class="btn" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                <a href="#delete_user<?php echo $user_id; ?>" class="btn btn-danger" role="button" data-toggle="modal"><i class="icon-trash"></i> Delete</a>
                            </div>
                        </td>
                       <!-- Modal delete user -->
                        <div id="delete_user<?php echo $user_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Kingsfields Express Inn</h3>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger"><p>Are you sure you want to Delete? <strong><?php echo $cart_row['firstname']." ".$cart_row['lastname'];?></strong></p></div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-danger" href="delete_user.php<?php echo '?id=' . $user_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
                            </div>
                        </div><!--modal end --> 
                                         
                         <!-- Modal edit user -->
                        <div id="edit_user<?php echo $user_id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Edit user</h3>
                            </div>
                            <div class="modal-body">
                                <form action="edit_user.php<?php echo '?id=' . $user_id; ?>" id="align-center" class="form-horizontal" method="post">
                                <div class="alert alert-info"><strong>Informations</strong></div>
                                    <hr>
                                    <div class="control-group">
                                        <div align="center" class="controls">
                                            Firstname: <input type="text" name="fn" id="inputEmail" value="<?php echo $cart_row['firstname']?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div align="center" class="controls">
                                            Lastname: <input type="text"  name="ln" value="<?php echo $cart_row['lastname'];?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div align="center" class="controls">
                                            Username: <input type="text" name="un" value="<?php echo $cart_row['username'];?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div align="center" class="controls">
                                        Password: <input type="text" name="p" value="<?php echo $cart_row['password'];?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div align="center" class="controls">
                                        Contact no.: <input type="text" name="cn" value="<?php echo $cart_row['contact'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="update" class="btn btn-success"><i class="icon-check"></i> Save</button>
                                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
                                </div>
                            </div><!--modal -->
                        </form><!--edit user modal end --> 
                    </tr>
               </tbody>
               <?php 
               }
               ?>
			</table>
		</div>