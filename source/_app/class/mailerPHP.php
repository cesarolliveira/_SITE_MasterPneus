<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../../assets/vendor/PHPMailer/src/PHPMailer.php';
require_once '../../assets/vendor/PHPMailer/src/SMTP.php';
require_once '../../assets/vendor/PHPMailer/src/Exception.php';
require_once 'appTools.php';

class mailerPHP
{

    public function enviaEmailCliente($nome, $email)
    {

        $mail = new PHPMailer();
        $appTools = new appTools();

        $nome = $appTools->removeAspas($nome);
        $email = $appTools->removeAspas($email);

        $mail->setLanguage('pt_br', '/optional/path/to/language/directory/');

        try {
            // Configurações do servidor
            //$mail->SMTPDebug = 4;                                     // Ativar saída de depuração detalhada
            $mail->isSMTP();                                            // Enviar usando SMTP
            $mail->CharSet = 'UTF-8';                                   // Códifica para UTF-8
            $mail->Host       = 'smtp.hostinger.com.br';                // Defina o servidor SMTP
            $mail->SMTPAuth   = true;                                   // Ativar autenticação SMTP
            $mail->Username   = 'equipe@credfacilitado.com.br';         // Nome de usuário SMTP
            $mail->Password   = 'equipe@CredFacilitado1';               // Senha SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Ativar criptografia TLS
            $mail->Port       = 587;                                    // Porta TCP à qual se conectar

            // Destinatários
            $mail->setFrom('equipe@credfacilitado.com.br', 'Equipe CredFacilitado');       // Quem está enviando
            $mail->addAddress($email);                                  // Adicionar destinatário
            //$mail->addReplyTo('');                                    // Enviar Copia
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Anexos
            //$mail->addAttachment('/var/tmp/file.tar.gz');               // Adicionar Anexos
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');          // Nome opcional

            // Conteúdo
            $mail->isHTML(true);                                        // Definir formato de email para HTML
            $mail->Subject = 'Pré-Cadastro realizado com sucesso!';
            $mail->Body    = ("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
            <head>
                <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <meta name='viewport' content='width=device-width'>
                <!--[if !mso]><!-->
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <!--<![endif]-->
                <title></title>
                <!--[if !mso]><!-->
                <!--<![endif]-->
                <style type='text/css'>
                    body {
                        margin: 0;
                        padding: 0;
                    }
            
                    table,
                    td,
                    tr {
                        vertical-align: top;
                        border-collapse: collapse;
                    }
            
                    * {
                        line-height: inherit;
                    }
            
                    a[x-apple-data-detectors=true] {
                        color: inherit !important;
                        text-decoration: none !important;
                    }
                </style>
                <style type='text/css' id='media-query'>
                    @media (max-width: 670px) {
            
                        .block-grid,
                        .col {
                            min-width: 320px !important;
                            max-width: 100% !important;
                            display: block !important;
                        }
            
                        .block-grid {
                            width: 100% !important;
                        }
            
                        .col {
                            width: 100% !important;
                        }
            
                        .col_cont {
                            margin: 0 auto;
                        }
            
                        img.fullwidth,
                        img.fullwidthOnMobile {
                            max-width: 100% !important;
                        }
            
                        .no-stack .col {
                            min-width: 0 !important;
                            display: table-cell !important;
                        }
            
                        .no-stack.two-up .col {
                            width: 50% !important;
                        }
            
                        .no-stack .col.num2 {
                            width: 16.6% !important;
                        }
            
                        .no-stack .col.num3 {
                            width: 25% !important;
                        }
            
                        .no-stack .col.num4 {
                            width: 33% !important;
                        }
            
                        .no-stack .col.num5 {
                            width: 41.6% !important;
                        }
            
                        .no-stack .col.num6 {
                            width: 50% !important;
                        }
            
                        .no-stack .col.num7 {
                            width: 58.3% !important;
                        }
            
                        .no-stack .col.num8 {
                            width: 66.6% !important;
                        }
            
                        .no-stack .col.num9 {
                            width: 75% !important;
                        }
            
                        .no-stack .col.num10 {
                            width: 83.3% !important;
                        }
            
                        .video-block {
                            max-width: none !important;
                        }
            
                        .mobile_hide {
                            min-height: 0px;
                            max-height: 0px;
                            max-width: 0px;
                            display: none;
                            overflow: hidden;
                            font-size: 0px;
                        }
            
                        .desktop_hide {
                            display: block !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            <body class='clean-body' style='margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: transparent;'>
                <!--[if IE]><div class='ie-browser'><![endif]-->
                <table class='nl-container' style='table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: transparent; width: 100%;' cellpadding='0' cellspacing='0' role='presentation' width='100%' bgcolor='transparent' valign='top'>
                    <tbody>
                        <tr style='vertical-align: top;' valign='top'>
                            <td style='word-break: break-word; vertical-align: top;' valign='top'>
                                <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color:transparent'><![endif]-->
                                <div style='background-color:transparent;'>
                                    <div class='block-grid ' style='min-width: 320px; max-width: 650px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;'>
                                        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                            <!--[if (mso)|(IE)]><td align='center' width='650' style='background-color:transparent;width:650px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                            <div class='col num12' style='min-width: 320px; max-width: 650px; display: table-cell; vertical-align: top; width: 650px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <div class='img-container center autowidth' align='center' style='padding-right: 0px;padding-left: 0px;'>
                                                            <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='center'><![endif]-->
                                                            <img class='center autowidth' align='center' border='0' src='https://credfacilitado.com.br/assets/img/logo%20%282%29.png' alt='Alternate text' title='Alternate text' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 163px; display: block;' width='163'>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </div>
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                        </div>
                                    </div>
                                </div>
                                <div style='background-color:#ffffff;'>
                                    <div class='block-grid two-up' style='min-width: 320px; max-width: 650px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;'>
                                        <div style='border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;'>
                                            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#ffffff;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px'><tr class='layout-full-width' style='background-color:#ffffff'><![endif]-->
                                            <!--[if (mso)|(IE)]><td align='center' width='325' style='background-color:#ffffff;width:325px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                            <div class='col num6' style='display: table-cell; vertical-align: top; max-width: 320px; min-width: 324px; width: 325px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                            <tbody>
                                                                <tr style='vertical-align: top;' valign='top'>
                                                                    <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;' valign='top'>
                                                                        <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;' align='center' role='presentation' height='10' valign='top'>
                                                                            <tbody>
                                                                                <tr style='vertical-align: top;' valign='top'>
                                                                                    <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='10' valign='top'><span></span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 25px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif'><![endif]-->
                                                        <div style='color:#61697a;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:25px;'>
                                                            <div style='line-height: 1.2; font-size: 12px; color: #61697a; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;'>
                                                                <p style='font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin: 0;'>Olá $nome,</p>
                                                            </div>
                                                        </div>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                        <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 25px; padding-left: 25px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif'><![endif]-->
                                                        <div style='color:#1f0b0b;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;'>
                                                            <div style='line-height: 1.2; font-size: 12px; color: #1f0b0b; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;'>
                                                                <p style='font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin: 0;'><strong><span style='font-size: 46px;'>Tudo bem?</span></strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                        <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 25px; padding-left: 25px; padding-top: 10px; padding-bottom: 25px; font-family: Tahoma, sans-serif'><![endif]-->
                                                        <div style='color:#393d47;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:25px;padding-bottom:25px;padding-left:25px;'>
                                                            <div style='line-height: 1.5; font-size: 12px; color: #393d47; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px;'>
                                                                <p style='line-height: 1.5; word-break: break-word; text-align: justify; mso-line-height-alt: 18px; margin: 0;'><strong><span style='font-size: 14px;'>Gostaríamos de informa que recebemos o seu pré-cadastro e nossa equipe já está trabalhando seus dados e assim que possível entraremos em contato com mais detalhes da sua solicitação.</span></strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td><td align='center' width='325' style='background-color:#ffffff;width:325px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                            <div class='col num6' style='display: table-cell; vertical-align: top; max-width: 320px; min-width: 324px; width: 325px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                            <tbody>
                                                                <tr style='vertical-align: top;' valign='top'>
                                                                    <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;' valign='top'>
                                                                        <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;' align='center' role='presentation' height='30' valign='top'>
                                                                            <tbody>
                                                                                <tr style='vertical-align: top;' valign='top'>
                                                                                    <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='30' valign='top'><span></span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class='img-container center autowidth' align='center' style='padding-right: 5px;padding-left: 0px;'>
                                                            <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 5px;padding-left: 0px;' align='center'><![endif]-->
                                                            <img class='center autowidth' align='center' border='0' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/1826/Image_1.png' alt='Alternate text' title='Alternate text' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 320px; display: block;' width='320'>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </div>
                                                        <table class='divider' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' role='presentation' valign='top'>
                                                            <tbody>
                                                                <tr style='vertical-align: top;' valign='top'>
                                                                    <td class='divider_inner' style='word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;' valign='top'>
                                                                        <table class='divider_content' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;' align='center' role='presentation' height='30' valign='top'>
                                                                            <tbody>
                                                                                <tr style='vertical-align: top;' valign='top'>
                                                                                    <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' height='30' valign='top'><span></span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                        </div>
                                    </div>
                                </div>
                                <div style='background-color:#ff8b3e;'>
                                    <div class='block-grid ' style='min-width: 320px; max-width: 650px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;'>
                                        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#ff8b3e;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                            <!--[if (mso)|(IE)]><td align='center' width='650' style='background-color:transparent;width:650px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                            <div class='col num12' style='min-width: 320px; max-width: 650px; display: table-cell; vertical-align: top; width: 650px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif'><![endif]-->
                                                        <div style='color:#393d47;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
                                                            <div style='line-height: 1.2; font-size: 12px; color: #393d47; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;'>
                                                                <p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'><span style='color: #ffffff;'><strong><span style='font-size: 14px;'>© Copyright <a style='text-decoration: underline; color: #fff;' href='https://coodifica.com.br/' target='_blank' rel='noopener'>Coodifica</a>. Todos os direitos reservados.</span>
                                                                    </strong>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                        </div>
                                    </div>
                                </div>
                                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (IE)]></div><![endif]-->
            </body>
            </html>");
            $mail->send();

            return true;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public function enviaEmailInterno($nome, $celular, $email, $dataRegistroBR)
    {
        $mail = new PHPMailer();
        $appTools = new appTools();

        // AJUSTA DADOS
        $dataRegistroBR = $appTools->removeAspas($dataRegistroBR);
        $nome = $appTools->removeAspas($nome);
        $celular != '' ? $celular = $appTools->addMask('(##) #####-####', $celular) : $celular = 'Não informado.';
        $email = $appTools->removeAspas($email);

        $mail->setLanguage('pt_br', '/optional/path/to/language/directory/');

        try {
            // Configurações do servidor
            //$mail->SMTPDebug = 4;                                     // Ativar saída de depuração detalhada
            $mail->isSMTP();                                            // Enviar usando SMTP
            $mail->CharSet = 'UTF-8';                                   // Códifica para UTF-8
            $mail->Host       = 'smtp.hostinger.com.br';                // Defina o servidor SMTP
            $mail->SMTPAuth   = true;                                   // Ativar autenticação SMTP
            $mail->Username   = 'equipe@credfacilitado.com.br';               // Nome de usuário SMTP
            $mail->Password   = 'equipe@CredFacilitado1';                     // Senha SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Ativar criptografia TLS
            $mail->Port       = 587;                                    // Porta TCP à qual se conectar

            // Destinatários
            $mail->setFrom('equipe@credfacilitado.com.br', 'Equipe CredFacilitado');   // Quem está enviando
            $mail->addAddress('contato@credfacilitado.com.br');                         // Adicionar destinatário
            //$mail->addReplyTo('');                                    // Enviar Copia
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Anexos
            //$mail->addAttachment('/var/tmp/file.tar.gz');               // Adicionar Anexos
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');          // Nome opcional

            // Conteúdo
            $mail->isHTML(true);                                        // Definir formato de email para HTML
            $mail->Subject = 'Novo Pré-Cadastro recebido!';
            $mail->Body    = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
            <head>
                <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <meta name='viewport' content='width=device-width'>
                <!--[if !mso]><!-->
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <!--<![endif]-->
                <title></title>
                <!--[if !mso]><!-->
                <!--<![endif]-->
                <style type='text/css'>
                    body {
                        margin: 0;
                        padding: 0;
                    }
            
                    table,
                    td,
                    tr {
                        vertical-align: top;
                        border-collapse: collapse;
                    }
            
                    * {
                        line-height: inherit;
                    }
            
                    a[x-apple-data-detectors=true] {
                        color: inherit !important;
                        text-decoration: none !important;
                    }
                </style>
                <style type='text/css' id='media-query'>
                    @media (max-width: 690px) {
            
                        .block-grid,
                        .col {
                            min-width: 320px !important;
                            max-width: 100% !important;
                            display: block !important;
                        }
            
                        .block-grid {
                            width: 100% !important;
                        }
            
                        .col {
                            width: 100% !important;
                        }
            
                        .col_cont {
                            margin: 0 auto;
                        }
            
                        img.fullwidth,
                        img.fullwidthOnMobile {
                            max-width: 100% !important;
                        }
            
                        .no-stack .col {
                            min-width: 0 !important;
                            display: table-cell !important;
                        }
            
                        .no-stack.two-up .col {
                            width: 50% !important;
                        }
            
                        .no-stack .col.num2 {
                            width: 16.6% !important;
                        }
            
                        .no-stack .col.num3 {
                            width: 25% !important;
                        }
            
                        .no-stack .col.num4 {
                            width: 33% !important;
                        }
            
                        .no-stack .col.num5 {
                            width: 41.6% !important;
                        }
            
                        .no-stack .col.num6 {
                            width: 50% !important;
                        }
            
                        .no-stack .col.num7 {
                            width: 58.3% !important;
                        }
            
                        .no-stack .col.num8 {
                            width: 66.6% !important;
                        }
            
                        .no-stack .col.num9 {
                            width: 75% !important;
                        }
            
                        .no-stack .col.num10 {
                            width: 83.3% !important;
                        }
            
                        .video-block {
                            max-width: none !important;
                        }
            
                        .mobile_hide {
                            min-height: 0px;
                            max-height: 0px;
                            max-width: 0px;
                            display: none;
                            overflow: hidden;
                            font-size: 0px;
                        }
            
                        .desktop_hide {
                            display: block !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            <body class='clean-body' style='margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f9f9f9;'>
                <!--[if IE]><div class='ie-browser'><![endif]-->
                <table class='nl-container' style='table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9; width: 100%;' cellpadding='0' cellspacing='0' role='presentation' width='100%' bgcolor='#f9f9f9' valign='top'>
                    <tbody>
                        <tr style='vertical-align: top;' valign='top'>
                            <td style='word-break: break-word; vertical-align: top;' valign='top'>
                                <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color:#f9f9f9'><![endif]-->
                                <div style='background-color:transparent;'>
                                    <div class='block-grid ' style='min-width: 320px; max-width: 670px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;'>
                                        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:670px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                            <!--[if (mso)|(IE)]><td align='center' width='670' style='background-color:transparent;width:670px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                            <div class='col num12' style='min-width: 320px; max-width: 670px; display: table-cell; vertical-align: top; width: 670px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <div class='img-container center fixedwidth' align='center' style='padding-right: 0px;padding-left: 25px;'>
                                                            <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 25px;' align='center'><![endif]-->
                                                            <div style='font-size:1px;line-height:5px'>&nbsp;</div><img class='center fixedwidth' align='center' border='0' src='https://credfacilitado.com.br/assets/img/logo%20%282%29.png' alt='Alternate text' title='Alternate text' style='text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 150px; display: block;' width='150'>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </div>
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                        </div>
                                    </div>
                                </div>
                                <div style='background-color:transparent;'>
                                    <div class='block-grid ' style='min-width: 320px; max-width: 670px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;'>
                                        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:670px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                            <!--[if (mso)|(IE)]><td align='center' width='670' style='background-color:transparent;width:670px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:20px;'><![endif]-->
                                            <div class='col num12' style='min-width: 320px; max-width: 670px; display: table-cell; vertical-align: top; width: 670px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif'><![endif]-->
                                                        <div style='color:#393d47;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
                                                            <div style='line-height: 1.2; font-size: 12px; color: #393d47; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;'>
                                                                <p style='text-align: center; line-height: 1.2; word-break: break-word; font-size: 24px; mso-line-height-alt: 29px; margin: 0;'><span style='font-size: 24px; color: #333333;'><strong>Novo pré-cadastro recebido!</strong></span></p>
                                                                <p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'>&nbsp;</p>
                                                                <p style='text-align: center; line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'>&nbsp;</p>
                                                                <p style='line-height: 1.2; word-break: break-word; font-size: 14px; mso-line-height-alt: 17px; margin: 0;'><span style='font-size: 14px; color: #333333;'><strong>Segue a baixo todos os dados referente ao pré-cadastro recebido em : <u>$dataRegistroBR</u>.</strong></span></p>
                                                                <p style='line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'>&nbsp;</p>
                                                                <p style='line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;'><span style='font-size: 16px; color: #333333;'><strong>Dados Pessoais</strong></span></p>
                                                                <p style='line-height: 1.2; word-break: break-word; font-size: 14px; mso-line-height-alt: 17px; margin: 0;'><span style='font-size: 14px; color: #333333;'><strong>Nome: </strong>$nome</span></p>
                                                                <p style='line-height: 1.2; word-break: break-word; font-size: 14px; mso-line-height-alt: 17px; margin: 0;'><span style='font-size: 14px; color: #333333;'><strong>Celular: </strong>$celular</span></p>
                                                                <p style='line-height: 1.2; word-break: break-word; font-size: 14px; mso-line-height-alt: 17px; margin: 0;'><span style='font-size: 14px; color: #333333;'><strong>E-mail:</strong> $email</span></p>
                                                                <p style='text-align: justify; line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'>&nbsp;</p>
                                                                <p style='text-align: justify; line-height: 1.2; word-break: break-word; mso-line-height-alt: 14px; margin: 0;'><span style='color: #333333;'><strong>• Lembrando que todos os dados acima são preenchidos pelo usuário final, sendo possível que ocorra divergências nas informações. Toda a responsabilidade pela veracidade dos dados é de responsabilidade do usuário final.</strong></span></p>
                                                            </div>
                                                        </div>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                        </div>
                                    </div>
                                </div>
                                <div style='background-color:#ff8b3e;'>
                                    <div class='block-grid ' style='min-width: 320px; max-width: 670px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;'>
                                        <div style='border-collapse: collapse;display: table;width: 100%;background-color:transparent;'>
                                            <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#ff8b3e;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:670px'><tr class='layout-full-width' style='background-color:transparent'><![endif]-->
                                            <!--[if (mso)|(IE)]><td align='center' width='670' style='background-color:transparent;width:670px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;'><![endif]-->
                                            <div class='col num12' style='min-width: 320px; max-width: 670px; display: table-cell; vertical-align: top; width: 670px;'>
                                                <div class='col_cont' style='width:100% !important;'>
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                    <div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;'>
                                                        <!--<![endif]-->
                                                        <div class='mobile_hide'>
                                                            <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; font-family: Tahoma, sans-serif'><![endif]-->
                                                            <div style='color:#393d47;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;'>
                                                                <div style='line-height: 1.2; font-size: 12px; color: #393d47; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;'>
                                                                    <p style='font-size: 14px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 17px; margin: 0;'><span style='color: #ffffff;'>© Copyright <strong><a style='text-decoration: underline; color: #f9f9f9;' href='https://coodifica.com.br/' target='_blank' rel='noopener'>Coodifica</a></strong>. Todos os direitos reservados.</span></p>
                                                                </div>
                                                            </div>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </div>
                                                        <!--[if (!mso)&(!IE)]><!-->
                                                    </div>
                                                    <!--<![endif]-->
                                                </div>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                        </div>
                                    </div>
                                </div>
                                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (IE)]></div><![endif]-->
            </body>
            </html>";

            $mail->send();

            return true;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public function enviarEmailNewsLetter($email, $dataRegistro)
    {

        $mail = new PHPMailer();
        $appTools = new appTools();

        $mail->setLanguage('pt_br', '/optional/path/to/language/directory/');

        try {
            // Configurações do servidor
            //$mail->SMTPDebug = 4;                                       // Ativar saída de depuração detalhada
            $mail->isSMTP();                                            // Enviar usando SMTP
            $mail->Host       = 'smtp.hostinger.com.br';                // Defina o servidor SMTP
            $mail->SMTPAuth   = true;                                   // Ativar autenticação SMTP
            $mail->Username   = 'equipe@heberles.com.br';               // Nome de usuário SMTP
            $mail->Password   = 'equipe@Heberles1';                     // Senha SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Ativar criptografia TLS
            $mail->Port       = 587;                                    // Porta TCP à qual se conectar

            // Destinatários
            $mail->setFrom('equipe@heberles.com.br', 'Heberles');       // Quem está enviando
            $mail->addAddress($email); // Adicionar destinatário
            //$mail->addAddress('cesarolliveira.jr@gmail.com');                     // O nome é opcional
            $mail->addReplyTo('comercial@heberles.com.br', 'Comercial Heberles');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Anexos
            //$mail->addAttachment('/var/tmp/file.tar.gz');               // Adicionar Anexos
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');          // Nome opcional

            // Conteúdo
            $mail->isHTML(true);                                        // Definir formato de email para HTML
            $mail->Subject = 'Seja bem-vindo a Heberles!';
            $mail->Body    = file_get_contents('../../assets/img/Emails/template-email.html');

            $mail->send();
        } catch (Exception $e) {
            echo "Ocorreu o seguinte erro durante o envio da mensagem: {$mail->ErrorInfo}";
        }
    }
}
