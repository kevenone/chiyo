
        <div id="page-wrapper">
            <div class="graphs">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">菜单分类</h3>
                        </div>
                        <div class="list-group">
                        <?php foreach ($menu as $key ) :?>
                          <li id="c<?php echo $key['cID'] ?>" class="list-group-item">
                            <a id="mName<?php echo $key['cID'] ?>" href="<?php echo base_url().'admin/menulist/mc/'.$key['cID'].'/0' ?>"><?php echo $key['cName']; ?></a>
                            <span class="kc<?php echo $key['cID'] ?>">
                                <button id="ud<?php echo $key['cID'] ?>" info="<?php echo $key['cID'] ?>" data-toggle="modal" data-target="#changMname"  type="button" class="btn btn-xs btn-info pull-right m75">修改</button>

                                <button id="dele<?php echo $key['cID'] ?>" info="<?php echo $key['cID'] ?>" type="button" class="btn btn-xs btn-danger pull-right m15">删除</button>
                            </span>        
                            <span class="badge"><?php echo $key['cMenuNumber']; ?></span>
                          </li>
                        <?php endforeach; ?>
                          <li class="list-group-item">
                            <input type="text" name="newClass" id="newClass"  required="required">
                            <button onclick="addCN()" class="btn btn-sm pull-right m75">添加</button>
                          </li>
                        </div>
                    </div>
                </div>
                
				
				<div class="clearfix">
				
				</div>
                <div class="copy">
                    <p>Copyright &copy; 2016.Company name All rights reserved. <a href="#" target="_blank" title="YSD">YSD</a> - Collect from <a href="#" title="YSD_keven" target="_blank">YSD_keven</a></p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>

    <!-- modal -->
    <div class="modal fade" id="changMname" tabindex="-1" role="dialog" aria-labelledby="类目修改">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">菜品类目修改</h4>
          </div>
          <div class="modal-body">
                <div class="input-group">
                  <span class="input-group-addon" id="">类目名：</span>
                  <input id="mClassName" type="text" info="" value="" class="form-control" placeholder="">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button onclick="doChange()" type="button" class="btn btn-primary">保存修改</button>
          </div>
        </div>
      </div>
    </div>


    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/bootstrap.min.js"></script>
</body>

</html>
