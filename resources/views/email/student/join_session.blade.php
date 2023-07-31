@extends('email.layout')
@section('subject', 'Join Session')
@section('content')
<div>
    <h1 align="center" style="color: #06090f;font-size:24px;font-weight:bold;margin-top: 30px;text-transform:none;font-family: sans-serif;line-height: 1.4;margin-bottom: 30px;">Your class has been started please click to join session</h1>
</div>

<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn custom-btn-primary" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;box-sizing: border-box;">
    <tbody>
        <tr>
            <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;background-color: #ea5455;border-radius: 5px;text-align: center;" align="center">
                <table role="presentation" border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                    <tbody>
                        <tr>
                            <td> <a style="font-family: sans-serif;font-size: 14px;vertical-align: top;background-color: #ea5455;border-radius: 5px;text-align: center;"> <a style="text-decoration: none;box-sizing: border-box;text-transform: capitalize;cursor: pointer;font-size: 14px;font-weight: bold;margin: 0;padding: 12px 25px;display: inline-block; border: solid 1px #ea5455;border-color: #ea5455;border-radius: 5px;color: #ffffff;" href="{{ $meeting_session->join_url }}" target="_blank">Join Session</a> </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
@endsection
