<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title>{{ $subject }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">

</head>

<body>
<div dir="ltr" class="es-wrapper-color">
    <table class="es-wrapper" width="600" cellspacing="0" cellpadding="0" style="margin: 0px auto;">
        <tbody>
        <tr>
            <td class="esd-email-paddings" valign="top">
                <table class="esd-header-popover es-header" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td class="esd-stripe" align="center">
                            <table class="es-header-body" width="100%" cellspacing="0" cellpadding="0"
                                   bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr class="es-visible-simple-html-only">
                                    <td class="esd-structure es-p3 es-struct-html" align="left"
                                        esd-custom-block-id="1047450" bgcolor="#ffffff"
                                        style="background-color: #ffffff;">
                                        <table cellspacing="0" cellpadding="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td class="es-m-p0r esd-container-frame"
                                                    width="540" valign="top" align="center">
                                                    <table width="100%" cellspacing="0"
                                                           cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center"
                                                                class="esd-block-image"
                                                                style="font-size: 0px;">
                                                                <a>
                                                                    <img src="{{asset('assets/images/Outdoors.png')}}"
                                                                         alt="Logo"
                                                                         style="display: block;"
                                                                         title="Logo"
                                                                         width="140">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td class="esd-stripe" align="center">
                            <table class="es-content-body" width="100%" cellspacing="0" cellpadding="0"
                                   bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="esd-structure" align="left"
                                        esd-custom-block-id="1047452">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td class="es-m-p0r es-m-p20b esd-container-frame"
                                                    width="100%" valign="top" align="center">
                                                    <table width="100%" cellspacing="0"
                                                           cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center"
                                                                class="esd-block-image"
                                                                style="font-size: 0px;">

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="esd-structure es-p30t es-p40b es-p30r es-p30l"
                                        align="left" esd-custom-block-id="1047454">

                                        <table cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td width="540" class="esd-container-frame"
                                                    align="center" valign="top">
                                                    <table cellpadding="0" cellspacing="0"
                                                           width="100%">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <h2
                                                                    style="margin-bottom: 20px !important;">
                                                                    <strong>
                                                                        {{ $subject }}
                                                                    </strong>
                                                                </h2>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <p class="mb-3"> You have received a new contact request submitted through our website. </p>
                                                                <p class="text-justify mb-3"> Below are the details of the request: </p>
                                                                <ul class="list-unstyled">
                                                                    <li><strong>Title:</strong> {{$subject}}</li>
                                                                    <li><strong>Name:</strong> {{$name}}</li>
                                                                    <li><strong>Question:</strong> {{$question}}</li>
                                                                    <li><strong>Email:</strong> {{$email}}</li>
                                                                </ul>
                                                                <p class="text-justify mb-3"> Here is the information from the contact request. Please try to reach out to the user to follow up on their inquiry. </p>
                                                                <p> Best regards, </p>
                                                                <p> The Conroe Outdoors Team </p>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table bgcolor="#010101" class="es-content-body" align="center" cellpadding="0" cellspacing="0"
                       width="100%" style="background-color: #010101; padding: 0px 20px 20px 20px;">
                    <tbody>
                    <tr style="text-align: center; margin: 15px 0;">
                        <td style="width: 33%; text-align: center; vertical-align: middle; padding: 10px;">
                            <a href="https://www.facebook.com/profile.php?id=61563510873741"
                               style="color: white; text-decoration: none;">
                                <img
                                    src="https://eonyaow.stripocdn.email/content/assets/img/social-icons/logo-gray/facebook-logo-gray.png"
                                    width="25px" height="25px" style="display: block; margin: 0 auto;">
                                <p style="margin: 5px 0 0 0;">Facebook</p>
                            </a>
                        </td>
                        <td style="width: 33%; text-align: center; vertical-align: middle; padding: 10px;">
                            <a href="https://www.instagram.com/mitejupilco/"
                               style="color: white; text-decoration: none;">
                                <img
                                    src="https://eonyaow.stripocdn.email/content/assets/img/social-icons/logo-gray/instagram-logo-gray.png"
                                    width="25px" height="25px" style="display: block; margin: 0 auto;">
                                <p style="margin: 5px 0 0 0;">Instagram</p>
                            </a>
                        </td>
                        <td style="width: 33%; text-align: center; vertical-align: middle; padding: 10px;">

                            <a href="https://www.youtube.com/@MiTejupilco" style="color: white; text-decoration: none;">
                                <img
                                    src="https://eonyaow.stripocdn.email/content/assets/img/social-icons/logo-gray/youtube-logo-gray.png"
                                    width="25px" height="25px" style="display: block; margin: 0 auto;">
                                <p style="margin: 5px 0 0 0;">YouTube</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center; vertical-align: middle; padding: 10px;">
                            <p style="color: #aaa; font-size: 12px; margin: 0;">
                                © Todos los derechos reservados.&nbsp;
                                <a href="https://daltecs.com"
                                   style="color: #aaa; font-size: 12px; text-decoration: none;">Daltecs</a>
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>

</html>
