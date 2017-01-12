<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $passenger->getPid(); ?></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                    
                    <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Name:</td>
                                <td><?php echo $passenger->getName(); ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?php echo $passenger->getEmail(); ?></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td><?php echo $passenger->getMob(); ?></td>
                            </tr>

                            <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                        <span class="pull-right">
                         <?php  echo '<a href="?controller=passengers&action=toUpdate&id='. $passenger->getPid() .'"" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>';?>
                        </span>
            </div>

        </div>
    </div>
</div>