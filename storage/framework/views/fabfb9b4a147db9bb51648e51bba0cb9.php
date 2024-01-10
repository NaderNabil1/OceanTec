<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Register Email</title>
    </head>
    <body style="margin:0px; background: #e8ebf0;">
        <div style="width:100%;background: #e8ebf0; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #333;">
            <div style="max-width: 700px; padding: 50px 0; margin: 0px auto; font-size: 14px">
                <div style="padding: 30px; background: #fff;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <h1 style="font-size: 20px;">Register Email</h1>
                                    <ul>
                                        <li>First Name: <?php echo e($details['first_name']); ?></li> 
                                        <li>Last Name: <?php echo e($details['last_name']); ?></li> 
                                        <li>Email: <?php echo e($details['email']); ?></li> 
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center; font-size: 12px; color: #999; margin-top: 20px">
                    La Plain - <a style="color:#be2327;" href="https://innovationscope.com" target="_blank">Developed by Innovation Scope</a>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH D:\Projects\laplain.ae\resources\views/Emails/registermail.blade.php ENDPATH**/ ?>