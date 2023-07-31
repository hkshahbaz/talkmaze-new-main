<!doctype html>
<html>
    <head>

        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>@yield('subject')</title>
    </head>
    <body class="margin: 0px;">
        <div style="background-color: #eaebed; font-family: sans-serif;-webkit-font-smoothing: antialiased;font-size: 14px;line-height: 1.4;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                <tr>
                    <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">&nbsp;</td>
                    <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;display: block;Margin: 0 auto !important;max-width: 580px;padding: 10px;" class="container">
                        <div class="header" style="padding: 20px 0;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                                <tr>
                                    <!-- <td class="align-center" width="100%">
                                    <a href="javascript:voide(0);"><img src="{{asset('assets/app-assets/images/logo/logo-text.png')}}" height="40" alt=""></a>
                                    </td> -->
                                </tr>
                            </table>
                        </div>
                        <div class="content" style="box-sizing: border-box;display: block;Margin: 0 auto;max-width: 580px;padding: 10px;">
                            <!-- START CENTERED WHITE CONTAINER -->
                            {{-- <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span> --}}
                            <table role="presentation" class="main" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;background: #ffffff;border-radius: 3px;width: 100%;">

                            <!-- START MAIN CONTENT AREA -->
                                <tr>
                                    <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;box-sizing: border-box;padding: 20px;" class="wrapper">
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                                            <tr>
                                                <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">
                                                    <div class="header" style="padding: 20px 0;">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                                                            <tr>
                                                                <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;text-align: center;" class="align-center" width="100%">
                                                                    <a href="javascript:voide(0);"><img style="border: none; -ms-interpolation-mode: bicubic; max-width: 100%;" height="75" src="{{ asset('images/logo.png') }}">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    @yield('content')
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            <!-- END MAIN CONTENT AREA -->
                            </table>

                            <!-- START FOOTER -->
                            <div class="footer" style="clear: both;Margin-top: 10px;text-align: center;width: 100%;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                                    <tr>
                                        <td style="color: #9a9ea6;font-family: sans-serif;font-size: 12px;vertical-align: top;text-align: center;" class="content-block powered-by">
                                            &copy; 2021 Talkmaze. All rights reserved.
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- END FOOTER -->

                            <!-- END CENTERED WHITE CONTAINER -->
                        </div>
                    </td>
                    <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">&nbsp;</td>
                </tr>
            </table>
        </div>
    </body>
</html>
