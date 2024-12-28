<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#424242" />
        <title><?php echo $this->customlib->getAppName(); ?></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/style-main.css"> 
        <style type="text/css">
            .table2 tr.border_bottom td {
                box-shadow: none;
                border-radius: 0;
                border-bottom: 1px solid #e6e6e6;
            }
            .table2 td {
                padding-bottom: 3px;
                padding-top: 6px;
            }
            .title{
                color: #0084B4;
                font-weight: 600 !important;
                font-size: 15px !important;;
                display: inline;

            }
            .product-description {
                display: block;
                color: #999;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
            .text-fine{
                color: #bf4f4d;
            }
        </style> 
    </head>
    <body style="background: #ededed;">
        <div class="container">
            <div class="row">
                <div class="paddtop20">
                    <div class="col-md-8 col-md-offset-2 text-center">

                        <img src="<?php echo base_url('uploads/hospital_content/logo/' . $setting['image'].img_time()); ?>">

                    </div>
                    <div class="col-md-6 col-md-offset-3 mt20">
                        <div class="paymentbg">
                            <div class="invtext"><?php echo $this->lang->line('fees_payment_details'); ?> </div>
                            <div class="padd2 paddtzero">
                            <form action="<?php echo base_url(); ?>patient/onlineappointment/skrill/pay" method="post">
                                    <table class="table2" width="100%">
                                        <tr>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th class="text-right"><?php echo $this->lang->line('amount') ?></th>
                                        </tr>

                                        <tr class="border_bottom">
                                            <td><span class="title"><?php echo $this->lang->line("online_appointment_fees"); ?></span></td>
                                            <td class="text-right"><?php echo $setting['currency_symbol'] . number_format((float) $standard_charge, 2, '.', ''); ?></td>
                                        </tr>

                                        <tr class="border_bottom">
                                            <td><span class="title"><?php echo $this->lang->line("tax"); ?></span></td>
                                            <td class="text-right"><?php echo $setting['currency_symbol'] . number_format((float) $tax_amount, 2, '.', ''); ?></td>
                                        </tr>

                                        <tr class="border_bottom">
                                            <td><span class="title"><?php echo $this->lang->line("phone"); ?></span></td>
                                            <td>
                                                <input type="text" class="form-control"  name="phone" value="<?php echo set_value('phone'); ?>" /> <span class="alert-danger"> <?php echo form_error('phone');?></span>
                                            </td>
                                        </tr>

                                         <tr class="border_bottom">
                                            <td><span class="title"><?php echo $this->lang->line("email"); ?></span></td>
                                            <td>
                                                <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"> <span class="alert-danger"> <?php echo form_error('email');?></span>
                                            </td>
                                        </tr>

                                        <tr class="bordertoplightgray">
                                            <td colspan="2" class="text-right"><?php echo $this->lang->line('total');?>: <?php echo $setting['currency_symbol'] . number_format((float)($amount), 2, '.', ''); ?></td>
                                        </tr>
                                        
                                        <tr class="bordertoplightgray">
                                            <td  bgcolor="#fff"><button type="submit" onclick="window.history.go(-1); return false;" name="search"  value="" class="btn btn-info"><i class="fa fa fa-chevron-left"></i> <?php echo $this->lang->line('back'); ?> </button>  </td>
                                            <td  bgcolor="#fff" class="text-right"> <button type="submit"  name="search"  value="" class="btn btn-info"><?php echo $this->lang->line("pay_with_skrill"); ?> <i class="fa fa fa-chevron-right"></i></button></td>
                                        </tr>
                                    </table>
                                    <?php if (!empty($api_error)) { ?>
                                        <div class="alert alert-danger">
                                            <?= $api_error; ?> 
                                        </div>
                                    <?php } ?>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </body>
</html>