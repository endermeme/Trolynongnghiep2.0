<?php
define("IN_SITE", true);
require_once realpath($_SERVER['DOCUMENT_ROOT'] . '/core/DB.php');
require_once realpath($_SERVER['DOCUMENT_ROOT'] . '/core/helpers.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>

<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px;  max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them.
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="<?= $NNL->site('logo_orders') ?>" width="155" height="150" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">ĐƠN HÀNG VPS </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;"> Xin chào {name}<br>

Tài khoản server/vps của quý khách tại <?=$NNL->site('tenweb')?> đã được thiết lập và email này sẽ cung cấp các thông tin chi tiết về tài khoản của quý khách. Quý khách nên lưu lại email này để có thể tra cứu lại các thông tin quan trọng khi cần thiết. </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Thông tin máy chủ</td>
                                                <td width="25%" align="left" bgcolor="#eeeeee" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"></td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> IP</td>
                                                <td width="25%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> {ip} </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> Tài khoản</td>
                                                <td width="25%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> {user} </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> Mật khẩu</td>
                                                <td width="25%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> {pass} </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> Đã thanh toán </td>
                                                <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> {price} </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style=" padding: 35px; background-color: ;" bgcolor="#1b9ba3">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <h2 style="font-size: 24px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;">Cảm ơn bạn đã sử dụng dịch vụ</h2>
                                    </td>
                                </tr>
                               
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>