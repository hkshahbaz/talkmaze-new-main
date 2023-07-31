@extends('email.layout')
@section('subject', 'Student Request')
@section('content')
    <div>
        <h1 align="center" style="color: #06090f;font-size:24px;font-weight:bold;margin-top: 30px;text-transform:none;font-family: sans-serif;line-height: 1.4;margin-bottom: 30px;">New Student Request</h1>
    </div>
    <p style="font-family: sans-serif;text-align:center;color:grey;font-size:16px;margin-bottom: 30px;">
        <strong>Student : </strong>{{ $coach_req->student->name }}
    </p>
    <p style="font-family: sans-serif;text-align:center;color:grey;font-size:16px;margin-bottom: 30px;">
        <strong>Interval : </strong>{{ $coach_req->interval == '1' ? 'One Time' : 'Recurring' }}
    </p>
    <p style="font-family: sans-serif;text-align:center;color:grey;font-size:16px;margin-bottom: 30px;">
        <strong>Description : </strong>{{ $coach_req->message }}
    </p>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn custom-btn-primary" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;box-sizing: border-box;">
        <tbody>
            <tr>
                <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;background-color: #65d6b5;border-radius: 5px;text-align: center;" align="center">
                    <table role="presentation" border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                        <tbody>
                            <tr>
                                <td> <a style="font-family: sans-serif;font-size: 14px;vertical-align: top;background-color: #65d6b5;border-radius: 5px;text-align: center;"> <a style="text-decoration: none;box-sizing: border-box;text-transform: capitalize;cursor: pointer;font-size: 14px;font-weight: bold;margin: 0;padding: 12px 25px;display: inline-block; border: solid 1px #65d6b5;border-color: #65d6b5;border-radius: 5px;color: #ffffff;" href="{{ route('login') }}" target="_blank">Login</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
