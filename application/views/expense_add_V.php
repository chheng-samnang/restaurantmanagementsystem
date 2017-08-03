</nav>
	<div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                
                <div class="container-fluid">
                    <div class="row" style="margin-top:20px;">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4><i class="fa fa-edit"></i> Order Menu Management</h4></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                            <!--error-->
                                                <?php if(validation_errors()){?>
                                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                      <strong>Warning!</strong> <?php echo validation_errors();?>
                                                    </div>
                                                <?php }?>
                                            <!--end error-->
                                            </div>
                                        </div>
                                    <?php echo form_open('index.php/expense_C/insert');?>                                                                                                                      
                                       <div class="row">
                                           <div class="col-lg-5">
                                               <label class="control-label">Expense Name</label>
                                               <input type="text" placeholder="Example: Ice,Water,Meat,Vegetable...etc." name="txtName" class="form-control" value="<?php echo set_value('txtName')?>">
                                           </div>                                           
                                       </div><!--end row-->
                                       <div class="row">                                           
                                           <div class="col-lg-5">
                                               <label class="control-label">Quanity</label>
                                               <input type="number" name="txtQty" class="form-control" value="0">
                                           </div>                                           
                                       </div><!--end row-->                                       
                                       <div class="row">
                                         <div class="col-lg-5">
                                          <label class="control-label">Dolla</label>
                                           <div class="input-group">                                              
                                              <input type="text" name="txtDolla" class="form-control" aria-describedby="basic-addon1" value="<?php echo set_value('txtDolla',0);?>">
                                              <span class="input-group-addon" id="basic-addon1">.00$</span>
                                            </div>
                                         </div>
                                       </div>

                                       <div class="row">
                                         <div class="col-lg-5">
                                          <label class="control-label">Reil</label>
                                           <div class="input-group">                                              
                                              <input type="number" class="form-control" name="txtReil" aria-describedby="basic-addon1" value="<?php echo set_value('txtrReil',0);?>">
                                              <span class="input-group-addon" id="basic-addon1">.00R</span>
                                            </div>
                                         </div>
                                       </div>

                                       <div class="row" style="margin-top:1%">
                                           <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary" name="btnSave"><i class="fa fa-save"></i> Save</button>
                                                <button type="submit" class="btn btn-primary" name="btnSaveNew"><i class="fa fa-star"></i> Save New</button>
                                                <a href="<?php echo base_url('index.php/expense_C/index');?>" class="btn btn-default"><i class="fa fa-close"></i> Close</a>
                                           </div>
                                       </div>
                                       <?php form_close()?>                                
                                    </div><!--panel-body -->
                                </div>            
                            </div><!--end col-->                    
                        </div><!--end row-->                              
                                        
                    <!--error-->
                    <div class="row">
                        
                        
                    </div><!--end row2-->             

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div><!--end col-->
        </div><!--end row-->
</div>